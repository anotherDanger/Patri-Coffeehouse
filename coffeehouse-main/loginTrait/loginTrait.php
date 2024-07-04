<?php 

// Interface untuk Login
interface LoginInterface {
    public function getLogin();
}

trait TableAccessTrait {
    protected $table;

    public function setTable($table) {
        $this->table = $table;
    }

    public function getTable() {
        return $this->table;
    }
}

?>