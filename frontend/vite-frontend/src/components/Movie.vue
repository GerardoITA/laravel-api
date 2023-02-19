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
<div class="carta">
    <h4>{{ nome }}</h4>
</div>
</template>

<style>
.carta {
  width: 350px;
  border: 1px solid black;
  border-radius: 25px;
  height: 400px;
  background-color: lightgrey;


}
</style>