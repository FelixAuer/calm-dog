<template>
    <div>
        <p>{{ currentTime }} Seconds</p>
        <button v-if="running || finished" @click="reset">Reset</button>
        <button v-else @click="start">Start</button>
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
        methods: {
            reset(){
                this.running = false;
                this.currentTime = this.time;
                this.finished = false;
                clearInterval(this.interval);
            },
            start(){
                this.running = true;
                let self = this;
                this.interval = setInterval(function() {
                    self.currentTime--;
                    if (self.currentTime == 0){
                        self.running = false;
                        self.finished = true;
                        clearInterval(self.interval);
                    }
                }, 1000);
            }
        },
    }
</script>
