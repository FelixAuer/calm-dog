<template>
    <div>
        <div class="mb-4">

            <div class="bg-white rounded-lg p-4 shadow-md">
                <h3 class="text-2xl mb-2">How It Works</h3>
                <p class="mb-4">KalmKanine uses CanineBehaviorScience.com's <a class="text-yellow-600"
                                                                            href="https://www.caninebehaviorscience.com/relaxation-protocol/">"Relaxation
                    Protocol"</a> to help you train your dog to relax.</p>
                <p class="mb-4">The protocol consists of 15 sets of exercises that systematically teach your dog learn to relax
                    while "weird"
                    things happen around them. A session works like this:</p>
                <ul class="list-inside list-disc mb-4">
                    <li>Start your dog in a sit or a down.</li>
                    <li>Follow the instructions on the screen.
                    </li>
                    <li>If your dog stays in their position calmly reward them
                        with a treat and a little praise.
                    </li>
                    <li>Repeat until the session is done.</li>
                </ul>

                <h4 class="text-xl mb-2">If The Dog "Breaks"</h4>
                <p class="mb-4">
                    If your dog goes from a down to a sit, or stands up stop the exercise.
                </p>
                <p class="mb-4">
                    If you finished more than half of the steps repeat the exercise tomorrow. Otherwise take a break and
                    try again later.
                </p>

                <h4 class="text-xl mb-2">Take It Slow</h4>
                <p class="mb-4">
                    Don't rush the exercises. The goal is not to train your dog to stay but to relax.
                </p>
                <p class="mb-4">
                    For best results we recommend you read the full explanation on <a class="text-yellow-600"
                                                                                             href="https://www.caninebehaviorscience.com/relaxation-protocol/">caninebehaviorscience.com</a>.
                </p>
                <p class="mb-4"> They developed the protocol, this website only aims to provide a convenient interface
                    for you and
                    your dog.
                </p>
                <h4 class="text-xl mb-2">Ready To Go?</h4>

                <div class="mt-4">
                    <router-link :to="{name: 'exercise', params: {id: 1}}">
                        <span class="bg-yellow-500 px-4 py-2 rounded-lg w-full hover:bg-yellow-600">
                        Start first exercise
                        </span>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {}
</script>
