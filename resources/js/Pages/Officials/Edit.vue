<template>
    <AdminLayout title="Update Barangay official">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Update Barangay official
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="container mx-auto p-6">
                    <div
                        class="w-full mb-8 overflow-hidden rounded-lg shadow-lg"
                    >
                        <div class="w-full shadow p-5 bg-gray-800">
                            <form @submit.prevent="updateBarangayOfficial">
                                <div class="grid md:grid-cols-3 md:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.first_name"
                                            type="text"
                                            name="first_name"
                                            id="first_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.first_name"
                                            class="text-red-600"
                                        >
                                            {{ errors.first_name }}
                                        </div>
                                        <label
                                            for="first_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >First name</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.middle_name"
                                            type="text"
                                            name="middle_name"
                                            id="middle_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.middle_name"
                                            class="text-red-600"
                                        >
                                            {{ errors.middle_name }}
                                        </div>
                                        <label
                                            for="middle_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Middle name</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.last_name"
                                            type="text"
                                            name="last_name"
                                            id="last_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.last_name"
                                            class="text-red-600"
                                        >
                                            {{ errors.last_name }}
                                        </div>
                                        <label
                                            for="last_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Last name</label
                                        >
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-3 md:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.position"
                                            type="text"
                                            name="position"
                                            id="position"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.position"
                                            class="text-red-600"
                                        >
                                            {{ errors.position }}
                                        </div>
                                        <label
                                            for="position"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Position</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.address"
                                            type="text"
                                            name="address"
                                            id="address"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.address"
                                            class="text-red-600"
                                        >
                                            {{ errors.address }}
                                        </div>
                                        <label
                                            for="address"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Address</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.contact"
                                            type="text"
                                            name="contact"
                                            id="contact"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.contact"
                                            class="text-red-600"
                                        >
                                            {{ errors.contact }}
                                        </div>
                                        <label
                                            for="contact"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Contact</label
                                        >
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-3 md:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.term_start"
                                            type="date"
                                            name="term_start"
                                            id="term_start"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.term_start"
                                            class="text-red-600"
                                        >
                                            {{ errors.term_start }}
                                        </div>
                                        <label
                                            for="term_start"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Term Start</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.term_end"
                                            type="date"
                                            name="term_end"
                                            id="term_end"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.term_end"
                                            class="text-red-600"
                                        >
                                            {{ errors.term_end }}
                                        </div>
                                        <label
                                            for="term_end"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Term End</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.status"
                                            type="text"
                                            name="status"
                                            id="status"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.status"
                                            class="text-red-600"
                                        >
                                            {{ errors.status }}
                                        </div>
                                        <label
                                            for="status"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Status</label
                                        >
                                    </div>
                                </div>
                                <button
                                    :disabled="form.processing"
                                    type="submit"
                                    class="text-gray-900 bg-white hover:bg-blue-100 border border-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-600 dark:bg-blue-800 dark:border-blue-700 dark:text-white dark:hover:bg-blue-700 m-4"
                                >
                                    Submit
                                </button>
                                <Link
                                    :href="route('officials.index')"
                                    class="text-gray-900 bg-white hover:bg-red-100 border border-red-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-700 m-4"
                                    ><span>Cancel</span>
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
    errors: Object,
    official: Object,
});

const form = useForm({
    id: props.official.id,
    first_name: props.official.first_name,
    middle_name: props.official.middle_name,
    last_name: props.official.last_name,
    position: props.official.position,
    address: props.official.address,
    contact: props.official.contact,
    term_start: props.official.term_start,
    term_end: props.official.term_end,
    status: props.official.status,
});

function updateBarangayOfficial() {
    form.put(route("officials.update", form.id));
}
</script>
