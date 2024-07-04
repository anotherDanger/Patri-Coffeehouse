<?php 

require_once "../koneksi/conn.php";
require_once "../loginTrait/loginTrait.php";

class LoginAdmin extends Conn implements LoginInterface {
    use TableAccessTrait;

    public $username;
    public $password;

    public function __construct($data)
    {
        parent::__construct();
        $this->username = $data["username"];
        $this->password = $data["password"];

    }

    public function getLogin() {
        $conn = $this->conn;
        $table = $this->table;
        $sql = $conn->prepare("SELECT * FROM $table WHERE username = ?");
        $sql->execute([$this->username]);

        if ($sql) {
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                if ($this->password === $row["password"]) {
                    $_SESSION['admin'] = $_POST['username'];
                    return true;
                } else {
                    return false;
                }
            } else {
                $this->conn = null;
                echo "Username tidak ditemukan!";
                exit;
            }
        }
    }
}




?>
