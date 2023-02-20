<script>
import { store } from '../../store';
import Axios from 'axios';
import Movie from '../Movie.vue';
export default {
    name: "SingleMovie",
    components: {
        Movie,
    },
    data() {
        return {
            store,
            currentId : ( this.$route.params.id ) - 1 ,
        }
    },
    methods: {
        debug() {
            console.log(store.movieList[this.currentId])
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
    <a href="/">Go back</a>
    <Movie
    :nome="store.movieList[currentId]"
    ></Movie>
    <button @click="debug()">Test</button>
</template>

<style>

</style>

{{ $route.params.id }} 

// :nome="store.movieList[currentId].name"