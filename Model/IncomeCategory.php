<?php 
    class IncomeCategory
    {
        private $name;
        public function store($data)
        {
            $this->name = $data['name'];
            $Db = new Db();
             $query = "INSERT INTO income_category (name)  VALUES ('$this->name')";

            try {
                $Db->execute($query);
            } catch (Exception $e) {
                return $e->getMessage();
            }
            $Db->close();
        }

        public function update($id,$data)
        {

        }
        public function delete()
        {
            
        }
        public function deleteByPk($id)
        {

        }
        public function getAll()
        {
            $Db = new Db();
            $query = "SELECT * FROM  income_category";
            try {
                $Db->fetch_result($query);
            } catch (Exception $e) {
                return $e->getMessage();
            }
            $Db->close();
        }
        public function show()
        {
            
        }
    }