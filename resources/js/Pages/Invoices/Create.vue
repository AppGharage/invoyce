<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Invoice
            </h2>
        </template>
        <template>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2">
                <div class="shadow overflow-hidden sm:rounded-md bg-white py-5 mt-4">
                    <form action="">
                        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
                            <jet-label for="name" value="Recipient"/>
                            <jet-input id="recipient" type="text" class="mt-1 block w-full" v-model="form.recipient" autofocus />
                        </div>
                        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
                            <jet-label for="amount" value="Amount"/>
                            <jet-input id="amount" type="number" class="mt-1 block w-full" v-model="form.amount" autofocus />
                        </div>
                        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
                            <jet-label for="due_date" value="Due Date"/>
                            <jet-input id="due_date" type="date" class="mt-1 block w-full" v-model="form.due_date" autofocus />
                        </div>
                        <div class="flex-shrink py-4 w-full inline-block relative max-w-7xl mx-auto px-8">
                            <jet-label for="invoice_type" value="Invoice Type"/>
                            <select class="block appearance-none text-gray-600 w-full form-input rounded-md shadow-sm px-4 py-2 pr-8" name="invoice_type" v-model="form.invoice_type">
                                <option>choose invoice type</option>
                                <option value="one-time">One Time</option>
                                <option value="recurring">Recurring</option>
                            </select>
                            <div class="pointer-events-none absolute top-0 mt-3 mx-auto px-12 right-0 py-9 flex items-center text-gray-600">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        <div class="flex-shrink py-4 w-full inline-block relative max-w-7xl mx-auto px-8" v-if="form.invoice_type == 'recurring'">
                            <jet-label for="duration" value="Duration"/>
                            <select class="block appearance-none text-gray-600 w-full form-input rounded-md shadow-sm px-4 py-2 pr-8" name="duration" v-model="form.invoice_duration">
                                <option>choose duration</option>
                                <option value="weekly">Weekly</option>
                                <option value="by-weekly">By-weekly</option>
                                <option value="monthly">Monthly</option>
                            </select>
                            <div class="pointer-events-none absolute top-0 mt-3 mx-auto px-12 right-0 py-9 flex items-center text-gray-600">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>

                        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
                            <jet-label for="description" value="Description"/>
                            <jet-input id="description" type="text" class="mt-1 block w-full" v-model="form.description" autofocus />
                        </div>
                        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
                            <jet-button type="submit">
                                Create Invoice
                            </jet-button>
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
    import JetInputDropdown from './../../Jetstream/InputDropdown'
    import JetButton from './../../Jetstream/Button'
    import JetLabel from './../../Jetstream/Label'


    export default {
        components: {
            AppLayout,
            JetSectionBorder,
            JetInput,
            JetInputDropdown,
            JetButton,
            JetLabel
        },
        data() {
            return {
                form: this.$inertia.form({
                    '_method': 'POST',
                    recipient: '',
                    amount:'',
                    due_date: '',
                    invoice_type:'',
                    description: ''
                }, {
                    bag: 'createInvoice',
                    resetOnSuccess: true,
                })
            }
        },
    }
</script>
