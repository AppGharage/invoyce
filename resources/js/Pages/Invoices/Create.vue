<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Invoice
            </h2>
        </template>
        <template>
            <div class="container mx-auto grid grid-cols-2">
                <div class="shadow overflow-hidden sm:rounded-md bg-white py-5 mt-4">
                    <form action="">
                        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
                            <jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus />
                        </div>
                        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
                            <jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus />
                        </div>
                    </form>
                </div>
            </div>
        </template>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'
    import JetSectionBorder from './../../Jetstream/SectionBorder'
    import JetInput from './../../Jetstream/Input'

    export default {
        components: {
            AppLayout,
            JetSectionBorder,
            JetInput,
        },
        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                })
            }
        },
    }
</script>
