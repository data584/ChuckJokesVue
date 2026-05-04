# ChuckJokesVue

Aplicación construida con **Vue 3** y **PHP** (servida por Apache de XAMPP / WAMP / MAMP / LAMP / Laragon) que muestra una lista de bromas de Chuck Norris.

La aplicación tiene una **vista principal** (`index.php`) y un **componente hijo** (`jokes-list`) que recibe los datos por **herencia (props)** desde la instancia principal de Vue. Los datos se obtienen desde un endpoint **PHP** (`api/jokes.php`) mediante `fetch`.

## Tecnologías

- HTML5 / CSS3
- **Vue 3** (cargado vía CDN)
- **PHP** (servido por Apache: XAMPP / WAMP / MAMP / LAMP / Laragon)
- `.htaccess` para configuración del servidor

## Estructura del proyecto

```
ChuckJokesVue/
├── index.php           → Vista principal (renderizada por PHP/Apache)
├── api/
│   └── jokes.php       → Endpoint que devuelve los datos en JSON
├── css/
│   └── styles.css      → Hoja de estilos
├── js/
│   └── app.js          → Instancia Vue + componente hijo (props)
├── .htaccess           → Configuración Apache
├── .gitignore
└── README.md
```
