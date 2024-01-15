<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
const props = defineProps(["product", "quantity"]);
</script>

<template>
    <div>
        <div class="group relative">
            <div
                class="aspect-h-3 aspect-w-2 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80"
            >
                <img
                    :src="product.image"
                    :alt="product.name"
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                />
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a :href="`/products/${product.id}`">
                            <span aria-hidden="true" class="absolute inset-0" />
                            {{ product.name }}
                        </a>
                    </h3>
                </div>
                <p class="text-sm font-medium text-gray-900">
                    &euro;{{ product.price }}
                </p>
            </div>
            <div
                v-if="quantity > 0"
                class="absolute top-2 right-2 bg-blue-500 text-white w-6 h-6 rounded-full flex items-center justify-center"
            >
                <span class="text-sm">{{ quantity }}</span>
            </div>
        </div>
        <PrimaryButton
            :href="route('cart.store', { id: product.id })"
            method="post"
            >Add to cart</PrimaryButton
        >
    </div>
</template>
