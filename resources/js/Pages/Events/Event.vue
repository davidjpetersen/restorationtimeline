<template>
    <app-layout title="Event">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              Single Event
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default defineComponent({
    name: 'Event',
    components: {
        AppLayout,
    },
});
</script>
