<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Emas Cahaya</title>
    <link rel="icon" href="assets/images/mekarlogo.png" type="image/png">


    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="assets/images/mekarlogo.png" alt="Logo" width="140" height="90">
            </a>

            <!-- Toggle Button (Mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarMenu">

                <!-- Menu Tengah -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Perhiasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak Kami</a>
                    </li>
                </ul>

                <!-- Menu Kanan -->
                <div class="d-flex align-items-center gap-3">

                    <!-- Search -->
                    <form class="d-none d-lg-flex align-items-center">
                        <input class="form-control form-control-sm me-2" type="search" placeholder="Search...">
                        <button class="btn btn-outline-secondary btn-sm" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                    <!-- User / Auth -->
                    @guest
                        <!-- BELUM LOGIN -->
                        <a href="{{ url('/login') }}" class="text-dark">
                            <i class="fas fa-user-circle fs-5"></i>
                        </a>
                    @endguest

                    @auth
                        <!-- SUDAH LOGIN -->
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn p-0 border-0 bg-transparent text-dark">
                                <i class="fas fa-sign-out-alt fs-5"></i>
                            </button>
                        </form>
                    @endauth

                </div>
            </div>
        </div>
    </nav>
    <!-- header ends  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="https://img2.pngdownload.id/20180206/kxw/av275dc8z.webp" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="https://png.pngtree.com/png-vector/20240729/ourmid/pngtree-classic-gold-bangle-bracelet-timeless-jewelry-for-every-occasion-png-image_13274415.png"
                            alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Selamat Datang Di Toko
                                        Emas
                                        <span>Cahaya</span>

                                    </h1>
                                    <p style="text-align: justify;">Selamat datang di Toko Emas Cahaya, pusat perhiasan
                                        berkualitas yang menawarkan berbagai
                                        koleksi emas dan perhiasan pilihan. Temukan keindahan dan keanggunan perhiasan
                                        emas
                                        kami yang dirancang khusus untuk melengkapi penampilan Anda. Kami berkomitmen
                                        memberikan kualitas terbaik dan layanan ramah untuk setiap pelanggan.</p>
                                    <div class="banner-btn mt-4">
                                        <a href="#menu" class="sec-btn">Perhiasan Lainnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img"
                                        style="background-image: url(https://www.passionjewelry.co.id/uploads/rekomendasi-model-cincin-emas-wanita-terbaru-unik-dan-menarik-147-2024-08-16-170315.jpg);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="h5-title">Cincin Permata</h5>
                                    <p style="text-align: justify;"> Cincin Permata adalah cincin elegan dengan hiasan
                                        permata berkualitas,
                                        sempurna untuk melambangkan momen berharga atau sebagai hadiah istimewa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">

                            <div class="brand-title mb-5">
                                <h5 class="h5-title">Dipercaya oleh Perusahaan</h5>
                            </div>

                            <div class="brands-row">
                                <div class="brands-box">
                                    <img src="assets/images/brands/b1.png" alt="Brand 1">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b2.png" alt="Brand 2">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Tentang kami</p>
                                <h2 class="h2-title">Temukan Cerita Kami <span>Dari Toko Emas Cahaya</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <p style="text-align: justify;">Hai sobat Cahaya, perkenalkan kami hadir untuk
                                    menawarkan berbagai macam variasi kostum
                                    produk model dan ukuran yang disesuaikan dengan pesanan pelanggan, dan kebutuhan
                                    pelanggan,
                                    kami melayani pesanan grosir dan eceran, kami juga melayani jasa servis, chrome
                                    emas, perak.
                                    Tenaga kami telah teruji dengan pengalaman belasan tahun yang menggeluti
                                    dibidangnya.
                                    Kadar yang kami gunakan untuk emas adalah 8K, 10K dan 18K, termasuk 24K, sedangkan
                                    perak
                                    kami menggunakan kadar 92,5% (925). <br> <br>
                                    Yuk penuhi kebutuhan lifestyle anda bersama Toko Emas Cahaya.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img"
                                    style="background-image: url(assets/images/thumnailemas.jpg);">
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/videoperhiasan.mp4" data-fancybox="video"
                                        class="play-btn">
                                        <i class="uil uil-play"></i>

                                    </a>
                                    <span>Proses Pembuatan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url({{ asset('assets/images/menu-bg.png') }});"
                class="our-menu section bg-light repeat-img" id="menu">

                <div class="container">

                    <!-- SECTION TITLE -->
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3">Perhiasan Kami</p>
                        <h2 class="h2-title">
                            Kilau Kepercayaan, <span>Investasi Berharga!</span>
                        </h2>
                        <div class="sec-title-shape mb-4">
                            <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                        </div>
                    </div>

                    <!-- PRODUCT LIST -->
                    <div class="row">

                        @forelse ($products as $product)
                            <div class="col-lg-4 col-md-6 mb-4">

                                <div class="dish-box text-center">

                                    <!-- IMAGE -->
                                    <div class="dist-img mb-3">
                                        <img src="{{ asset('storage/' . $product->gambar) }}"
                                            alt="{{ $product->nama }}" style="width:100%; height:auto;">
                                    </div>

                                    <!-- TITLE -->
                                    <div class="dish-title">
                                        <h3 class="h3-title">{{ $product->nama }}</h3>
                                        <p>{{ $product->berat }} Grm ({{ $product->kadar }})</p>
                                    </div>

                                    <!-- INFO -->
                                    <div class="dish-info">
                                        <ul class="list-unstyled d-flex justify-content-center gap-4">
                                            <li>
                                                <p class="mb-1">Type</p>
                                                <b>Gold</b>
                                            </li>
                                            <li>
                                                <p class="mb-1">Stok</p>
                                                <b>{{ $product->stok }}</b>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PRICE & ACTION -->
                                    <div class="dist-bottom-row mt-3">
                                        <ul
                                            class="list-unstyled d-flex justify-content-between align-items-center px-3">
                                            <li>
                                                <b>IDR {{ number_format($product->harga, 0, ',', '.') }}</b>
                                            </li>
                                            <li>
                                                <a href="https://wa.me/6283133977214?text={{ urlencode(
                                                    'Halo Admin, saya tertarik dengan produk berikut:' .
                                                        "\n\n" .
                                                        'Nama Produk : ' .
                                                        $product->nama .
                                                        "\n" .
                                                        'Berat       : ' .
                                                        $product->berat .
                                                        ' Gram' .
                                                        "\n" .
                                                        'Kadar       : ' .
                                                        $product->kadar .
                                                        "\n" .
                                                        'Harga       : IDR ' .
                                                        number_format($product->harga, 0, ',', '.') .
                                                        "\n\n" .
                                                        'Mohon info lebih lanjut. Terima kasih.',
                                                ) }}"
                                                    target="_blank" title="Pesan via WhatsApp"
                                                    style="
            width: 48px;
            height: 48px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: #25D366;
            color: #ffffff;
            font-size: 22px;
            box-shadow: 0 6px 15px rgba(37, 211, 102, 0.4);
            text-decoration: none;
            transition: all 0.3s ease;
        "
                                                    onmouseover="this.style.transform='scale(1.1)'; this.style.background='#1ebe5d';"
                                                    onmouseout="this.style.transform='scale(1)'; this.style.background='#25D366';">
                                                    <i class="uil uil-whatsapp"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>Data produk kosong</p>
                            </div>
                        @endforelse

                    </div>

                </div>
            </section>

            <section class="two-col-sec section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-img mt-5">
                                <img src="assets/images/Jasa/custom.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sec-text">
                                <h2 class="xxl-title">Jasa Custom</h2>
                                <p style="text-align: justify;">Toko Emas Cahaya menghadirkan layanan Jasa Custom untuk
                                    Anda yang menginginkan perhiasan dengan sentuhan pribadi dan unik. Dengan layanan
                                    ini, Anda dapat merancang sendiri perhiasan sesuai keinginan, baik dari segi desain,
                                    ukuran, maupun material yang digunakan. Kami memahami bahwa setiap perhiasan
                                    memiliki nilai emosional dan cerita khusus, sehingga kami berkomitmen untuk
                                    mewujudkan ide dan keinginan Anda ke dalam karya yang sempurna.</p>
                                <p style="text-align: justify;">Tim perajin kami yang berpengalaman akan membantu Anda
                                    dalam setiap tahap pembuatan, mulai dari pemilihan bentuk, penentuan ukuran, hingga
                                    penambahan detail khusus seperti batu permata pilihan. Dengan kombinasi teknologi
                                    modern dan keterampilan tangan yang terampil, Toko Emas Cahaya memastikan bahwa
                                    setiap detail perhiasan yang dibuat memenuhi standar kualitas terbaik, mencerminkan
                                    gaya dan karakter pribadi Anda.</p>
                                <p style="text-align: justify;">Bergabunglah bersama banyak pelanggan setia kami yang
                                    telah menemukan kepuasan dalam memiliki perhiasan eksklusif yang tak hanya indah,
                                    tetapi juga penuh makna. Temukan kemewahan, keunikan, dan kualitas yang hanya bisa
                                    Anda dapatkan di Toko Emas Cahaya.</p>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="sec-text">
                                <h2 class="xxl-title">Jasa Cuci</h2>
                                <p style="text-align: justify;">Toko Emas Cahaya juga menawarkan layanan Jasa Cuci
                                    Perhiasan untuk menjaga kilau dan keindahan perhiasan Anda. Kami memahami bahwa
                                    perhiasan yang sering dipakai cenderung terkena kotoran, minyak, atau debu, yang
                                    dapat mengurangi kilaunya seiring waktu. Melalui proses pembersihan profesional,
                                    kami memastikan perhiasan Anda kembali bersinar seperti baru.</p>
                                <p style="text-align: justify;">Dalam Jasa Cuci kami, setiap perhiasan dibersihkan
                                    dengan teknik khusus dan peralatan modern untuk memastikan keamanan dan kualitas
                                    terbaik. Mulai dari perhiasan emas, berlian, hingga batu permata lainnya, tim ahli
                                    kami menangani setiap proses dengan hati-hati dan teliti agar tetap terjaga kualitas
                                    serta ketahanan perhiasan Anda. Kami juga menawarkan opsi pemolesan untuk perhiasan
                                    yang membutuhkan perawatan lebih, membuatnya tampak lebih bersih, lebih berkilau,
                                    dan bebas dari goresan kecil.</p>
                                <p style="text-align: justify;">Kami berkomitmen untuk memberikan pelayanan terbaik
                                    bagi pelanggan kami. Datanglah ke Toko Emas Cahaya dan percayakan perhiasan Anda
                                    kepada kami untuk perawatan profesional yang aman dan berkualitas.</p>

                            </div>
                        </div>
                        <div class="col-lg-5 order-lg-2 order-1">
                            <div class="sec-img mt-5">
                                <img src="assets/images/Jasa/cuci.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Lokasi</p>
                                    <h2 class="h2-title">Google Maps</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Senin - Sabtu</h3>
                                        <p>07.00 - 18.00 WIB</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+91-8866998866">+62 81256653063</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Minggu</h3>
                                        <p>08.00 - 19.00 WIB</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gallery">
                            <div class="col-lg-10 m-auto">
                                <div class="map-responsive">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d281.2834606299525!2d113.07752239991815!3d-7.714569704592278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7b6bf3b7355a7%3A0xbc8f79665432615b!2sToko%20Emas%20Cahaya%201!5e0!3m2!1sid!2sid!4v1766659548395!5m2!1sid!2sid"
                                        width="100%" height="450" style="border:0; border-radius: 10px;"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="our-team section">
                <div class="sec-wp">
                    <div class="container">

                        <!-- Title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Tim Kami</p>
                                    <h2 class="h2-title">Temui Tim Kami</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Members -->
                        <div class="row justify-content-center">

                            <!-- Boby -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="team-box text-center">
                                    <div class="team-img back-img"
                                        style="background-image: url(assets/images/Tim/Boby.jpg);">
                                    </div>

                                    <h3 class="h3-title">Boby</h3>
                                    <p class="team-sub-title">Backend</p>

                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/yk.boby">
                                                    <i class="uil uil-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="uil uil-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Falah -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="team-box text-center">
                                    <div class="team-img back-img"
                                        style="background-image: url(assets/images/Tim/falah.jpeg);">
                                    </div>

                                    <h3 class="h3-title">Falah</h3>
                                    <p class="team-sub-title">UI / UX</p>

                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/falahaprizal_"><i class="uil uil-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="uil uil-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonials section bg-light">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Apa Kata Mereka</p>
                                    <h2 class="h2-title">Apa Yang Dikatakan <span>Costumer Tentang Kami</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($testimonials as $item)
                            <div class="testimonials-box">
                                <div class="testimonial-box-top">
                                    <div class="testimonials-box-img back-img"
                                        style="background-image: url({{ asset('storage/' . $item->foto) }});">
                                    </div>

                                    <div class="star-rating-wp">
                                        <div class="star-rating">
                                            <span class="star-rating__fill"
                                                style="width:{{ $item->rating * 20 }}%"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonials-box-text">
                                    <h3 class="h3-title">{{ $item->nama }}</h3>
                                    <p>{{ $item->pesan }}</p>
                                </div>
                            </div>
                        @endforeach
                        <a href="{{ route('testimoni.create') }}"
                            style="
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 28px;
        margin-top: 16px;
        border-radius: 30px;
        border: 2px solid #ff8243;
        color: #ff8243;
        font-weight: 600;
        text-decoration: none;
        background: transparent;
        transition: all 0.3s ease;
   "
                            onmouseover="
        this.style.background='#ff8243';
        this.style.color='#ffffff';
        this.style.transform='translateY(-3px)';
        this.style.boxShadow='0 10px 25px rgba(255,130,67,0.4)';
   "
                            onmouseout="
        this.style.background='transparent';
        this.style.color='#ff8243';
        this.style.transform='translateY(0)';
        this.style.boxShadow='none';
   ">
                            ✍️ Kirim Testimoni
                        </a>
                    </div>
                </div>
            </section>

            <section class="faq-sec section-repeat-img mt-5" style="">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">faqs</p>
                                    <h2 class="h2-title">Pertanyaan <span>yang sering diajukan</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah bisa beli eceran atau harus grosir?</h4>
                                <p>Anda bisa membeli eceran atau grosiran di toko kami.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah disini bisa custom model sendiri?</h4>
                                <p>Bisa kami membuka layanan custom yang sesuai dengan model yang diinginkan.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah toko ini terpercaya?</h4>
                                <p>Sangat terpercaya karena Tenaga kami telah teruji dengan pengalaman
                                    belasan tahun yang menggeluti dibidangnya, Dan mendapatkan hasil yang terbaik
                                    .</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah tersedia disemua platform?</h4>
                                <p>Kami hanya memiliki 2 platform by Instagram dan Whatsapp</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Apakah ada jasa servis dan lain-lain atau hanya custom saja?</h4>
                                <p>Kami melayani jasa servis, chrome emas, perak.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">berapa kadar yang digunakan untuk emas dan perak?</h4>
                                <p>Kadar yang kami gunakan untuk emas adalah 8K, 10K dan 18K, termasuk 24K,
                                    sedangkan perak kami menggunakan kadar 92,5% (925)</p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>


            <div class="bg-pattern repeat-img mt-5"
                style="background-image: url(assets/images/blog-pattern-bg.png);">
                <section class="newsletter-sec section pt-0">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 m-auto">
                                    <div class="newsletter-box text-center back-img white-text"
                                        style="background-image: url(assets/images/news.jpg);">
                                        <div class="bg-overlay dark-overlay"></div>
                                        <div class="sec-wp">
                                            <div class="newsletter-box-text">
                                                <h2 class="h2-title">Berlangganan ditoko kami</h2>
                                                <p>Berlangganan di Toko Emas Cahaya dan dapatkan penawaran spesial
                                                    untuk koleksi perhiasan emas pilihan.</p>
                                            </div>
                                            <form action="#" class="newsletter-form">
                                                <input type="email" class="form-input"
                                                    placeholder="Maskin Email Anda" required>
                                                <button type="submit" class="sec-btn primary-btn">Kirim</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- footer starts  -->
            <footer class="site-footer" id="contact">
                <div class="top-footer section">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-info">
                                        <div class="footer-logo">
                                            <a href="index.html">
                                                <img src="MEKAR JEWRLY 2-01.png" alt="">
                                            </a>
                                        </div>
                                        <p>Ikuti Kami Di Semua Sosial Media DIbawah.
                                        </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.instagram.com/tokoemasmekar" target="_blank">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://wa.me/+6281256653063" target="_blank">
                                                        <i class="uil uil-whatsapp"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="footer-flex-box">
                                        <div class="footer-table-info">
                                            <h3 class="h3-title">Jam Buka</h3>
                                            <ul>
                                                <li><i class="uil uil-clock"></i> Senin - Sabtu : 07:00 - 18.00 WIB
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu food-nav-menu">
                                            <h3 class="h3-title">Links</h3>
                                            <ul class="column-2">
                                                <li>
                                                    <a href="#home" class="footer-active-menu">Home</a>
                                                </li>
                                                <li><a href="#about">Tentang</a></li>
                                                <li><a href="#menu">Perhiasan</a></li>
                                                <li><a href="#gallery">Lokasi</a></li>
                                                <li><a href="#blog">Blog</a></li>
                                                <li><a href="#contact">Kontak</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu">
                                            <h3 class="h3-title">Perusahaan</h3>
                                            <ul>
                                                <li><a href="#">S&K</a></li>
                                                <li><a href="#">Kebijakan Privasi</a></li>
                                                <li><a href="#">Kebijakan Cookie</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2024 <span class="name">TokoEmasCahaya</span> All Rights
                                        Reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
                    </div>
                </div>
            </footer>



        </div>
    </div>


    <!-- jquery  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- fontawesome  -->
    <script src="assets/js/font-awesome.min.js"></script>

    <!-- swiper slider  -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- mixitup -- filter  -->
    <script src="assets/js/jquery.mixitup.min.js"></script>

    <!-- fancy box  -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- parallax  -->
    <script src="assets/js/parallax.min.js"></script>

    <!-- gsap  -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- scroll trigger  -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- scroll to plugin  -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="assets/js/smooth-scroll.js"></script>
    <!-- custom js  -->
    <script src="main.js"></script>

</body>

</html>
