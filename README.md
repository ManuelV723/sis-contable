# SIS Contable

Aplicación web construida con Laravel 12, Livewire y Vite.

## Requisitos

- Git
- PHP 8.2 o superior, con la extensión PDO SQLite habilitada (para la configuración predeterminada)
- Composer
- Node.js y npm

En Windows puedes usar PHP desde XAMPP; instala Composer y Node.js por separado. Asegúrate de que PHP, Composer y Node.js estén disponibles en `PATH`. Comprueba las herramientas antes de empezar:

```powershell
php -v
composer --version
node -v
npm -v
```

## Instalación y configuración

1. Clona el repositorio y entra en la carpeta del proyecto:

   ```powershell
   git clone https://github.com/ManuelV723/sis-contable.git
   cd sis-contable
   ```

2. Crea el archivo de base de datos SQLite. El archivo no está incluido en el repositorio:

   ```powershell
   if (-not (Test-Path database\database.sqlite)) {
       New-Item -ItemType File -Path database\database.sqlite
   }
   ```

3. Ejecuta el script de configuración del proyecto:

   ```powershell
   composer run setup
   ```

   Este comando instala las dependencias de PHP y JavaScript, crea `.env` a partir de `.env.example` si aún no existe, genera la clave de la aplicación, ejecuta las migraciones y compila los recursos del frontend.

4. Inicia el servidor de desarrollo:

   ```powershell
   composer run dev
   ```

   Cuando los servicios terminen de iniciar, abre [http://localhost:8000](http://localhost:8000). Mantén esta terminal abierta mientras trabajas; pulsa `Ctrl+C` para detenerlos.

## Base de datos

La configuración inicial usa SQLite y la ruta predeterminada `database/database.sqlite`. Si necesitas volver a ejecutar las migraciones:

```powershell
php artisan migrate
```

Para utilizar MySQL, crea primero una base de datos vacía, cambia `DB_CONNECTION` a `mysql` en `.env` y configura `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD`. Después, ejecuta:

```powershell
php artisan migrate
```

No compartas ni subas el archivo `.env`; contiene la configuración local y la clave de la aplicación.

## Pruebas

Para ejecutar las pruebas automatizadas:

```powershell
composer run test
```
