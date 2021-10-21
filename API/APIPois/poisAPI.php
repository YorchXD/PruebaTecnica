<?php
    include_once 'query.php';
    class PoisAPI
    {
        private $query;

        public function __construct() 
        {
            $this->query = new Query();
        }

        function getAll()
        {
            $res = $this->query->getPois();
            $this->showData($res);
        }

        function getCategory($category)
        {
            $res = $this->query->getPoisFilter($category);
            $this->showData($res);
        }

        function showData($res)
        {
            $pois = array();
            $pois['pois'] = array();

            if($res->rowCount())
            {
                while($row = $res->fetch(PDO::FETCH_ASSOC))
                {
                    $item  = array(
                        'id'=>$row['id'],
                        'name' => $row['name'],
                        'point' => 'POINT ('.$row['longitude'].' '.$row['latitude'].')',
                        'category_id' => $row['category_id'],
                        'category_name' => $row['category_name'],
                        'latitude' => $row['latitude'],
                        'longitude' => $row['longitude']

                    );
                    array_push($pois['pois'], $item);
                }
                $this->printJSON($pois);
            }
            else
            {
                $this->error('No hay elementos registrados');
            }   
        }

        function error($mensaje)
        {
            echo json_encode(array('mensaje' => $mensaje)); 
        }

        function printJSON($array)
        {
            echo json_encode($array);
        }
    }
?>