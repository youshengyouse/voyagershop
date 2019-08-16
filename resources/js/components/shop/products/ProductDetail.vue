<template>
    <div class="container mx-auto">
        <ul>
            <li v-for="prod in product">
                <span v-html="prod.description"></span>
                <div v-for="image in JSON.parse(prod.images)">
                    <img style="max-height: 100px; width: auto" v-bind:src="'/storage/' + image" v-bind:alt="prod.title">
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
                product: '',
                slug: this.$route.params.slug
            };
        },

        mounted: function() {
            axios.get('/api/products/' + this.slug)
                .then(response => this.product = response.data)
                //.then(response => this.product = console.log(response.data))
                .catch(error => this.product = [{title: 'Данные отсутсвуют!'}]);
        },
    }
</script>

<style scoped>

</style>