<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

import EmptyCart from "@/Components/Cart/EmptyCart.vue";

const isEmpty = true;
</script>

<template>
    <Head title="Cart" />

    <AuthenticatedLayout>
        <div
            class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8"
        >
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                Your cart
            </h2>
            <EmptyCart v-if="isEmpty" />
        </div>
    </AuthenticatedLayout>
</template>
