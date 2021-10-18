<?php
    include_once 'consulta.php';

    $consulta = new Consulta();
    if($_GET['filtro']!='')
    {
        $res = $consulta->obtenerPoisFiltrada($_GET['filtro']);
        mostrarDatos($res);
    }
    else
    {        
        $res = $consulta->obtenerPois();
        mostrarDatos($res);
    }

    

    function mostrarDatos($res)
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
            echo json_encode($pois);
        }
        else
        {
            echo json_encode(array('mensaje'=>'No hay elementos registrados'));
        }   
    }


?>