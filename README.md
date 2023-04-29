# Docker Nginx Template #

This is a basic Docker template with `Nginx` `PHP-FPM` `PostgreSQL` and `pgAdmin` services.


### 1. What the app does ###

1. Creates a table
2. Inserts an user
3. Gets the user back
4. Displays the user

```
# Final results:
Array
(
    [username] => John Doe
    [email] => john.doe@example.com
    [created_on] => {creation_date}
)
```


### 2. Software requirements ###

* [Git](https://git-scm.com/)
* [Docker](https://www.docker.com/)
* [Docker Compose](https://docs.docker.com/compose/)


### 3. How to run the project ###

* Clone the repository
* Enter the project directory
* Run `docker-compose up -d` or `make up`
(Make command may require installation).


* Website - [http://localhost:8080](http://localhost:8080)
* PgAdmin - [http://localhost:8081](http://localhost:8081)


### 4. PgAdmin configuration ###

1. Go to the [http://localhost:8081/](http://localhost:8081/)
2. Enter with username `irakli@example.com` and password `test`
3. Create new server
```
# 1. Click 'Add New Server' button

# 2. Use this details:

General:
    Name: {server_name}
Connection:
    Host name: postgres
    Username: test
    Password: test
```

That's all, happy coding!
