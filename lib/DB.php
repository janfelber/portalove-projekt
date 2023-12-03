<?php

namespace FS\Lib;
class DB
{
    private $host = "localhost";

    private $port = 3306;

    private $username = "root";

    private $password = "";

    private $dbName = "florist-shop";

    private \PDO $connection;

    public function __construct(
        string $host = "",
        int $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    )
    {
        if(!empty($host)) {
            $this->host = $host;
        }

        if(!empty($port)) {
            $this->port = $port;
        }

        if(!empty($username)) {
            $this->username = $username;
        }

        if(!empty($password)) {
            $this->password = $password;
        }

        if(!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new \PDO (
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
                );
        }
        catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }


    }
    public function insertShopItem(string $name, int $price,string $image_link): bool
    {
        $sql = "INSERT INTO shop(name, price, image_link) VALUE ('" . $name . "', '" . $price ."', '" . $image_link . "')";;
        $stmt = $this->connection->prepare($sql);

        return $stmt->execute();
    }

    public function updateShopItem(int $id, string $name ,int $price ,string $image_link): bool
    {
        $sql = "UPDATE shop SET ";

        if(!empty($name)) {
            $sql .= " name = '" . $name . "'";
        }

        if(!empty($price)) {
            $sql .= ", price = '" . $price . "'";
        }

        if(!empty($image_link)) {
            $sql .= ", image_link = '" . $image_link . "'";
        }

        $sql .= " WHERE id = ". $id;

        $stmt = $this->connection->prepare($sql);
        var_dump($sql);

        return $stmt->execute();

    }

    public function deleteShopItem(int $id): bool
    {
        $sql = "DELETE FROM shop WHERE id = ".$id;
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function getMenuItems(): array
    {
        $sql = "SELECT page_name, url_page FROM menu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalMenu = [];

        foreach ($data as $menuItem) {
            $finalMenu[$menuItem['page_name']] = $menuItem ["url_page"];
        }

        return $finalMenu;
    }

    public function getShopItem(int $id): array
    {
        $sql = "SELECT * FROM shop WHERE id = ".$id;
        $query = $this->connection->query($sql);
        $data = $query->fetch(\PDO::FETCH_ASSOC);

        return $data;

    }

    public function getShop(): array
    {
        $sql = "SELECT * FROM shop";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function get4ItemsFromShop(): array
    {
        $sql = "SELECT * FROM shop ORDER BY RAND(" . rand() . ") LIMIT 4";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }
}