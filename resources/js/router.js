import Vue from 'vue';
import VueRouter from 'vue-router';
import NotFound from "./components/NotFound";
import App from "./components/App";
import ProductsList from "./components/shop/products/ProductsList";
import ProductDetail from "./components/shop/products/ProductDetail";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '*', component: NotFound },
        { path: '/', component: App },
        { path: '/products', component: ProductsList },
        { path: '/products/:slug', component: ProductDetail }
    ],
    mode: 'history'
});