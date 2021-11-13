<template>
    <app-layout title="Dashboard">
        <div class="bg-white">
            <hero />
            <carousel title="Historical Periods" :items="items"/>
            <carousel title="Joseph Smith's Early Life" :items="items"/>
            <carousel title="Treasure Digging" :items="items"/>
            <carousel title="Book of Mormon Translation" :items="items"/>
            <carousel title="Doctrine and Covenants" :items="items"/>
            <carousel title="Mormon Military Action" :items="items"/>
            <carousel title="Joseph Smith's Polygamy" :items="items"/>
            <carousel title="Wives of Joseph Smith" :items="items"/>
            <carousel title="The Succession Crisis" :items="items"/>
            <carousel title="Unpublished Revelations" :items="items"/>
            <carousel title="Early Mormon Hitmen" :items="items"/>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Hero from "./Hero.vue";
import Carousel from "./Carousel.vue";
import usa from '../../../images/usa.png';
import early from '../../../images/early.png';
import newyork from '../../../images/newyork.png';
import ohio from '../../../images/ohio.png';
import missouri from '../../../images/missouri.png';
import illinois from '../../../images/illinois.png';
import exedous from '../../../images/exedous.png';
import utah from '../../../images/utah.png';

export default defineComponent({
    name: 'Dashboard',
    components: {
        AppLayout,
        Hero,
        Carousel,
    },
    data() {
        return {
            items: [
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
