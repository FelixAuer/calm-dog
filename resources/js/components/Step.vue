<template>
    <div>
        <div class="mb-4">
            <p>{{ step.description }}</p>
        </div>
        <div>
            <timer v-if="step.time" :time="step.time"></timer>
        </div>
    </div>
</template>

<script>
    import Timer from "./Timer";

    export default {
        components: {Timer},
        props: ['step'],
        data() {
            return {}
        },
        methods: {
            previousStep() {
                this.currentStep--
            },
            nextStep() {
                this.currentStep++
            }
        },
    }
</script>
