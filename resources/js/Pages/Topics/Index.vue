<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    topics: Array
})

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
                            <div class="flex justify-end p-2 m-2">
                                <!-- <Link href="/topics/create" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">New</Link> -->
                                <Link href="/topics/create" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Novo</Link>
                            </div>
                            <div class="container flex justify-center mx-auto">
                                <div class="flex flex-col">
                                    <div class="w-full">
                                        <div class="border-b border-gray-200 shadow">
                                            <table>
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th class="px-6 py-2 text-xs text-gray-500">
                                                            ID
                                                        </th>
                                                        <th class="px-6 py-2 text-xs text-gray-500">
                                                            Name
                                                        </th>
                                                        <th class="px-6 py-2 text-xs text-gray-500">
                                                            Image
                                                        </th>
                                                        <th class="px-6 py-2 text-xs text-gray-500">
                                                            Created at
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    <tr class="whitespace-nowrap" v-for="topic in topics" :key="topic.id">
                                                        <td class="px-6 py-4 text-sm text-gray-500">
                                                            {{ topic.id }}
                                                        </td>
                                                        <td class="px-6 py-4 text-sm text-gray-500">
                                                            {{ topic.name }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="text-sm text-gray-900">
                                                                <img :src="topic.image" class="w-12 h-12 rounded">
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 text-sm text-gray-500">
                                                            {{ topic.created_at }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
