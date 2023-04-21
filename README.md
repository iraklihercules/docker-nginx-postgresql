# Docker Nginx Template #

This is a Docker infrastructure template with `Nginx` `PHP-FPM` `PostgreSQL` and `pgAdmin` services.


### To configure pgAdmin ###

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
