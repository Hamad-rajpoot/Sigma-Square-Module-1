<?php
// Database class to handle database connections using MySQLi

class Database { 
    
    private $host = 'localhost';         // Hostname of the database server
    private $db_name = 'registration';  // Name of the database
    private $username = 'root'; // Username for database authentication
    private $password = ''; // Password for database authentication
    public $conn;

    public function getConnection() {
        // Create a new MySQLi connection using the provided credentials
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        // Check if the connection was successful
        if ($this->conn->connect_error) {
            return null; // Return null if connection failed
        }

        return $this->conn; // Return the established connection
    }
}