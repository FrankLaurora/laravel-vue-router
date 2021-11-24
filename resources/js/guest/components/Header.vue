<template>
    <header>
        <div class="container">
            <h1>Header</h1>
            <ul>
                <li><router-link :to="{ name: 'home' }">Home</router-link></li>
                <li><router-link :to="{ name: 'about' }">Chi Siamo</router-link></li>
                <li><router-link :to="{ name: 'contacts' }">Contatti</router-link></li>
            </ul>
        </div>
    </header>
</template>

<script>

export default {
    name: 'Header'
}

</script>

<style lang="scss" scoped>
    header{
        background-color: rgb(2, 51, 46);
        color: rgb(204, 201, 7);
        
        .container {
            width: 90%;
            height: 5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;

            ul {
                display: flex;
                list-style: none;
                align-items: center;

                li {
                    margin-inline: 0.5rem;
                    
                    a {
                        text-decoration: none;
                        text-transform: uppercase;
                        font-weight: 600;
                        color: rgb(226, 240, 176);
                    }
                }
            }
        }
    }
</style>