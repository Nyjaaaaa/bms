<template>
    <div>
        <Head :title="title" />

        <Banner />

        <div class="flex h-screen bg-gray-200">
            <Sidebar />
            <div class="flex-1 flex flex-col overflow-hidden">
                <header
                    class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-gray-800"
                >
                    <div class="flex items-center">
                        <button
                            @click="sidebarOpen = true"
                            class="text-gray-500 focus:outline-none lg:hidden"
                        >
                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M4 6H20M4 12H20M4 18H11"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>

                        <div class="relative mx-4 lg:mx-0">
                            <span class="text-gray text-2xl mx-2 font-semibold uppercase"
                                >Admin</span
                            >
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div
                            x-data="{ notificationOpen: false }"
                            class="relative"
                        >
                            <button
                                @click="notificationOpen = !notificationOpen"
                                class="flex mx-4 text-gray-600 focus:outline-none"
                            >
                                <svg
                                    class="h-6 w-6"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </button>

                            <div
                                v-show="notificationOpen"
                                @click="notificationOpen = false"
                                class="fixed inset-0 h-full w-full z-10"
                            ></div>

                            <div
                                v-show="notificationOpen"
                                class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl overflow-hidden z-10"
                                style="width: 20rem"
                            >
                                <a
                                    href="#"
                                    class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-gray-600 -mx-2"
                                >
                                    <img
                                        class="h-8 w-8 rounded-full object-cover mx-1"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                        alt="avatar"
                                    />
                                    <p class="text-sm mx-2">
                                        <span class="font-bold" href="#"
                                            >Sara Salah</span
                                        >
                                        replied on the
                                        <span
                                            class="font-bold text-gray-400"
                                            href="#"
                                            >Upload Image</span
                                        >
                                        artical . 2m
                                    </p>
                                </a>
                                <a
                                    href="#"
                                    class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-gray-600 -mx-2"
                                >
                                    <img
                                        class="h-8 w-8 rounded-full object-cover mx-1"
                                        src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                                        alt="avatar"
                                    />
                                    <p class="text-sm mx-2">
                                        <span class="font-bold" href="#"
                                            >Slick Net</span
                                        >
                                        start following you . 45m
                                    </p>
                                </a>
                                <a
                                    href="#"
                                    class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-gray-600 -mx-2"
                                >
                                    <img
                                        class="h-8 w-8 rounded-full object-cover mx-1"
                                        src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                        alt="avatar"
                                    />
                                    <p class="text-sm mx-2">
                                        <span class="font-bold" href="#"
                                            >Jane Doe</span
                                        >
                                        Like Your reply on
                                        <span
                                            class="font-bold text-gray-400"
                                            href="#"
                                            >Test with TDD</span
                                        >
                                        artical . 1h
                                    </p>
                                </a>
                                <a
                                    href="#"
                                    class="flex items-center px-4 py-3 text-blue-900 hover:text-white hover:bg-gray-600 -mx-2"
                                >
                                    <img
                                        class="h-8 w-8 rounded-full object-cover mx-1"
                                        src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80"
                                        alt="avatar"
                                    />
                                    <p class="text-sm mx-2">
                                        <span class="font-bold" href="#"
                                            >Abigail Bennett</span
                                        >
                                        start following you . 3h
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="relative">
                            <button
                                @click="dropdownOpen = !dropdownOpen"
                                class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none"
                            >
                                <img
                                    class="h-full w-full object-cover"
                                    src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80"
                                    alt="Your avatar"
                                />
                            </button>

                            <div
                                v-show="dropdownOpen"
                                @click="dropdownOpen = false"
                                class="fixed inset-0 h-full w-full z-10"
                            ></div>

                            <div
                                v-show="dropdownOpen"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                            >
                                <a
                                    href=""
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white"
                                    >Profile</a
                                >
                                <a
                                    href=""
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white"
                                    >Admin</a
                                >
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Page Heading -->
                <header v-if="$slots.header" class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <slot name="header" />
                    </div>
                </header>

                <!-- Page Content -->
                <main
                    class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200"
                >
                    <div
                        v-if="$page.props.flash.message"
                        class="flex p-4 mb-4 bg-green-100 border-t-4 border-green-500 dark:bg-green-200"
                    >
                        <svg
                            class="flex-shrink-0 w-5 h-5 text-green-700"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <div class="ml-3 text-sm font-medium text-green-700">
                            {{ $page.props.flash.message }}
                        </div>
                    </div>
                    <slot />
                </main>
                <Footer />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { Head } from "@inertiajs/inertia-vue3";
import Banner from "@/Components/Banner.vue";
import Sidebar from "@/Components/Sidebar.vue";
import Footer from "@/Components/Footer.vue";


defineProps({
    title: String,
});

const dropdownOpen = ref(false);
const notificationOpen = ref(false);
</script>
