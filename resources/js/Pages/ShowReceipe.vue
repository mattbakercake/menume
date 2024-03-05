<template>
    <div class="w-100 h-48 flex mb-3">
        <div class="w-48 bg-slate-400 flex align-middle rounded"><img :src="cameraSvg" class="m-auto w-16"/></div>
        <div class="flex items-center justify-center bg-white w-full rounded-r p-4 ml-2">
            <h1 class="text-3xl">{{ receipe.title }}</h1>
            <span v-if="receipe.prep_mins" class="ml-8 text-slate-800"><em>Prep Time:</em> {{ receipe.prep_mins }} mins</span>
            <span v-if="receipe.cook_mins" class="ml-8 text-slate-800"><em>Cooking Time:</em> {{ receipe.cook_mins }} mins</span>
            <div v-if="receipe.ease" class="flex items-center">
                <span class="ml-8 text-slate-800 mr-4"><em>Ease:</em></span>
                <span v-for="e in receipe.ease" class="flex w-3 h-3 me-3 bg-green-500 rounded-full"></span>
                <span v-for="em in emptyEaseDots(receipe.ease)" class="flex w-3 h-3 me-3 bg-slate-200 rounded-full"></span>
            </div>
        </div>
    </div>

    <div class="w-100 h-screen flex">
        <div class="w-1/3 bg-white rounded mr-3 p-3">
            <h2 class="font-bold text-xl">Ingredients</h2>

            <ul class="mt-3">
                <li v-for="ingredient in receipe.ingredients" class="list-disc ml-5">
                    {{ ingredientString(ingredient) }}
                </li>
            </ul>
        </div>

        <div class="w-2/3 bg-white rounded p-3">
            <h2 class="font-bold text-xl">Method</h2>

            <ol class="mt-3">
                <li v-for="step in receipe.steps" class="list-decimal ml-5">
                    {{ step.description }}
                </li>
            </ol>
        </div>
    </div>
</template>

<script setup>

    import { onMounted, ref } from 'vue'
    import cameraSvg from '../Assets/camera.svg'
    
    const props = defineProps(['id'])
    const receipe = ref({})

    onMounted(() => {
        fetchReceipe()
    })

    function fetchReceipe() {
    axios.get(`http://localhost:8000/api/receipe/${props.id}`)
        .then(response => response.data)
        .then(collection => {
            receipe.value = collection.data;
        })
    }

    function emptyEaseDots(easeValue) {
        return 5 - easeValue;  
    }

    function ingredientString(ingredient) {
        let istring = ingredient.count

        if (ingredient.measurement !== 'quantity') {
            istring += ` ${ingredient.measurement}`
        }

        istring += ` ${ingredient.grocery_name}`

        return istring
    }
    
</script>