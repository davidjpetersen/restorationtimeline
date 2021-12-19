<template>
    <div class="block w-96 h-96 min-h-96 p-4 text-white" :style="{ backgroundColor: person.color}">
       {{person.title}} 
    </div>
</template>

<script>
export default {
    name: "PersonCarouselItem",
    props: ["person"],
};
</script>

<style></style>
