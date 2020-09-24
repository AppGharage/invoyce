<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Invoice
            </h2>
        </template>
    </app-layout>
</template>


<script>
    import AppLayout from './../../Layouts/AppLayout'
    // import CreateTeamForm from './../../Jetstream/FormSection'
    import JetSectionBorder from './../../Jetstream/SectionBorder'

    export default {

        components: {
            AppLayout,
            JetSectionBorder
        },
    }
</script>
