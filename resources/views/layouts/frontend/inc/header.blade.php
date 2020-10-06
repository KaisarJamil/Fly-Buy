<div class="preloader loader" style="display: block;"> <img src="{{ asset('assets/frontend/image/loader.gif') }}"  alt="#"/></div>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-left pull-left">
                        <div class="language">
                            <form action="#" method="post" enctype="multipart/form-data" id="language">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> English <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bangla</a></li>
                                        <li><a href="#"> English</a></li>
                                        <li><a href="#"> Arabic</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="wel-come-msg"> Welcome to FLY BUY store! </div>
                    </div>
                    <div class="top-right pull-right">
                        <div id="top-links" class="nav pull-right">
                            <ul class="list-inline">
                                @if (Route::has('login'))
                                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My Account</span> <span class="caret"></span></a>
                                    @auth
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        @if(Auth::user()->role->id ==1)
                                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                            <li><a href="#">Logout</a></li>
                                        @else
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="javascript:void(0);" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endif

                                        @else
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                        @endauth
                                    </ul>
                                     @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-inner">
            <div class="col-sm-3 col-xs-3 header-left">
                <div id="logo"> <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/image/newlogo.png') }}" title="FLY BUY" alt="Fly Buy Logo" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-9 col-xs-9 header-right">
                <div id="search" class="input-group">
                    <input type="text" name="search" value="" placeholder="Enter your keyword ..." class="form-control input-lg" />
                    <span class="input-group-btn">
          <button type="button" class="btn btn-default btn-lg"><span>Search</span></button>
          </span> </div>
                <div id="cart" class="btn-group btn-block">
                    <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span>Shopping Cart</span><br>
          3 item(s) - $254.00</span></button>
                    <ul class="dropdown-menu pull-right cart-dropdown-menu">
                        <li>
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{ asset('assets/frontend/image/product/7product56x72.jpg') }}"></a></td>
                                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                                    <td class="text-right">x 1</td>
                                    <td class="text-right">$254.00</td>
                                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                                </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{ asset('assets/frontend/image/product/7product56x72.jpg')}}"></a></td>
                                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                                    <td class="text-right">x 1</td>
                                    <td class="text-right">$254.00</td>
                                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                                </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{ asset('assets/frontend/image/product/7product56x72.jpg')}}"></a></td>
                                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                                    <td class="text-right">x 1</td>
                                    <td class="text-right">$254.00</td>
                                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                                </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <div>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                        <td class="text-right">$210.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                        <td class="text-right">$2.00</td>
                                    </tr>

                                    </tbody>
                                </table>
                                <p class="text-right"> <span class="btn-viewcart"><a href="cart.html"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<nav id="menu" class="navbar">
    <div class="nav-inner">
        <div class="navbar-header"><span id="category" class="visible-xs">Features</span>
            <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
            <ul class="main-navigation">
                <li><a href="{{ route('home') }}"   class="parent"  >Home</a> </li>
                <li><a href="{{ route('cat.kid') }}"   class="parent"  >Kid</a> </li>
                <li><a href="{{ route('cat.man') }}"  class="parent"  >Men</a> </li>
                <li><a href="{{ route('cat.woman') }}"   class="parent"  >Women</a> </li>


                <li><a href="javascript:void(0);" class="active parent">Collection</a>
                    <ul>
                        @foreach(App\SubCategory::all() as $subcat)

                        <li><a href="{{ route('collection',$subcat->id) }}">{{ $subcat->name }}</a></li>

                        @endforeach
                    </ul>
                </li>


                <li><a href="{{ route('about') }}">MORE</a>
                <ul>
                <li><a href="{{ route('about') }}" >About us</a></li>
                <li><a href="{{ route('contact') }}" >Contact Us</a> </li>
                </ul>
            </ul>
        </div>
    </div>
</nav>
