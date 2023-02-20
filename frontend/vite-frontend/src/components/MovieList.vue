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
    debug() {
      console.log(store.movieList);
      console.log(store.genreList);
      console.log(store.tagList);
    }

  },
  mounted() {
    Axios.get(store.movieAPI)
      .then(res => {
        store.movieList = res.data.response.movies;
        store.genreList = res.data.response.genres;
        store.tagList = res.data.response.tags;
      });
  }
}
</script>

<template>
  <div class="contenitore">
    <button @click="debug()">Debug</button> 
    <a :href="'/Movie/'+ movie.id" v-for="movie in store.movieList" :key="movie.id">
        <Movie 
          :nome="movie.name"
        > 
    </Movie>

    </a>
    
   
  </div>

</template>

<style lang="scss" scoped>
@use '../styles/general.scss' as *;
.contenitore {
 display: flex;
 gap: 25px;
 width: 1200px;
 flex-wrap: wrap;
}
</style>