import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import DialogModal from "@/Components/DialogModal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";

import { defineComponent } from "vue";

export default defineComponent({
    components: {
        DialogModal,
        SecondaryButton,
        PrimaryButton,
        InputLabel,
        TextInput,
        InputError,
    },
    setup() {
        return {};
    },
});
