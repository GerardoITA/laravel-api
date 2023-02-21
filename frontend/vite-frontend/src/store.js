import { reactive } from 'vue';

export const store = reactive({

    movieAPI: "http://localhost:8000/api/v1/test",
    newMovieAPI: "http://localhost:8000/api/v1/make",
    movieList: [],
    genreList: [],
    tagList: [],
    newMovie: {
        name: "",
        year: "",
        cashout: "",
        genreID: "",
        tags: []

    }



}); 
