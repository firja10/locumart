-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2021 pada 17.51
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locumart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotas`
--

CREATE TABLE `kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_id` int(11) DEFAULT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_29_072648_create_produks_table', 1),
(6, '2021_08_30_141233_create_kategoris_table', 1),
(7, '2021_08_30_143044_create_tokos_table', 1),
(8, '2021_08_30_154500_create_surveys_table', 1),
(9, '2021_08_30_154906_create_pemesanans_table', 1),
(10, '2021_08_31_101330_add_fk_to_produks', 2),
(11, '2021_08_31_110643_add_fk_to_tokos', 3),
(12, '2021_09_04_063129_add_fk_to_pemesanans', 4),
(13, '2021_09_04_064545_add_fk_produk_to_pemesanans', 5),
(14, '2021_09_05_222027_create_provinsis_table', 6),
(15, '2021_09_05_222052_create_kotas_table', 7),
(16, '2021_09_06_005152_add_fk_to_kotas', 7),
(17, '2021_09_06_011832_add_daerah_to_pemesanans', 8),
(18, '2021_09_06_072037_add_status_transaksi_to_pemesanans', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_jual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pesan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_diskon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ongkos_kirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `rating_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `produk_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `namaprovinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namakota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namajasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `nama_produk`, `gambar_produk`, `kategori`, `harga_jual`, `jumlah_pesan`, `harga_diskon`, `harga_total`, `ongkos_kirim`, `nama_toko`, `media_pengiriman`, `media_pembayaran`, `status_pembayaran`, `rating_produk`, `rating_toko`, `user_id`, `produk_id`, `created_at`, `updated_at`, `namaprovinsi`, `namakota`, `namajasa`, `nomor_resi`, `status_message`, `order_id`, `payment_type`, `transaction_time`, `transaction_status`, `transaction_id`) VALUES
(5, 'produkanyar', NULL, '3231312', '321312', NULL, NULL, '200000', '200000', NULL, 'JNE', NULL, 1, 'ewqeqweqw', NULL, 1, NULL, '2021-09-03 23:58:22', '2021-09-03 23:58:22', NULL, 'Tasikmalaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Tempe', 'tempe.jfif', NULL, '120000', NULL, NULL, '200000', '200000', NULL, 'JNE', NULL, 3, NULL, NULL, 1, 11, '2021-09-08 06:56:55', '2021-09-08 06:57:09', NULL, 'Tasikmalaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Tempe', 'tempe.jfif', NULL, '120000', NULL, '1000000', '200000', '200000', NULL, 'JNE', NULL, 3, NULL, NULL, 1, 11, '2021-09-08 07:16:15', '2021-09-08 07:16:24', NULL, 'Tasikmalaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Nasi Ketan', 'ketan.jpg', 'Makanan', '200000', NULL, '100000', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, 13, '2021-09-14 09:51:22', '2021-09-14 09:51:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Nasi Ketan', 'ketan.jpg', 'Makanan', '200000', NULL, '100000', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 1, 13, '2021-09-14 10:09:30', '2021-09-14 10:15:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_jual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_diskon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok_terjual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok_sisa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toko_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `deskripsi_produk`, `gambar_produk`, `kategori`, `harga_jual`, `harga_diskon`, `stok_terjual`, `stok_sisa`, `rating_produk`, `toko_id`, `created_at`, `updated_at`) VALUES
(11, 'Tempe', 'adalah makanan khas Indonesia yang terbuat dari fermentasi terhadap biji kedelai atau beberapa bahan lain yang menggunakan beberapa jenis kapang Rhizopus, seperti Rhizopus oligosporus,', 'tempe.jfif', 'Makanan', '120000', '1000000', NULL, NULL, NULL, 2, '2021-09-08 06:09:51', '2021-09-08 06:09:51'),
(12, 'Nasgor', 'Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega', 'nasgor.jpeg', 'Makanan', '123000', '100000', '2233', '23', NULL, 1, NULL, NULL),
(13, 'Nasi Ketan', 'adalah sebuah jenis beras yang utamanya tumbuh di Asia Tenggara dan Asia bagian timur ', 'ketan.jpg', 'Makanan', '200000', '100000', '234', '32', NULL, NULL, NULL, NULL),
(14, 'Tutug Oncom', 'Nasi Tutug Oncom adalah makanan khas Tasikmalaya yang terbuat dari nasi yang diaduk dengan oncom goreng atau bakar. Penyajian makanan ini umumnya dalam keadaan hangat.', 'tutug-oncom.jpg', 'Makanan', '250000', '140000', '432', '23', NULL, NULL, NULL, NULL),
(15, 'Bendo Sunda', 'Bendo adalah penutup kepala dari kain merupakan bagian kelengkapan sehari-hari pria di pulau Jawa dan Bali, sejak masa silam sampai sekitar awal tahun 1900-an dan mulai populer kembali pada tahun 2013', 'bendo-sunda.jpg', 'Kesenian', '20000', '15000', '234', '32', NULL, NULL, NULL, NULL),
(16, 'Topeng Ngalam', 'Topeng Ngalam adalah sebuah Topeng Magis dari daerah Malang', 'topeng-malang.jpg', 'Kesenian', '25000', '20000', '43', '32', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaprovinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pertanyaan_1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokos`
--

CREATE TABLE `tokos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_toko` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_hp_toko` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `deskripsi_toko`, `gambar_toko`, `lokasi_toko`, `nomor_hp_toko`, `rating_toko`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Fairuz Store', NULL, 'logo-locumart.png', 'rerwrewr', '08434324324', NULL, NULL, '2021-08-31 02:05:47', '2021-08-31 02:05:47'),
(2, 'Fairuz Store', NULL, 'logo-locumart.png', 'rerwrewr', '08434324324', NULL, 1, '2021-08-31 02:06:36', '2021-08-31 02:06:36'),
(4, 'TOko Bersama', 'weqweqweqweqweqweqw', 'kenangan.jpeg', 'Gresiksat', '2131312312313', NULL, 1, '2021-08-31 02:12:38', '2021-08-31 21:30:38'),
(5, 'Soviet History', NULL, NULL, 'Gresik', '2131312312313', NULL, NULL, '2021-08-31 21:20:01', '2021-08-31 21:20:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `nama_toko`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fairuz', 'fairuzfirjatullah3@gmail.com', NULL, '$2y$10$KnKvDC24zxtRqPv1hP09/.m4xtWnvxFBkz4PvUBKw89uMEjMnApXu', NULL, NULL, NULL, '2021-08-31 01:22:41', '2021-08-31 01:22:41'),
(2, 'Endang', 'fairuzf1010@gmail.com', NULL, '$2y$10$eqXuZmww651p74qLEe8s5uJHT769J0hVVkMz9l9YBvBIMvKFelQt.', NULL, NULL, NULL, '2021-09-08 05:24:41', '2021-09-08 05:24:41'),
(3, 'Fairuz', 'dte07111840000121@gmail.com', NULL, '$2y$10$UIUy8Il.4SoekULhRORa7eCekPaixkaUftfZhQepzPCEVhDppPo5m', NULL, NULL, NULL, '2021-09-08 05:27:12', '2021-09-08 05:27:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kotas_provinsi_id_foreign` (`provinsi_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanans_user_id_foreign` (`user_id`),
  ADD KEY `pemesanans_produk_id_foreign` (`produk_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_toko_id_foreign` (`toko_id`);

--
-- Indeks untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tokos_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kotas`
--
ALTER TABLE `kotas`
  ADD CONSTRAINT `kotas_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `kotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD CONSTRAINT `pemesanans_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_toko_id_foreign` FOREIGN KEY (`toko_id`) REFERENCES `tokos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tokos`
--
ALTER TABLE `tokos`
  ADD CONSTRAINT `tokos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
