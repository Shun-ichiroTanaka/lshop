<template>
<div class="hero-copy">
  <!-- infinite loop -->
  <vue-typed-js
    :strings="[
            'We change life by oneself by programming',
            'This site make you happy learning Javascript Framework like a React ana Vue.js',
            'Just do it. It it a only way to make your life great',
            'Do let your dreams be a dream.'
        ]"
    :loop="true" @onComplete="doSmth()">
    <h1><span class="typing"></span></h1>
  </vue-typed-js>
</div>
</template>

<script>
export default {
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
<style scoped>
.typing {
  color: rgb(57, 188, 221);
}
</style>
