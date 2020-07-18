<template>
    <div class="bg-white rounded-lg shadow-md h-full flex flex-col">
        <div class="px-8 pb-2 pt-4 text-center flex-grow flex flex-col">
            <span class="text-gray-600">{{ exercise.name }}</span>
            <div class="flex-grow text-2xl flex flex-col justify-center">
                <step v-if="currentStep < (exercise.steps.length)" :step="exercise.steps[currentStep]"></step>

                <div v-else>
                    <p>Finished! Come back tomorrow for your next session! &#x1F604; &#x1F436;</p>
                    <div class="text-base mt-8">
                        <div class="mb-2">
                            <router-link to="/">
                                <span
                                    class="bg-teal-600 text-white px-4 py-2 rounded-lg w-full hover:bg-teal-700 block text-center">
                                    Repeat exercise
                                </span>
                            </router-link>
                        </div>

                        <div>
                            <router-link to="/">
                                <span
                                    class="bg-teal-600 text-white px-4 py-2 rounded-lg w-full hover:bg-teal-700 block text-center"
                                    @click="moveToNext">
                                    Go to next exercise
                                </span>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>

            <span class="text-gray-600" v-if="currentStep < (exercise.steps.length)">{{ currentStep +1 }}/{{ exercise.steps.length }}</span>
        </div>

        <div class="bg-gray-100 rounded-lg px-2 py-2">
            <div class="flex mb-4">
                <div class="pr-1 w-full">
                    <button
                        class="bg-yellow-500 px-4 py-2 rounded-lg w-full hover:bg-yellow-600 disabled:opacity-75 disabled:cursor-not-allowed"
                        :disabled="currentStep == 0" @click="previousStep">Previous Step
                    </button>
                </div>
                <div class="pl-1 w-full">
                    <button
                        class="bg-yellow-500 px-4 py-2 rounded-lg w-full hover:bg-yellow-600 disabled:opacity-75 disabled:cursor-not-allowed"
                        :disabled="currentStep == (exercise.steps.length)" @click="nextStep">Next Step
                    </button>
                </div>
            </div>
            <div class="w-full block">
                <router-link to="/" class="w-full block">
                    <span class="bg-gray-400 px-4 py-2 rounded-lg w-full hover:bg-gray-500 block text-center">
                        Cancel Exercise
                    </span>
                </router-link>
            </div>
        </div>
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
            moveToNext() {
                if (this.$cookies.get("current-exercise") < (this.$route.params.id * 1 + 1)) {
                    this.$cookies.set("current-exercise", (this.$route.params.id * 1 + 1), 99999999);
                }
            }
        },
        mounted() {
            if (!this.$cookies.isKey("current-exercise") || this.$cookies.get("current-exercise") < this.$route.params.id) {
                this.$cookies.set("current-exercise", this.$route.params.id, 99999999);
            }
        },
        computed: {
            exercise() {
                return this.exercises.filter(exercise => exercise.id == this.id)[0]
            }
        }
    }
</script>

