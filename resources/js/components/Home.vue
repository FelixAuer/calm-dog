<template>
    <div class="container">
        <div v-if="maxId">
            <router-link :to="{name: 'exercise', params: {id: (maxId*1+1)}}">
                Next Exercise
            </router-link>
        </div>
        <ul>
            <li v-for="exercise in exercises">
                <router-link :to="{name: 'exercise', params: {id: exercise.id}}">
                    {{ exercise.name }}
                </router-link>
            </li>
        </ul>
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
        }
    }
</script>
