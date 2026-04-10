# 🎬 Catálogo de Películas - Laravel

Este es un catálogo de películas desarrollado con el framework Laravel. El proyecto está diseñado como una aplicación web funcional que permite la exploración, filtrado y visualización detallada de títulos cinematográficos.

# 🚀 Requisitos Cumplidos:

* **Gestión de Datos** 
* **Layout Base Reutilizable**
* **Rutas y Controladores** 
* **Filtrado por Genero** 

## 📁 Estructura del Proyecto

Las partes más importantes de la lógica se encuentran en:

* `app/Http/Controllers/MovieController.php`: Contiene el array asociativo de películas y la lógica de filtrado/búsqueda.
* `routes/web.php`: Gestión de las rutas de la aplicación.
* `resources/views/layouts/app.blade.php`: Plantilla base con el diseño global.
* `resources/views/movies/`: Vistas específicas.

---

## ⚙️ Instalación y Uso Local

Sigue estos pasos para ejecutar el proyecto en tu computadora:

1. **Clonar el repositorio:**
   git clone [https://github.com/tu-usuario/nombre-del-repo.git](https://github.com/tu-usuario/nombre-del-repo.git)
2. **Instalar dependencias de PHP:**
   composer install
3. **Configurar el archivo de entorno:**
   cp .env.example .env
   php artisan key:generate
4. **Levantar el servidor local:**
   php artisan serve
5. **Acceso:**
   Abre tu navegador en http://127.0.0.1:8000

## Lógica de Filtrado y Uso de Colecciones:

public function index(Request $request)
{
    $movies = collect($this->movies);
    if ($request->has('genre')) {
        $movies = $movies->where('genre', $request->genre);
    }

    return view('movies.index', compact('movies'));
}

## Diferencia entre @extends y @component:
**@extends:** Se utiliza para la herencia de plantillas. Define el "esqueleto" o Layout base de la página (cabeceras, menús, pie de página). Ejemplo:
@section('content')
    <p>Este contenido se inyecta en el layout base.</p>
@endsection
**@component:** Se utiliza para crear piezas de interfaz independientes y reutilizables (botones, alertas, tarjetas) que pueden insertarse en cualquier lugar. Ejemplo:

@component('components.alert')
    @slot('type') success @endslot
    ¡La película se guardó correctamente!
@endcomponent

## Diferencia entre @foreach vs @forelse
**@foreach:** Recorre una colección y ejecuta el código por cada elemento.
**@forelse:** Es una versión mejorada que incluye un manejador de estado vacío. Permite definir qué mostrar si la colección no tiene elementos, evitando comprobaciones manuales con count() o if.

## Imagenes de funcionamiento:
<img width="1919" height="1012" alt="image" src="https://github.com/user-attachments/assets/9a9fe22b-5719-4b68-b9c7-8322d6201029" />
<img width="325" height="887" alt="image" src="https://github.com/user-attachments/assets/f1865d9b-8725-43e3-a555-c9a37cd4ed25" />

