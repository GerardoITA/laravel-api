<script>
import { store } from '../../store';
import  Axios  from 'axios';

export default {
    name: "Create",
    components: {
    },
    data() {
        return {
            store
        }
    },
    methods: {
        debug() {
            console.log(store.newMovie)
        },
        createMovie() {
            Axios.post(store.newMovieAPI, store.newMovie)
                .then(res => {
                    store.newMovie = res.data;
                });
        }
    },
    mounted() {
        console.log('Hello World')
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
    <button @click="debug()" >Debug</button>
    <form method="POST">
        <label for="name">Name</label>
        <input v-model="store.newMovie.name" type="text" name="name">
            <br>
        <label for="year">Year</label>
        <input v-model="store.newMovie.year" type="number" name="year">
            <br>
        <label for="cashout">Cashout</label>
        <input v-model="store.newMovie.cashout" type="number" name="cashout">
            <br>
        <label for="genre">Genre</label>
        <select name="genre_id" v-model="store.newMovie.genreID">
                <option v-for="genre in store.genreList" :value="genre.id">
                    {{ genre.name }}
                </option>    
        </select>
            <br>
        <h6>Tags</h6>
        <ul>
            <li v-for="tag in store.tagList">
                <input type="checkbox" :name="store.newMovie.tags" v-model="store.newMovie.tags" :value=" tag.id">
                <label for="tags">{{ tag.name }}</label>
            </li>
        </ul>
        <input type="submit" @click.prevent="createMovie()">
    </form>

    <!-- 

        <form action="" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="year">Year</label>
            <input type="number" name="year">
            <br>
            <label for="cashout">Cashout</label>
            <input type="number" name="cashout">
            <br>
            <label for="genre">Genre</label>
            <select name="genre_id">
                @foreach ($genres as $genre)
                    <option value="{{ $genre -> id }}">{{ $genre -> name }}</option>    
                @endforeach
            </select>
            <br>
            <h3>Tags</h3>
            @foreach ($tags as $tag)
                <input type="checkbox" name="tags[]" value="{{ $tag -> id }}">
                <label for="tags">{{ $tag -> name }}</label>
                <br>            
            @endforeach
            <input type=
     -->
</template>

<style lang="scss" scoped>
@use '../../styles/general.scss' as *;
ul {
    height: 400px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    flex-direction: column;
}
li {
    list-style-type: none;
}
</style>