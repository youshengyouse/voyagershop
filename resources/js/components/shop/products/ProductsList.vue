<template>
    <div class="container mx-auto">
        <ul>
            <li v-for="product in products">
                <router-link :to="'/products/' + product.slug">
                    <img v-bind:src="'/storage/' + product.image" alt="">
                    {{ product.title }}
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "ProductsList",

        data: function() {
            return {
                products: ''
            };
        },

        mounted: function() {
            axios.get('/api/products')
                .then(response => this.products = response.data.data)
                //.then(response => this.products = console.log(response.data.data))
                .catch(error => this.products = [{title: 'Посты отсутсвуют!'}]);
        },
    }
</script>

<style scoped>

</style>