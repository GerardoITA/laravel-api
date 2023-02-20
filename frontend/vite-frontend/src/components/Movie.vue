<script>
import { store } from '../store';

export default {
    name: "Movie",
    props: {
        nome: String,
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
    </div>

</template>

<style>
.movie {
    min-width: 250px;
    min-height: 400px;
    border: 1px solid black;
    border-radius: 25px;
    background-color: lightgrey;
 }
</style>