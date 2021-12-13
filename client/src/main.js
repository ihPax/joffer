import Vue from 'vue'
import App from './App.vue'
import './style.css'
import VueRouter from 'vue-router'
import Home from '@/components/Home.vue'
import Aggiungi from '@/components/Aggiungi.vue'
import Dettaglio from '@/components/Dettaglio.vue'
import axios from 'axios'


Vue.use(VueRouter)

Vue.prototype.$axios = axios

const routes = [
  {
    path:'/home',
    name: 'home',
    component: Home
  },
  {
    path:'/aggiungi',
    name: 'aggiungi',
    component: Aggiungi
  },
  {
    path:'/dettaglio/:id',
    name: 'dettaglio',
    component: Dettaglio
  },
]

const router = new VueRouter({
  routes,
  mode: "history",
});


Vue.config.productionTip = false



new Vue({
  render: h => h(App),
  router
}).$mount('#app')
