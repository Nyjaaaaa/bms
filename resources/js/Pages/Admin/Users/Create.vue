<template>
    <AdminLayout title="Add users">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add User
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="container mx-auto p-6 font-mono">
                    <div
                        class="w-full mb-8 overflow-hidden rounded-lg shadow-lg"
                    >
                        <div class="w-full shadow p-5 bg-white">
                            <form
                                @submit.prevent="
                                    form.post(route('admin.users.store'))
                                "
                            >
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
                                <div class="m-4">
                                    <label
                                        for="password"
                                        class="block text-lg font-semibold whitespace-nowrap"
                                        >Password</label
                                    >
                                    <input
                                        v-model="form.password"
                                        type="password"
                                        id="password"
                                        name="password"
                                        class="inline-flex items-center justify-center px-4 py-1 space-x-1 rounded-md shadow"
                                    />
                                    <div
                                        v-if="errors.password"
                                        class="text-red-600"
                                    >
                                        {{ errors.password }}
                                    </div>
                                </div>
                                <div class="m-4">
                                    <label
                                        for="password_confirmation"
                                        class="block text-lg font-semibold whitespace-nowrap"
                                        >Confirm Password</label
                                    >
                                    <input
                                        v-model="form.password_confirmation"
                                        type="password"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        class="inline-flex items-center justify-center px-4 py-1 space-x-1 rounded-md shadow"
                                    />
                                </div>
                                <button
                                    type="submit"
                                    class="inline-block px-4 py-3 bg-blue-500 text-white rounded m-4"
                                >
                                    Add
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

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
        Link,
    },
    props: {
        errors: Object,
    },
    setup() {
        const form = useForm({
            name: "",
            email: "",
            password: "",
            password_confirmation: "",
        });
        return { form };
    },
};
</script>
