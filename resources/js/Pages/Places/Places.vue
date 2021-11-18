<template>
    <app-layout title="Places" :pages="pages">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    Places

            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        name: 'Places',
        components: {
            AppLayout,
        },
        props: {
            pages: Array,
        },
    })
</script>
