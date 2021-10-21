<?php
    include_once 'connection.php';
    
    class Query extends DB
    {
        function getAllCategory()
        {
            $query = $this->connect()->query('SELECT DISTINCT category_name FROM pois');
            return $query;
        }
    }
?>