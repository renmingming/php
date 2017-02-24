<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2016/9/18
 * Time: 14:51
 */
//include('mysql.php');
//function getList($pid=0,&$result=array(),$spac=0,$link=null){
//    $spac=$spac+2;
//    $sql="select * from 'fenli' WHERE pid =".$pid;
//    $res=$link->query($sql);
//    while($row=$res->fetch_assoc()){
//        $result['catename']=str_repeat('&nbsp;',$spac).'|--'.$row['catename'];
//        $result[]=$row;
//        getList($row['id'],$result,$spac,$link);
//    }
//    return $result;
//}
//$rs=getList();
//print_r($rs);

header("content-type:textml;charset=utf8");
include("mysql.php");
function getList($link=null,$pid=0,&$result=array(),$spac=0){
    $sql = "select * from `fenli` where `pid` = $pid";
    $res = mysqli_query($link,$sql);
    while($row = mysqli_fetch_assoc($res)){
        $row['catename']=str_repeat('&nbsp',$spac).'|--'.$row['catename'];
        $result[] = $row;
        getList($link,$row['id'],$result,$spac);
    }
    return $result;
}

$rs = getList($link);
print_r($rs);