<template>
    <AdminLayout title="Barangay official information">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Barangay Official Information
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
                                                {{ official.last_name }},
                                                {{ official.first_name }},
                                                {{ official.middle_name }}
                                            </h1>
                                            <div
                                                class="flex border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Position</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{
                                                        official.position
                                                    }}</span
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
                                                    >{{
                                                        official.address
                                                    }}</span
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
                                                    >{{
                                                        official.contact
                                                    }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Term Start</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{
                                                        official.term_start
                                                    }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Term End</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{
                                                        official.term_end
                                                    }}</span
                                                >
                                            </div>
                                            <div
                                                class="flex border-t border-gray-200 py-2 uppercase"
                                            >
                                                <span class="text-gray-500"
                                                    >Status</span
                                                >
                                                <span
                                                    class="ml-auto text-gray-900"
                                                    >{{ official.status }}</span
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
    official: Object,
});
</script>
