---

# Práctica PHP con Laravel

Este proyecto es un ejemplo básico de una aplicación desarrollada con **Laravel** y **Filament 4.0**, que implementa un panel administrativo para la gestión de productos.
Incluye la creación del modelo `Product`, su migración y el recurso correspondiente en Filament.

---

## Requisitos

Antes de comenzar, asegúrate de tener instalado lo siguiente:

* PHP >= 8.2
* Composer >= 2.5
* MariaDB >= 10.5
* Node.js >= 18 y NPM

---

## Instalación del proyecto

### 1. Creación del proyecto Laravel

Ejecutar el siguiente comando para crear un nuevo proyecto con el instalador de Laravel:

```
laravel new PracticaPHP
```

Ingresar al directorio del proyecto:

```
cd PracticaPHP
```

Una vez creado el proyecto, instalar las dependencias de frontend y compilar los recursos:

```
npm install
npm run build
```

---

### 2. Configuración del entorno

Renombrar el archivo `.env.example` a `.env` y configurar los valores de conexión a la base de datos MariaDB.

Ejemplo de parámetros que deben ajustarse:

* Nombre de la base de datos
* Usuario
* Contraseña
* Puerto (por defecto 3306)

Generar la clave de la aplicación:

```
php artisan key:generate
```

---

## Instalación de Filament 4.0

Instalar Filament :

```
composer require filament/filament:"^4.0"

php artisan filament:install --panels
```

Esto creará los archivos necesarios y habilitará el acceso al panel en la ruta `/admin`.

---

## Creación del modelo y migración

Generar el modelo `Product` junto con su migración:

```
php artisan make:model Product -m
```

Luego de definir las columnas requeridas en la migración (ver documentación del proyecto), ejecutar las migraciones:

```
php artisan migrate
```

---

## Creación del recurso de Filament

Crear el recurso Filament para el modelo `Product`:

```
php artisan make:filament-resource Product
```

Este comando generará los archivos del recurso en el directorio `app/Filament/Resources/`.

En ellos se pueden definir los campos del formulario, las columnas de la tabla y las acciones del CRUD.
La configuración de dichos elementos se documenta por separado.

---

## Ejecución del proyecto

Iniciar el servidor de desarrollo:

```
php artisan serve
```

Acceder a la aplicación en el navegador mediante la dirección:

```
http://127.0.0.1:8000
```

Para acceder al panel de administración de Filament:

```
http://127.0.0.1:8000/admin
```

Iniciar sesión con el usuario creado durante la instalación de Filament.

---

## Comandos útiles

Ejecutar migraciones:

```
php artisan migrate
```
