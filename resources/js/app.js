import Vue from 'vue';
import router from './router';
import App from './components/App';
import NavbarDefault from './components/NavbarDefault';

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: {
        App,
        NavbarDefault
    },
    router,
});
