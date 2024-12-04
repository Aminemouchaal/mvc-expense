<?php
return new PDO('mysql:host=localhost;dbname=YOUR_DB_NAME', 'DB_USERNAME', 'DB_PASSWORD', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
