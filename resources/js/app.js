import Vue from 'vue';
import VueRouter from 'vue-router';
import VueCookies from 'vue-cookies';
import routes from './routes';

Vue.use(VueRouter);
Vue.use(VueCookies)

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
