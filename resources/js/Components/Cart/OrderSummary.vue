<template>
    <div class="mt-10 sm:ml-32 sm:pl-6">
        <div class="rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:p-8">
            <h2 class="sr-only">Order summary</h2>

            <div>
                <dl class="-my-4 divide-y divide-gray-200 text-sm">
                    <div class="flex items-center justify-between py-4">
                        <dt class="text-gray-600">Subtotal</dt>
                        <dd class="font-medium text-gray-900">$99.00</dd>
                    </div>
                    <div class="flex items-center justify-between py-4">
                        <dt class="text-gray-600">Tax (21%)</dt>
                        <dd class="font-medium text-gray-900">$8.32</dd>
                    </div>
                    <div class="flex items-center justify-between py-4">
                        <dt class="text-base font-medium text-gray-900">
                            Order total
                        </dt>
                        <dd class="text-base font-medium text-gray-900">
                            $112.32
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="mt-10">
            <button
                type="submit"
                class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50"
            >
                Checkout
            </button>
        </div>

        <div class="mt-6 text-center text-sm text-gray-500">
            <p>
                or{{ " " }}
                <a
                    href="/products"
                    class="font-medium text-indigo-600 hover:text-indigo-500"
                >
                    Continue Shopping
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </p>
        </div>
    </div>
</template>
