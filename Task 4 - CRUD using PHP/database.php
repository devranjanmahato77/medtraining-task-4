<?php

class database{
    private $db_host = "localhost";
    private $db_user = "user1";
    private $db_pass = "Dev@12345";
    private $db_name = "idcard";

    private $mysqli = "";
    private $result = array();
    private $con = false;

    public function __construct(){
        if(!$this->con){
            $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
            $this->con=true;
            if($this->mysqli->connect_error){
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        }
        else{
            echo "connected";
        }
    }



    public function insert($table,$params=array()){
        if($this->tableExists($table)){
            $table_col = implode(', ', array_keys($params));
            $table_val = implode("', '", $params);
            
            $sql = "INSERT INTO $table($table_col) VALUES('$table_val')";

            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->insert_id);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }else{
            return false;
        }


    }

    public function update($table, $params=array(),$where=null){
        if($this->tableExists($table)){
            $args = array();
            foreach($params as $key => $value){
                $args[] = "$key = '$value'";
            }
            $sql = "UPDATE $table SET ". implode(', ', $args);
            if($where != null){
                $sql .=" WHERE $where";
            }

            if($this->mysqli->query($sql)){
                
                array_push($this->result, $this->mysqli->affected_row);
            }else{
                array_push($this->result, $this->mysqli->error);

            }

        }else{
            return false;
        }
    }

    public function delete($table, $where){
        if($this->tableExists($table)){
            $sql = "UPDATE $table SET dt=0 WHERE sno = '$where'";
            // $sql = "DELETE FROM $table";

            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->affected_row);
            }else{
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }

    }  

    public function display($sql){
        $query = $this->mysqli->query($sql);
        if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        }else{
            array_push($this->result, $this->mysqli->error);
            return false;
        }

    }

    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
        if($tableInDb->num_rows == 1){
            return true;
        }else{
            array_push($this->result,$table." does not exist.");
            return false;
        }
    }
}

public function getResult(){
    $val = $this->result;
    $this->result = array();
    return $val;
}



    
    public function __destruct(){
        if($this->con){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }


}





?>
