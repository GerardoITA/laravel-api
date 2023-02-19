<script>
import Axios from 'axios';
import { store } from '../store';
import Movie from './Movie.vue'

export default {
  name: "MovieList",
  components: {
    Movie
  },
  data() {
    return {
      store
    }
  },
  methods: {
    debug() { console.log(store.movieList)}

  },
  mounted() {
    Axios.get(store.movieAPI)
      .then(res => {
        store.movieList = res.data.response;
        
      });
  }
}
</script>

<template>
  <div class="contenitore">
    <Movie class="cartaa" v-for="movie in store.movieList"
      :nome="movie.name"
    >
    </Movie>
    <!-- <button @click="debug()">Debug</button> -->
  </div>

</template>

<style lang="scss" scoped>
@use '../styles/general.scss' as *;
.contenitore {
 display: flex;
 gap: 25px;
}
.cartaa {
  width: 350px;
}
</style>