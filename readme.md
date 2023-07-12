# Proyecto de login con PHP

Este es un sistema básico de inicio de sesión desarrollado en PHP. Proporciona una forma sencilla de autenticar a los usuarios y proteger el acceso a determinadas áreas de tu aplicación web.

## Características principales

- Registro de usuarios: Los usuarios pueden crear nuevas cuentas con un nombre de usuario y una contraseña.
- Inicio de sesión seguro: Las contraseñas se almacenan en forma de hash utilizando el algoritmo de hash bcrypt para mayor seguridad.
- Protección contra ataques de fuerza bruta: Se implementa un mecanismo de bloqueo de cuenta después de un número determinado de intentos de inicio de sesión fallidos.
- Gestión de sesiones: Los usuarios inician sesión y se mantiene su sesión activa durante su interacción con la aplicación.
- Protección contra ataques XSS: Se aplican medidas de seguridad para prevenir ataques de script entre sitios (XSS).
- Validación de datos: Se realizan validaciones en el formulario de registro para garantizar la integridad de los datos ingresados.

## Requisitos

- PHP 7.0 o superior.
- Servidor web compatible con PHP (en mi caso ampps).
- Base de datos MySQL para almacenar la información de los usuarios.

## Imagenes

### Registro
![Registro](https://raw.githubusercontent.com/UpperErik/loginPHP/master/readme/registro.png)

### Inicio de sesion 
![Registro](https://raw.githubusercontent.com/UpperErik/loginPHP/master/readme/inicioSesion.png)

### Panel usuario
![Registro](https://raw.githubusercontent.com/UpperErik/loginPHP/master/readme/panelUsr.png)

