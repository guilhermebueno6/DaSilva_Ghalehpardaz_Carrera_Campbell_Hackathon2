<template>
  <section id="locations">
    <h2>Places to Visit</h2>
    <div v-for="location in locations" :location="location" :key="location.id">
      <router-link :to="'/location/' + location.id">
        <LocationBanner :location="location" />
      </router-link>
    </div>
  </section>
</template>
<script>
import LocationBanner from "@/components/LocationBanner";
export default {
  name: 'LocationList',
  components : {
    LocationBanner
  }
}
</script>

