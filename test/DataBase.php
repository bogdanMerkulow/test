<?php 
class DataBase
{
    private string $dsn = 'mysql:dbname=products;host=localhost';
    private string $user = 'root';
    private string $pass = 'root';
    private PDO $db;
    public function __construct()
    {
        $this->db = new PDO($this->dsn, $this->user, $this->pass);
        if (empty($this->db))
        {
            die("no db connection");
        }
    }
    public function Query(int $limit)
    {
        $sql = "SELECT * FROM products WHERE STATUS = 1 LIMIT $limit";
        $stmt = $this->db->query($sql);
        return $stmt;
    }
    public function UpdateStatus(int $id, int $status)
    {
        $sql = "UPDATE products SET STATUS = $status WHERE ID = $id";
        $this->db->query($sql);
    }
}
?>