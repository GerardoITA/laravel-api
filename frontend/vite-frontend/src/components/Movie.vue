<script>
import { store } from '../store';

export default {
    name: "Movie",
    props: {
        nome: String,
        id: Number,

    },
    data() {
        return {
            store
        }
    },
}
</script>

<template>
    <div class="movie">
        <h4> {{ nome }} </h4>
        <div class="tag_container">
            <div class="tags" v-for="tag in store.movieList[id]?.tags">
                {{  tag.name }}
            </div>
        </div>
        
    </div>

</template>

<style lang="scss">
.movie {
    min-width: 250px;
    min-height: 400px;
    border: 1px solid black;
    border-radius: 25px;
    background-color: lightgrey;
    position: relative;
    .tag_container {
        display: flex;
        justify-content: flex-start;
        margin: 10px 20px;
        position: absolute;
        flex-wrap: wrap;
        gap: 10px;
        bottom: 40px;
        .tags {
            background-color: darkgray;
            padding: 5px 10px;
            border-radius: 10px;
            width: fit-content; 
        }
    }
            

   
    
 }
</style>