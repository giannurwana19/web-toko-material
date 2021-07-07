<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('frontend') }}/assets/favicon/" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('frontend') }}/assets/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('frontend') }}/assets/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('frontend') }}/assets/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="{{ asset('frontend') }}/assets/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ asset('frontend') }}/assets/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="{{ asset('frontend') }}/assets/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ asset('frontend') }}/assets/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/favicon/favicon-196x196.png"
        sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ asset('frontend') }}/assets/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="{{ asset('frontend') }}/assets/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="{{ asset('frontend') }}/assets/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('frontend') }}/assets/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="{{ asset('frontend') }}/assets/favicon/mstile-310x310.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/index.css">
    <title>Toko Bangunan R. Block</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top font-weight-bold py-3">
        <div class="container">
            <a class="navbar-brand" href="product.html">
                <img src="{{ asset('frontend') }}/assets/img/logo/logo.jpg" alt="" height="24"> R. Block
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="#about">Tentang</span></a>
                    <a class="nav-link" href="#feature">Keunggulan</a>
                    <a class="nav-link" href="#products">Produk</a>
                    <a class="nav-link" href="#location">Lokasi</a>
                    <a class="nav-link" href="#contact">Kontak kami</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- slider -->
    <div id="slider">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item" data-interval="4000">
                    <img src="{{ asset('frontend') }}/assets/img/slider/gambar-produk.jpg" alt="...">
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="{{ asset('frontend') }}/assets/img/slider/promo1.png" alt="...">
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="{{ asset('frontend') }}/assets/img/slider/promo2.jpg" alt="...">
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="{{ asset('frontend') }}/assets/img/slider/promo3.jpeg" alt="...">
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="{{ asset('frontend') }}/assets/img/slider/promo4.jpeg" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- end slider -->

    <!-- about -->
    <section id="about" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col mb-3">
                    <h2>Tentang</h2>
                    <hr class="divider">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img data-aos="fade-in" src="{{ asset('frontend') }}/assets/img/about/gambar-about.jpg"
                        class="img-fluid mb-4 shadow rounded" alt="">
                </div>
                <div class="col-md-6 text-justify desc-about" data-aos="fade-in" data-aos-delay="200">
                    <h4>Toko Bahan Bangunan</h4>
                    <p class="text-secondary">Toko R. Block adalah Toko material bangunan yang berdiri sejak 2007 Lorem
                        ipsum
                        dolor,
                        sit amet consectetur
                        adipisicing elit. Vitae eveniet laborum pariatur recusandae, ab
                        fugit voluptates illum officiis eius minus, dolores natus.
                        molestias veritatis numquam ea, inventore qui delectus.</p>
                    <p class="text-secondary">Lokasi toko bertempat di jalan raya mauk Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit. Placeat
                        odit consequuntur eligendi voluptatem laudantium repellat.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- feature -->
    <section id="feature" class="py-5">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col mb-3">
                    <h2>Keunggulan</h2>
                    <hr class="divider">
                    </ <h5>Mengapa harus belanja ditoko kami?</h5>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 p-2" data-aos="fade-in">
                    <i class="fas fa-list-ul fa-3x mb-3"></i>
                    <h5>Barang Super Lengkap</h5>
                    <p class="text-secondary">Kami Menyediakan produk bahan-bahan material yang lengkap dan beragam merk
                        yang
                        sesuai dengan kebutuhan
                        anda</p>
                </div>

                <div class="col-md-6 col-lg-3 p-2" data-aos="fade-in" data-aos-delay="200">
                    <i class="fas fa-people-carry fa-3x mb-3"></i>
                    <h5>Bisa COD</h5>
                    <p class="text-secondary">Kami menyediakan metode pembayaran ditempat, anda bisa bisa membayar
                        ketika barang
                        sudah sampai di lokasi
                    </p>
                </div>

                <div class="col-md-6 col-lg-3 p-2" data-aos="fade-in" data-aos-delay="400">
                    <i class="fas fa-dollar-sign fa-3x mb-3"></i>
                    <h5>Harga Terjangkau</h5>
                    <p class="text-secondary">Kami memberikan harga terjangkau dengan barang-barang yang berkualitas
                        prima
                    </p>
                </div>

                <div class="col-md-6 col-lg-3 p-2" data-aos="fade-in" data-aos-delay="600">
                    <i class="far fa-thumbs-up fa-3x mb-3"></i>
                    <h5>Service Yang Ramah</h5>
                    <p class="text-secondary">Kami mengutamakan pelayanan yang ramah dan sopan. kepuasan pelanggan
                        merupakan prioritas kami
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end feature -->

    <!-- contact whatsapp 1 -->
    <section id="whatsapp1" class="py-5 bg-light">
        <div class="container py-3">
            <div class="row text-center">
                <div class="col">
                    <h3 class="mb-4">Ingin tanya-tanya seputar produk? Silahkan langsung hubungi kami</h3>
                    <button class="btn btn-success font-weight-bold px-5 p-2"><i class="fab fa-whatsapp"></i>
                        Whatsapp</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact whatsapp 1 -->

    <section id="products" class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col mb-3">
                    <h2 class="text-center">Produk</h2>
                    <hr class="divider">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <!-- category -->
                    <div class="row mb-3">
                        <div class="col">
                            <h4>Kategori</h4>
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item list-group-item-action active d-flex justify-content-between">
                                    An item <span>8</span></li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between">A
                                    second item <span>8</span></li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between">A
                                    third item <span>8</span></li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between">A
                                    fourth item <span>8</span></li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between">And a
                                    fifth one <span>8</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- card product -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">

                            <div class="card card-product">
                                <div class="card-body">
                                    <img src="{{ asset('frontend') }}/assets/img/product/batu-bata.jpg"
                                        class="img-fluid mb-3" alt="...">
                                    <h5 class="card-title">Batu Bata Merah</h5>
                                    <div class="card-text">Rp. 120.000</div>
                                    <span class="badge badge-primary my-3">Tersedia</span>
                                    <div>
                                        <a href="table.html" class="btn btn-outline-success btn-product btn-block">Lihat
                                            Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">

                            <div class="card card-product">
                                <div class="card-body">
                                    <img src="{{ asset('frontend') }}/assets/img/product/batu-bata.jpg"
                                        class="img-fluid mb-3" alt="...">
                                    <h5 class="card-title">Batu Bata Merah</h5>
                                    <div class="card-text">Rp. 120.000</div>
                                    <span class="badge badge-danger my-3">Kosong!</span>
                                    <div>
                                        <a href="table.html" class="btn btn-outline-success btn-product btn-block">Lihat
                                            Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">

                            <div class="card card-product">
                                <div class="card-body">
                                    <img src="{{ asset('frontend') }}/assets/img/product/batu-bata.jpg"
                                        class="img-fluid mb-3" alt="...">
                                    <h5 class="card-title">Batu Bata Merah</h5>
                                    <div class="card-text">Rp. 120.000</div>
                                    <span class="badge badge-primary my-3">Tersedia</span>
                                    <div>
                                        <a href="table.html" class="btn btn-outline-success btn-product btn-block">Lihat
                                            Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">

                            <div class="card card-product">
                                <div class="card-body">
                                    <img src="{{ asset('frontend') }}/assets/img/product/batu-bata.jpg"
                                        class="img-fluid mb-3" alt="...">
                                    <h5 class="card-title">Batu Bata Merah</h5>
                                    <div class="card-text">Rp. 120.000</div>
                                    <span class="badge badge-danger my-3">kosong!</span>
                                    <div>
                                        <a href="table.html" class="btn btn-outline-success btn-product btn-block">Lihat
                                            Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">

                            <div class="card card-product">
                                <div class="card-body">
                                    <img src="{{ asset('frontend') }}/assets/img/product/batu-bata.jpg"
                                        class="img-fluid mb-3" alt="...">
                                    <h5 class="card-title">Batu Bata Merah</h5>
                                    <div class="card-text">Rp. 120.000</div>
                                    <span class="badge badge-primary my-3">Tersedia</span>
                                    <div>
                                        <a href="table.html" class="btn btn-outline-success btn-product btn-block">Lihat
                                            Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">

                            <div class="card card-product">
                                <div class="card-body">
                                    <img src="{{ asset('frontend') }}/assets/img/product/batu-bata.jpg"
                                        class="img-fluid mb-3" alt="...">
                                    <h5 class="card-title">Batu Bata Merah</h5>
                                    <div class="card-text">Rp. 120.000</div>
                                    <span class="badge badge-primary my-3">Tersedia</span>
                                    <div>
                                        <a href="table.html" class="btn btn-outline-success btn-product btn-block">Lihat
                                            Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">

                            <div class="card card-product">
                                <div class="card-body">
                                    <img src="{{ asset('frontend') }}/assets/img/product/batu-bata.jpg"
                                        class="img-fluid mb-3" alt="...">
                                    <h5 class="card-title">Batu Bata Merah</h5>
                                    <div class="card-text">Rp. 120.000</div>
                                    <span class="badge badge-primary my-3">Tersedia</span>
                                    <div>
                                        <a href="table.html" class="btn btn-outline-success btn-product btn-block">Lihat
                                            Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">

                            <div class="card card-product">
                                <div class="card-body">
                                    <img src="{{ asset('frontend') }}/assets/img/product/batu-bata.jpg"
                                        class="img-fluid mb-3" alt="...">
                                    <h5 class="card-title">Batu Bata Merah</h5>
                                    <div class="card-text">Rp. 120.000</div>
                                    <span class="badge badge-primary my-3">Tersedia</span>
                                    <div>
                                        <a href="table.html" class="btn btn-outline-success btn-product btn-block">Lihat
                                            Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <nav aria-label="Page navigation example" class="mt-3">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>

    <section id="location" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col mb-3">
                    <h2 class="text-center">Lokasi</h2>
                    <hr class="divider">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <iframe class="map"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3967.2013353808097!2d106.5630892!3d-6.1035681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a019180dc1db3%3A0x4c2106642060b409!2sR.BLOCK!5e0!3m2!1sid!2sid!4v1624158558720!5m2!1sid!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- contact whatsapp 2 -->
    <section id="whatsapp2" class="py-5">
        <div class="container py-3">
            <div class="row text-center">
                <div class="col">
                    <h3 class="mb-4">Ingin tahu info penawaran menarik? Silahkan langsung hubungi kami</h3>
                    <button class="btn btn-success font-weight-bold px-5 p-2"><i class="fab fa-whatsapp"></i>
                        Whatsapp</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact whatsapp 2 -->

    <footer id="contact">
        <div class="main-footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md mb-3">
                        <div class="footer1 mb-4">
                            <h5>Jam Operasional</h5>
                            <div class="text-secondary">
                                <span class="font-weight-bold">Senin - Minggu</span> <span>08.00 -
                                    17.00</span>
                            </div>
                        </div>
                        <div class="footer2 mb-4">
                            <h5>Lokasi</h5>
                            <p class="text-secondary">Kosambi, Kec. Sukadiri, Tangerang, Banten 15330.</p>
                        </div>
                        <div class="footer3 mb-4">
                            <h5>Kontak</h5>
                            <div class="sosial-media">
                                <a href="#" target="_blank" class="text-secondary text-decoration-none mr-2">
                                    <i class="fab fa-whatsapp fa-2x"></i>
                                </a>
                                <a href="#" target="_blank" class="text-secondary text-decoration-none mx-2">
                                    <i class="fab fa-instagram fa-2x"></i>
                                </a>
                                <a href="#" target="_blank" class="text-secondary text-decoration-none mx-2">
                                    <i class="fab fa-facebook-f fa-2x"></i>
                                </a>
                                <a href="#" target="_blank" class="text-secondary text-decoration-none mx-2">
                                    <i class="far fa-envelope fa-2x"></i>
                                </a>
                            </div>
                            <div class="mt-3">
                                <p class="text-secondary">Telp 02198744433318</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <img src="{{ asset('frontend') }}/assets/img/about/gambar-about.jpg"
                            class="img-fluid mb-4 rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="bg-dark py-4">
                <div class="text-secondary text-center">&copy;Copyright <span id="time"></span> | R. Block</div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/index.js"></script>

</body>

</html>
