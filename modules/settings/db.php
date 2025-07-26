<?php
$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "assodigit"; // Mettez le bon nom ici
$charset = 'utf8mb4';

$dsn = "mysql:host=$server;dbname=$database;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
    // Si vous arrivez ici, la connexion est réussie.
    // Vous pouvez supprimer la ligne "echo" dans votre projet final.
    // echo "Connexion réussie avec PDO !"; 
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
