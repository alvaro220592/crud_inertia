<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

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
                            <div
                                class="w-full mb-8 overflow-hidden rounded-lg shadow-lg"
                            >
                            
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
