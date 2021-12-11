<template>
    <div class="w-full">
        <img
            class="h-96 w-full object-cover"
            :src="
                'https://restorationtimeline.s3.amazonaws.com/' + person.image
            "
            alt="image"
        />
    </div>
</template>

<script>
export default {
    name: "PersonCarouselItem",
    props: ["person"],
};
</script>

<style></style>
