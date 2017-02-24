
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
//    echo json_encode($rows);
//print_r($rows);

    ?>