<template>
    <app-layout title="Dashboard">
        <div class="bg-white">
            <hero />
            <carousel title="Historical Periods" :items="products"/>
            <carousel title="Joseph Smith's Early Life" :items="products"/>
            <carousel title="Treasure Digging" :items="products"/>
            <carousel title="Book of Mormon" :items="products"/>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Hero from "./Dashboard/Hero.vue";
import Carousel from "./Dashboard/Carousel.vue";
import usa from '../../images/usa.png';
import early from '../../images/early.png';
import newyork from '../../images/newyork.png';
import ohio from '../../images/ohio.png';
import missouri from '../../images/missouri.png';
import illinois from '../../images/illinois.png';
import exedous from '../../images/exedous.png';
import utah from '../../images/utah.png';

export default defineComponent({
    name: 'Dashboard',
    components: {
        AppLayout,
        Hero,
        Carousel,
    },
    data() {
        return {
            products: [
                {
                    id: "1000",
                    name: "US History",
                    description: "What was the context for the restoration?",
                    image: usa,
                },
                {
                    id: "1001",
                    name: "Early Days",
                    description: "Product Description",
                    image: early,
                },
                {
                    id: "1002",
                    name: "New York",
                    description: "Product Description",
                    image: newyork,
                },
                {
                    id: "1003",
                    name: "Ohio",
                    description: "Product Description",
                    image: ohio,
                },
                {
                    id: "1004",
                    name: "Missouri",
                    description: "Product Description",
                    image: missouri,
                },
                {
                    id: "1005",
                    name: "Illinois",
                    description: "Product Description",
                    image: illinois,
                },
                {
                    id: "1005",
                    name: "Exedous",
                    description: "Product Description",
                    image: exedous,
                },
                {
                    id: "1005",
                    name: "Utah",
                    description: "Product Description",
                    image: utah,
                },
                
            ],
        }
    }
});
</script>
