<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { StarIcon } from "@heroicons/vue/20/solid";
import { Head } from "@inertiajs/vue3";

defineProps(["product", "quantity"]);
</script>

<template>
    <Head :title="product.name" />

    <AuthenticatedLayout>
        <div class="mx-auto px-4 py-16 sm:px-6 sm:py-24">
            <div class="flex flex-col md:flex-row justify-between">
                <img
                    :src="product.image"
                    :alt="product.name"
                    class="h-full w-full object-cover object-center h-full w-full"
                />
                <div>
                    <h1
                        class="flex justify-start items-center text-2xl font-bold mb-1 mt-8 md:mt-0 tracking-tight text-gray-900"
                    >
                        {{ product.name }}
                        <div
                            v-if="quantity > 0"
                            class="ml-2 bg-blue-500 text-white w-6 h-6 rounded-full flex items-center justify-center"
                        >
                            <span class="text-sm">{{ quantity }}</span>
                        </div>
                    </h1>
                    <p>Price: &euro;{{ product.price }}</p>
                    <!-- Reviews -->
                    <div class="mt-4">
                        <h2 class="sr-only">Reviews</h2>
                        <div class="flex items-center">
                            <p class="text-sm text-gray-700">
                                {{ product.averageRating }}
                                <span class="sr-only"> out of 5 stars</span>
                            </p>
                            <div class="ml-1 flex items-center">
                                <StarIcon
                                    v-for="rating in [0, 1, 2, 3, 4]"
                                    :key="rating"
                                    :class="[
                                        product.averageRating > rating
                                            ? 'text-yellow-400'
                                            : 'text-gray-200',
                                        'h-5 w-5 flex-shrink-0',
                                    ]"
                                    aria-hidden="true"
                                />
                            </div>
                        </div>
                    </div>
                    <PrimaryButton
                        :href="route('cart.store', { id: product.id })"
                        method="post"
                        >Add to cart</PrimaryButton
                    >
                    <p class="mt-10">{{ product.description }}</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
