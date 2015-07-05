<?php namespace Blog\DB;

/**
 * Methods & Properties are related, so that
 * they are grouped together under this Class
 */
class Database {
  protected $conn;

  public function __construct($username, $password)
  {
    try {
      $dsn = 'mysql:host=localhost;dbname=blog';
      $conn = new \PDO($dsn, $username, $password);
      $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $this->conn = $conn;
    } catch(\Exception $e) {
      $this->conn = false;
    }
  }

  public function getConn()
  {
    return $this->conn;
  }

  public function all($table, $limit = 10)
  {
    /**
     * Query method.
     */
    try {
      $conn = $this->getConn();
      $results = $conn->query("SELECT * FROM $table ORDER BY id DESC LIMIT $limit");
      if ($results->rowCount() > 0)
      {
        return $results->fetchAll(\PDO::FETCH_ASSOC);
      } else {
        return false;
      }
    } catch(\Exception $e) {
      return false;
    }
  }

  function query($query, $bindings)
  {
    try {
      /**
       * Prepared Statements
       */
      $conn = $this->getConn();
      $results = $conn->prepare($query);
      $results->execute($bindings);
      return $results;
    } catch(\Exception $e) {
      return false;
    }
  }

  function findId($id, $table)
  {
    $conn = $this->getConn();
    $query = $this->query("SELECT * FROM $table WHERE id = :id LIMIT 1", [':id' => $id], $conn);
    return $query->fetch(\PDO::FETCH_ASSOC);
  }

}
