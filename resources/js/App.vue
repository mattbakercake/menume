<template>
    <component :is="$route.meta.layout || 'div'">
        <router-view v-slot="{ Component }">
            <component :is="Component" />
        </router-view>
    </component>
</template>