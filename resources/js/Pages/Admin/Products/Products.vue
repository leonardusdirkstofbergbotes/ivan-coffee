<script src="./Products.ts"></script>

<template>
    <AppLayout title="Products">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Products
            </h2>
        </template>

        <div
            class="flex flex-col sm:flex-row items-stretch justify-between space-y-2 sm:space-y-0 sm:space-x-4 max-w-7xl mt-4 mx-auto sm:px-6 lg:px-8"
        >
            <!-- Search Bar and Filter Button (Left on Mobile) -->
            <div class="sm:flex space-x-4">
                <div class="relative">
                    <input
                        type="text"
                        placeholder="Search products..."
                        class="border rounded-lg py-2 px-3 pr-10 border-gray-400 focus:outline-none focus:ring focus:border-blue-300"
                    />
                </div>

                <SecondaryButton> Filter </SecondaryButton>
            </div>

            <!-- Create New Product Button (Right on Mobile) -->
            <PrimaryButton> Create New Product </PrimaryButton>
        </div>

        <ProductsModal></ProductsModal>

        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <table
                class="min-w-full table-auto border border-collapse shadow-md"
            >
                <thead>
                    <tr>
                        <th
                            class="w-1/12 px-4 py-2 text-left bg-gray-200 border border-gray-300"
                        >
                            ID
                        </th>
                        <th
                            class="w-2/12 px-4 py-2 text-left bg-gray-200 border border-gray-300"
                        >
                            Name
                        </th>
                        <th
                            class="w-2/12 px-4 py-2 text-left bg-gray-200 border border-gray-300"
                        >
                            Price
                        </th>
                        <th
                            class="w-3/12 px-4 py-2 text-left bg-gray-200 border border-gray-300"
                        >
                            Description
                        </th>
                        <th
                            class="w-1/12 px-4 py-2 text-left bg-gray-200 border border-gray-300"
                        >
                            Year
                        </th>
                        <th
                            class="w-1/12 px-4 py-2 text-left bg-gray-200 border border-gray-300"
                        >
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <template
                        v-for="(product, index) in products"
                        :key="product.id"
                    >
                        <tr
                            :class="
                                index % 2 === 0 ? 'bg-white' : 'bg-gray-100'
                            "
                        >
                            <td class="px-4 py-2 border">{{ product.id }}</td>
                            <td class="px-4 py-2 border">{{ product.name }}</td>
                            <td class="px-4 py-2 border">
                                {{ product.price }}
                            </td>
                            <td class="px-4 py-2 border">
                                {{ product.description }}
                            </td>
                            <td class="px-4 py-2 border">
                                {{ product.bottling_year || "N/A" }}
                            </td>
                            <td class="px-4 py-2 border">
                                <button
                                    @click="editProduct(product)"
                                    class="text-blue-500"
                                >
                                    Edit
                                </button>
                                <button
                                    @click="deleteProduct(product.id)"
                                    class="text-red-500 ml-2"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>
