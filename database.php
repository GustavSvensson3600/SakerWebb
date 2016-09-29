<?php
class Database
{
    private $host;
    private $userName;
    private $password;
    private $database;
    private $conn;

    /**
     * Constructs a database object for the specified user.
     */
    public function __construct()
    {
        $ini = parse_ini_file('php.ini');
        $this->host = $ini['db_host'];;
        $this->userName = $ini['db_user'];;
        $this->password = $ini['db_password'];;
        $this->database = $ini['db_name'];
    }

    /**
     * Opens a connection to the database, using the earlier specified user
     * name and password.
     *
     * @return true if the connection succeeded, false if the connection
     * couldn't be opened or the supplied user name and password were not
     * recognized.
     */
    public function openConnection()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database",
                $this->userName, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $error = "Connection error: " . $e->getMessage();
            print $error . "<p>";
            unset($this->conn);
            return false;
        }
        return true;
    }

    /**
     * Closes the connection to the database.
     */
    public function closeConnection()
    {
        $this->conn = null;
        unset($this->conn);
    }

    /**
     * Checks if the connection to the database has been established.
     *
     * @return true if the connection has been established
     */
    public function isConnected()
    {
        return isset($this->conn);
    }

    /**
     * Execute a database query (select).
     *
     * @param $query The query string (SQL), with ? placeholders for parameters
     * @param $param Array with parameters
     * @return The result set
     */
    private function executeQuery($query, $param = null)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($param);
            $result = $stmt->fetchAll();
        } catch (PDOException $e) {
            $error = "*** Internal error: " . $e->getMessage() . "<p>" . $query;
            die($error);
        }
        return $result;
    }

    /**
     * Execute a database update (insert/delete/update).
     *
     * @param $query The query string (SQL), with ? placeholders for parameters
     * @param $param Array with parameters
     * @return The number of affected rows
     */
    private function executeUpdate($query, $param = null)
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($param);
            $count = $stmt->rowCount();
            //$id = $stmt->lastInsertId();
        } catch (PDOException $e) {
            $error = "*** Internal Error: " . $e->getMessage() . "<p>" . $query;
            die($error);
        }
        return $count;
    }

    /**
     * Queries for information about a user.
     * @param name : The username of the User
     * @return returns a vector containing salt and hashed password of userName exists in the database,
     *          returns an empty vector otherwise.
     */
    public function getUserHash($name)
    {
        $sql = "SELECT salt, pass FROM Users WHERE userName = ?";
        $result = $this->executeQuery($sql, array($name));
        $result = $result[0];
        $hash = $result['salt'];
        $hash .= $result['pass'];
        return $hash;
    }

    /**
     * Creates a new user in the database.
     * @param name : The username of the new User
     * @param salt : The salt of the new User
     * @param passWord : The hashed password of the new User
     * @return true if the user was inserted into the databse, false otherwise.
     */
    public function createUser($name, $passWord, $adress)
    {
        $sql = "INSERT INTO Users (userName, pass, adress) VALUES (?, ?, ?)";
        $result = $this->executeUpdate($sql, array($name, $passWord, $adress));
        return count($result) == 1;
    }

    /**
    * Retunrs all items from the database.
    */
    public function getItems()
    {
      $sql = "SELECT * from Items";
      $result = $this->executeQuery($sql);
      return $result;
    }
}
