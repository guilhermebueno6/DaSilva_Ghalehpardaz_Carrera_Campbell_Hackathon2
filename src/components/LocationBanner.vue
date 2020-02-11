<template>
  <div class="location-banner">
    <div class="banner" :id="[location.destination]">
      <div class="banner-content">
        <img class="image" :src="[location.image_name]">
        <h1 class="destination">{{ location.destination }}</h1>
        <p class="description">{{ location.description }}</p>
        <ul class="activities">
          <li>
            <a :href="location.link1">
              <i id="activity-icon" :class="[location.icon1]"></i>
              {{ location.activity1 }}
            </a>
          </li>
          <li>
            <a :href="location.link2">
              <i id="activity-icon" :class="[location.icon2]"></i>
              {{ location.activity2 }}
            </a>
          </li>
          <li>
            <a :href="location.link3">
              <i id="activity-icon" :class="[location.icon3]"></i>
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

