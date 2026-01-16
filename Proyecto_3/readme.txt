------------------------------------------------------
ESTRUCTURA DEL PROYECTO
------------------------------------------------------

Proyecto_3/
│
├── css/
│ └── styles.css # Estilos del proyecto
│
├── UserManager/
│ ├── login.php # Formulario de login
│ ├── logout.php # Cierre de sesión
│ ├── registro.php # Formulario de registro
│ ├── bienvenido.php # Página tras iniciar sesión
│ ├── procesar_login.php # Lógica de login
│ └── procesar_registro.php# Lógica de registro
│
├── admin/
│ ├── dashboard.php # Panel principal
│ ├── list.php # Listado de usuarios
│ ├── create.php # Crear usuario
│ ├── edit.php # Editar usuario
│ ├── delete.php # Eliminar usuario
│ ├── procesar_create.php # Procesar creación
│ └── procesar_edit.php # Procesar edición
│
├── configuraciones/
│ ├── db.php # Conexión a la base de datos
│ └── auth.php # Funciones de autenticación
│
├── index.php # Página principal
└── README.md # Documentación del proyecto

------------------------------------------------------
EXPLICACION DE CADA ARCHIVO
------------------------------------------------------

---ESTRUCTURA PRINCIPAL---

-index.php
Página de inicio principal del sitio web. Muestra el contenido inicial y sirve como punto de entrada.

-README.md
Documentación del proyecto con instrucciones de instalación, uso y descripción general.

---CARPETAS PRINCIPALES---

css/
-styles.css
Archivo principal de estilos CSS que define la apariencia visual de todo el sitio web.

UserManager/
-login.php
Formulario de inicio de sesión donde los usuarios ingresan sus credenciales (usuario y contraseña).

-registro.php
Formulario de registro para que nuevos usuarios creen una cuenta en el sistema.

-bienvenido.php
Página de bienvenida que se muestra después de un inicio de sesión exitoso.

-procesar_login.php
Lógica del backend que verifica las credenciales del usuario contra la base de datos.

-procesar_registro.php
Procesa la creación de nuevas cuentas de usuario, validando datos y almacenándolos en la base de datos.

-logout.php
Script que cierra la sesión del usuario actual y lo redirige al inicio de sesión.

admin/
-dashboard.php
Panel de control principal para administradores, muestra estadísticas y acceso rápido.

-list.php
Listado completo de usuarios registrados en el sistema con opciones de gestión.

-create.php
Formulario para que administradores creen nuevos usuarios manualmente.

-edit.php
Formulario para editar información de usuarios existentes.

-delete.php
Script que elimina usuarios del sistema (generalmente con confirmación previa).

-procesarOK_create.php
Procesa la creación de usuarios desde el panel de administración.

-procesarOK_edit.php
Procesa las actualizaciones de información de usuarios.

configuraciones/
-db.php
Archivo de configuración de conexión a la base de datos. Contiene credenciales y parámetros de conexión.

-auth.php
Funciones de autenticación y autorización, incluye validación de sesiones, permisos y seguridad.

------------------------------------------------------
REDIRECCIONES
------------------------------------------------------

1. Usuario no registrado: index.php - registro.php - procesar_registro.php

2. Usuario registrado: login.php - procesar_login.php - bienvenido.php

3. Administrador: login.php - procesar_login.php - admin/dashboard.php

4. Cerrar sesión: Cualquier página - logout.php - login.php