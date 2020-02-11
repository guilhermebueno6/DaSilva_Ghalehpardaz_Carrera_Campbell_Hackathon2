<template>
  <div class="navigation">
    <header class="header">
      <!--Logo-->
      <div class="brand">
          <router-link to="/">
            <img src="@/assets/images/Horizontal_OT_Logo.svg" alt="Ontario Tourism Logo" class="logo">
          </router-link>
      </div>
      <!--Navbar-->
      <nav class="nav">
          <ul class="nav-items">
              <li class="subscribe"><router-link to="/Register">Subscribe to our Newsletter</router-link></li>
              <li class="divide">|</li>
              <li class="about"><a href="#about">About</a></li>
              <li class="explore"><a href="#explore">Explore</a></li>
              <li class="testimonies"><a href="#testimonies">Testimonies</a></li>
          </ul>
      </nav>
      <div class="menu">
          <i id="nav-toggler" class="fas fa-bars"></i>
      </div>
    </header>
    <!--Sidebar-->
    <nav id="sidebar">
      <ul class="sidebar-items">
        <li class="subscribe"><router-link to="/Register">Subscribe to our Newsletter</router-link></li>
        <li class="divide"><hr></li>
        <li class="about"><a href="#about">About</a></li>
        <li class="explore"><a href="#explore">Explore</a></li>
        <li class="testimonies"><a href="#testimonies">Testimonies</a></li>
      </ul>
    </nav>
  </div>
</template>
<script>
  export default {
    name: 'Nav',
    mounted: function() {
      function toggle() {
          document.getElementById("nav-toggler").classList.toggle("fa-times");
          document.getElementById("nav-toggler").classList.toggle("fa-bars");
          document.getElementById("sidebar").classList.toggle("active");
      }

      var openMenu = document.getElementById('nav-toggler');
      openMenu.addEventListener("click", toggle);
    }
  }
</script>

