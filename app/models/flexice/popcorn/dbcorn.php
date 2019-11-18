<?php


namespace app\models\flexice\popcorn;


use Exception;

class dbcorn
{

    private $connection;

    public function __construct($host, $user, $password, $dbname, $port = "3306")
    {
        try {

            $this->connection = mysqli_connect($host, $user, $password, $dbname, $port);

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    /*
     * @return array
     */
    public function getAll($tablename)
    {
        $a = $this->getConnection()->query("SELECT * FROM `$tablename`");
        return $a->fetch_all();
    }

    public function querydb($q)
    {
        return $this->getConnection()->query($q);
    }

    /**
     * @return false|\mysqli
     */
    public function getConnection()
    {
        return $this->connection;
    }
}