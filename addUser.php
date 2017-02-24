<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>添加用户</h2>

<form action="doAction.php?act=addUser" method="post">
    <table border="1" cellpadding="0" cellspacing="0" width="40%" >
        <tr>
            <td>姓名</td>
            <td><input type="text" name="username" placeholder="请输入姓名" required></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password" placeholder="请输入密码" required></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="number" name="age" min="1" max="125" placeholder="请输入年龄" required></td>
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
            <td><input type="text" name="add" placeholder="请输入地址" required></td>
        </tr>
        <tr>
            <td cospan="2"><input type="submit" value="添加用户"></td>
        </tr>
    </table>
</form>
</body>
</html>