<?php
/**
 * Created by PhpStorm.
 * User: waiferkolar
 * Date: 2019-08-31
 * Time: 11:47
 */

namespace App\Cores;


class Eloquent
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $this->dbh = Database::getInstance()->getDBHandler();
        $this->dbh -> exec("set names utf8");
    }

    public function insert($ary)
    {
        $fields = "";
        $pHolder = "";
        foreach ($ary as $key => $val) {
            $fields .= "$key,";
            $pHolder .= "?,";
        }

        $fields = substr($fields, 0, strlen($fields) - 1);
        $pHolder = substr($pHolder, 0, strlen($pHolder) - 1);

        $query = "INSERT INTO $this->table ($fields) VALUES ($pHolder)";
        $this->stmt = $this->dbh->prepare($query);
        $con = $this->stmt->execute(array_values($ary));

        return $con;

    }

    public function update($id, $ary)
    {
        $pHolder = "";
        foreach ($ary as $key => $val) {
            $pHolder .= "$key=:$key,";
        }
        $pHolder = substr($pHolder, 0, strlen($pHolder) - 1);
        $query = "UPDATE $this->table SET $pHolder WHERE id=:id";


        $stmt = $this->dbh->prepare($query);

        $stmt->bindValue("id", $id);

        foreach ($ary as $key => $val) {
            $stmt->bindValue($key, $val);
        }
        $con = $stmt->execute();
        return $con;

    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id=:id";
        $stmt = $this->dbh->prepare($query);
        $stmt->bindValue("id", $id);
        return $stmt->execute();
    }

    public function all()
    {
        $query = "SELECT * FROM $this->table";
        $this->stmt = $this->dbh->prepare($query);
        $this->stmt->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_OBJ);
    }


    public function first($id)
    {
        $query = "SELECT * FROM $this->table WHERE id=:id";
        $this->stmt = $this->dbh->prepare($query);
        $this->stmt->bindValue("id", $id);
        $this->stmt->execute();
        return $this->stmt->fetch(\PDO::FETCH_OBJ);
    }

}