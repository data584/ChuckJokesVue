// =====================================================
//  ChuckJokesVue - Aplicación Vue 3
//  Vista principal + componente hijo (herencia por props)
// =====================================================

// Componente hijo: recibe los datos por herencia (props) desde la instancia principal
const JokesList = {
    props: {
        jokes: {
            type: Array,
            required: true
        }
    },
    template: `
        <ul class="jokes-list">
            <li v-for="(joke, index) in jokes" :key="index" class="joke-card">
                <img :src="joke.icon_url" :alt="'Chuck Norris ' + (index + 1)" class="joke-avatar">
                <div class="joke-content">
                    <span class="joke-number">#{{ index + 1 }}</span>
                    <p class="joke-text">{{ joke.value }}</p>
                </div>
            </li>
        </ul>
    `
};

// Instancia principal de Vue
const app = Vue.createApp({
    data() {
        return {
            chuck: [],
            loading: true,
            error: null
        };
    },
    methods: {
        async fetchJokes() {
            this.loading = true;
            this.error = null;
            try {
                // Consume el endpoint PHP servido por Apache
                const response = await fetch("api/jokes.php");
                if (!response.ok) {
                    throw new Error("HTTP " + response.status);
                }
                const data = await response.json();
                this.chuck = data.chuck || [];
            } catch (err) {
                this.error = err.message;
                console.error("Error al cargar las bromas:", err);
            } finally {
                this.loading = false;
            }
        }
    },
    mounted() {
        this.fetchJokes();
    }
});

// Registrar componente hijo
app.component("jokes-list", JokesList);

// Montar la aplicación
app.mount("#app");
