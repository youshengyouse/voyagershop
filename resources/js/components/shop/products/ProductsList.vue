<template>
    <div class="container mx-auto">
        <ul>
            <li v-for="product in productList">
                <router-link :to="'/products/' + product.slug">
                    {{ product.title }}
                    {{ product.excerpt }}
                    <img style="max-height: 100px; width: auto" v-bind:src="'/storage/' + product.image" alt="">
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
                productList: ''
            };
        },

        mounted: function() {
            axios.get('/api/products')
                .then(response => this.productList = response.data.data)
                //.then(response => this.productList = console.log(response.data.data))
                .catch(error => this.productList = [{title: 'Посты отсутсвуют!'}]);
        },
    }
</script>

<style scoped>

</style>
