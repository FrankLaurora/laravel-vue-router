<template>
    <div>
        <h1>Homepage</h1>

        <div class="card_container">
            <Card v-for="article in articles.data" :key="article.id" :data="article"/>
        </div>
    </div>
</template>

<script>
import Card from '../components/Card.vue'

export default {
    name: 'Home',

    components: {
        Card
    },

    data() {
        return {
            articles: []
        }
    },

    mounted () {
        axios.get('http://localhost:8000/api/api-articles')
            .then(response => {
                this.articles = response.data;
            })
            .catch(error => {
                console.log(error)
            })
    }
}
</script>

<style lang="scss" scoped>
    .card_container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-block: 1rem;
    }

</style>