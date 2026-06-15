<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display the VIVA Premium Landing Page.
     */
    public function index()
    {
        // Mock OTT movie/drama posters utilizing the exact placeholder requested
        $posters = [
            [
                'title' => 'My Sweet Drama',
                'genre' => 'Romansa • Korea',
                'rating' => '4.9',
                'image' => 'https://placehold.co/400x600/0B0E1B/15D1E4?text=My+Sweet+Drama',
                'badge' => 'Terpopuler'
            ],
            [
                'title' => 'Shadow Hunt',
                'genre' => 'Aksi • Thriller',
                'rating' => '4.8',
                'image' => 'https://placehold.co/400x600/0B0E1B/15D1E4?text=Shadow+Hunt',
                'badge' => 'Eksklusif'
            ],
            [
                'title' => 'Love in Tokyo',
                'genre' => 'Drama • Slice of Life',
                'rating' => '4.7',
                'image' => 'https://placehold.co/400x600/0B0E1B/15D1E4?text=Love+in+Tokyo',
                'badge' => 'Baru'
            ],
            [
                'title' => 'Cyber Odyssey',
                'genre' => 'Sci-Fi • Fantasi',
                'rating' => '4.6',
                'image' => 'https://placehold.co/400x600/0B0E1B/15D1E4?text=Cyber+Odyssey',
                'badge' => 'Trending'
            ],
            [
                'title' => "Destiny's Call",
                'genre' => 'Kolosal • Sejarah',
                'rating' => '4.9',
                'image' => 'https://placehold.co/400x600/0B0E1B/15D1E4?text=Destinys+Call',
                'badge' => 'Terpopuler'
            ],
            [
                'title' => "The Chef's Secret",
                'genre' => 'Komedi • Kuliner',
                'rating' => '4.5',
                'image' => 'https://placehold.co/400x600/0B0E1B/15D1E4?text=Chefs+Secret',
                'badge' => ''
            ],
            [
                'title' => 'Winds of Change',
                'genre' => 'Melodrama • Keluarga',
                'rating' => '4.7',
                'image' => 'https://placehold.co/400x600/0B0E1B/15D1E4?text=Winds+of+Change',
                'badge' => ''
            ],
            [
                'title' => 'Chronicles of VIVA',
                'genre' => 'Misteri • Detektif',
                'rating' => '4.8',
                'image' => 'https://placehold.co/400x600/0B0E1B/15D1E4?text=VIVA+Chronicles',
                'badge' => 'Rekomendasi'
            ],
        ];

        // Features for glassmorphic cards
        $features = [
            [
                'title' => 'Nonton Tanpa Iklan',
                'description' => 'Nikmati drama favorit Anda sepenuhnya tanpa ada gangguan iklan di tengah-tengah keseruan adegan.',
                'icon' => '<svg class="w-8 h-8 text-cyan-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>'
            ],
            [
                'title' => 'Kualitas Video Jernih',
                'description' => 'Tayangan jernih tiada tanding hingga resolusi 4K UHD. Ucapkan selamat tinggal pada resolusi buram.',
                'icon' => '<svg class="w-8 h-8 text-cyan-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>'
            ],
            [
                'title' => 'Download & Nonton Offline',
                'description' => 'Simpan drama pilihan langsung ke perangkat Anda. Hemat kuota dan nonton kapan saja tanpa jaringan.',
                'icon' => '<svg class="w-8 h-8 text-cyan-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>'
            ],
            [
                'title' => 'Akses Awal Eksklusif',
                'description' => 'Jadilah yang pertama menyaksikan episode drama terbaru yang tayang serentak secara global.',
                'icon' => '<svg class="w-8 h-8 text-cyan-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>'
            ]
        ];

        // Frequently Asked Questions
        $faqs = [
            [
                'question' => 'Apa itu VIVA Premium?',
                'answer' => 'VIVA Premium adalah layanan streaming video premium yang menghadirkan ribuan drama, film, dan tayangan eksklusif tanpa gangguan iklan sama sekali, dengan kualitas audio dan video ultra jernih, serta dukungan download offline.'
            ],
            [
                'question' => 'Apakah saya benar-benar bebas dari iklan?',
                'answer' => 'Ya! Dengan berlangganan VIVA Premium, seluruh konten drama dan film dapat Anda tonton tanpa jeda iklan, memberikan kenyamanan maksimal saat bersantai.'
            ],
            [
                'question' => 'Bagaimana cara download drama untuk ditonton offline?',
                'answer' => 'Pada aplikasi ponsel atau tablet VIVA Anda, cukup ketuk tombol download pada detail episode drama yang ingin Anda simpan. Setelah terunduh, Anda dapat memutarnya di menu "Unduhan Saya" tanpa koneksi internet.'
            ],
            [
                'question' => 'Dapatkah saya membatalkan langganan kapan saja?',
                'answer' => 'Tentu saja. Tidak ada kontrak yang mengikat. Anda dapat membatalkan langganan premium Anda secara instan kapan saja melalui pengaturan akun tanpa dikenakan biaya pembatalan.'
            ]
        ];

        return view('landing', compact('posters', 'features', 'faqs'));
    }
}
