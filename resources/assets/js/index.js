import Vue from 'vue'
import App from './components/App.vue'
import VueRouter from 'vue-router'
import VueRessource from 'vue-resource'

require("./sass/app.sass")

Vue.use(VueRessource)
Vue.use(VueRouter)

let router = new VueRouter()
router.map({
    '/': {
        component: require('./components/Home.vue')
    },
    '/about': {
        component: require('./components/About.vue')
    }
})

// Any invalid route will redirect to home
router.redirect({
    '*': '/'
})

router.start(App, '#app')