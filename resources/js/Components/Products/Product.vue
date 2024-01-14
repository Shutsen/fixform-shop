<script setup>
const props = defineProps(["product"]);
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
        </div>
        <button
            class="mt-4 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        >
            Add to cart
        </button>
    </div>
</template>
