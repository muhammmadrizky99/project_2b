<?php

function koneksi()
{

    $hostName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "portalberita_rizky";
    $port = "3306";

    $conn = mysqli_connect(
        $hostName,
        $username,
        $password,
        $dbName,
        $port
    );

    return $conn;
}

function myQuery($sql)
{
    return mysqli_query(koneksi(), $sql);
}

function insert($table, array $data)
{
    $field = "";
    $isi = "";
    // $dataMhs = ["nim"=>"112"]
    foreach ($data as $key => $value) {
        //insert into mhs (nim,nama) value ('112',"Rizky")
        $field .= ",$key"; //,nim,nama
        $isi .= ",'$value'"; // ,'112','Rizky'
    }
    $field_  = substr($field,1);
    $isi_ = substr($isi,1);
    $sql = "insert into $table ($field_) value ($isi_)";

    return myQuery($sql); //menjalankan query

}

function allData(
    $table,
    $where = "",
    $order = "",
    $limit = ""
){
    $data = [];
    $sql = "select * from $table $where $order $limit";
    $query = myQuery($sql);
    while($listData = mysqli_fetch_assoc($query)){
        $data[] = $listData;
    }
//

    return $data;

}

function oneData($table, $where){
    $sql = "select * from $table where $where";
    $query = myQuery($sql);
    $data = mysqli_fetch_assoc($query);
    return $data;
}

function delete($table, $where){
    $sql = "delete from $table where $where";
    return myQuery($sql);
}

function update($table,array $data,$where){
    //update posts set judul =  'coba' where id_posts='1';
    $set="";
    foreach($data as $key => $value){
        $set .= ",$key = '$value' ";
    }
    $set_ = substr($set,1);
    $sql = "update $table set $set_ where $where";
    return myQuery($sql);
}
