 Activity 7 – Robotics School Database

 Project name
Robotics School – Activity 7

 Project description
This project consists of designing and developing a database for a small robotics school using Laravel 12.71.0, PHP 8.2 and MySQL.

The database manages users with different roles (Administrative, Teacher and Student), student groups, courses, robotics kits and didactic materials.

 ER Diagram

The following diagram shows the entities and relationships of the database.

[ER Diagram](diagrama_er.png)

 Database information

The project includes the following entities:

- Users: stores users and their roles.
- Groups: manages student groups.
- Courses: stores course information.
- Kits: stores robotics kits.
- Didactic Materials: stores course learning materials.
- Course Group: connects groups with their assigned courses.

Test data

The database includes:
- 3 users: Administrative, Teacher and Student.
- 3 robotics kits: StarterKit, Educational Robotics Kit and Kit5.
- 3 initial groups: beginner, intermediate and advanced.
- 4 original courses provided by the client.
- 100 additional courses generated using Laravel Factory and FakerPHP.

 Technologies used
- Laravel 12.71.0
- PHP 8.2
- MySQL
- Git and GitHub


Database export
The SQL database export is included in the project as `activity7.sql`.