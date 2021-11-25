# php-education

**Plan**
- Setup a repository for education project.
- Setup a basic tools (XDebug, PHPCS(linter), PHPUnit, Composer).
- Discuss with team on meeting a project architecture / structure ( DI, Routing, Access, DB, ect. ) + split tasks/works.
- Create initial architecture ( DI + Container, Routing ).
- Create a simple DB ( Create "Facade" to operate with it ).
- Create some services - will discuss on team meeting ( Use "Factory" or didn't create any services ).
- Bonus: Сover the project with tests ( Integration tests + Unit tests ).
- Bonus: Setup/Investigate "rector" framework for our project. ( Discuss with team what we could refactor by them ).
- Bonus: Refactor project by "rector" framework + bonus -> writing a custom rule for "rector" usage.

## Setup environment
Install docker for your system from here - https://docs.docker.com/get-docker/

Launch Docker, and run in the root directory of the project:
```
docker-compose up
```

If you want to run containers in the detach mode (e.g. hidden), run:
```
docker-compose up -d
```

To get access to the database shell instance in the container, in the separate terminal run:
```
docker exec -it mysql-5.7-container bash
```

Login to mysql account from the bash:
```
mysql -u custom_db_user -p1111
```

Now your are able to perform MySQL commands, such as show databases:
```
show databases;
```

To quit from the mysql shell, run:
```
quit
```
or
```
exit
```

To quit from the container, run:
```
exit
```

### Additional mysql commands inside mysql shell

Switch to current database
```
use custom_db;
```

Show tables in selected database
```
show tables;
```

Show table properties format
```
describe users;
```

Details: https://hub.docker.com/_/mysql

About configuring nginx - https://nginx.org/ru/docs/http/request_processing.html

### Database users schema

Create table with users before launching the app ( using phpMyAdmin or mysql shell )

CREATE TABLE users (
    user_id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_firstname varchar(30) NOT NULL,
    user_lastname varchar(30) NOT NULL,
    user_email varchar(30) NOT NULL,
    user_password longtext NOT NULL
);

INSERT INTO users (user_firstname, user_lastname, user_email, user_password) VALUES ('John', 'Doe', 'mail@mail.com', '$2y$10$4Ut79MYAlpjZiHNrZYhXXeGhnhC.o/j105ChCO/7j8Z6vVnBftlNy');

Hashed password is ** 1111 **

** Table schema: **

| Field | Type | Null | Key | Default | Extra |
| ------ | ------ | ------ | ------ | ------ | ------ |
| user_id | int(11) | NO | PRI | NULL | auto_increment |
| user_firstname | varchar(30) | NO | | NULL |
| user_lastname  | varchar(30) | NO | | NULL |
| user_email | varchar(30) | NO | | NULL |
| user_password | longtext | NO | | NULL |


** phpMyAdmin container running on address: **
```
http://localhost:8081/
```

```
Server: mysql
User = custom_db_user
Password = 1111
```

TODO: implement error rendering and additional data sanitize
