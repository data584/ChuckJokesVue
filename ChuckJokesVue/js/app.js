// Componente hijo <chuck-card>
// Recibe los datos por props: icon_url y value
const ChuckCard = {
    props: {
        icon_url: {
            type: String,
            required: true
        },
        value: {
            type: String,
            required: true
        }
    },
    template: `
        <div class="card h-100 shadow-sm chuck-card">
            <img
                :src="icon_url"
                class="card-img-top chuck-card-img"
                alt="Chuck Norris"
            >
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">Chuck Norris</h5>
                <p class="card-text text-center flex-grow-1">{{ value }}</p>
            </div>
        </div>
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

// Registrar componente <chuck-card>
app.component("chuck-card", ChuckCard);

// Montar la aplicación
app.mount("#app");
