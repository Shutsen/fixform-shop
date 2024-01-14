<script setup>
import { ShoppingBagIcon } from "@heroicons/vue/20/solid";
import NavLink from "@/Components/NavLink.vue";
</script>

<template>
    <NavLink
        :href="route('cart.index')"
        :active="route().current('cart.index')"
    >
        <ShoppingBagIcon class="h-5 w-5 flex-shrink-0 text-gray-500" />
    </NavLink>
</template>
