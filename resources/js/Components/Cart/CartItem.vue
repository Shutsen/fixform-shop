<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({ item: { type: Object } });
</script>

<template>
    <li class="flex py-6 sm:py-10">
        <div class="flex-shrink-0">
            <img
                :src="item.image"
                class="h-24 w-16 rounded-lg object-cover object-center"
            />
        </div>
        <div class="relative ml-4 flex flex-1 flex-col justify-between sm:ml-6">
            <div>
                <div class="flex justify-between sm:grid sm:grid-cols-2">
                    <div class="pr-6">
                        <h3 class="text-sm">
                            <a
                                :href="item.href"
                                class="font-medium text-gray-700 hover:text-gray-800"
                                >{{ item.name }}</a
                            >
                        </h3>
                    </div>

                    <p class="text-right text-sm font-medium text-gray-900">
                        &euro;{{ item.price }}
                    </p>
                </div>

                <div
                    class="mt-4 flex items-center sm:absolute sm:left-1/2 sm:top-0 sm:mt-0 sm:block"
                >
                    <label :for="`quantity-${item.id}`" class="sr-only"
                        >Quantity, {{ item.name }}</label
                    >
                    <select
                        :id="`quantity-${item.id}`"
                        :name="`quantity-${item.id}`"
                        :value="item.quantity"
                        class="block max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
                    >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <Link
                        :href="route('cart.destroy', item.id)"
                        method="delete"
                        as="button"
                        class="ml-4 text-sm font-medium text-indigo-600 hover:text-indigo-500 sm:ml-0 sm:mt-3"
                        >Remove</Link
                    >
                </div>
            </div>
        </div>
    </li>
</template>
