<template>
    <div>
        <p>{{ step.description }}</p>

        <timer v-if="step.time" :time="step.time"></timer>
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
        computed: {
            exercise() {
                return this.exercises.filter(exercise => exercise.id == this.id)[0]
            }
        }
    }
</script>
