comment-hall API
=======

comment-hall is a website where:

- you can comment every web page
- you comment other comment
- you can see what is fashion on the web

Download
--------

you can clone this repository

    git clone https://github.com/Jeremy3333/D-YOWL-API.git

Install
-------
go check https://github.com/Jeremy3333/D-YOW-100_2025_LYON-2---Digitek it's the front of the comment-hall

install dependencies with:

    composer install

 don't forget to change your database info in your .env file

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=[your database name]
    DB_USERNAME=[your mysql username]
    DB_PASSWORD=[your mysql password]

after that launche your API with:

    php artisan serve

 go to your navigateur with the link http://localhost:8000/

Route
-------

### GET /post

Purpose:

Return an array containing all the posts

 Request header:

    {
        "Content -Type": "application/json"
    }
Response:

    {
        "id": int,
        "title": string,
        "img": string
    }

### POST /post

Purpose:

Post a post

 Request header:

    {
        "Content -Type": "application/json"
    }

 Request body:

    {
        "title": string,
        "user": string,
        "link": string,
        "likes": int,
        "shares": int,
        "comment": string,
        "img": image encode into BASE64
    }

Response:

        successe


### GET /post/:id

Purpose:

Return a specifique post

 Request header:

    {
        "Content -Type": "application/json"
    }

Response:

    {
        "id": int,
        "title": string,
        "img": string
    }

### GET /users

Purpose:

Return all the users

 Request header:

    {
        "Content -Type": "application/json"
    }

Response:

    [
        {
            "id": int,
            "username": string,
            "email": string,
            "pdp": string
        }
    ]

### GET /users/:id

Purpose:

Return a specifique user

 Request header:

    {
        "Content -Type": "application/json"
    }

Response:

    {
        "id": int,
        "username": string,
        "email": string,
        "password": string,
        "pdp": string
    }

### POST /users

Purpose:

Return a specifique user

 Request header:

    {
        "Content -Type": "application/json"
    }

Request body:

    {
        "username": string,
        "email": string,
        "password": string,
        "password": image encode into BASE64
    }
Response:

    successe

Source
-------

-laravel
https://laravel.com/