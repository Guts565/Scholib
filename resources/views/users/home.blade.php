<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Scholib</title>
    <link rel="icon" type="image/png" href="login/scholib.png" sizes="32x32">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- Google font -->
    <!-- <link href="lib/montserrat.css" rel="stylesheet" /> -->

    <!-- Slick
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    nouislider
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    Font Awesome Icon
    <link rel="stylesheet" href="css/font-awesome.min.css" /> -->

    <style>
        font-family {
            font-family: Helvetica;
        }

        body {
            transition: background-color 3s ease;
            line-height: 32px;
            margin: 0;
            padding: 0;
            word-wrap: break-word !important;
            font-family: Helvetica;
            background-color: grey;
        }

        .form-control {
            border-radius: 15px;
        }

        .form-inputs {
            position: relative;
        }

        .form-inputs .form-control {
            height: 35px;
        }

        .form-inputs .form-control:focus {
            box-shadow: none;
            border: 3px solid black;
        }

        .carousel-indicators {
            position: absolute;
            bottom: 0;
            left: 33%;
            transform: translateX(-50%);
        }

        .c-placeholder::placeholder {
            font-size: larger;
        }

        .form-control {
            background-color: rgb(228, 228, 228);
        }

        .result {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div id="menuHolder" style="border-bottom: 8px solid black;">
        <div role="navigation" class="sticky-top border-bottom border-top" id="mainNavigation">
            <div class="flexMain" style="border-bottom: 5px black; background-color: #50CAFF">
                <div class="flex2">
                    <a href="/"><img style="height: 100px; width: 100px;" src="img/icon/scholib.png"
                            alt=""></a>
                </div>
                <div class="flex3 text-center" id="">
                    <div class="d-flex form-inputs">
                        <input class="form-control c-placeholder" type="text" onkeyup="searchContent()"
                            id="searchInput" placeholder="Search scholarship here...">&nbsp;&nbsp;
                        <button class="btn btn-dark btn-lg rounded-5" type="submit">Search</button>
                    </div>
                </div>
                <div class="flex2 text-end d-none d-md-block fw-bold fs-5">
                    <a href="/register"><button class="whiteLink siteLink"
                            style="border-right: 4px solid black;">REGISTER</button></a>
                    <a href="/login"><button class="blackLink siteLink pe-5">LOGIN</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div class="container-fluid px-0">
        <div class="row">
            <!-- The carousel -->
            <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel"
                data-interval="2000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
                    <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
                    <li data-target="#transition-timer-carousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <a href=""><img style="height: 370px; width: 100%;"
                                src="img/slider/Beasiswa-Oksigen-Education-Telkom-University-2021.jpeg"
                                class="img-responsive" alt=""></a>
                    </div>

                    <div class="item ">
                        <a href=""><img style="height: 370px; width: 100%;"
                                src="https://smbbtelkom.ac.id/assets/images/web-banner-jalur-beasiswa-telkom-university-2022.jpeg"
                                class="img-responsive" alt=""></a>
                    </div>

                    <div class="item ">
                        <a href=""><img style="height: 370px; width: 100%;"
                                src="img/slider/1590750468-beasiswa.jpeg" class="img-responsive" alt=""></a>
                    </div>

                    <div class="item ">
                        <a href=""><img style="height: 370px; width: 100%;"
                                src="https://smb.telkomuniversity.ac.id/wp-content/uploads/2023/11/web-banner-jalur-beasiswa-telkom-university-x-masuk-kampus-2024.jpg"
                                class="img-responsive" alt=""></a>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                </a>
                <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                </a>
            </div>
        </div>
    </div>
    <br><br>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title" style="color:rgb(0, 0, 0);">Scholib</h2>
                    </div>
                </div>

                <!-- konten -->
                <div class="col-md-4">
                    <div class="konten">
                        <div class="konten-img">
                            <img style="height: 448px;" src="img/konten/3a52cdc6-defd-467e-9b31-a3a7a4b029ca.jpg"
                                alt="Beasiswa Bank Indonesia" id="136" class="open_modalid">
                        </div>
                        <div class="konten-body">
                            <h3 class="konten-name">Beasiswa Bank Indonesia</h3>
                        </div>
                    </div>
                </div>
                <!-- /konten -->

                <!-- konten -->
                <div class="col-md-4">
                    <div class="konten">
                        <div class="konten-img">
                            <img id="konten-main-img" style="height: 448px;"
                                src="img/konten/388ec51e-ae44-4f30-a772-988fc5cd1e5a.jpg" alt="Beasiswa Keagamaan"
                                id="134" class="open_modalid">
                        </div>
                        <div class="konten-body">
                            <h3 class="konten-name">Beasiswa Keagamaan</h3>
                        </div>
                    </div>
                </div>
                <!-- /konten -->


                <!-- konten -->
                <div class="col-md-4">
                    <div class="konten">
                        <div class="konten-img">
                            <img style="height: 448px;" src="img/konten/54ede133-a4cd-4a36-9ac5-960547380344.jpg"
                                alt="Beasiswa Bidik Misi" id="133" class="open_modalid">
                        </div>
                        <div class="konten-body">
                            <h3 class="konten-name">Beasiswa Bidik Misi</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="konten">
                        <div class="konten-img">
                            <img style="height: 448px;" src="img/konten/3a52cdc6-defd-467e-9b31-a3a7a4b029ca.jpg"
                                alt="Beasiswa Bank Indonesia" id="136" class="open_modalid">
                        </div>
                        <div class="konten-body">
                            <h3 class="konten-name">Beasiswa Bank Indonesia</h3>
                        </div>
                    </div>
                </div>
                <!-- /konten -->

                <!-- konten -->
                <div class="col-md-4">
                    <div class="konten">
                        <div class="konten-img">
                            <img style="height: 448px;" src="img/konten/388ec51e-ae44-4f30-a772-988fc5cd1e5a.jpg"
                                alt="Beasiswa Keagamaan" id="134" class="open_modalid">
                        </div>
                        <div class="konten-body">
                            <h3 class="konten-name">Beasiswa Keagamaan</h3>
                        </div>
                    </div>
                </div>
                <!-- /konten -->

                <!-- konten -->
                <div class="col-md-4">
                    <div class="konten">
                        <div class="konten-img">
                            <img style="height: 448px;" src="img/konten/54ede133-a4cd-4a36-9ac5-960547380344.jpg"
                                alt="Beasiswa Bidik Misi" id="133" class="open_modalid">
                        </div>
                        <div class="konten-body">
                            <h3 class="konten-name">Beasiswa Bidik Misi</h3>
                        </div>
                    </div>
                </div>
                <!-- /konten -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <!-- FOOTER -->
    <footer id="footer">
        <!-- bottom footer -->
        <div id="footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="newsletter">
                            <ul class="newsletter-follow">
                            </ul>
                        </div>
                        <span class="copyright">
                            <b>Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Matin
                            </b>
                        </span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/fb73dc4a7f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"></script>

    <!-- Bootstrap Dropdown Hover JS -->
    <script src="js/bootstrap-dropdownhover.min.js"></script>

    <script>
        function searchContent() {
            // Mendapatkan nilai input pencarian
            var input = document.getElementById("searchInput");
            var filter = input.value.toUpperCase();

            // Mendapatkan elemen konten
            var content = document.getElementById("content");
            var results = content.getElementsByClassName("result");

            // Iterasi melalui semua elemen dan menyembunyikan yang tidak sesuai dengan kriteria pencarian
            for (var i = 0; i < results.length; i++) {
                var dataSearch = results[i].getAttribute("data-search");
                if (dataSearch.toUpperCase().indexOf(filter) > -1) {
                    results[i].style.display = "";
                } else {
                    results[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>
