<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><span> Online Library </span> Management System</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>@auth
            
            <a href="{{route('frontend.user')}}" class="active">Home</a>
          </li>@endauth
         

          <li>@auth<a href="{{route('about_us')}}">About</a>@endauth</li>

          @auth
          <li class="dropdown"><a href="#"><span>Category </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="#"><span>Category Type</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('user.show.book')}}">Book</a></li>
                  <li><a href="{{route('user.show.newspaper')}}">Newspaper</a></li>
                  <li><a href="{{route('user.show.magazine')}}">Magazine</a></li>
                  <li><a href="{{route('user.show.category')}}">Category</a></li>
                  
                </ul>
              </li>
            </ul>
          </li>@endauth

          <li>@auth<a href="{{route('user.service')}}">Services</a>@endauth</li>
          <li>@auth<a href="#">Contact</a>@endauth</li>
          <li>@auth<a href="{{route('user.profile')}}">User Profile</a>@endauth</li>
          <li>@auth<a href="{{route('user.feedback')}}">User Feedback</a>@endauth</li>
          <div  class="active" >

          @if(auth()->user())
                <a class="nav-link" href="{{route('user.logout')}}">logout</a>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.login')}}">Login/Registration</a>
                </li>
                @endif

                </div>
          

          

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <div class="header-social-links d-flex">
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        <a href="#" class="google-plus"><i class="bu bi-skype"></i></a>
      </div> -->

    </div>
  </header>