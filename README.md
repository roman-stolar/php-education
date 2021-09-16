# php-education

**Plan**
- Setup a repository for education project.
- Setup a basic tools (XDebug, PHPCS(linter), PHPUnit, Composer).
- Discuss with team on meeting a project architecture / structure ( DI, Routing, Access, DB, ect. ) + split tasks/works.
- Create initial architecture ( DI + Container, Routing ).
- Create a simple DB ( Create "Facade" to operate with it ).
- Create some services - will discuss on team meeting ( Use "Factory" or didn't create any services ).
- Сover the project with tests ( Integration tests + Unit tests ).
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
docker exec -it docker-php-nginx-setup_mysql_1 bash
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

To quit from the container, run:
```
exit
```

Details: https://hub.docker.com/_/mysql
