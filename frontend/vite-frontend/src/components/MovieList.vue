<script>
import Axios from 'axios';
import { store } from '../store';


export default {
  name: "MovieList",
  data() {
    return {
      store
    }
  },
  mounted() {
    Axios.get(store.movieAPI)
      .then(res => {
        store.movieList = res.data;
        console.log(store.movieList)
      });
  }
}
</script>

<template>
<div>

</div>
</template>

<style lang="scss" scoped>
@use '../styles/general.scss' as *;

</style>