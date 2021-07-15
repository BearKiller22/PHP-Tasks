<?php
    include_once "worker.class.php";
    $result = array();
    $result["error"] = null;
    $result["data"] = null;

    if($_REQUEST['method'] == "")
        $result["error"] = "Method Is Empty";
    else{
        $number =  $_REQUEST['number'];
        $method =  $_REQUEST['method']; 
        $object = new Worker();

        try { 
            $data = $object->$method($number); 
            $result["data"] = $data;
        } 
        catch (\Throwable $e) {
            $result["error"] = $e;
        }
    }

    echo json_encode($result);