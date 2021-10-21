<?php
    include_once 'query.php';
    class CategoryAPI
    {
        private $query;

        public function __construct() 
        {
            $this->query = new Query();
        }

        function getAll()
        {
            $res = $this->query->getAllCategory();
            $this->showData($res);
        }

        function showData($res)
        {
            $category = array();
            $category['categories'] = array();

            if($res->rowCount())
            {
                while($row = $res->fetch(PDO::FETCH_ASSOC))
                {
                    array_push($category['categories'], array('value'=> $row['category_name'], 'label'=> $row['category_name']));
                }
                $this->printJSON($category);
            }
            else
            {
                $this->error('No hay categorias registradas');
            }   
        }

        function error($mensaje)
        {
            echo json_encode(array('message' => $mensaje)); 
        }

        function printJSON($array)
        {
            echo json_encode($array);
        }
    }
?>