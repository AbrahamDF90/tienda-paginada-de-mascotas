Primero arrancamos con el proyecto tienda de mascotas, agregaremos la base de datos, haremos las migraciones, los controladores, rutas y controlaremos comandos con postman.

En segundo lugar creamos la migracion pet, editamos el up, migramos, editamos el modelo pet, editamos el controlador, registramos la ruta, creamos la vista create.blade e index.blade (paginadas las vistas), finalmente creamos el factory y seeders para editarlos para la ocasion.

Actualice el php y el composer lo que genero muchos problemas y atrasos pero ya esta por fin

En cuarto lugar creamos el layuot, creando la carpeta y el archivo app.blade.php dentro, luego cargamos dicho archivo con codigo. creamos el archivo css, primero creando en public la carpeta css y dentro el archivo style.css, luego cargamos la configuracion de css alli con codigo. Modificamos la vista create.blade.php y el index.blade.php.

Por ultimo cambiaremos incluiremos en el paginado filtros con diseño. Modificamos el deadme del pet controler. Agregamos el buscador en la vista index.blade.php y editamos la tabla.

Modificamos la vista app.blade.php para que meta los estilos

Finalmente corregimos un error que paso al estar desactualizado el archivo subido al aula, por lo que ahora con las correcciones correspondientes funciona todo.

Despues de clonar el proyecto,ejecutar el composer y migraciones, es necesario abrir powershell ubicarse dentro del proyecto e ingresar el comando "npm.cmd run dev". Luego recien ejecutamos el comando "php artisan serve" en la terminal de visual y abrimos el URL corrrespondiete (http://127.0.0.1:8000/mascotas)