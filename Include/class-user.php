<?php
class User {
    private $conn;                // Holds the database connection
    private $table_name = "registration"; // Name of the table to interact with

    public $username; // User's username
    public $email;    // User's email
    public $password; // User's password
    public $cnpassword; // Confirm Password

    // Constructor to initialize the database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // Method to register a new user
    public function register() {
        // Escape user inputs for security
    
        // SQL query to insert user data into the users table
        $query = "INSERT INTO " . $this->table_name . " (name, Email, Password, ConfirmPassword) 
                  VALUES ('$this->username', '$this->email', '$this->password', '$this->cnpassword')";
    
        // Execute the query and return the result
        if ($this->conn->query($query) === TRUE) {
            return true; // Registration successful
        } else {
            // Output the error message (optional: for debugging purposes)
            echo "Error: " . $this->conn->error;
            return false; // Registration failed
        }
    }
}
?>
