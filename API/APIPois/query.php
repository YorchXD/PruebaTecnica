<?php
    include_once 'connection.php';
    
    class Query extends DB
    {
        function getPois()
        {
            $query = $this->connect()->query('SELECT * FROM pois');
            return $query;
        }

        function getPoisFilter($filter)
        {
            $query = $this->connect()->prepare('SELECT * FROM pois WHERE category_name= :filter');
            $query->execute(['filter' => $filter]);
            return $query;
        }
    }
?>