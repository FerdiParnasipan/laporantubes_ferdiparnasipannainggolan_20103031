<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: rgb(216, 245, 241)">
        <div class="container">
            <a class="navbar-brand" href="#">Mouseku Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <span class="navbar-text">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500">Home</a>
                            @else
                                <button class="btn btn-outline-success me-2" type="button"><a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500">Log in</button>

                                @if (Route::has('register'))
                                    <button class="btn btn-outline-success me-2" type="button"><a
                                            href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 ">Register</button>
                                @endif
                            @endauth
                        </div>
                    @endif
                </span>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!--Carousel -->
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid"
                                src="https://www.computerlounge.co.nz/data/media/images/Brand/Logitech/Logitech-banner-4.jpg"
                                alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Dream Stationary</b> eCommerce</h1>
                                <h3 class="h2">Perfect for complete your stationary</h3>
                                <p>Dream Stationary is an eCommerce where you can buy any stuff to complete your
                                    stationary collection.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid"
                                src="https://www.computerlounge.co.nz/data/media/images/Brand/Logitech/Logitech-banner-4.jpg"
                                alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Dream Stationary</h1>
                                <h3 class="h2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente nobis ab omnis
                                    optio illo placeat necessitatibus! Rerum earum in dolores consequatur impedit
                                    veritatis similique, laborum tempore dolorum labore atque
                                    dicta.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid"
                                src="https://www.computerlounge.co.nz/data/media/images/Brand/Logitech/Logitech-banner-4.jpg"
                                alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Dream Stationary</h1>
                                <h3 class="h2">Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti vel eum nostrum
                                    odio nobis eligendi est quos tenetur vitae pariatur obcaecati iste temporibus
                                    commodi error perferendis, officiis sit eos. Fugiat?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#carousel" role="button"
            data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#tcarousel" role="button"
            data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- Carousel end -->

    <!-- Start Best Seller -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class>Categories of the Mounth</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti vel eum nostrum odio nobis eligendi
                    est quos tenetur vitae pariatur obcaecati iste temporibus commodi error perferendis, officiis sit
                    eos. Fugiat?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img
                        src="https://resource.logitech.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/mice/m650/product-gallery/m650-medium-graphite-top.png?v=1"
                        class="rounded-circle img-fluid border" /></a>
                <h2 class="h5 text-center mt-3 mb-3">SIGNATURE M650</h2>
                <h1 class="h6 text-center mt-3 mb-3">Tingkatkan ke scrolling yang lebih cerdas, kenyamanan yang lebih
                    baik, dan lebih produktif Signature M650 dilengkapi SmartWheel scrolling yang menghadirkan presisi
                    atau kecepatan begitu kamu membutuhkannya.</h1>
                <p class="text-center"><a class="btn btn-success">beli</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img
                        src="https://resource.logitech.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/mice/pop-wireless-mouse/gallery/pop-mouse-gallery-blast-1.png?v=1"
                        class="rounded-circle img-fluid border" /></a>
                <h2 class="h5 text-center mt-3 mb-3">PEEBLE</h2>
                <h1 class="h6 text-center mt-3 mb-3">Kenali POP Mouse wireless yang ceria, yang didesain untuk
                    menjadikan kepribadianmu bersinar di desktop-mu dan sekitarnya. Pilihlah POP Mouse yang paling kamu
                    sukai dari jajaran desain kami dan jadikan sebagai ciri khasmu dengan kustomisasi emoji yang
                    mengasyikkan.</h1>
                <p class="text-center"><a class="btn btn-success">beli</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img
                        src="https://resource.logitech.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/mice/lift-vertical-ergonomic-mouse/gallery/lift-gallery-graphite-1.png?v=1"
                        class="rounded-circle img-fluid border" /></a>
                <h2 class="h5 text-center mt-3 mb-3">LIFT</h2>
                <h1 class="h6 text-center mt-3 mb-3">Menopang tanganmu agar terasa nyaman. Menyelaraskan dalam posisi
                    yang lebih alami. Rileks dan fokus sepanjang hari dengan Mouse Ergonomis Vertikal Lift. Perangkat
                    yang cocok untuk tangan berukuran kecil hingga medium, juga tersedia opsi untuk pengguna bertangan
                    kidal.</h1>
                <p class="text-center"><a class="btn btn-success">beli</a></p>
            </div>
        </div>
    </section>
    <!-- End Best Seller -->

    <!--Start Feature Product-->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                            <img src="https://resource.logitech.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/mice/m650/product-gallery/m650-medium-graphite-top.png?v=1"
                                class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp.35.000</li>
                            </ul>
                            <a href="shop.html" class="h2 text-decoration-none text-dark"> SIGNATURE M650</a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in
                                culpa qui officia deserunt.</p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                            <img src="https://resource.logitech.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/mice/m650/product-gallery/m650-medium-graphite-top.png?v=1"
                                class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp. 10.000</li>
                            </ul>
                            <a href="cutter.png" class="h2 text-decoration-none text-dark">SIGNATURE M650</a>
                            <p class="card-text">Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae
                                pharetra sed, commodo ullamcorper.</p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                            <img src="https://resource.logitech.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/mice/m650/product-gallery/m650-medium-graphite-top.png?v=1"
                                class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp.15.000</li>
                            </ul>
                            <a href="shop.html" class="h2 text-decoration-none text-dark">SIGNATURE M650</a>
                            <p class="card-text">Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar
                                sagittis diam, et scelerisque ipsum lobortis nec.</p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <!-- Start Footer -->
    <footer class="bg-dark" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Dream Stationary</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Jl. Menuju Kemenangan No.99
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">(021) 326 917</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">Copyright &copy; 2022 Dream</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    </div>
</body>

</html>
