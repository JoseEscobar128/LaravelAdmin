<<<<<<< HEAD

# AdminLTE con Laravel

Este proyecto es una integración de **Laravel** con **AdminLTE**, proporcionando una interfaz de administración basada en Bootstrap.

## 📦 Instalación

Sigue estos pasos para configurar el proyecto en tu máquina local:

### 1️⃣ Clonar el repositorio

git clone https://github.com/tu_usuario/tu_repo.git
cd tu_repo

2️⃣ Instalar dependencias de Laravel
composer install

3️⃣ Instalar AdminLTE
composer require jeroennoten/laravel-adminlte
php artisan adminlte:install

4️⃣ Instalar Laravel UI y Bootstrap con autenticación
composer require laravel/ui
php artisan ui bootstrap --auth

5️⃣ Instalar y compilar assets con npm
npm install
npm run dev

6️⃣ Configurar la base de datos
Edita el archivo .env y configura la conexión con tu base de datos MySQL. Luego, ejecuta las migraciones:
php artisan migrate

7️⃣ Iniciar el servidor
php artisan serve

--------------------------------------------------------------------------------------------------------------------

🚀 Características


✔️ Interfaz de usuario basada en AdminLTE

✔️ Autenticación integrada con Laravel UI

✔️ Compatibilidad con Bootstrap

✔️ Soporte para migraciones y base de datos


--------------------------------------------------------------------------------------------------------------------


🛠 Requisitos Previos

Asegúrate de tener instalados:


PHP 8.x

Composer

Node.js

MySQL

Laravel Installer

--------------------------------------------------------------------------------------------------------------------

Este proyecto está bajo la Licencia MIT.


