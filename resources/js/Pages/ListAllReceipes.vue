<template>
    <h1 class="text-3xl mb-2">All Receipes</h1>

    <div v-for="receipe in receipes" key="receipe.id" class="mb-4 h-32 flex drop-shadow-md">
        <div class="w-32 bg-slate-400 flex align-middle rounded-l"><img :src="cameraSvg" class="m-auto w-16"/></div>
        <div class="flex bg-white w-full rounded-r p-4">
            <div class="flex items-center">
                <h2 class="text-2xl">{{ receipe.title }}</h2>
                <span class="ml-8 text-slate-800"><em>Prep Time:</em> {{ receipe.prep_mins }} mins</span>
                <span class="ml-8 text-slate-800"><em>Cooking Time:</em> {{ receipe.cook_mins }} mins</span>
                <div class="flex items-center">
                    <span class="ml-8 text-slate-800 mr-4"><em>Ease:</em></span>
                    <span v-for="e in receipe.ease" class="flex w-3 h-3 me-3 bg-green-500 rounded-full"></span>
                    <span v-for="em in emptyEaseDots(receipe.ease)" class="flex w-3 h-3 me-3 bg-slate-200 rounded-full"></span>
                </div>

                <router-link :to="{name:'receipeDetail', params: {id: receipe.id}}" v-slot="{ navigate }">
                    <button class="rounded-lg p-4 bg-slate-800 text-white" @click="navigate">View Receipe</button>
                </router-link>
            </div>
        </div>
    </div>

</template>

<script setup>
import { onMounted, ref } from 'vue'

import cameraSvg from '../Assets/camera.svg'

const receipes = ref([]);

onMounted(() => {
    fetchReceipes()
})

function fetchReceipes() {
    axios.get('http://localhost:8000/api/receipe')
        .then(response => response.data)
        .then(collection => {
            receipes.value = collection.data;
        })        
}

function emptyEaseDots(easeValue) {
    return 5 - easeValue;
}

</script>