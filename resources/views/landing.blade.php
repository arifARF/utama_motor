<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Utama Motor</title>
    <style>
        /* Reset dan styling dasar */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        a { color: #007bff; text-decoration: none; }
        header, footer { background: #222; color: #fff; padding: 10px 0; text-align: center; }

        /* Hero Section */
        .hero {
            background: url('/assets/img/backgrounds/bg-bengkel-honda.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            padding: 0 20px;
        }
        .hero h1 { font-size: 3rem; margin-bottom: 10px; }
        .hero p { font-size: 1.2rem; margin-bottom: 20px; }

        /* Layanan Section */
        .services {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            background: #f4f4f4;
            text-align: center;
        }
        .services h2 { margin-bottom: 20px; font-size: 2rem; }
        .service-item {
            margin: 20px 0;
            max-width: 600px;
        }
        .service-item h3 { margin-bottom: 10px; font-size: 1.5rem; }

        /* Testimoni Section */
        .testimonials {
            padding: 40px 20px;
            text-align: center;
            background: #fff;
        }
        .testimonials h2 { margin-bottom: 20px; font-size: 2rem; }
        .testimonial-item {
            max-width: 600px;
            margin: 20px auto;
            background: #f4f4f4;
            padding: 15px;
            border-radius: 8px;
        }
        .testimonial-item p { font-style: italic; }
        .testimonial-item span { display: block; margin-top: 10px; font-weight: bold; }

        /* Footer */
        footer p { margin-top: 10px; }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Bengkel Utama Motor</h1>
        <nav class="flex items-center justify-center gap-4">
            <a href="#hero">Home</a> |
            <a href="#services">Layanan</a> |
            <a href="#testimonials">Testimoni</a> |
            <a href="#contact">Kontak</a> |
            <a href="/login">Login</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div>
            <h1>Servis Motor Terbaik di Kota Anda</h1>
            <p>Layanan berkualitas untuk semua kebutuhan motor Anda. Dari perawatan rutin hingga perbaikan besar.</p>
            <a href="#contact" style="background: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Hubungi Kami</a>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="services" class="services">
        <h2>Layanan Kami</h2>
        <div class="service-item">
            <h3>Servis Rutin</h3>
            <p>Pastikan motor Anda dalam kondisi prima dengan servis rutin berkualitas dari teknisi kami.</p>
        </div>
        <div class="service-item">
            <h3>Perbaikan Mesin</h3>
            <p>Solusi perbaikan mesin lengkap untuk masalah motor Anda, dengan suku cadang berkualitas.</p>
        </div>
        <div class="service-item">
            <h3>Penggantian Suku Cadang</h3>
            <p>Kami menyediakan suku cadang asli dan berkualitas untuk berbagai tipe motor.</p>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section id="testimonials" class="testimonials">
        <h2>Testimoni Pelanggan</h2>
        <div class="testimonial-item">
            <p>"Pelayanan cepat dan hasilnya sangat memuaskan! Motor saya kembali seperti baru."</p>
            <span>- Budi Santoso</span>
        </div>
        <div class="testimonial-item">
            <p>"Teknisi yang sangat berpengalaman dan ramah. Bengkel yang sangat direkomendasikan."</p>
            <span>- Siti Rahmawati</span>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Bengkel Motor Anda. All rights reserved.</p>
        <p><a href="#contact">Hubungi Kami</a> untuk informasi lebih lanjut.</p>
    </footer>
</body>
</html>
