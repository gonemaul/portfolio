 <!--================ Start Header Area =================-->
 <header class="header_area">
     <div class="main_menu">
         <nav class="navbar navbar-expand-lg navbar-light">
             <div class="container">
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <a class="navbar-brand logo_h" href="{{ route('home') }}">
                     GONEMAUL
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                     <ul class="nav navbar-nav menu_nav justify-content-end">
                         <li class="nav-item {{ Route::is('home') ? 'active' : '' }}"><a class="nav-link"
                                 href="{{ route('home') }}" id="home">Home</a></li>
                         <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                         <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                         <li class="nav-item {{ Route::is('portfolio*') ? 'active' : '' }}"><a class="nav-link"
                                 href="{{ route('portfolio') }}">Portfolio</a></li>
                         <li class="nav-item {{ Route::is('blog') ? 'active' : '' }}"><a class="nav-link"
                                 href="{{ route('blog') }}">Blog</a></li>
                         <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}"><a class="nav-link"
                                 href="{{ route('contact') }}">Contact</a></li>
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </header>
 <!--================ End Header Area =================-->
