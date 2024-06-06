<script setup>
import Layout from "@/Layout.vue";
import { Head } from '@inertiajs/vue3'

defineProps({ temperature: Object })
</script>

<template>
    <Layout>
        <h1>Welcome</h1>
        <p>Hello its {{ temperature.temperature }}, welcome to your first Inertia app!</p>

    </Layout>
</template>
