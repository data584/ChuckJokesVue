<?php
// Vista principal servida por Apache (XAMPP/WAMP/MAMP/LAMP/Laragon)
$pageTitle = "Chuck Jokes Vue";
$generatedAt = date("d/m/Y H:i:s");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Bootstrap 5 desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Vue 3 desde CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
</head>
<body>
    <div id="app">
        <!-- Vista principal -->
        <header class="header text-center text-white py-4 py-md-5 px-3">
            <h1 class="display-5 display-md-4 fw-bold"><?php echo $pageTitle; ?></h1>
            <p class="lead d-none d-sm-block">Datos curiosos sobre el legendario Chuck Norris</p>
            <p class="server-info">Servido por Apache (PHP <?php echo phpversion(); ?>) &middot; <?php echo $generatedAt; ?></p>
        </header>

        <main class="container my-5">
            <!-- Estado de carga -->
            <div v-if="loading" class="alert alert-info text-center">
                Cargando bromas desde el servidor...
            </div>

            <!-- Estado de error -->
            <div v-else-if="error" class="alert alert-danger text-center">
                Ocurrió un error al cargar las bromas: {{ error }}
            </div>

            <!--
                Distribución responsive con clases de Bootstrap:
                  - col-12          → 1 card por fila en pantallas pequeñas (<576px)
                  - col-sm-12       → 1 card por fila en pantallas sm  (≥576px)
                  - col-md-6        → 2 cards por fila en pantallas md  (≥768px)
                  - col-lg-4        → 3 cards por fila en pantallas lg  (≥992px) → 3 + 2
            -->
            <div v-else class="row g-4 justify-content-center">
                <div
                    v-for="(joke, index) in chuck"
                    :key="index"
                    class="col-12 col-sm-12 col-md-6 col-lg-4"
                >
                    <!-- Componente <chuck-card> recibe icon_url y value por props -->
                    <chuck-card
                        :icon_url="joke.icon_url"
                        :value="joke.value"
                    ></chuck-card>
                </div>
            </div>
        </main>

        <footer class="footer text-center text-white py-3">
            <p class="mb-0">Hecho con Vue 3 + Bootstrap + PHP &mdash; ChuckJokesVue</p>
        </footer>
    </div>

    <script src="js/app.js"></script>
</body>
</html>
