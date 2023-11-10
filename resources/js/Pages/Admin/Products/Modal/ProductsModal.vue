<script src="./ProductsModal.ts"></script>

<template>
    <DialogModal :show="true" @close="closeModal">
        <template #title> Product </template>

        <template #content>
            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="email" value="Name" />
                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        required
                        autofocus
                    />
                    <InputError class="mt-2" />
                </div>

                <div class="mt-4 relative">
                    <InputLabel for="password" value="Password" />
                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        required
                    />
                    <InputError class="mt-2" />
                </div>
            </form>
        </template>

        <template #footer>
            <div class="flex space-x-4">
                <SecondaryButton @click="closeModal"> Cancel </SecondaryButton>
                <PrimaryButton @click="closeModal"> Save </PrimaryButton>
            </div>
        </template>
    </DialogModal>
</template>
