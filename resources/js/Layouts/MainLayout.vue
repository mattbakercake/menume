<template>
    <div class="h-screen bg-slate-50">
        <nav class="h-24 bg-slate-200 p-8 text-xl drop-shadow-md flex items-center">
            <router-link to="/" v-slot="{ navigate }">
                <button class="rounded-lg p-4 bg-slate-300" @click="navigate"> MenuMe</button>
            </router-link>
        </nav>
        <div class="p-8">
            <slot />
        </div>
    </div>
</template>
