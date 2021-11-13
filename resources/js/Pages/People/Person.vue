<template>
    <app-layout title="Person">
     <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    Person

            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        name: 'Person',
        components: {
            AppLayout,
        },
    })
</script>
