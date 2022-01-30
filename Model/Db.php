<?php 
    class Db
    {
        Private $host = 'localhost';
        Private $user = 'ferdawus';
        private $pass = 'ferdawus123';
        private $db   = 'personal_wallet_manager';

        private $conn;

        public function __construct()
        {
            $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);

            if($this->conn->connet_errno)
            {
                throw new Exception("Database Connection Failed ! Error : "
                .$this->conn->connect_errno);
            }
        }
        

        public function close()
        {
            $this->conn->close();
        }

        public function execute($query)
        {
            try {
                mysqli_query($this->conn,$query);
            } catch (Exception $e) {
                throw new Exception("Error in Execution Query !", 1);
            }
        }

        public function fetch_result($query)
        {   
            $result = mysqli_query($this->conn,$query);

            if (!$result) 
            {
                throw new Exception('Error in Fetching Result !');
            }
            else 
            {
                while ($row = mysqli_fetch_array($result)) {
                    $data[] = $row;
                }
                return $data;      
            }
        }
    }
