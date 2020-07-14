<template>
    <div class="text-base">
        <p v-if="currentTime > 0">{{ currentTime }} Seconds</p>
        <p v-else>Finished!</p>
        <button class="bg-yellow-500 hover:bg-yellow-600 px-2 py-1 rounded-lg" v-if="running || finished"
                @click="reset">Reset
        </button>
        <button class="bg-yellow-500 hover:bg-yellow-600 px-2 py-1 rounded-lg" v-else @click="start">Start Timer</button>
    </div>
</template>

<script>
    export default {
        props: ['time'],
        data() {
            return {
                currentTime: this.time,
                running: false,
                finished: false,
                interval: null,
            }
        },
        watch: {
            time() {
                this.reset();
            }
        },
        methods: {
            reset() {
                this.running = false;
                this.currentTime = this.time;
                this.finished = false;
                clearInterval(this.interval);
            },
            start() {
                this.running = true;
                let self = this;
                this.interval = setInterval(function () {
                    self.currentTime--;
                    if (self.currentTime == 0) {
                        self.running = false;
                        self.finished = true;
                        window.navigator.vibrate(200);
                        clearInterval(self.interval);
                    }
                }, 1000);
            }
        },
    }
</script>
