<template>
    <div class="card">
        <h3>{{data.title}}</h3>
        <small class="author"><strong>{{data.author}}</strong></small>
        <p>{{data.content}}</p>
    </div>
</template>

<script>
export default {
    name: 'Card',

    props: {
        data: Object
    }
    
}
</script>

<style lang="scss" scoped>
    .card {
        width: calc((100% / 3) - 1rem);
        padding: 0.5rem;
        border-radius: 0.5rem;
        background-color: rgb(26, 145, 133);
        color: rgb(226, 240, 176);
        margin-block: 0.5rem;

        .author {
            text-transform: capitalize;
            margin-block: 1rem;
            display: inline-block;
        }
    }
</style>