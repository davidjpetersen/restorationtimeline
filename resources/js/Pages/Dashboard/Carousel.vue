<template>
    <Carousel
        :value="items"
        :numVisible="5"
        :numScroll="5"
        :responsiveOptions="responsiveOptions"
        indicatorsContentClass="hide-indicators"
        class="pb-3 mb-8"
    >
        <template #header>
            <h1 class="font-extrabold text-lg uppercase ml-12">{{ title }}</h1>
        </template>
        <template #item="slotProps">
            <Link :href="route('event', { eventId: slotProps.data.id })">
                <img
                    :src="slotProps.data.image"
                    :alt="slotProps.data.name"
                    class="product-image"
                />
            </Link>
        </template>
    </Carousel>
</template>

<script>
import Button from "primevue/button";
import Carousel from "primevue/carousel";
import Skeleton from "primevue/skeleton";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: { Button, Carousel, Link, Skeleton },
    props: ["title", "items"],
    mounted() {

    },
    data() {
        return {
            responsiveOptions: [
                {
                    breakpoint: "1024px",
                    numVisible: 3,
                    numScroll: 3,
                },
                {
                    breakpoint: "600px",
                    numVisible: 2,
                    numScroll: 2,
                },
                {
                    breakpoint: "480px",
                    numVisible: 1,
                    numScroll: 1,
                },
            ],
        };
    },
};
</script>
