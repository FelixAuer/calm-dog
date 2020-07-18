<template>
    <div>
        <div class="mb-4">
            <div class="bg-white rounded-lg p-4 shadow-md" v-if="maxId">
                <router-link :to="{name: 'exercise', params: {id: maxId}}">
                    <div class="flex content-center justify-between">
                        <div class="self-center">
                            <h3 class="text-2xl">Continue</h3>
                            <span>Exercise {{ maxId }}</span>
                        </div>
                        <div class="rounded-full self-center bg-yellow-500 inline-block px-2 py-2 leading-tight">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-right"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd"
                                      d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                    </div>
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
                <li class="py-1" v-for="exercise in exercises">
                    <router-link :to="{name: 'exercise', params: {id: exercise.id}}">
                        {{ exercise.name }}
                        <div class="inline" v-if="exercise.id < maxId">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check rounded-full bg-yellow-500 inline" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                        </svg>
                        </div>
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
                maxId: this.$cookies.get("current-exercise")
            }
        },
        methods: {
            resetProgress() {
                $cookies.remove("current-exercise");
                location.reload();
            }
        }
    }
</script>
