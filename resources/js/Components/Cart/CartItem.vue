<script setup>
import { Link } from "@inertiajs/vue3";
import axios from "axios";

const props = defineProps({ item: { type: Object } });

async function handleChange(e, id) {
    // not implemented since i'm unsure how to do this in php..
    // await axios.put("/cart.update", {
    //     id,
    //     quantity: e.target.value,
    // });
}
</script>

<template>
    <li class="flex py-6 sm:py-10">
        <div class="flex-shrink-0">
            <img
                :src="item.image"
                class="h-24 w-16 rounded-lg object-cover object-center"
            />
        </div>
        <div class="relative ml-4 flex flex-1 flex-col justify-center sm:ml-6">
            <div>
                <div class="flex justify-between sm:grid sm:grid-cols-2">
                    <div class="pr-6">
                        <h3 class="text-sm">
                            <Link
                                :href="`products/${item.id}`"
                                class="font-medium text-gray-700 hover:text-gray-800"
                                >{{ item.name }}</Link
                            >
                            <span class="ml-4">&euro;{{ item.price }}</span>
                        </h3>
                    </div>

                    <p class="text-right text-sm font-medium text-gray-900">
                        &euro;{{ item.total_price }}
                    </p>
                </div>

                <div
                    class="mt-8 flex items-center sm:absolute sm:left-1/2 sm:top-0 sm:block"
                >
                    <label :for="`quantity-${item.id}`" class="sr-only"
                        >Quantity, {{ item.name }}</label
                    >
                    <!-- Instead of using a select like below
                    I would sandwich the quanity tag between a "-" and a "+" button
                    Then, on press of those buttons, the quantity for that product would
                    respectively decrease and increase by 1 -> my inertia/php skills are
                    too limited to roll that out now though-->
                    <select
                        :id="`quantity-${item.id}`"
                        :name="`quantity-${item.id}`"
                        :value="item.quantity"
                        :onchange="(e) => handleChange(e, item.id)"
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
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
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
