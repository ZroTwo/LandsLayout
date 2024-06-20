<script setup>
// import Layout from './Layout'
import { Head } from '@inertiajs/vue3'

defineProps({ temperature: Object })

import Layout from "@/Layout.vue";
import { Head } from '@inertiajs/vue3'
import {ref} from "vue";

defineProps({ temperatures: Object, carbondioxides: Object, condensities: Object})

let showTemp = ref(false);

let showCarb = ref(false);

let showCond = ref(false)

const clickTemp = () => {
    showTemp.value = !showTemp.value;
    showCarb.value = false;
    showCond.value = false;
    console.log(showTemp.value)
}

const clickCarb = () => {
    showCarb.value = !showCarb.value;
    showTemp.value = false;
    showCond.value = false;
    console.log(showCarb.value)
}

const clickCond = () => {
    showCond.value = !showCond.value;
    showTemp.value = false;
    showCarb.value = false;
    console.log(showCond.value)
}

</script>

<template>
    <Layout>
        <Head title="Welcome" />
        <h1>Welcome</h1>
        <p>Hello its {{ temperature.temperature }}, welcome to your first Inertia app!</p>
    </Layout>
</template>

<script>
export default {
    name: 'Home'
}
</script>

<template>
<Layout>
        <h1>Welcome</h1>

        <button @click="clickTemp">Temperature</button>

        <li v-show="showTemp" v-for="temperature in temperatures">
            {{ temperature.temperature }}
        </li>

        <hr/>

        <button @click="clickCarb">Carbondioxides</button>

        <li v-show="showCarb" v-for="carbondioxide in carbondioxides">
            {{ carbondioxide.carbondioxide }}
        </li>

        <hr/>

        <button @click="clickCond">Condensities</button>

        <li v-show="showCond" v-for="condensity in condensities">
            {{ condensity.condensity }}
        </li>

        <hr/>
    </Layout>
</template>
