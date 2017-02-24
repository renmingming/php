
<?php
header('content-type:text/html;charset=utf-8');
//接收页面
$link=@new mysqli('localhost','root','199516','data');
if($link->connect_errno){
    die($link->connect_error);
}
$username=$_POST['username'];
$username=$link->escape_string($username);//转译用户输入的特殊字符；
$age=$_POST['age'];
$sex=$_POST['sex'];
$add=$_POST['add'];
$password=$_POST['password'];
$act=$_GET['act'];
$id=$_GET['id'];
//根据不同的操作传的不同参数进行不同的功能
switch($act){
    case 'addUser':
        $sql="insert into product(`name`,age,xing,`add`,`password`) values('{$username}','{$age}','{$sex}','{$add}','{$password}')";
        $res=$link->query($sql);
        if($res){
//            affected_rows影响的行数
            $insert_ids=$link->insert_id;
            echo "<script type='text/javascript'>
            alert('添加成功，网站第{$insert_ids}位用户');
            location.href='userdata.php';
                    </script>";
            exit();
        }else{
            echo "<script type='text/javascript'>
            alert('添加失败，请重新添加');
            location.href='userdata.php';
                    </script>";
            exit();
        }
        break;
    case 'delUser':
        $sql="delete from product where id=".$id;
        $res=$link->query($sql);
        if($res){
            $mes='删除成功';

        }else{
            $mes='删除失败';
        }
        $url='userdata1.php';
        echo "<script type='text/javascript'>
            alert('{$mes}');
            location.href='{$url}';
                    </script>";
        exit();
        break;
    case 'editUser':

        $sql=" update product set`name`='{$username}',age='{$age}',`add`='{$add}',xing='{$sex}',`password`='{$password}' where id=".$id;
        $res=$link->query($sql);
        if($res){
            $mes='修改成功';

        }else{
            $mes='修改失败';
        }
        $url='userdata.php';
        echo "<script type='text/javascript'>
            alert('{$mes}');
            location.href='{$url}';
                    </script>";
        exit();
        break;

}
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2016/8/24
 * Time: 15:05
 */
