<template>
    <div class="bg-white py-2 mb-3 shadow">
        <div class="container mx-auto text-gray-600 flex justify-center">
            <div class="flex items-center">
                <router-link to="/">
                    <img id="site-logo" src="/storage/myshop.png" alt="myshop">
                </router-link>
            </div>
            <div class="flex items-center ml-20 hidden lg:flex">
                <ul class="flex items-center uppercase font-bold">
                    <li><router-link to="/products">Магазин</router-link></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NavbarDefault",

        data: function() {
            return {
                products: ''
            };
        },

        mounted: function() {
            axios.get('/api')
                .then(response => this.products = response.data)
                .catch(error => this.products = [{title: 'Посты отсутсвуют!'}]);
        },
    }
</script>

<style scoped>
    #site-logo {
        max-width: 8rem;
    }

    ul li {
        margin-right: 30px;
    }
    ul li:last-child {
        margin-right: 0;
    }
</style>