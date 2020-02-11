<template>
  <div class="form">
    <form>
        <label for="name">Name</label>
        <input type="text" name="first" value="First"/>
        <input type="text" name="fast" value="Last"/>
        <label for="country">Country</label>
        <input type="text" name="country">
        <label for="email">Email</label>
        <input type="text" name="email">
        <br>
        <button type="submit">Submit</button>
    </form>
  </div>
</template>
<script>
  export default {
    name: 'Form'
  }
</script>
