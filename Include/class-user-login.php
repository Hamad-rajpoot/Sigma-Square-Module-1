<?php
class user_login_form {
    private $conn;                // Holds the database connection
    private $table_name = "registration"; // Name of the table to interact with

    public $username; // User's username
    public $password; // User's password

    // Constructor to initialize the database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // Method to login user
    public function login() {
        $username = $this->username;
        $password = $this->password;
        // SQL query to check if username exists and password matches
        $query = "SELECT * FROM " . $this->table_name . " WHERE name='$username'";
        $result = $this->conn->query($query);

        if (!$result) {
            echo "Error executing query: " . $this->conn->error;
            return false;
        }
        if ($result->num_rows == 1) {

            // Verify password
            if (password_verify($password, $row['Password'])) {
                return true; // Login successful
            }
        }
        
        return false; // Login failed
    }
}
?>
