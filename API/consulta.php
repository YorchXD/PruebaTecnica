<?php
    include_once 'conexion.php';
    
    class Consulta extends DB
    {
        function obtenerPois()
        {
            $query = $this->connect()->query('SELECT * FROM pois');
            return $query;
        }

        function obtenerPoisFiltrada($filtro)
        {
            $query = $this->connect()->prepare('SELECT * FROM pois WHERE category_name= :filtro');
            $query->execute(['filtro' => $filtro]);
            return $query;
        }
    }
?>