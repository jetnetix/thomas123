<?php
$con = mysqli_connect("localhost","root","waqas123!","thomas");
function updateData($data,$table){
    $val = "";
    foreach ($data as $k=>$v){
        $val .= "`".$k."`='".$v."',";
    }
    $val = substr($val,0,-1);
    return "UPDATE `".$table."` SET ".$val." ";
}
function insert($data,$table){
    $col = "";
    $val = "";
    foreach ($data as $k=>$v){
        $col .= "`".$k."`,";
        $val .= "'".$v."',";
    }
    $col = substr($col,0,-1);
    $val = substr($val,0,-1);
    return "INSERT INTO `".$table."` (".$col.") VALUES (".$val.")";
}
function fetch($table,$where=null,$conn){
    $x = '';
    if($where != null){
        foreach($where as $k=>$v){
            if(empty($x)){
                $x = "WHERE `".$k."` = '{$v}'";
            }else{
                $x .= " AND `".$k."` = '{$v}'";
            }
        }
    }

    $q = mysqli_query($conn,"SELECT * FROM `". $table. "` " . $x);
    $data = array();
    while($row = mysqli_fetch_assoc($q)){
        $data[] = $row;
    }
    return $data;
}
