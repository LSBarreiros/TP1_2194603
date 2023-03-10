<header><!-- Header -->
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">COLLEGE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="events.html">Students</a></li>
        
          <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Cours 1</a></li>
              <li class="dropdown"><a href="#"><span>Examples</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Example 1</a></li>
                  <li><a href="#">Examples 2</a></li>
                  <li><a href="#">Examples 3</a></li>
                  <li><a href="#">Examples 4</a></li>
                </ul>
              </li>
              <li><a href="#">Cours 2</a></li>
              <li><a href="#">Cours 3</a></li>
              <li><a href="#">Cours 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?php echo e(route('students.create')); ?>" class="get-started-btn">Register</a>

    </div>
</header><!-- End Header --><?php /**PATH /Users/lidiabarreiros/Documents/MAISONNEUVE/SESSION_04_HIVER23/CADRICIEL_WEB/TP1_Laravel_2194603/maisonneuve_2194603/resources/views/layout/partials/nav.blade.php ENDPATH**/ ?>