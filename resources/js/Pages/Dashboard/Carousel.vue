<template>
    <Carousel
        :value="items"
        :numVisible="5"
        :numScroll="5"
        :responsiveOptions="responsiveOptions"
        :indicatorsContentClass="hidden"
        class="py-5"
    >
        <template #header>
            <h1 class="font-extrabold text-lg uppercase ml-12">{{ title }}</h1>
        </template>
        <template #item="slotProps">
            <div>
                <img
                    src="https://www.lorempixel.com/335/188"
                    :alt="slotProps.data.name"
                    class="product-image"
                />
            </div>
        </template>
    </Carousel>
</template>

<script>
import Button from "primevue/button";
import Carousel from "primevue/carousel";
import Skeleton from "primevue/skeleton";

export default {
    components: { Button, Carousel, Skeleton },
    props: ['title', 'items'],
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

<style lang="scss" scoped>

</style>
