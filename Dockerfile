FROM node:18 AS node_builder
WORKDIR /app
COPY package*.json ./
RUN npm ci --silent
COPY . .
RUN npm run build

FROM composer:2 AS composer_builder
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress
COPY . .

FROM php:8.1-cli-alpine
WORKDIR /app
RUN apk add --no-cache bash icu-dev oniguruma-dev libxml2-dev zlib-dev curl
RUN docker-php-ext-install pdo pdo_mysql mbstring xml

# Copy application from composer stage (includes vendor)
COPY --from=composer_builder /app /app
# Copy built frontend assets
COPY --from=node_builder /app/public/build /app/public/build

RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache || true
EXPOSE 80

# Use PHP built-in server (sufficient for small apps on Railway). Railway provides $PORT.
CMD ["sh","-lc","php -S 0.0.0.0:${PORT:-80} -t public"]
