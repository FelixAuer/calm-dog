import Home from './components/Home'
import About from './components/About'
import Exercise from './components/Exercise'
import HowItWorks from "./components/HowItWorks";

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/exercise/:id',
            component: Exercise,
            name: 'exercise'
        },
        {
            path: '/how-it-works',
            component: HowItWorks,
        }
    ]
}
