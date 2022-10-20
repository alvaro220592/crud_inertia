<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: null,
    image: null,
})

function storeTopic() {
    form.post('/topics')
}

</script>

<template>
    <Head title="Topics" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Topics
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-1 bg-white border-b border-gray-200">
                       

                        <!-- component -->
                        <section class="container mx-auto p-6 font-mono">
                        <div class="flex p-2 m-2">
                            <Link href="/topics" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">Back</Link>
                        </div>
                            <div class="w-1/2 mb-8 overflow-hidden rounded-lg ">
                            
                                <form  method="post" enctype="multipart/form-data" @submit.prevent="storeTopic">
                                    <input v-model="form.name" class="block w-full text-sm" id="text_input" type="text">

                                    <!-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="small_size">Small file input</label> -->
                                    <input type="file" @input="form.image = $event.target.files[0]" class="w-full mt-5" />

                                    <button type="submit" class="mt-5 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">Salvar</button>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
