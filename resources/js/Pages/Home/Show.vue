<script setup>
// import Layout from './Layout'
import { Head } from '@inertiajs/vue3'
import Layout from "@/Layout.vue";
import {onMounted, ref} from "vue";
import h337 from 'heatmap.js';

defineProps({ temperatures: Object, carbondioxides: Object, condensities: Object, devices: Object})

let showTemp = ref(false);

let showCarb = ref(false);

let showCond = ref(false)

let showDev = ref(false)

const heatmapInstance = ref(null);

const mapContainer = ref(null);

const heatmapContainer = ref(null);


const clickTemp = () => {
    showTemp.value = !showTemp.value;
    showCarb.value = false;
    showCond.value = false;
    showDev.value = false;
    console.log(showTemp.value)
}

const clickCarb = () => {
    showCarb.value = !showCarb.value;
    showTemp.value = false;
    showCond.value = false;
    showDev.value = false;
    console.log(showCarb.value)
}

const clickCond = () => {
    showCond.value = !showCond.value;
    showTemp.value = false;
    showCarb.value = false;
    showDev.value = false;
    console.log(showCond.value)
}

const clickDev = () => {
    showDev.value = !showDev.value;
    showCond.value = false;
    showTemp.value = false;
    showCarb.value = false;
    console.log(showCond.value)
}


onMounted(() => {

    heatmapInstance.value = h337.create({
        container: heatmapContainer.value,
        radius: 20,
    });


    const heatmapDataPoints = [];

    devices.forEach(device => {
        heatmapDataPoints.push({
            x: device.x,
            y: device.y,
            value: 10
        });
    });

    const heatmapData = {
        max: 15,
        data: heatmapDataPoints
    };

    heatmapInstance.value.setData(heatmapData);
});

</script>

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

        <button @click="clickDev">Devices</button>

        <li v-show="showDev" v-for="device in devices">
            {{ device.id }}
        {{ device.name }}
        </li>

        <hr/>
    </Layout>
</template>
