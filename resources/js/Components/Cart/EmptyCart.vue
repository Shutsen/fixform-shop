<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="text-center">
        <h2 class="mt-32 text-xl font-semibold text-gray-900">
            Your cart is empty!
        </h2>
        <p class="mt-2 text-sm text-gray-500">
            Have a look around, there's plenty of choice
        </p>
        <div class="mt-6">
            <Link
                :href="route('products.index')"
                class="text-xl inline-flex items-center rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
                Start shopping!
            </Link>
        </div>
    </div>
</template>
