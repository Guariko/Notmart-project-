<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("model")</title>
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <script src="https://kit.fontawesome.com/67f918e73f.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--   TODO: Header starts -->
    <header class="header">

        <!-- Header  Logo -->
        <div class="logo__container row center__center">
            <i class="fa-solid fa-fire"></i>
            <span class="logo__name">notmart</span>
        </div>
        <!-- Header Logo ends  -->

        <!--  Header bars -->
        <div class="bars__container">
            <i class="fas fa-bars pointer"></i>
        </div>
        <!-- Header bars end -->

        <!--  Nav bar and log-in container -->
        <div class="row header__nav__bar__container ">
            <div class="less__brightness"></div>
            <div class="column header__nav__bar__content">

                <div class="close__and__nav__bar__container column">

                    <div class="close__nav__bar__container row">
                        <span>menu</span>
                        <i class="fas fa-times pointer"></i>
                    </div>

                    <nav>
                        <ul class="header__nav__bar column">
                            <li class="mobile__item">
                                <a href="" class="header__nav__bar__item">homepage</a>
                            </li>
                            <li>
                                <a href="" class="header__nav__bar__item ">features</a>
                            </li>
                            <li>
                                <a href="" class="header__nav__bar__item">pricing</a>
                            </li>

                            <li class="deskop__item">
                                <a href="" class="header__nav__bar__item">academy</a>
                            </li>
                            <li class="mobile__item">
                                <a href="" class="header__nav__bar__item">resources</a>
                            </li>
                            <li class="mobile__item">
                                <a href="" class="header__nav__bar__item ">notmart marketplace</a>
                            </li>
                            <li class="deskop__item">
                                <a href="" class="header__nav__bar__item">about</a>
                            </li>
                            <li>
                                <a href="" class="header__nav__bar__item">help center</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header__buttons__container column ">
                    <div class="button__container">
                        <span class="button regular__button mobile__button ">Access my puschases</span>
                    </div>
                    <div class="button__container">
                        <span class="button regular__button mobile__button ">Manage my business</span>
                    </div>

                    <div class="button__container">
                        <a href="{{ route('login') }}" class="button login__button">Log in</a>
                    </div>

                    <div class="button__container">
                        <a href="{{ route('signup') }}" class="button main__button ">Sign up</a>
                    </div>

                </div>
            </div>

        </div>
        <!-- -->

    </header>

    <main class="main">
        @yield("content")
    </main>

    <footer class="footer">
        <div class="footer__decoration">
        </div>

        <article class="footer__content">
            <nav>
                <ul class="footer__nav">
                    <li class="footer__nav__item">
                        <h2>The company</h2>
                    </li>
                    <li class="footer__nav__item">
                        about notmart
                    </li>
                    <li class="footer__nav__item">
                        careers
                    </li>
                    <li class="footer__nav__item">
                        ethics line
                    </li>
                    <li class="footer__nav__item">
                        media center
                    </li>
                    <li class="footer__nav__item">
                        notmart one
                    </li>
                </ul>

            </nav>

            <nav>
                <ul class="footer__nav">
                    <li class="footer__nav__item">
                        <h2>using notmart</h2>
                    </li>
                    <li class="footer__nav__item">
                        features
                    </li>
                    <li class="footer__nav__item">
                        in the loop
                    </li>
                    <li class="footer__nav__item">
                        pricing
                    </li>
                    <li class="footer__nav__item">
                        help center
                    </li>
                    <li class="footer__nav__item">
                        notmart sparkle
                    </li>
                    <li class="footer__nav__item">
                        terms and policies
                    </li>
                </ul>

            </nav>

            <nav>
                <ul class="footer__nav">
                    <li class="footer__nav__item">
                        <h2>education</h2>
                    </li>
                    <li class="footer__nav__item">
                        help center videos
                    </li>
                    <li class="footer__nav__item">
                        notmart guide
                    </li>
                    <li class="footer__nav__item">
                        strategies and tools
                    </li>
                    <li class="footer__nav__item">
                        blog
                    </li>

                </ul>

            </nav>
        </article>

        <div class="madeby">
            <h2>Made with <i class="fas fa-heart"></i> <mark>by Guariko</mark> </h2>

        </div>

        <div class="socialmedias">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-tiktok"></i>
        </div>

        <div class="footer__decoration">
        </div>

        <div class="copyright">
            <div>

                <h2>Terms and Policies</h2>
                <div class="copy__information">
                    <span>Notmart -- 2011 - 2022 &copy; All rights reserved</span>
                </div>
            </div>
            <div class="footer__logo">
                <i class="fas fa-fire"></i>
                <span>
                    notmart
                </span>
            </div>
        </div>
    </footer>

    <script src="{{ url('js/index.js') }}"></script>

</body>

</html>