<?php 

class DB {

    public $db_host = 'localhost';
    public $db_user = 'root';
    public $db_pass = '';
    public $db_name = 'bootcamp2021';
    public $conn = null;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if (!$this->conn) {
            die() . "error";
        }
    }

    public function DBquery($sql)
    {
        return $this->conn->query($sql);
    }

    public function getData($data)
    {
        $all_row = [];
        $rows = mysqli_num_rows($data);
        if ($rows > 0) {
            while ($rowss = $data->fetch_assoc()) {
                $all_row[] = $rowss;
            }
        }
        return $all_row;
    }
    
}