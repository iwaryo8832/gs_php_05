<?php


// MYSQLに接続する部分を関数にする

function dbc(){

    $host="localhost";
    $dbname="file_db";
    $user="root";
    $pass="root";

    $dns="mysql:host=$host;
    dbname=$dbname;charset=utf8";

    try{

        $pdo=new PDO($dns,$user,$pass,[

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
            
            ]);
            
            return $pdo;

    }catch(PDOException $e){

    exit($e->getMessage());

    }
}



// SQL文を投げてMYSQLに画像を保存する部分を関数化する
function fileSave($filename,$save_path,$caption){

$result = False;

$sql='INSERT INTO file_table(file_name,file_path,description)VALUE(?,?,?)';

try{


    $stmt = dbc()->prepare($sql);
    $stmt->bindValue(1,$filename);
    $stmt->bindValue(2,$save_path);
    $stmt->bindValue(3,$caption);

    $result = $stmt->execute();
    return $result;


}catch(\Exception $e){

    echo $e->getMessage();
    return $result;

}

}



// ファールデータを取得する関数を設定

function getALLFILE(){

 $sql="SELECT*FROM file_table";

 $fileData= dbc()->query($sql);

 return $fileData;

}



// エスケープ用の関数（画像表示の時）
function h($s){

    return htmlspecialchars($s,ENT_QUOTES,"UTF-8");

}

