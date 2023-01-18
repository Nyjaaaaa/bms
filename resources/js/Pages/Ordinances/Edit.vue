<template>
    <AdminLayout title="Update ordinance">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Update Ordinance
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="container mx-auto p-6">
                    <div
                        class="w-full mb-8 overflow-hidden rounded-lg shadow-lg"
                    >
                        <div class="w-full shadow p-5 bg-gray-800">
                            <form @submit.prevent="updateOrdinance">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input
                                        v-model="form.number"
                                        type="text"
                                        name="number"
                                        id="number"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" "
                                    />
                                    <div
                                        v-if="errors.number"
                                        class="text-red-600"
                                    >
                                        {{ errors.number }}
                                    </div>
                                    <label
                                        for="number"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                        >Number</label
                                    >
                                    
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input
                                        v-model="form.introduced_by"
                                        type="text"
                                        name="introduced_by"
                                        id="introduced_by"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" "
                                    />
                                    <div
                                        v-if="errors.introduced_by"
                                        class="text-red-600"
                                    >
                                        {{ errors.introduced_by }}
                                    </div>
                                    <label
                                        for="introduced_by"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                        >Introduced By</label
                                    >
                                    
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input
                                        v-model="form.description"
                                        type="text"
                                        name="description"
                                        id="description"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" "
                                    />
                                    <label
                                        for="description"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                        >Description</label
                                    >
                                    <div
                                        v-if="errors.description"
                                        class="text-red-600"
                                    >
                                        {{ errors.description }}
                                    </div>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input
                                        v-model="form.date_enacted"
                                        type="date"
                                        name="date_enacted"
                                        id="date_enacted"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" "
                                    />
                                    <label
                                        for="date_enacted"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                        >Date Enacted</label
                                    >
                                    <div
                                        v-if="errors.date_enacted"
                                        class="text-red-600"
                                    >
                                        {{ errors.date_enacted }}
                                    </div>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input
                                        v-model="form.approved_by"
                                        type="text"
                                        name="approved_by"
                                        id="approved_by"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" "
                                    />
                                    <label
                                        for="approved_by"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                        >Approved By</label
                                    >
                                    <div
                                        v-if="errors.approved_by"
                                        class="text-red-600"
                                    >
                                        {{ errors.approved_by }}
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
                                    :href="route('ordinances.index')"
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
    ordinance: Object,
    errors: Object,
});

const form = useForm({
    id: props.ordinance.id,
    number: props.ordinance.number,
    introduced_by: props.ordinance.introduced_by,
    description: props.ordinance.description,
    date_enacted: props.ordinance.date_enacted,
    approved_by: props.ordinance.approved_by,
});

function updateOrdinance() {
    form.put(route("ordinances.update", form.id));
}
</script>
