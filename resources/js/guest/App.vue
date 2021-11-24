<template>
    <div class="full_height">
        <Header/>
        <main>
            <section class="container">
                <router-view></router-view>
            </section>
        </main>
        <Footer/>
    </div>
</template>

<script>
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';

export default {
    name: 'App',

    components: {
        Header,
        Footer
    } 
}
</script>
