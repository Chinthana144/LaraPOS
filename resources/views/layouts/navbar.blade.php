<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Logo</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="/dashboard">
            <img src="{{ asset('images/nav_icons/dashboard.png') }}" alt="" class="title_icon">
            <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/dashboard">Dashboard</a></li>
        </ul>
      </li>
      <!------------------------- home ---------------------->
      <li>
        <div class="iocn-link">
          <a href="/home">
            {{-- <i class='bx bx-collection'></i> --}}
            <img src="{{ asset('images/nav_icons/home_nav.png') }}" alt="" class="title_icon">
            <span class="link_name">Home</span>
          </a>
          {{-- <i class='bx bxs-chevron-down arrow' ></i> --}}
          <img src="{{ asset('images/nav_icons/right_arrow.png') }}" alt="arrow" class="arrow">
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="/home">Home</a></li>
          <li><a href="#">Analytics</a></li>
        </ul>
      </li>
      <!------------------------------- master ------------------------------->
      <li>
        <div class="iocn-link">
          <a href="#">
            {{-- <i class='bx bx-collection'></i> --}}
            <img src="{{ asset('images/nav_icons/home_nav.png') }}" alt="" class="title_icon">
            <span class="link_name">Master</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
          <img src="{{ asset('images/nav_icons/right_arrow.png') }}" alt="arrow" class="arrow">
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Master</a></li>
          <li><a href="/categories">Category</a></li>
          <li><a href="#">Items</a></li>
          <li><a href="#">Desc</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>

      {{-- <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li> --}}
{{--
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li> --}}

    {{--<li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li> --}}

      {{-- <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li> --}}

      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>

      <!---------------------------------- Settings ---------------------------------->
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Settings</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Settings</a></li>
          <!-- <li><a href="#">Modules</a></li> -->
          <li><a href="features.php">Features</a></li>
          <li><a href="#">User Access</a></li>
        </ul>
      </li>

      <!------------------------------- Control ------------------------------->
      <li>
        <div class="iocn-link">
          <a href="#">
            {{-- <i class='bx bx-collection'></i> --}}
            <img src="{{ asset('images/nav_icons/control.png') }}" alt="" class="title_icon">
            <span class="link_name">Control</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
          <img src="{{ asset('images/nav_icons/right_arrow.png') }}" alt="arrow" class="arrow">
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Control</a></li>
          <li><a href="/companies">Companies</a></li>
          <li><a href="/shops">Shops</a></li>
          <li><a href="/shopUsers">Shop Users</a></li>
          <li><a href="/features">Features</a></li>
        </ul>
      </li>

      <!-- <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li> -->

      <li>
      <div class="profile-details">
        <div class="profile-content">
          <img src="image/profile.jpg" alt="profileImg">
        </div>
        <div class="name-job">
          <div class="profile_name">User Name</div>
          <div class="job">Web Desginer</div>
        </div>
        <i class='bx bx-log-out' ></i>
      </div>
      </li>
    </ul>
  </div>
