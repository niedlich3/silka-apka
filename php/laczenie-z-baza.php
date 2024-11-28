<?php
use MongoDB\Driver\ServerApi;
$uri = 'mongodb+srv://niedlich:<Szymek2006>@cluster0.5glf3.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
// Set the version of the Stable API on the client
$apiVersion = new ServerApi(ServerApi::V1);
// Create a new client and connect to the server
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
try {
    // Wysłanie polecenia ping w celu potwierdzenia połączenia
    $client->selectDatabase('admin')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    // Obsługa błędu
    echo "Error: " . $e->getMessage() . "\n";
}
echo "Pinged your deployment. You successfully connected to MongoDB!\n";
?>