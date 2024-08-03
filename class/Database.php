<?php
class Database {
    private $host = 'localhost'; // or your MySQL host
    private $user = 'root'; // your MySQL username
    private $password = ''; // your MySQL password
    private $database = 'itsm1_db'; // your new MySQL database name

    public function dbConnect() {
        static $DBH = null;
        if (is_null($DBH)) {
            $connection = new mysqli($this->host, $this->user, $this->password, $this->database);
            if ($connection->connect_error) {
                die("Error failed to connect to MySQL: " . $connection->connect_error);
            } else {
                $DBH = $connection;
            }
        }
        return $DBH;
    }
}
?>
