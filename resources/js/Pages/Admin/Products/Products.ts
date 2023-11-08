import AppLayout from '@/Layouts/AppLayout.vue';
import { defineComponent } from 'vue';

interface Product {
  id: number;
  name: string;
  price: number;
}

export default defineComponent({
    components: {
        AppLayout,
    },
  setup() {

    return {
    };
  },
});
