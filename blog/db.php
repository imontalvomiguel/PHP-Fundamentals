<?php namespace Blog\DB;

function connect($config) {
  $dsn = 'mysql:host=localhost;dbname=blog';
  try {
    $conn = new \PDO($dsn, $config['DB_USERNAME'], $config['DB_PASSWORD']);
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch(\Exception $e) {
    return false;
  }
}

function get($table, $conn, $limit = 10)
{
  /**
   * Query method.
   */
  try {
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


function query($query, $bindings, $conn)
{
  try {
    /**
     * Prepared Statements
     */
    $results = $conn->prepare($query);
    $results->execute($bindings);
    return $results;
  } catch(\Exception $e) {
    return false;
  }
}

function get_by_id($id, $table, $conn)
{
  $query = query("SELECT * FROM $table WHERE id = :id LIMIT 1", [':id' => $id], $conn);
  return $query->fetch(\PDO::FETCH_ASSOC);
}
