<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $link=new mysqli('localhost','root','199516','data');
    if($link->connect_errno){
        die("连接失败：".$link->connect_error);
    };
    $sql="select * from product";
    $res=$link->query($sql);
    $rows=array();
    if($res && $res->num_rows>0){
        while($row=$res->fetch_assoc()){
            $rows[]=$row;
        }
    echo json_encode(array('result'=>'success','userData'=>$rows));
    }

//print_r($rows);
//    $jsonObj=json_encode($rows);
//    createHtmlTag($jsonObj);
    ?>
<h2>用户列表----<a href="addUser.php">添加用户</a></h2>
<table border="1" cellpadding="0" cellspacing="0" width="80%" bgcolor="aqua">
    <tr>
        <td>编号</td>
        <td>id</td>
        <td>图片</td>
        <td>姓名</td>
        <td>年龄</td>
        <td>性别</td>
        <td>住址</td>
        <td>操作</td>
    </tr>
    <?php $i=1;foreach($rows as $row): ?>
        <tr>
            <td><?php echo  $i++;?></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['img'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['xing'];?></td>
            <td><?php echo $row['add'];?></td>
            <td><a href="doAction.php?act=delUser&<?php echo 'id='.$row['id'];?>">删除</a>-/-<a href="editUser.php?<?php echo 'id='.$row['id'];?>">更新</a></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>
