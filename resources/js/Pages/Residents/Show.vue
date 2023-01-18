<template>
    <AdminLayout title="Resident information">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Resident Information
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="container mx-auto p-6">
                    <div
                        class="w-full mb-8 overflow-hidden rounded-lg shadow-lg"
                    >
                        <div class="w-full shadow p-5 bg-white">
                            <section
                                class="text-gray-600 body-font overflow-hidden"
                            >
                                <div class="container px-5 py-24 mx-auto">
                                    <div
                                        class="lg:w-4/5 mx-auto flex flex-wrap"
                                    >
                                        <div
                                            class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0"
                                        >
                                            <h2
                                                class="text-sm title-font text-gray-500 tracking-widest uppercase"
                                            >
                                                Full Name
                                            </h2>
                                            <h1
                                                class="text-gray-900 text-3xl title-font font-medium mb-4 border-b border-gray-600 py-2 uppercase"
                                            >
                                                {{ resident.last_name }},
                                                {{ resident.first_name }},
                                                {{ resident.middle_name }}
                                            </h1>
                                            <div
                                                class="flex border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Birth Date</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.birthdate }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Birth Place</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.birthplace }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Sex</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.sex }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Address</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.address }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Contact</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.contact }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Civil Status</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.civil_status }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Blood Type</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.blood_type }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Occupation</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.occupation }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Religion</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.religion }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Nationality</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.nationality }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-b mb-6 border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Age</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ resident.age }}</span
                                                >
                                            </div>
                                        </div>
                                        <img
                                            class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                                            src="{{ asset('storage/'. resident.image) }}"
                                        />
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { defineProps } from "vue";

const props = defineProps({
    resident: Object,
});
</script>
