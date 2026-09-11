<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kims Culinary Explorer</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        html { scroll-behavior: smooth; }
        body { margin: 0; font-family: 'Poppins', sans-serif; background-color: #f8f9fa; color: #212529; }
        section, .section { padding: 100px 0; scroll-margin-top: 75px; }
        p { line-height: 1.7; }
        .navbar { background-color: #111827; padding: 15px 0; transition: all 0.3s ease; }
        .navbar-brand { font-size: 24px; letter-spacing: 2px; }
        .navbar-nav .nav-link { color: #fff; margin-left: 20px; transition: all 0.3s ease; position: relative; }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active { color: #6ea8fe !important; font-weight: 600; }
        .navbar-nav .nav-link.active::after { content: ""; position: absolute; left: 0; right: 0; bottom: -6px; height: 2px; background-color: #6ea8fe; }
        .hero { min-height: 85vh; display: flex; align-items: center; padding: 120px 0 60px; background: linear-gradient(rgba(10, 15, 30, 0.75), rgba(10, 15, 30, 0.75)), url('gambar/blueberry.jpg') no-repeat center center / cover; }
        .hero-subtitle { color: #6ea8fe; font-weight: bold; letter-spacing: 3px; margin-bottom: 10px; }
        .hero h1 { font-size: 3rem; font-weight: 700; margin-bottom: 10px; color: #64dfdf; }
        .hero h2 { font-size: 28px; color: #d1d5db; margin-bottom: 20px; }
        .hero-description { color: #d1d5db; max-width: 600px; line-height: 1.8; }
        .btn { padding: 12px 25px; border-radius: 8px; transition: all 0.3s ease; }
        .btn-primary { background-color: #2563eb; border-color: #2563eb; }
        .btn-primary:hover { background-color: #1d4ed8; border-color: #1d4ed8; }
        .social-icons a { color: #fff; font-size: 24px; margin-right: 18px; transition: all 0.3s ease; }
        .social-icons a:hover { color: #6ea8fe; text-decoration: none; }
        .profile-container { display: flex; justify-content: center; align-items: center; }
        .profile-img { width: 260px; height: 260px; object-fit: cover; border-radius: 50%; border: 4px solid #38b6ff; box-shadow: 0 0 25px rgba(56, 182, 255, 0.4); transition: transform 0.3s ease; }
        .profile-img:hover { transform: scale(1.05); }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title p { color: #2563eb; font-weight: bold; letter-spacing: 3px; margin-bottom: 5px; }
        .section-title h2 { font-size: 40px; font-weight: bold; margin-bottom: 0; }
        #about { background-color: #fffaf3; }
        #about h3 { font-weight: 600; margin-bottom: 20px; }
        .about-carousel-card { border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: transform 0.3s ease; }
        .about-carousel-card:hover { transform: translateY(-5px); }
        .about-carousel-card .carousel-item img { height: 380px; object-fit: cover; }
        .skills-section { background-color: #111827; padding: 100px 0; }
        .skills-section .section-title h2 { color: #fff; }
        .skills-section .section-title p { color: #6ea8fe; }
        .skill-card { background-color: #fff; padding: 30px; border-radius: 15px; text-align: center; height: 100%; color: #212529; border: 2px solid transparent; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15); transition: all 0.3s ease; }
        .skill-card:hover { transform: translateY(-8px); border-color: #2563eb; box-shadow: 0 0 25px rgba(110, 168, 254, 0.6); }
        .skill-card h4 { margin: 20px 0; color: #212529; }
        .progress { height: 10px; border-radius: 10px; background-color: #e5e7eb; }
        .progress-bar { background-color: #2563eb; border-radius: 10px; }
        #portfolio { background-color: #fff; }
        .portfolio-card { background-color: #fff; border-radius: 15px; overflow: hidden; height: 100%; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; flex-direction: column; }
        .portfolio-card:hover { transform: translateY(-8px); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12); }
        .portfolio-img-wrapper { width: 100%; height: 200px; overflow: hidden; }
        .portfolio-img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.4s ease; }
        .portfolio-card:hover .portfolio-img { transform: scale(1.05); }
        .portfolio-content { padding: 25px; display: flex; flex-direction: column; flex-grow: 1; }
        .portfolio-content h3 { font-size: 22px; margin-bottom: 15px; }
        .portfolio-content p { color: #6b7280; line-height: 1.7; margin-bottom: 20px; flex-grow: 1; }
        .portfolio-category { align-self: flex-start; background-color: #e0e7ff; color: #2563eb; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: bold; }
        #reviews { background-color: #fffaf3; }
        #reviews .contact-card { background-color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); }
        
        /* Disesuaikan jadi 530px agar tepat pas menampilkan 3 komentar penuh + 1 komentar bagian atasnya tidak kepotong / pas 4 komentar terlihat bersih */
        .reviews-list { max-height: 530px; overflow-y: auto; padding-right: 5px; }
        
        .reviews-list::-webkit-scrollbar { width: 6px; }
        .reviews-list::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 10px; }
        .reviews-list::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        .reviews-list::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .reviews-list .card { border-radius: 12px; transition: transform 0.2s ease; }
        .reviews-list .card:hover { transform: translateY(-2px); }
        
        .review-time {
            font-size: 12px;
            color: #718096;
            display: inline-block;
            margin-top: 10px;
        }

        .contact-section { background: linear-gradient(rgba(10, 15, 30, 0.75), rgba(10, 15, 30, 0.75)), url('gambar/blueberry.jpg') no-repeat center center / cover; padding: 100px 0; }
        .contact-section .section-title h2 { color: #fff; }
        .contact-section .section-title p { color: #6ea8fe; }
        .contact-card { background-color: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); }
        .form-control { padding: 12px; border-radius: 8px; border: 1px solid #dee2e6; transition: border-color 0.3s, box-shadow 0.3s; }
        .form-control:focus { border-color: #2563eb; box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.15); }
        footer { background-color: #111827; color: #fff; padding: 40px 0; }
        footer h4 { letter-spacing: 3px; }
        footer p { color: #9ca3af; }
        .footer-social a { color: #fff; font-size: 22px; margin: 0 10px; transition: all 0.3s ease; }
        .footer-social a:hover { color: #6ea8fe; text-decoration: none; }
        .contact-card select.form-control { height: calc(2.25rem + 12px) !important; padding: 0.375rem 0.75rem !important; line-height: 1.5 !important; }

        @media (max-width: 991px) {
            .hero { text-align: center; }
            .hero h1 { font-size: 45px; }
            .hero h2 { font-size: 23px; }
            .hero-description { margin: auto; }
            .profile-container { margin-top: 50px; }
            .navbar-nav .nav-link { margin-left: 0; padding-left: 0; padding-right: 0; }
            .navbar-nav .nav-link.active::after { width: 60px; }
        }
        @media (max-width: 576px) {
            .hero { min-height: 100vh; padding-top: 100px; }
            .hero h1 { font-size: 38px; }
            .hero h2 { font-size: 20px; }
            section, .section { padding: 70px 20px; }
            .section-title { margin-bottom: 40px; }
            .section-title h2 { font-size: 32px; }
            .profile-img { width: 220px; height: 220px; }
            .about-carousel-card .carousel-item img { height: 280px; }
            .contact-card { padding: 25px; }
            .hero-button .btn { margin-bottom: 10px; }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold text-white" href="#home">KIM'S</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reviews">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <p class="hero-subtitle">SELAMAT DATANG</p>
                    <h1>Kimiko Olivia R</h1>
                    <h2>Culinary Explorer & Home Cook</h2>
                    <p class="hero-description">Mengeksplorasi kekayaan cita rasa Nusantara, menyempurnakan resep tradisional, dan mendokumentasikan setiap perjalanan kuliner dari dapur hingga pelosok daerah.</p>
                    <div class="hero-button">
                        <a href="#portfolio" class="btn btn-primary mr-2">Lihat Karya</a>
                        <a href="#contact" class="btn btn-outline-light">Hubungi Saya</a>
                    </div>
                    <div class="social-icons mt-4">
                        <a href="https://www.instagram.com/kimikoor_/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="mr-3"><i class="bi bi-instagram"></i></a>
                        <a href="https://github.com/kweemii" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="bi bi-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="profile-container"><img src="gambar/kims profil.png" alt="Kimiko Olivia R" class="profile-img"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <div class="section-title"><p>ABOUT ME</p><h2>Tentang Saya</h2></div>
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div id="aboutCarousel" class="carousel slide about-carousel-card" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#aboutCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#aboutCarousel" data-slide-to="1"></li>
                            <li data-target="#aboutCarousel" data-slide-to="2"></li>
                            <li data-target="#aboutCarousel" data-slide-to="3"></li>
                            <li data-target="#aboutCarousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="gambar/rendang.jpg" class="d-block w-100" alt="Rendang"></div>
                            <div class="carousel-item"><img src="gambar/indonesian food.jpg" class="d-block w-100" alt="Indonesian Food"></div>
                            <div class="carousel-item"><img src="gambar/toast.jpg" class="d-block w-100" alt="Toast"></div>
                            <div class="carousel-item"><img src="gambar/pizza.jpg" class="d-block w-100" alt="Pizza"></div>
                            <div class="carousel-item"><img src="gambar/sate.jpg" class="d-block w-100" alt="Sate"></div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#aboutCarousel" data-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                        <button class="carousel-control-next" type="button" data-target="#aboutCarousel" data-slide="next"><span class="carousel-control-next-icon"></span></button>
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <h3>Halo! Saya Kimiko</h3>
                    <p>Bagi saya, makanan bukan sekadar pemuas rasa lapar, melainkan cerita tentang budaya, tradisi, dan dedikasi. Saya memiliki ketertarikan pada berbagai hidangan lokal dan senang mempelajari karakteristik bumbu dari berbagai daerah.</p>
                    <p>Melalui web ini, saya membagikan petualangan rasa, kreasi rumahan, serta eksperimen resep yang memadukan keautentikan cita rasa tradisional dengan sajian yang modern.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills-section">
        <div class="container">
            <div class="section-title"><p>MY SKILLS</p><h2>Kemampuan</h2></div>
            <div class="row">
                <?php
                include "koneksi.php";
                $query_skills = mysqli_query($conn, "SELECT * FROM skills");
                if (mysqli_num_rows($query_skills) > 0) {
                    while ($row_skill = mysqli_fetch_assoc($query_skills)) {
                ?>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="skill-card">
                        <?php 
                            $img_url = "https://cdn-icons-png.flaticon.com/512/1830/1830839.png";
                            if ($row_skill['title'] == 'Baking') {
                                $img_url = "https://cdn-icons-png.flaticon.com/512/2682/2682446.png";
                            } else if ($row_skill['title'] == 'Food Plating') {
                                $img_url = "https://cdn-icons-png.flaticon.com/512/2921/2921822.png";
                            } else if ($row_skill['title'] == 'Exploration') {
                                $img_url = "https://cdn-icons-png.flaticon.com/512/854/854878.png";
                            }
                        ?>
                        <img src="<?php echo $img_url; ?>" alt="<?php echo htmlspecialchars($row_skill['title']); ?>" width="70" class="mb-3">
                        <h4><?php echo htmlspecialchars($row_skill['title']); ?></h4>
                        <p class="small text-muted mb-3"><?php echo htmlspecialchars($row_skill['description']); ?></p>
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">Keahlian</small>
                            <small class="font-weight-bold"><?php echo $row_skill['percentage']; ?>%</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row_skill['percentage']; ?>%;"></div>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                } else {
                    echo '<p class="text-white text-center">Belum ada data kemampuan.</p>';
                }
              ?>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section">
        <div class="container">
            <div class="section-title"><p>MY CREATIONS</p><h2>Portfolio Kuliner</h2></div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper"><img src="gambar/rendang.jpg" alt="Indonesian Cuisine" class="portfolio-img"></div>
                        <div class="portfolio-content"><h3>Indonesian Cuisine</h3><p>Eksplorasi berbagai masakan khas Indonesia dengan bumbu tradisional pilihan.</p><span class="portfolio-category">Cooking</span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper"><img src="gambar/putu mayang.jpg" alt="Homemade Baking" class="portfolio-img"></div>
                        <div class="portfolio-content"><h3>Homemade Baking</h3><p>Membuat hidangan manis & dessert buatan rumah dengan gaya kreatif.</p><span class="portfolio-category">Baking</span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper"><img src="gambar/soto mie.jpg" alt="Culinary Exploration" class="portfolio-img"></div>
                        <div class="portfolio-content"><h3>Culinary Exploration</h3><p>Petualangan mencicipi dan membedah profil rasa dari kuliner khas lokal.</p><span class="portfolio-category">Exploration</span></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper"><img src="gambar/spices.jpg" alt="Recipe Collection" class="portfolio-img"></div>
                        <div class="portfolio-content"><h3>Recipe Collection</h3><p>Dokumentasi dan pengembangan resep original untuk konsistensi rasa.</p><span class="portfolio-category">Recipe</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="section">
        <div class="container">
            <div class="section-title"><p>FEEDBACK</p><h2>Ulasan Resep</h2></div>
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5">
                    <div class="contact-card p-4 bg-white shadow-sm rounded">
                        <h4 class="mb-3 font-weight-bold">Beri Ulasan Resep</h4>
                        <?php if (isset($_GET['review'])): ?>
                            <div class="alert alert-<?php echo $_GET['review'] == 'sukses' ? 'success' : 'danger'; ?> alert-dismissible fade show mb-3" role="alert">
                                <i class="bi bi-<?php echo $_GET['review'] == 'sukses' ? 'check-circle-fill' : 'exclamation-triangle-fill'; ?> mr-2"></i> 
                                <?php echo $_GET['review'] == 'sukses' ? 'Ulasan berhasil dikirim! Terima kasih.' : 'Gagal mengirim ulasan, coba lagi.'; ?>
                            </div>
                        <?php endif; ?>
                        <form id="reviewForm" action="simpan_review.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="recipe_name" class="font-weight-bold">Pilih Menu / Resep</label>
                                <select class="form-control" id="recipe_name" name="recipe_name" required>
                                    <option value="" disabled selected>-- Pilih Menu --</option>
                                    <option value="Indonesian Cuisine">Indonesian Cuisine</option>
                                    <option value="Homemade Baking">Homemade Baking</option>
                                    <option value="Culinary Exploration">Culinary Exploration</option>
                                    <option value="Recipe Collection">Recipe Collection</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="reviewer_name" class="font-weight-bold">Nama Anda</label>
                                <input type="text" class="form-control" id="reviewer_name" name="reviewer_name" placeholder="Nama lengkap" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="rating" class="font-weight-bold">Rating (1 - 5 Bintang)</label>
                                <select class="form-control" id="rating" name="rating" required>
                                    <option value="5">⭐⭐⭐⭐⭐ (5 - Sempurna)</option>
                                    <option value="4">⭐⭐⭐⭐ (4 - Enak)</option>
                                    <option value="3">⭐⭐⭐ (3 - Cukup)</option>
                                    <option value="2">⭐⭐ (2 - Kurang)</option>
                                    <option value="1">⭐ (1 - Buruk)</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="comment" class="font-weight-bold">Komentar / Kesan Rasa</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Tuliskan ulasan atau kesanmu..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block py-2 font-weight-bold">Kirim Ulasan</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="mb-3 font-weight-bold">Apa Kata Mereka?</h4>
                    <div class="reviews-list">
                        <?php
                        include "koneksi.php";
                        $result = mysqli_query($conn, "SELECT * FROM recipe_reviews ORDER BY id DESC");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $bintang = str_repeat('⭐', (int)$row['rating']);
                                $waktu_ulasan = isset($row['created_at']) ? $row['created_at'] : date('Y-m-d H:i:s');
                                
                                echo '<div class="card mb-3 shadow-sm border-0"><div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="font-weight-bold mb-1">' . htmlspecialchars($row['reviewer_name']) . '</h6>
                                            <div><small class="text-primary font-weight-bold">Menu: ' . htmlspecialchars($row['recipe_name']) . '</small></div>
                                        </div>
                                        <div class="text-right">
                                            <div class="small text-muted">' . $bintang . '</div>
                                            <div><span class="review-time"><i class="bi bi-clock mr-1"></i>' . $waktu_ulasan . '</span></div>
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-2 text-secondary">"' . htmlspecialchars($row['comment']) . '"</p>
                                </div></div>';
                            }
                        } else {
                            echo '<p class="text-muted font-italic">Belum ada ulasan. Jadilah yang pertama memberikan ulasan!</p>';
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-title"><p>CONTACT</p><h2>Hubungi Saya</h2></div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="contact-card">
                        <form id="contactForm" action="simpan_pesan.php" method="POST">
                            <?php if (isset($_GET['status'])): ?>
                                <div class="alert alert-<?php echo $_GET['status'] == 'sukses' ? 'success' : ($_GET['status'] == 'invalid_email' ? 'warning' : 'danger'); ?> alert-dismissible fade show mb-3" role="alert">
                                    <i class="bi bi-<?php echo $_GET['status'] == 'sukses' ? 'check-circle-fill' : ($_GET['status'] == 'invalid_email' ? 'exclamation-circle-fill' : 'exclamation-triangle-fill'); ?> mr-2"></i>
                                    <?php 
                                        if ($_GET['status'] == 'sukses') echo 'Pesan berhasil dikirim! Terima kasih.';
                                        elseif ($_GET['status'] == 'invalid_email') echo 'Format email harus menggunakan <strong>@gmail.com</strong> atau <strong>@student.atmi.ac.id</strong>!';
                                        else echo 'Pesan gagal dikirim, silakan coba lagi.';
                                    ?>
                                </div>
                                <script>if (window.history.replaceState) { window.history.replaceState(null, null, window.location.pathname + '#contact'); }</script>
                            <?php endif; ?>
                            <div class="form-group mb-3">
                                <label for="nama" class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="font-weight-bold">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="contoh@gmail.com / nim@student.atmi.ac.id" pattern=".+@(gmail\.com|student\.atmi\.ac\.id)" title="Gunakan domain @gmail.com atau @student.atmi.ac.id" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="pesan" class="font-weight-bold">Pesan Anda</label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tuliskan pesan atau ide kolaborasi..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block py-3 font-weight-bold">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <h4 class="font-weight-bold">KIM'S</h4>
            <p>Exploring flavors, one dish at a time.</p>
            <div class="footer-social my-3">
                <a href="https://www.instagram.com/kimikoor_/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="mr-2"><i class="bi bi-instagram"></i></a>
                <a href="https://github.com/kweemii" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="bi bi-github"></i></a>
            </div>
            <p class="small mb-0">© 2026 Kimiko Olivia R. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(nav => nav.classList.remove('active'));
                    this.classList.add('active');
                    $('.navbar-collapse').collapse('hide');
                });
            });
            window.addEventListener('scroll', function () {
                let scrollPos = window.pageYOffset || document.documentElement.scrollTop;
                document.querySelectorAll('section').forEach(section => {
                    let top = section.offsetTop - 150; 
                    let height = section.offsetHeight;
                    let id = section.getAttribute('id');
                    if (scrollPos >= top && scrollPos < top + height) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === '#' + id) link.classList.add('active');
                        });
                    }
                });
            });
            $('#contactForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST', url: 'simpan_pesan.php', data: $(this).serialize(),
                    success: function () {
                        $('#contactForm')[0].reset();
                        if ($('#alert-box-contact').length === 0) {
                            $('#contactForm').prepend(`<div id="alert-box-contact" class="alert alert-success alert-dismissible fade show mb-3" role="alert"><i class="bi bi-check-circle-fill mr-2"></i> Pesan berhasil dikirim! Terima kasih.</div>`);
                        }
                    },
                    error: function () { alert('Terjadi kesalahan, silakan coba lagi.'); }
                });
            });
        });
        $('#reviewForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'simpan_review.php',
            data: $(this).serialize(),
            success: function (response) {
                // Reset form setelah sukses
                $('#reviewForm')[0].reset();
                
                // Cek jika pesan sukses belum ada, lalu tampilkan alert di atas form
                if ($('#alert-box-review').length === 0) {
                    $('#reviewForm').prepend(`<div id="alert-box-review" class="alert alert-success alert-dismissible fade show mb-3" role="alert"><i class="bi bi-check-circle-fill mr-2"></i> Ulasan berhasil dikirim! Terima kasih.</div>`);
                }
                
                // Opsional: Memuat ulang bagian ulasan atau merefresh halaman secara halus ke #reviews setelah 1 detik
                setTimeout(function() {
                    window.location.hash = '#reviews';
                    window.location.reload();
                }, 1000);
            },
            error: function () {
                alert('Terjadi kesalahan, silakan coba lagi.');
            }
        });
    });
    </script>
</body>
</html>