<template>
    <div class="container mx-auto">
        <ul>
            <li v-for="product in productDetail">
                <span v-html="product.description"></span>
                <div v-for="image in JSON.parse(product.images)">
                    <img style="max-height: 100px; width: auto" v-bind:src="'/storage/' + image" v-bind:alt="product.title">
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "ProductDetail",

        data: function() {
            return {
                productDetail: '',
                slug: this.$route.params.slug
            };
        },

        mounted: function() {
            axios.get('/api/products/' + this.slug)
                .then(response => this.productDetail = response.data)
                //.then(response => this.product = console.log(response.data))
                .catch(error => this.productDetail = [{title: 'Данные отсутсвуют!'}]);
        },
    }
</script>

<style scoped>

</style>
