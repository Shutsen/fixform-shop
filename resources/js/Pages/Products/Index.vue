<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Product from "@/Components/Products/Product.vue";
import { Head } from "@inertiajs/vue3";

defineProps(["products", "cart"]);
</script>

<template>
    <Head title="Products" />

    <AuthenticatedLayout>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900">
                Products
            </h1>
            <div
                class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
            >
                <Product
                    v-for="product in products"
                    :key="product.id"
                    :product="product"
                    :quantity="cart[product.id]?.quantity || 0"
                />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
