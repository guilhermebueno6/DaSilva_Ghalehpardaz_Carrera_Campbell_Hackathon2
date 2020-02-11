<template>
  <div class="register">
    <h1>Register</h1>
    <div class="form-container">
      <Form />
      <img src="@/assets/images/blue_Vertical_OT_Logo.svg" alt="Ontario Tourism Logo" class="large-logo">
    </div>
  </div>
</template>
<script>
  import Form from '../components/Form';
  export default {
    name: 'register',
    components: {
      Form
    }
  }
</script>
