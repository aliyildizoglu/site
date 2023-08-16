<div class="site-navbar-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 order-md-2 text-center order-1">
                <div class="site-logo">
                    <a href="{{route('anasayfa')}}" class="js-logo-clone">Shoppers</a>
                </div>
            </div>

            <div class="col-md-4 order-md-1 order-2">
                <form action="{{route('urun_ara')}}" method="POST" class="site-block-top-search">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="aranan" class="form-control border-0" placeholder="Search" value="{{old('aranan')}}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Ara</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4 order-md-3 text-right order-3">
                <div class="site-top-icons">
                    <ul>
                        @auth()
                            <!-- Profil Dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>Profil</span> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span>Siparişlerim</span></a></li>
                                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>Çıkış</span></a></li>
                                    <form id="logout-form" action="{{ route('kullanici.oturumukapat') }}" method="post" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>

                        @endauth

                        <!-- Oturum Aç ve Kaydol Girişleri -->
                        @guest
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>Oturum Aç</span> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('kullanici.oturumac')}}"><span>Oturum Aç</span></a></li>
                                    <li><a href="{{route('kullanici.kaydol')}}"><span>Kaydol</span></a></li>
                                </ul>
                            </li>
                        @endguest
                        <!-- Alışveriş Sepeti -->
                        <li>
                            <a href="cart.html" class="site-cart">
                                <span class="icon icon-shopping_cart"></span>
                                <span class="count">2</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>

<nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
        <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children active">
                <a href="index.html">Home</a>
                <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                    <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-children">
                <a href="about.html">About</a>
                <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                </ul>
            </li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
</nav>
