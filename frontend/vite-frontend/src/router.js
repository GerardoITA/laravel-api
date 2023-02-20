import { createRouter, createWebHistory } from 'vue-router'
import Home from './components/pages/Home.vue'
import SingleMovie from './components/pages/SingleMovie.vue'
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: Home },
        { path: '/movie/:id', component: SingleMovie },
    ]
})

export default router



const User = {
  template: '<div>User</div>',
}

// these are passed to `createRouter`
const routes = [
  // dynamic segments start with a colon
  { path: '/users/:id', component: User },
]