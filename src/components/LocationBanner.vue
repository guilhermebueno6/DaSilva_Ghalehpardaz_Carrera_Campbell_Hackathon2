<template>
  <div class="location-banner">
    <div class="banner">
      <div class="banner-content" :style="{ backgroundImage: `url('${location.image}')` }">
        <h1 class="destination">{{ location.destination }}</h1>
        <p class="description">{{ location.description }}</p>
        <ul class="activities">
          <li>
            <a :href="location.url1">
              {{ location.icon1 }}
              {{ location.activity1 }}
            </a>
          </li>
          <li>
            <a :href="location.url2">
              {{ location.icon2 }}
              {{ location.activity2 }}
            </a>
          </li>
          <li>
            <a :href="location.url3">
              {{ location.icon3 }}
              {{ location.activity3 }}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: [
    'location'
  ]
}
</script>

