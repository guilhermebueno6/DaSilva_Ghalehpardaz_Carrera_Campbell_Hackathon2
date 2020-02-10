<template>
  <div class="form">
    <form>
        <p>Name</p>
        <input type="text" name="first" value="First"/>
        <input type="text" name="fast" value="Last"/>
        <p>Country</p>
        <input type="text" name="country">
        <p>Email</p>
        <input type="text" name="email">
        <br>
        <input type="submit">
    </form>
  </div>
</template>
<script>
  export default {
    name: 'Form'
  }
</script>
