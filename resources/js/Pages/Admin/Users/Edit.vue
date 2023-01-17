<template>
    <AdminLayout title="Update user">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Update User
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="container mx-auto p-6">
                    <div
                        class="w-full mb-8 overflow-hidden rounded-lg shadow-lg"
                    >
                        <div class="w-full shadow p-5 bg-white">
                            <form @submit.prevent="updateUser">
                                <div class="m-4">
                                    <label
                                        for="name"
                                        class="block text-lg font-semibold whitespace-nowrap"
                                        >Name</label
                                    >
                                    <input
                                        v-model="form.name"
                                        type="text"
                                        id="name"
                                        name="name"
                                        class="inline-flex items-center justify-center px-4 py-1 space-x-1 rounded-md shadow"
                                    />
                                    <div
                                        v-if="errors.name"
                                        class="text-red-600"
                                    >
                                        {{ errors.name }}
                                    </div>
                                </div>
                                <div class="m-4">
                                    <label
                                        for="email"
                                        class="block text-lg font-semibold whitespace-nowrap"
                                        >Email</label
                                    >
                                    <input
                                        v-model="form.email"
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="inline-flex items-center justify-center px-4 py-1 space-x-1 rounded-md shadow"
                                    />
                                    <div
                                        v-if="errors.email"
                                        class="text-red-600"
                                    >
                                        {{ errors.email }}
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="inline-block px-4 py-3 bg-blue-500 text-white rounded m-4"
                                >
                                    Update
                                </button>
                                <Link
                                    :href="route('admin.users.index')"
                                    :disabled="form.processing"
                                    class="inline-block px-4 py-3 bg-blue-500 text-white rounded mb-4"
                                    >Cancel
                                </Link>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";

const props = defineProps({
    user: Object,
    errors: Object,
});

const form = useForm({
    id: props.user.id,
    name: props.user.name,
    email: props.user.email,
});

function updateUser() {
    form.put(route("admin.users.update", form.id));
}
</script>
