
Activity 7 – Robotics School Database

Descripción
Este proyecto consiste en el diseño y desarrollo de una base de datos para una pequeña escuela de robótica, utilizando Laravel. El sistema permite organizar usuarios, grupos de estudiantes, cursos, kits de robótica y materiales didácticos.

Tecnologías utilizadas
- Laravel 12.71.0
- PHP 8.2
- MySQL
- Git y GitHub

Estructura de la base de datos
Se crearon las siguientes entidades:

- Users: almacena los usuarios y sus roles (estudiante, maestro y administrador).
- Groups: contiene los grupos de estudiantes.
- Courses: almacena la información de los cursos.
- Kits: registra los kits de robótica.
- Didactic Materials: almacena los materiales de cada curso.
- Course Group: relaciona los grupos con los cursos asignados.

Se configuraron las relaciones entre las entidades mediante claves primarias y foráneas.

 Datos iniciales
Se agregaron los tres grupos iniciales (beginner, intermediate y advanced), los tres kits de robótica y los cuatro cursos proporcionados en el caso.

 Archivos incluidos
- `diagrama_er.png`: diagrama entidad-relación.
- `activity7.sql`: exportación de la base de datos.

 Repositorio
[Agregar aquí la URL de GitHub]

 Nota
Se utilizó Laravel 12.71.0 debido a la compatibilidad con la versión de PHP instalada en el entorno de desarrollo.