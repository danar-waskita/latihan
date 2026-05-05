<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Layout Mockup | The Doctor</title> 
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <link rel="stylesheet" href="../Web PHP_20236027/latihan_4.css"> 
</head>
<body>

<header class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #FFFF00;">
    <a class="navbar-brand" href="#">
        <div class="logo"><img src="../Web PHP_20236027/logo rossi.jpg" alt="Logo Rossi"></div>
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <nav class="navbar-nav menu ml-auto">
            <a class="nav-link menu-link" href="#carouselExampleCaptions">Home</a> 
            <a class="nav-link menu-link" href="#services">History</a>
            <a class="nav-link menu-link" href="#about">Statistic</a>
            <a class="nav-link menu-link" href="#contact">Contact</a>
        </nav>
    </div>
</header>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"> 
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active"><img src="../Web PHP_20236027/wajahrossi.jpeg" class="d-block w-100" alt="Rossi 1">
            <div class="carousel-caption"><h5>VALENTINO ROSSI</h5><p>The Doctor : 9 Times World Champion</p></div>
        </div>
        <div class="carousel-item"><img src="../Web PHP_20236027/rossihonda.jpeg" class="d-block w-100" alt="Rossi 2">
            <div class="carousel-caption"><h5>A LEGENDARY CAREER</h5><p>Dominating three classes : 125cc, 250cc, and 500cc/MotoGP</p></div>
        </div>
        <div class="carousel-item"><img src="../Web PHP_20236027/rossi last.jpeg" class="d-block w-100" alt="Rossi 3">
            <div class="carousel-caption"><h5>The Greatest of All Time</h5><p>More than a racer, a global icon</p></div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></button>
</div>

<section class="services-section bg-white py-5" id="services">
    <div class="container">
        <h2 class="section-title">History of the Legend</h2>
        <div class="row justify-content-center service-cards"> 
            
            <?php
            // Karena koneksi.php sudah kamu taruh di atas, kita langsung panggil databasenya di sini.
            // PENTING: Ganti tulisan 'nama_tabel_history' dengan nama tabel aslimu di phpMyAdmin!
            $query_history = mysqli_query($conn, "SELECT * FROM information");
            
            // Mesin looping dimulai
            while($data = mysqli_fetch_array($query_history)) { 
            ?>
            
            <div class="col-lg-4 col-md-4 col-12 mb-4 d-flex justify-content-center">
                <div class="cards">
                    <img src="../Web PHP_20236027/rossi_<?= $data['id']; ?>.jpeg" class="card-background-image" alt="Rossi Era">
                    
                    <video autoplay loop muted playsinline class="card-background-video">
                        <source src="../Web PHP_20236027/video_<?= $data['id']; ?>.mp4" type="video/mp4"> 
                        Your browser does not support the video tag.
                    </video>
                    
                    <div class="card-overlay">
                        <h3><?= $data['judul']; ?></h3>
                        <p><?= $data['Keterangan']; ?></p>
                        <a href="<?= $data['link']; ?>" target="_blank" class="btn btn-warning btn-sm mt-3 btn-custom-card">Read more</a>
                    </div>
                </div>
            </div>

            <?php 
            } // Mesin looping selesai
            ?>
            
        </div>
    </div>
</section>

<section class="about-section" id="about">
    <h2 class="section-title">Statistic</h2>
    <p class="about-desc">Valentino Rossi's statistics</p>
    <div class="image-hero-about">
        <img src="../Web PHP_20236027/rossi2004.jpeg" class="responsive-image-about" alt="Valentino Rossi Action">
    </div>
    <div class="about-content">
        <div class="text">
            <h2>The Doctor</h2>
            <p>Valentino Rossi, one of the most legendary motorcycle racers in MotoGP history, born on February 16, 1979, in Tavullia, Italy, is known as "The Doctor" for his charisma, aggressive riding style, and unique celebrations. 
                He has won nine World Championship titles, seven of which were in the premier class (MotoGP/500cc), successfully winning titles with three different manufacturers—Aprilia, Honda, and Yamaha—a rare feat. 
                Rossi's career peak occurred in the early to mid-2000s, where he demonstrated his dominance in the premier class. After securing his first 500cc World Championship with Honda in 2001 and sweeping the titles in 2002 and 2003 in the early MotoGP era, he made a crucial decision. 
                The biggest moment of his career was in 2004 when he moved to Yamaha and immediately won the title, beginning his golden period. This dominance continued with the title in 2005, and after a difficult time in 2006-2007, he bounced back to reclaim the World Champion crown in 2008 and 2009.</p>
        </div>
        <div class="performance">
           <h2>Performance</h2><canvas id="rossiChart"></canvas>
        </div>
    </div>
</section>

<section class="contact-section" id="contact">
    <div class="video-background-wrap">
        <video autoplay loop muted playsinline class="video-background">
            <source src="../Web PHP_20236027/rossi.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <h2 class="section-title">Contact</h2>
    <!-- Tambahkan action dan method POST -->
<form class="contact-form" id="formKontak">
    <!-- Tambahkan atribut 'name' dan 'required' agar wajib diisi -->
    <input type="text" name="nama" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="no_hp" placeholder="Phone Number" required>
    <input type="text" name="alamat" placeholder="Address" required>
    <textarea name="pesan" placeholder="Message" required></textarea>
    <button type="submit" class="submit-btn">Kirim</button>
</form>
</section>

<footer class="footer">
    <div class="footer-content-wrap">
        <p>© 2024 The Doctor Fanpage. All Rights Reserved. | Dibuat untuk menghormati Legenda MotoGP.</p>
        <div class="footer-links">
            <a href="#carouselExampleCaptions">Home</a> | 
            <a href="#services">History</a> | 
            <a href="#about">Statistic</a>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const NAVBAR_OFFSET = 80;

    /**
     * Memperbarui kelas 'active' pada menu berdasarkan posisi scroll.
     */
    const updateMenuAndScroll = () => {
        const scrollPos = $(document).scrollTop();
        const $links = $('.menu-link');
        let activeFound = false;

        $($links.get().reverse()).each(function () {
            const $link = $(this);
            const targetId = $link.attr('href');
            
            if (targetId.startsWith('#')) {
                const $target = $(targetId);
                
                if ($target.length) {
                    if (scrollPos >= $target.position().top - 81) {
                        $links.removeClass("active");
                        $link.addClass("active");
                        activeFound = true;
                        return false; 
                    }
                }
            }
        });

        if (!activeFound) {
            $('.menu-link[href="#carouselExampleCaptions"]').addClass("active");
        }
    };

    // --- Main Execution (jQuery Ready) ---
    $(function() {
        // Init Carousel
        $('#carouselExampleCaptions').carousel({ interval: 5000, pause: 'hover' });

// ==========================================
        // MULAI KODE AJAX CHART REAL-TIME
        // ==========================================
        let rossiChart;

        function updateChartRealtime() {
            $.ajax({
                url: 'ambil_data.php', 
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    
                    // 1. Daftar tahun emas Rossi
                    const tahunJuara = ['2001', '2002', '2003', '2004', '2005', '2008', '2009'];

                    // 2. Buat warna otomatis: Emas pekat untuk juara, kuning pudar untuk lainnya
                    const warnaBackground = response.labels.map(tahun => 
                        tahunJuara.includes(tahun.toString()) ? 'rgba(255, 215, 0, 0.9)' : 'rgba(255, 255, 0, 0.3)'
                    );
                    const warnaBorder = response.labels.map(tahun => 
                        tahunJuara.includes(tahun.toString()) ? '#DAA520' : '#FFFF00'
                    );

                    // Jika grafik belum ada, buat grafiknya
                    if (!rossiChart) {
                        const ctx = document.getElementById('rossiChart').getContext('2d');
                        rossiChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: response.labels, // Label kembali bersih, hanya angka tahun
                                datasets: [{
                                    label: 'Championship Points',
                                    data: response.data,
                                    borderColor: warnaBorder,        // Gunakan warna dinamis
                                    backgroundColor: warnaBackground, // Gunakan warna dinamis
                                    borderWidth: 2, 
                                    borderRadius: 4 // Membuat ujung batang sedikit membulat (lebih modern)
                                }]
                            },
                            options: {
                                responsive: true, maintainAspectRatio: true,
                                plugins: {
                                    legend: { display: true, labels: { color: '#000', font: { size: 14, weight: 'bold' } } },
                                    title: { display: true, text: 'Rossi Career Performance', color: '#000', font: { size: 16, weight: 'bold' } },
                                    // 3. Modifikasi Tooltip (muncul saat di-hover)
                                    tooltip: {
                                        callbacks: {
                                            title: function(tooltipItems) {
                                                let tahun = tooltipItems[0].label;
                                                // Jika tahun di-hover adalah tahun juara, tambahkan gelar
                                                if(tahunJuara.includes(tahun)) {
                                                    return tahun + ' - 🏆 World Champion';
                                                }
                                                return tahun;
                                            }
                                        }
                                    }
                                },
                                scales: { 
                                    y: { beginAtZero: true, grid: { color: 'rgba(0, 0, 0, 0.1)' }, ticks: { color: '#000' } }, 
                                    x: { grid: { display: false }, ticks: { color: '#000', font: {size: 12} } } // Hilangkan garis vertikal agar lebih bersih
                                }
                            }
                        });
                    } 
                    // Jika grafik sudah ada, cukup update datanya
                    else {
                        rossiChart.data.labels = response.labels;
                        rossiChart.data.datasets[0].data = response.data;
                        rossiChart.data.datasets[0].backgroundColor = warnaBackground;
                        rossiChart.data.datasets[0].borderColor = warnaBorder;
                        rossiChart.update(); 
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Gagal mengambil data: ", error);
                }
            });
        }

        // Panggil pertama kali
        updateChartRealtime();

        // Ulangi pengambilan data setiap 2 detik (2000 ms)
        setInterval(updateChartRealtime, 2000);
        // ==========================================
        // AKHIR KODE AJAX CHART REAL-TIME
        // ==========================================

        // ==========================================
        // MULAI KODE AJAX KIRIM PESAN
        // ==========================================
        $('#formKontak').on('submit', function(e) {
            e.preventDefault(); // Mencegah halaman refresh/pindah layar

            $.ajax({
                url: 'kirim_pesan.php',
                type: 'POST',
                data: $(this).serialize(), // Mengambil semua data isian form otomatis
                dataType: 'json',
                success: function(response) {
                    if(response.status === 'success') {
                        // Munculkan notifikasi pop-up
                        alert(response.pesan);
                        
                        // Kosongkan kotak isian form secara otomatis
                        $('#formKontak')[0].reset(); 
                    } else {
                        alert(response.pesan);
                    }
                },
                error: function() {
                    alert("Terjadi kesalahan pada server. Coba lagi nanti.");
                }
            });
        });
        // ==========================================
        // AKHIR KODE AJAX KIRIM PESAN
        // ==========================================


        // Click handler untuk Smooth Scroll dan Active Menu
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            const $target = $($(this).attr('href'));
            
            if($target.length) {
                $('.menu-link').removeClass('active');
                $(this).addClass('active');

                $('html, body').stop().animate({
                    scrollTop: $target.offset().top - NAVBAR_OFFSET
                }, 800, function() {
                    updateMenuAndScroll();
                });
            }
        });

        // Panggil fungsi saat load dan scroll
        $(window).on('scroll', updateMenuAndScroll);
        $(window).trigger('scroll'); 
    });
</script>

</body>
</html>