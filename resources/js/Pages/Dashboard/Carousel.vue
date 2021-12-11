<template>
    <Carousel
        :value="items"
        :responsiveOptions="responsiveOptions"
        :numVisible="3" 
        :numScroll="3"
        indicatorsContentClass="hide-indicators"
        class="pb-3 mb-8"
    >
        <template #header>
            <h1 class="font-extrabold text-lg uppercase ml-12">{{ title }}</h1>
        </template>
        <template #item="slotProps">
            <PersonCarouselItem :person="slotProps.data" />
        </template>
    </Carousel>
</template>

<script>
import Button from "primevue/button";
import Carousel from "primevue/carousel";
import Skeleton from "primevue/skeleton";
import { Link } from "@inertiajs/inertia-vue3";
import PersonCarouselItem from "../People/PersonCarouselItem.vue";

export default {
    components: { Button, Carousel, Link, Skeleton, PersonCarouselItem },
    props: ["title", "items"],
    data() {
        return {
            responsiveOptions: [
                {
                    breakpoint: "600px",
                    numVisible: 2,
                    numScroll: 2,
                },
                {
                    breakpoint: "480",
                    numVisible: 1,
                    numScroll: 1,
                },
            ],
        };
    },
};
</script>
