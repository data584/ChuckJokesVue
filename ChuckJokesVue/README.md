# ChuckJokesVue

Aplicación construida con **Vue 3 + Bootstrap 5 + PHP** (servida por Apache de XAMPP / WAMP / MAMP / LAMP / Laragon) que muestra una galería de bromas de Chuck Norris en tarjetas estilo Bootstrap.

## Tecnologías

- HTML5 / CSS3
- **Vue 3** (CDN)
- **Bootstrap 5** (CDN)
- **PHP** (servido por Apache)

## Estructura del proyecto

```
ChuckJokesVue/
├── index.php           → Vista principal (renderizada por PHP/Apache)
├── api/
│   └── jokes.php       → Endpoint que devuelve los datos en JSON
├── css/
│   └── styles.css      → Estilos personalizados (complementan Bootstrap)
├── js/
│   └── app.js          → Instancia Vue + componente <chuck-card>
├── .htaccess           → Configuración Apache
├── .gitignore
└── README.md
```

## Cómo se ven las tarjetas

**Escritorio (≥992px):**
```
┌─────────┐ ┌─────────┐ ┌─────────┐
│  Card 1 │ │  Card 2 │ │  Card 3 │   ← Primera fila (3)
└─────────┘ └─────────┘ └─────────┘

       ┌─────────┐ ┌─────────┐
       │  Card 4 │ │  Card 5 │       ← Segunda fila (2)
       └─────────┘ └─────────┘
```

**Tablet (≥768px):**
```
┌─────────┐ ┌─────────┐
│  Card 1 │ │  Card 2 │
└─────────┘ └─────────┘
┌─────────┐ ┌─────────┐
│  Card 3 │ │  Card 4 │
└─────────┘ └─────────┘
     ┌─────────┐
     │  Card 5 │
     └─────────┘
```

**Móvil (<768px):**
```
┌─────────┐
│  Card 1 │
└─────────┘
┌─────────┐
│  Card 2 │
└─────────┘
┌─────────┐
│  Card 3 │
└─────────┘
   ...
```
