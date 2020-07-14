<template>
    <div>
        <div class="mb-4">
            <div class="bg-white rounded-lg p-4 shadow-md" v-if="maxId">
                <router-link :to="{name: 'exercise', params: {id: (maxId*1+1)}}">
                    Start Exercise {{ maxId*1 + 1 }}
                </router-link>
            </div>

            <div v-else>
                <div class="bg-white rounded-lg p-4 shadow-md">
                    <h3 class="text-2xl">Teach Your Dog To Relax</h3>
                    <p>CalmDog teaches you how to train your dog to calm down.</p>

                    <div class="mt-4">
                        <router-link to="/how-it-works">
                        <span class="bg-yellow-500 px-4 py-2 rounded-lg w-full hover:bg-yellow-600">
                            How it works
                        </span>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg p-4 shadow-md mb-4">
            <h3 class="text-xl">Exercises</h3>
            <ul>
                <li v-for="exercise in exercises">
                    <router-link :to="{name: 'exercise', params: {id: exercise.id}}">
                        {{ exercise.name }}
                    </router-link>
                </li>
            </ul>
        </div>

        <div class="mb-4 text-center">
            <button class="bg-gray-400 hover:bg-gray-600 px-2 py-1 rounded-lg" @click="resetProgress">Reset Progress
            </button>
        </div>
    </div>
</template>

<script>
    import exercises from "../exercises";

    export default {
        data() {
            return {
                exercises: exercises.exercises,
                maxId: this.$cookies.get('max-exercise')
            }
        },
        methods: {
            resetProgress() {
                $cookies.remove('max-exercise');
                location.reload();
            }
        }
    }
</script>
