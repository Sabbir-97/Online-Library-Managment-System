<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><span> Online Library </span> Management System</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              
              
            </ul>
            <li>
            
          </li>

          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="#"><span>Category Type</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('allBook')}}">Book</a></li>
                  <li><a href="#">Newspaper</a></li>
                  <li><a href="#">Magazine</a></li>
                  
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
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

      <div class="header-social-links d-flex">
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        <a href="#" class="google-plus"><i class="bu bi-skype"></i></a>
      </div>

    </div>
  </header>