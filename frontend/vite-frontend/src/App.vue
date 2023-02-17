<script>
import MovieList from './components/MovieList.vue'

export default {
  name: "App",
  components: {
    MovieList,
  },
  data() {
    return {
    }
  },
  methods: {

  },
  mounted(){
    console.log('Hello World')
  }
}  
</script>

<template>
<MovieList></MovieList>
</template>

<style lang="scss" scoped>
@use './styles/general.scss' as *;
</style>