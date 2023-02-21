import { createRouter, createWebHistory } from 'vue-router'
import Home from './components/pages/Home.vue'
import Create from './components/pages/Create.vue'
import SingleMovie from './components/pages/SingleMovie.vue'
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: Home },
        { path: '/create', component: Create },
        { path: '/movie/:id', component: SingleMovie },
    ]
})

export default router


