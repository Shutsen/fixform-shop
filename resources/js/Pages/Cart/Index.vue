<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

import OrderSummary from "@/Components/Cart/OrderSummary.vue";
import EmptyCart from "@/Components/Cart/EmptyCart.vue";
import CartItem from "@/Components/Cart/CartItem.vue";

defineProps(["cart", "subTotal", "taxAmount", "total"]);
</script>

<template>
    <Head title="Cart" />

    <AuthenticatedLayout>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900">
                Your cart
                <!-- <pre class="text-xs font-thin">
                    {{
                        JSON.stringify(cart, null, "  ").replace(
                            /"([a-z]\w+)":/gi,
                            "$1:"
                        )
                    }}
                </pre> -->
            </h1>
            <EmptyCart v-if="cart.length === 0" />
            <template v-else>
                <ul
                    role="list"
                    class="divide-y divide-gray-200 border-b border-t border-gray-200"
                >
                    <CartItem
                        v-for="item in cart"
                        :key="item.id"
                        :item="item"
                    />
                </ul>
                <OrderSummary
                    :subTotal="subTotal"
                    :taxAmount="taxAmount"
                    :total="total"
                />
            </template>
        </div>
    </AuthenticatedLayout>
</template>
