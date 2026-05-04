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
    <link rel="stylesheet" href="css/styles.css">
    <!-- Vue 3 desde CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
</head>
<body>
    <div id="app">
        <!-- Vista principal -->
        <header class="header">
            <h1><?php echo $pageTitle; ?></h1>
            <p class="subtitle">Datos curiosos sobre el legendario Chuck Norris</p>
            <p class="server-info">Servido por Apache (PHP <?php echo phpversion(); ?>) &middot; <?php echo $generatedAt; ?></p>
        </header>

        <main class="container">
            <!-- Estado de carga -->
            <div v-if="loading" class="status loading">Cargando bromas desde el servidor...</div>

            <!-- Estado de error -->
            <div v-else-if="error" class="status error">
                Ocurrió un error al cargar las bromas: {{ error }}
            </div>

            <!-- Vista hija que recibe los datos por herencia (props) -->
            <jokes-list v-else :jokes="chuck"></jokes-list>
        </main>

        <footer class="footer">
            <p>Hecho con Vue 3 + PHP &mdash; ChuckJokesVue</p>
        </footer>
    </div>

    <script src="js/app.js"></script>
</body>
</html>
