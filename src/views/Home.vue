<template>
  <div class="home">
    <section class="hero">
      <video id="videoBG" autoplay muted loop>
          <source src="@/assets/videos/Screensavervid-47mb.mp4" type="video/mp4">
      </video>
      <div class="container">
        <h1 class="title">
          Find yourself at home...
        </h1>
        <router-link to="/Register" tag="button" class="register-btn">Subscribe to our Newsletter</router-link>
        <h2>Ontario Summer</h2>
      </div>
    </section>
    <section id="about">
      <h2>Ontario Tourism 2020</h2>
      <p>
        Need ideas for a fun filled summer? From exploring Niagara Falls to hiking
        through the Algonquin Park you will always find something fun on this site to
        keep you occupied this summer and many more to come! For more
        information please explore the links above!
      </p>
    </section>
    <LocationList />
  </div>
</template>
<script>
import LocationList from '../components/LocationList';
export default {
  name: 'home',
  components: {
    LocationList
  }
}
</script>
