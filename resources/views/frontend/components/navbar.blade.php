<nav class="navbar navbar-expand-lg navbar-dark style-2 position-absolute w-100 p-0">

       
    <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}" >
                <h4 class="text-logo" >TW WORLD <br>TECHNOLOGY</h4>
                <!-- <img style="border: 5px solid gold;" src="assets/img/logo_main-tranparent.png" alt=""> -->
            </a>
            @if(Route::is('home')) 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">  
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item dropdown">
                        <a class="nav-link active"  data-scroll-nav="1">
                            about us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  data-scroll-nav="2">
                            services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  data-scroll-nav="3">
                            portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  data-scroll-nav="4">
                            why us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  data-scroll-nav="5">
                            testimonials
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link"  data-scroll-nav="6">
                            pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  data-scroll-nav="7">
                            blog
                        </a>
                    </li> -->
                    
                </ul>
            </div>
            @endif
        </div>
       
    </nav>