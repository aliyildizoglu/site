<div class="site-navbar-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 order-md-2 text-center order-1">
                <div class="site-logo">
                    <a href="index.html" class="js-logo-clone">Shoppers</a>
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
                        <li><a href="#"><span class="icon icon-person"></span></a></li>
                        <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
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
