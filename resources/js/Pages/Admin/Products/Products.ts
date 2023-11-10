import AppLayout from "@/Layouts/AppLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import ProductsModal from "./Modal/ProductsModal.vue";
import { computed, defineComponent, onMounted } from "vue";
import { useStore } from "vuex";

export default defineComponent({
    components: {
        AppLayout,
        PrimaryButton,
        SecondaryButton,
        ProductsModal,
    },
    setup() {
        const store = useStore();

        const products = computed(() => {
            return store.getters["product/allProducts"];
        });

        const createProduct = () => {
            // Implement your create logic here
            // Example: store.dispatch('product/addProduct', newProductData)
        };

        const editProduct = (product) => {
            // Implement your edit logic here
            // Example: store.dispatch('product/updateProduct', updatedProductData)
        };

        const deleteProduct = (productId) => {
            // Implement your delete logic here
            // Example: store.dispatch('product/deleteProduct', productId)
        };

        const applyFilters = () => {
            // Implement your filter logic here
            // Example: store.dispatch('product/fetchFilteredProducts', filters)
        };

        onMounted(async () => {
            try {
                await store.dispatch("product/fetchProducts");
            } catch (error) {
                // Handle error from store or API request
                console.error("Error fetching products:", error);
            }
        });

        return {
            createProduct,
            applyFilters,
            editProduct,
            deleteProduct,
            products,
        };
    },
});
