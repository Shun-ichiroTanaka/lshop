<template>
    <vue-page-transition name="overlay-down-full">
        <router-view />
    </vue-page-transition>
</template>

<script>
export default new Router({
  routes: [
    {
      path: '/',
      name: 'Transition',
      component: Transition,
      // overwrite default transition
      meta: { transition: 'overlay-down-full' },
    },
  ]
})
</script>
