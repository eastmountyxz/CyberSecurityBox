<?php
  header("Content-Type:text/html;charset=utf-8");
  $id = @$_GET['id'];
  //连接数据库的参数配置
  $dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =127.0.0.1)(PORT = 1521)) 
                (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = orcl) (INSTANCE_NAME = orcl)))";  
  
  //连接数据库，前两个参数分别是账号和密码
  $conn = oci_connect('eastmount', '123456', $dbstr);
  if (!$conn)
  {
    $Error = oci_error(); //错误信息
    print htmlentities($Error['message']);
    exit;
  }
  else
  {
    echo "<h3>Oracle 注入实验</h3>"."<br>";
    //ocilogoff($conn);
    echo $id."<br>";
    $sql = "select * from DEMO where ID=".$id;  //sql语句
    echo "SQL语句：".$sql."<br>";
    $ora_test = oci_parse($conn, $sql);                 //编译sql语句 
    oci_execute($ora_test, OCI_DEFAULT);            //执行 
    while($r=oci_fetch_row($ora_test))                 //取回结果 
    { 
      $i=0;
      //echo $ora_test[0]; 
      echo "ID: ".$r[$i++]."  </t> <br>";
      echo "NAME: ".$r[$i++]."  </t><br>  ";
      echo "AGE: ".$r[$i++]."  </t><br>  ";
      echo "SEX: ".$r[$i++]."  </t><br>  ";
    }
  }
  oci_close($conn);                                           //关闭连接
?>
