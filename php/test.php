<?php
namespace Test;

class Test
{
    private $file = 'Connection.php';

    private $host = '$host';
    private $user = '$user';
    private $pass = '$pass';
    private $db = '$db';
    private $link = '$link';

    private $newhost = '$this->host';
    private $newuser = '$this->user';
    private $newpass = '$this->pass';
    private $newdb = '$this->db';
    private $newlink = '$this->link';

    private $connection = [];
    private $error = [];

    public function __construct()
    {
    }

    private function checkIfDatabaseConnectionFileExists()
    {
        if (file_exists($this->file)) {
            echo "it exists";
        } else {
            $this->createDatabaseConnectionFile();
        }
    }

    public function createDatabaseConnectionFile()
    {
        $fcontent = "<?php
namespace App\Core;

use mysqli;

class Connection
{
    private $this->host;
    private $this->user;
    private $this->pass;
    private $this->db;
    protected $this->link;

    public function __construct()
    {
        $this->newhost = 'localhost';
        $this->newuser = 'root';
        $this->newpass = 'pass';
        $this->newdb = 'db';
    }

    protected function connect()
    {
        $this->newlink = new mysqli($this->newhost, $this->newuser, $this->newpass, $this->newdb);
        if (!$this->newlink) {
            echo 'connection to database is down';
        }
    }
}
        ";
        $file = fopen($this->file, 'w');
        fwrite($file, $fcontent);
        fclose($file);
    }
}

$f = new Test();
$f->createDatabaseConnectionFile();
