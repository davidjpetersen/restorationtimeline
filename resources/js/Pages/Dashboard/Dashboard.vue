<template>
    <app-layout title="Dashboard" :pages="pages" :carousels="carousels" class="bg-white">

            <hero />
            <carousel :title="carousel.name" v-for="carousel in carousels" :key="carousel.id" :items="carousel.carousel_items"/>

    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Hero from "./Hero.vue";
import Carousel from "./Carousel.vue";
import { dataPages } from "./dataPages.js";

export default defineComponent({
    name: 'Dashboard',
    components: {
        AppLayout,
        Hero,
        Carousel,
    },
    props: {
        pages: Array,
        carousels: Array,
    },
    data () {
        return {
            
        }
    },
    mounted () {
        console.log(dataPages);
        Array.from(dataPages).forEach(element => console.log(element)); 

    }
});
</script>
