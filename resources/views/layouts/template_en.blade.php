<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>正龍塑膠</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    @yield('css')

</head>

<body>
    <header>
        <div class="blank"></div>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="left_side col-6 col-md-4">
                        <div class="logo">
                            <a class="w-100" href="#">
                                <img width="100%" class="lazy" data-src="./img/logo.png" src="./img/logo.png" alt="正龍塑膠">
                                <span>
                                    正龍塑膠
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="right_side col-6 col-md-8">
                        <div class="d-none d-md-block h-100">
                            <ul class="p-0 m-0 links row">
                                <li class="link col">
                                    <a href="#about_us">ABOUT</a>
                                </li>
                                <li class="link col">
                                    <a href="#news">NEWS</a>
                                </li>
                                <li class="link col">
                                    <a href="#products">PRODUCTS</a>
                                </li>
                                <li class="link col">
                                    <a href="#contact_us">CONTACT</a>
                                </li>
                                <li class="link col">
                                    <?php $lan = $_SERVER['REQUEST_URI']; ?>
                                    <a href="/ch">CH/EN</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile_menu d-flex h-100">
                            <div class="ms-auto my-auto d-block d-md-none dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item" href="#about_us">
                                            ABOUT
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#news">
                                            NEWS
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#products">
                                            PRODUCTS
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#contact_us">
                                            CONTACT
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/ch">
                                            CH/EN
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="footer_info">
                411 臺中市太平區太平里合利街8號 Tel:04-2270-3754 Copyright © 2021 正龍塑膠廠股份有限公司 All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    @yield('js')

</body>

</html>
