<template>
    <AdminLayout title="Update resident">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Update Resident
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="container mx-auto p-6">
                    <div
                        class="w-full mb-8 overflow-hidden rounded-lg shadow-lg"
                    >
                        <div class="w-full shadow p-5 bg-gray-800">
                            <form @submit.prevent="updateResident">
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
                                            v-model="form.birthdate"
                                            type="date"
                                            name="birthdate"
                                            id="birthdate"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.birthdate"
                                            class="text-red-600"
                                        >
                                            {{ errors.birthdate }}
                                        </div>
                                        <label
                                            for="birthdate"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Birthdate</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.birthplace"
                                            type="text"
                                            name="birthplace"
                                            id="birthplace"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.birthplace"
                                            class="text-red-600"
                                        >
                                            {{ errors.birthplace }}
                                        </div>
                                        <label
                                            for="birthplace"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Birthplace</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.age"
                                            type="number"
                                            name="age"
                                            id="age"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.age"
                                            class="text-red-600"
                                        >
                                            {{ errors.age }}
                                        </div>
                                        <label
                                            for="age"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Age</label
                                        >
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-3 md:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.sex"
                                            type="text"
                                            name="sex"
                                            id="sex"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.sex"
                                            class="text-red-600"
                                        >
                                            {{ errors.sex }}
                                        </div>
                                        <label
                                            for="sex"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Sex</label
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
                                            v-model="form.civil_status"
                                            type="text"
                                            name="civil_status"
                                            id="civil_status"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.civil_status"
                                            class="text-red-600"
                                        >
                                            {{ errors.civil_status }}
                                        </div>
                                        <label
                                            for="civil_status"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Civil status</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.blood_type"
                                            type="text"
                                            name="blood_type"
                                            id="blood_type"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.blood_type"
                                            class="text-red-600"
                                        >
                                            {{ errors.blood_type }}
                                        </div>
                                        <label
                                            for="blood_type"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Blood type</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.occupation"
                                            type="text"
                                            name="occupation"
                                            id="occupation"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.occupation"
                                            class="text-red-600"
                                        >
                                            {{ errors.occupation }}
                                        </div>
                                        <label
                                            for="occupation"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Occupation</label
                                        >
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-3 md:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.religion"
                                            type="text"
                                            name="religion"
                                            id="religion"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.religion"
                                            class="text-red-600"
                                        >
                                            {{ errors.religion }}
                                        </div>
                                        <label
                                            for="religion"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Religion</label
                                        >
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input
                                            v-model="form.nationality"
                                            type="text"
                                            name="nationality"
                                            id="nationality"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" "
                                        />
                                        <div
                                            v-if="errors.nationality"
                                            class="text-red-600"
                                        >
                                            {{ errors.nationality }}
                                        </div>
                                        <label
                                            for="nationality"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                                            >Nationality</label
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
                                    :href="route('residents.index')"
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
    resident: Object,
});

const form = useForm({
    id: props.resident.id,
    last_name: props.resident.last_name,
    first_name: props.resident.first_name,
    middle_name: props.resident.middle_name,
    birthdate: props.resident.birthdate,
    birthplace: props.resident.birthplace,
    age: props.resident.age,
    sex: props.resident.sex,
    address: props.resident.address,
    contact: props.resident.contact,
    civil_status: props.resident.civil_status,
    blood_type: props.resident.blood_type,
    occupation: props.resident.occupation,
    religion: props.resident.religion,
    nationality: props.resident.nationality,
});

function updateResident() {
    form.put(route("residents.update", form.id));
}
</script>
