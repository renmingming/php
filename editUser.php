<?php
header('content-type:text/html;charset=utf-8');
//接收页面
$link=@new mysqli('localhost','root','199516','data');
if($link->connect_errno){
    die($link->connect_error);
}
$link->set_charset('utf8');
$id=$_GET['id'];
$sql="select * from product where id=".$id;
$res=$link->query($sql);
if($res && $res->num_rows>0){
    $row=$res->fetch_assoc();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>添加用户</h2>

<form action="doAction.php?act=editUser&id=<?php echo $id;?>" method="post">
    <table border="1" cellpadding="0" cellspacing="0" width="40%" >
        <tr>
            <td>姓名</td>
            <td><input type="text" name="username" value="<?php echo $row['name'];?>"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password" placeholder="请输入密码" required></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="number" name="age" min="1" max="125" value="<?php echo $row['age'];?>" required></td>
        </tr>
        <tr>
            <td>性别</td>
            <td>
                <select name="sex">
                    <option>男</option>
                    <option>女</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>地址</td>
            <td><input type="text" name="add" value="<?php echo $row['add'];?>" required></td>
        </tr>
        <tr>
            <td cospan="2"><input type="submit" value="修改用户"></td>
        </tr>
    </table>
</form>
</body>
</html>