<template>
    <div class="container">
        <step v-if="currentStep < (exercise.steps.length)" :step="exercise.steps[currentStep]"></step>


        <div v-if="currentStep == (exercise.steps.length)">
            <p>{{ exercise.name }} finished!</p>
            <router-link to="/">
                <span @click="setFinished">Back to home</span>
            </router-link>
        </div>

        <button v-if="currentStep > 0" @click="previousStep">Previous Step</button>
        <button v-if="currentStep < (exercise.steps.length)" @click="nextStep">Next Step</button>

    </div>
</template>bb

<script>
    import exercises from "../exercises";
    import Step from "./Step";

    export default {
        components: {Step},
        data() {
            return {
                exercises: exercises.exercises,
                id: this.$route.params.id,
                currentStep: 0,
            }
        },
        methods: {
            previousStep() {
                this.currentStep--
            },
            nextStep() {
                this.currentStep++
            },
            setFinished() {
                if (this.$cookies.get("max-exercise") < this.$route.params.id) {
                    this.$cookies.set("max-exercise", this.$route.params.id, 99999999);
                }
            }
        },
        computed: {
            exercise() {
                return this.exercises.filter(exercise => exercise.id == this.id)[0]
            }
        }
    }
</script>
