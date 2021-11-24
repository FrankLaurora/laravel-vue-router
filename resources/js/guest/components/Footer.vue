<template>
    <footer>
        <div class="container">
            <h1>Footer</h1>
        </div>
    </footer>
</template>

<script>

export default {
    name: 'Footer'

}

</script>

<style lang="scss" scoped>
    footer{
        background-color: rgb(2, 51, 46);
        color: rgb(204, 201, 7);
        
        .container {
            width: 90%;
            height: 5rem;
            display: flex;
            align-items: center;
        }
    }
</style>