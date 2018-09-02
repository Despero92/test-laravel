<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @include('template-parts.css')
    @yield('css')
    <title>sdfg</title>
</head>
<body>
<div class="wrapper_page">

    <div class="loader">
        <div class="loader_inner"></div>
    </div>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 header-container">
                    <div class="box-logo">
                        <a href="#">
                            <h2>Denis Che</h2>
                        </a>
                        <div class="box-logo__portfolio">
                            <h3>portfolio</h3>
                        </div>
                    </div>
                    <nav id="nav">
                        <div class="hamburger" id="hamburger-6">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                        <ul>
                            <li><a href="#top">Home</a></li>
                            <li><a href="#section-works">Works</a></li>
                            <li><a href="#section-about">About Me</a></li>
                            <li><a href="#section-contacts">Contacts</a></li>
                            <li><a href="#section-mail">Mail</a></li>
                            @if (Route::has('login'))
                                    @if (Auth::check())
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    @endif
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main id="main">
        <div class="slider-block">
            <div class="bg-image-box"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($files as $file)
                    <div class="swiper-slide"><img class="img-responsive" src="{{asset('storage/'.$file) }}"
                                                   alt="image-description">
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="slider-title-box slider-title_theme">
                <h1>Denis Chernyshev</h1>
                <h2>Web-разработчик</h2>
            </div>
            <div class="social-box__theme slider-social-box">
                <a href="https://www.facebook.com/profile.php?id=100001921034965" target="_blank"><i class="fa fa-facebook"
                                                                                                     aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/%D0%B4%D0%B5%D0%BD%D0%B8%D1%81-%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D1%88%D0%B5%D0%B2-542b57140/"
                   target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/u/0/106818303843433965190" target="_blank"><i class="fa fa-google-plus"
                                                                                               aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="container" id="section-works">
            <div class="row">
                <div class="col-lg-12 works-controls title_theme">
                    <h2>Works</h2>
                    <ul class="mixitup-controls">
                        <li>
                            <button type="button" data-filter="all">All</button>
                        </li>
                        <li>
                            <button type="button" data-filter=".category-a">Responsive</button>
                        </li>
                        <li>
                            <button type="button" data-filter=".category-b">Blog</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="mixitup">
                <div class="row">
                    <div class="mix category-a mixitup__item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="{{ asset('storage/images/yoga-img.jpg') }}"
                             alt="image-description">
                        <section class="item__content">
                            <a href="#work_1" class="popup">Description</a>
                            <a href="https://despero92.github.io/dzencode-test/">Demo</a>
                        </section>
                        <section class="hidden">
                            <section id="work_1" class="popup-content">
                                <h3>Description title</h3>
                                <p>description</p>
                                <img class="img-responsive" src="{{ asset('storage/images/yoga-img.jpg') }}" alt="image-description">
                            </section>
                        </section>
                    </div>
                    <div class="mix category-a mixitup__item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="img/Fudi2.jpg" alt="image-description">
                        <section class="item__content">
                            <a href="#work_2" class="popup">Description</a>
                            <a href="https://despero92.github.io/site-of-cooking/">Demo</a>
                        </section>
                        <section class="hidden">
                            <section id="work_2" class="popup-content">
                                <h3>Description title</h3>
                                <p>description</p>
                                <img class="img-responsive" src="img/Fudi2.jpg" alt="image-description">
                            </section>
                        </section>
                    </div>
                    <div class="mix category-b mixitup__item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="img/Agency%20Website%20Home%20Page.jpg" alt="image-description">
                        <section class="item__content">
                            <a href="#work_3" class="popup">Description</a>
                            <a href="https://despero92.github.io/blog-home-page/">Demo</a>
                        </section>
                        <section class="hidden">
                            <section id="work_3" class="popup-content">
                                <h3>Description title</h3>
                                <p>description</p>
                                <img class="img-responsive" src="img/Agency%20Website%20Home%20Page.jpg" alt="image-description">
                            </section>
                        </section>
                    </div>
                    <div class="mix category-b mixitup__item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="img/Agency%20Website%20Blog%20Page.jpg" alt="image-description">
                        <section class="item__content">
                            <a href="#work_4" class="popup">Description</a>
                            <a href="https://despero92.github.io/blog-page/">Demo</a>
                        </section>
                        <section class="hidden">
                            <section id="work_4" class="popup-content">
                                <h3>Description title</h3>
                                <p>description</p>
                                <img class="img-responsive" src="img/Agency%20Website%20Blog%20Page.jpg" alt="image-description">
                            </section>
                        </section>
                    </div>
                    <div class="mix category-b mixitup__item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="img/Agency%20Website%20Blog%20Inner%20Page.jpg" alt="image-description">
                        <section class="item__content">
                            <a href="#work_5" class="popup">Description</a>
                            <a href="https://despero92.github.io/blog-inner-page/">Demo</a>
                        </section>
                        <section class="hidden">
                            <section id="work_5" class="popup-content">
                                <h3>Description title</h3>
                                <p>description</p>
                                <img class="img-responsive" src="img/Agency%20Website%20Blog%20Inner%20Page.jpg" alt="image-description">
                            </section>
                        </section>
                    </div>
                    <div class="mix category-a mixitup__item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="img/Identity.jpg" alt="image-description">
                        <section class="item__content">
                            <a href="#work_6" class="popup">Description</a>
                            <a href="https://despero92.github.io/site-with-sidebar/">Demo</a>
                        </section>
                        <section class="hidden">
                            <section id="work_6" class="popup-content">
                                <h3>Description title</h3>
                                <p>description</p>
                                <img class="img-responsive" src="img/Identity.jpg" alt="image-description">
                            </section>
                        </section>
                    </div>
                    <div class="mix category-a mixitup__item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="img/Plae_HoldingPageV42.jpg" alt="image-description">
                        <section class="item__content">
                            <a href="#work_7" class="popup">Description</a>
                            <a href="https://despero92.github.io/Plae/">Demo</a>
                        </section>
                        <section class="hidden">
                            <section id="work_7" class="popup-content">
                                <h3>Description title</h3>
                                <p>description</p>
                                <img class="img-responsive" src="img/Plae_HoldingPageV42.jpg" alt="image-description">
                            </section>
                        </section>
                    </div>
                    <div class="mix category-a mixitup__item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <img class="img-responsive" src="img/Gisromh.jpg" alt="image-description">
                        <section class="item__content">
                            <a href="#work_8" class="popup">Description</a>
                            <a href="https://despero92.github.io/Gisromh/">Demo</a>
                        </section>
                        <section class="hidden">
                            <section id="work_8" class="popup-content">
                                <h3>Description title</h3>
                                <p>description</p>
                                <img class="img-responsive" src="img/Gisromh.jpg" alt="image-description">
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="section-about">
            <div class="row">
                <div class="col-md-12 title_theme about-title">
                    <h2>About me</h2>
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row about-block_settings">
                <div class="col-lg-offset-1 col-lg-7 col-md-offset-1 col-md-7 col-sm-offset-0 col-sm-12 about_theme">
                    <div class="right">
                        <div class="about__content">
                            <h3>Национальный Технический Университет «Харьковский Политехнический Институт</h3>
                            <h4>2009 - 2015 гг.</h4>
                            <p>
                                <b>Факультет:</b>
                                Автоматика и Приборостроение.</p>
                            <p>
                                <b>Специальность:</b>
                                Метрология и информационно- измерительные технологии
                            </p>
                        </div>
                        <div class="image-wrapper">
                            <div class="image-box">
                                <img src="img/nty.hpi.jpg" alt="image-description">
                            </div>
                        </div>
                        <div class="line-right line-box" data-box-height="182"></div>
                    </div>
                </div>
            </div>
            <div class="row about-block_settings">
                <div class="col-lg-offset-5 col-lg-7 col-md-offset-5 col-md-7 col-sm-offset-0 col-sm-12 about_theme">
                    <div class="left">
                        <div class="image-wrapper">
                            <div class="image-box">
                                <img src="img/rcpit.jpg" alt="image-description">
                            </div>
                        </div>
                        <div class="about__content">
                            <h3>Региональный центр новых информационных технологий</h3>
                            <h4>2015 г.</h4>
                            <p>
                                -Front-end
                            </p>
                        </div>
                        <div class="line-left line-box" data-box-height="182"></div>
                    </div>
                </div>
            </div>
            <div class="row about-block_settings">
                <div class="col-lg-offset-1 col-lg-7 col-md-offset-1 col-md-7 col-sm-offset-0 col-sm-12 about_theme">
                    <div class="right">
                        <div class="about__content">
                            <h3>Spalah IT School</h3>
                            <ul>
                                <li> Верстка ( 24.07.2016 )</li>
                                <li> Java Script ( 4.08.2016 )</li>
                            </ul>
                        </div>
                        <div class="image-wrapper">
                            <div class="image-box">
                                <img src="img/spalah.jpg" alt="image-description">
                            </div>
                        </div>
                        <div class="line-right line-box" data-box-height="182"></div>
                    </div>
                </div>
            </div>
            <div class="row about-block_settings">
                <div class="col-lg-offset-5 col-lg-7 col-md-offset-5 col-md-7 col-sm-offset-0 col-sm-12 about_theme">
                    <div class="left">
                        <div class="image-wrapper">
                            <div class="image-box">
                                <img src="img/web-skills.png" alt="image-description">
                            </div>
                        </div>
                        <div class="about__content">
                            <h3>Навыки</h3>
                            <h5>MarkUp</h5>
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>Responsive Design</li>
                                <li>Bootstrap 3</li>
                            </ul>
                            <h5>JS</h5>
                            <ul>
                                <li>JavaScript</li>
                                <li>Jquery</li>
                            </ul>
                            <h5>Tools</h5>
                            <ul>
                                <li>Sass</li>
                                <li>Less</li>
                                <li>Git</li>
                            </ul>
                        </div>
                        <div class="line-left line-box" data-box-height="182"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper contacts-wrapper"  id="section-contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 title_theme">
                        <h2>My contacts</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 contacts-block">
                        <section class="contacts_image-box">
                            <img src="img/5sXiYlbGoUA.jpg" alt="image-description">
                        </section>
                        <h2>Denis Chernyshev</h2>
                        <h3>Coder</h3>
                        <div class="social-box__theme contacts_social-box">
                            <a href="https://www.facebook.com/profile.php?id=100001921034965" target="_blank"><i class="fa fa-facebook"
                                                                                                                 aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/in/%D0%B4%D0%B5%D0%BD%D0%B8%D1%81-%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D1%88%D0%B5%D0%B2-542b57140/"
                               target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/u/0/106818303843433965190" target="_blank"><i class="fa fa-google-plus"
                                                                                                           aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="section-mail">
            <div class="row">
                <div class="col-lg-12 title_theme">
                    <h2>Send me an email</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-2 col-lg-9 col-md-offset-1 col-md-11 col-sm-12 form-block">
                    <h3>Say hello!</h3>
                    <div class="form-box">
                        <form action="send.php" method="POST">
                            <input type="text" name="firstName" pattern="[A-Za-zА-Яа-я]+" placeholder="Name" data-validation-pattern-message=
                            "You didn't enter a name" required>
                            <span class="help-block"></span>
                            <input type="email" id="email" name="email" placeholder="Email" data-validation-matches-match="email" data-validation-email-message=
                            "You didn't enter an email" required>
                            <span class="help-block"></span>
                            <textarea name="message" cols="30" rows="1" placeholder="Message" required></textarea>
                            <span class="help-block"></span>
                            <input type="submit" name="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@include('template-parts.js')
@yield('js')
</body>
</html>