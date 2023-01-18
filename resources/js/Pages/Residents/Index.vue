<template>
    <AdminLayout title="Manage residents">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Manage Residents
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="container mx-auto p-6">
                    <div class="w-full flex mb-4 p-2 justify-end">
                        <Link
                            :href="route('residents.create')"
                            class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
                        >
                            <svg
                                class="w-6 h-6 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                />
                            </svg>
                            <span>Add Resident</span>
                        </Link>
                    </div>

                    <div
                        class="w-full mb-8 overflow-hidden bg-white rounded-lg shadow-lg"
                    >
                        <div class="p-2 m-2">
                            <div class="flex justify-between">
                                <div class="flex-1">
                                    <div class="relative">
                                        <div
                                            class="absolute flex items-center ml-2 h-full"
                                        >
                                            <svg
                                                class="w-4 h-4 fill-current text-primary-gray-dark"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"
                                                ></path>
                                            </svg>
                                        </div>

                                        <input
                                            v-model="search"
                                            type="text"
                                            placeholder="Search by name"
                                            class="px-8 py-3 w-full md:w-2/6 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col mt-6">
                            <div
                                class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8"
                            >
                                <div
                                    class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8"
                                >
                                    <div
                                        class="overflow-hidden border-b border-gray-200 rounded-md shadow-md"
                                    >
                                        <table
                                            class="min-w-full overflow-hidden divide-y divide-gray-200"
                                        >
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                                    >
                                                        First Name
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                                    >
                                                        Middle Name
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                                    >
                                                        Last Name
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                                    >
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody
                                                class="bg-white divide-y divide-gray-200"
                                            >
                                                <tr
                                                    v-for="resident in residents.data"
                                                >
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap"
                                                    >
                                                        <div
                                                            class="flex items-center"
                                                        >
                                                            {{
                                                                resident.first_name
                                                            }}
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap"
                                                    >
                                                        <div
                                                            class="flex items-center"
                                                        >
                                                            {{
                                                                resident.middle_name
                                                            }}
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap"
                                                    >
                                                        <div
                                                            class="flex items-center"
                                                        >
                                                            {{
                                                                resident.last_name
                                                            }}
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap"
                                                    >
                                                        <div class="flex">
                                                            <form>
                                                                <Link
                                                                    :href="
                                                                        route(
                                                                            'residents.edit',
                                                                            resident.id
                                                                        )
                                                                    "
                                                                    class="text-gray-900 bg-white hover:bg-yellow-100 border border-yellow-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-yellow-600 dark:bg-yellow-800 dark:border-yellow-700 dark:text-white dark:hover:bg-yellow-700 mr-2 mb-2"
                                                                >
                                                                    <span
                                                                        >Edit</span
                                                                    >
                                                                </Link>
                                                                <Link
                                                                    :href="
                                                                        route(
                                                                            'residents.show',
                                                                            resident.id
                                                                        )
                                                                    "
                                                                    class="text-gray-900 bg-white hover:bg-green-100 border border-green-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-green-600 dark:bg-green-800 dark:border-green-700 dark:text-white dark:hover:bg-green-700 mr-2 mb-2"
                                                                >
                                                                    <span
                                                                        >Details</span
                                                                    >
                                                                </Link>
                                                                <button
                                                                    @click="
                                                                        destroy(
                                                                            resident.id
                                                                        )
                                                                    "
                                                                    type="button"
                                                                    class="text-gray-900 bg-white hover:bg-red-100 border border-red-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-700 mr-2 mb-2"
                                                                >
                                                                    <span
                                                                        >Delete</span
                                                                    >
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="m-2 p-2">
                                            <Pagination
                                                :links="residents.links"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </AdminLayout>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import AdminLayout from "@/Layouts/AdminLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import { ref, watch, defineProps } from "vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    residents: Object,
    filters: Object,
});

const search = ref(props.filters.search);

watch(search, (value) => {
    Inertia.get(
        "/residents",
        { search: value },
        {
            preserveState: true,
            replace: true,
        }
    );
});

const destroy = (id) => {
    if (confirm("Are you sure?")) {
        Inertia.delete(route("residents.destroy", id));
    }
    return { destroy };
};
</script>
