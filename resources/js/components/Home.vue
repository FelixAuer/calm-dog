<template>
    <div>
        <div class="mb-4">
            <div class="bg-white rounded-lg p-4 shadow-md" v-if="maxId">
                <router-link :to="{name: 'exercise', params: {id: (maxId*1+1)}}">
                    Start Exercise {{ maxId*1 + 1 }}
                </router-link>
            </div>
            <div class="bg-white rounded-lg p-4 shadow-md" v-else>
                <router-link :to="{name: 'exercise', params: {id: 1}}">
                    Start first exercise
                </router-link>
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
            <button class="bg-gray-400 hover:bg-gray-600 px-2 py-1 rounded-lg" @click="resetProgress">Reset Progress</button>
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
