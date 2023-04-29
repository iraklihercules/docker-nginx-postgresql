<?php

$host = 'postgres';
$db = 'test_db';
$user = 'test';
$password = 'test';

try {
    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
    $pdo = new \PDO($dsn, $user, $password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
} catch (\PDOException $e) {
    die($e->getMessage());
}

/* Create table */
$pdo->query("
    CREATE TABLE IF NOT EXISTS users (
        user_id serial PRIMARY KEY,
        username VARCHAR (50) UNIQUE NOT NULL,
        password VARCHAR (50) NOT NULL,
        email VARCHAR (255) UNIQUE NOT NULL,
        created_on TIMESTAMP NOT NULL,
        last_login TIMESTAMP
    );
");

/* Insert user */
$rowsNumber = $pdo
    ->query("SELECT COUNT(*) AS rows_number FROM users;")
    ->fetch(\PDO::FETCH_ASSOC)['rows_number'];

if ($rowsNumber == 0) {
    $now = (new \DateTime('now'))->format('Y-m-d H:i:s');
    $pdo->query("
        INSERT INTO users (username, password, email, created_on)
        VALUES ('John Doe', '1234', 'john.doe@example.com', '$now');
    ");
}

/* Get user */
$user = $pdo
    ->query("SELECT username, email, created_on FROM users;")
    ->fetch(\PDO::FETCH_ASSOC);


/* Print user */
echo '<pre>';
print_r($user);
echo '</pre>';
