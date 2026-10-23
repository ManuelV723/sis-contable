# 📊 Sistema Contable (ContaSys)

Sistema de gestión financiera desarrollado con **Laravel**, **Livewire**, y **Tailwind CSS**, diseñado para el control de ingresos, egresos, impuestos, planillas y resúmenes mensuales.

---

## 🚀 Guía de Instalación y Configuración Local

Sigue estos pasos para clonar el repositorio y poner la aplicación en marcha en tu entorno local.

### Prerrequisitos
Asegúrate de tener instalado en tu sistema:
* **PHP** (versión 8.2 o superior)
* **Composer**
* **Node.js y NPM**
* **MySQL** o MariaDB

---

### Paso 1: Clonar el repositorio
Abre tu terminal y ejecuta el siguiente comando para clonar el proyecto (reemplaza la URL con la de tu repositorio):

```bash
git clone https://github.com/tu-usuario/nombre-de-tu-repositorio.git
cd nombre-de-tu-repositorio
```

---

### Paso 2: Instalar dependencias de PHP (Composer)
Instala los paquetes necesarios del backend de Laravel:

```bash
composer install
```

---

### Paso 3: Configurar el archivo de entorno (`.env`)
1. Duplica el archivo de configuración de ejemplo:
   ```bash
   cp .env.example .env
   ```
2. Genera la llave de encriptación de la aplicación:
   ```bash
   php artisan key:generate
   ```
3. Abre el archivo `.env` en tu editor de código y configura los datos de acceso a tu base de datos:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario_db
   DB_PASSWORD=tu_contraseña_db
   ```

---

### Paso 4: Ejecutar las migraciones
Crea las tablas correspondientes en tu base de datos ejecutando:

```bash
php artisan migrate
```

---

### Paso 5: Instalar dependencias de Frontend (NPM)
Instala las librerías de Node.js para compilar Tailwind CSS:

```bash
npm install
```

---

### Paso 6: Ejecutar la aplicación
Para levantar el entorno de desarrollo local, necesitarás **dos terminales** activas simultáneamente:

* **Terminal 1 (Compilador de Assets en tiempo real - Vite):**
  ```bash
  npm run dev
  ```

* **Terminal 2 (Servidor Local de Laravel):**
  ```bash
  php artisan serve
  ```

---

### 🎉 ¡Listo!
Una vez ejecutados los comandos anteriores, abre tu navegador y entra a la dirección proporcionada por Laravel (usualmente `http://127.0.0.1:8000/dashboard`).