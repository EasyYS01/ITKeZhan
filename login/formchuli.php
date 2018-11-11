<?php
/**
 * @Author: Marte
 * @Date:   2018-03-20 19:34:26
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-04-05 13:51:24
 */
@include 'DBHelper.php';
header("Content-type: text/html; charset=utf-8");
function denglu($name,$pwd){
    $sqlconn=DBHelper::get_class_nmdb('x03aouli.2300.dnstoo.com:5503','shebao_f','as51271239');
    $sqlconn->select_db('shebao');
    $sql="select * from admin";
    $result = $sqlconn->query($sql);
//执行语句，查询
//循环运行sql语句后返回的结果对象
    while ($row = mysql_fetch_array($result)) {
    //加判断
        if($name==($row["name"])&&$pwd==($row['pwd'])){
            setcookie("name", $name, time()+3600);
            setcookie("pwd",$pwd,time()+3600);
            $url = "zhuye.php";
            echo "<script type='text/javascript'>";
            echo "window.location.href='$url'";
            echo "</script>";
        }else{

        }

    }
//显示结果
    mysql_free_result($result);
//释放结果
    mysql_close();
//关闭连接
    echo "<script type='text/javascript'>alert('账户或者密码错误，请重试！！');window.location.href='index.html';</script>";

}
//找回密码方法
function zhaohuei($mibao){
    $sqlconn=DBHelper::get_class_nmdb('x03aouli.2300.dnstoo.com:5503','shebao_f','as51271239');
    $sqlconn->select_db('shebao');
    $sql="select * from admin";
    $result = $sqlconn->query($sql);
//执行语句，查询
//循环运行sql语句后返回的结果对象
    while ($row = mysql_fetch_array($result)) {
    //加判断
        if($mibao==($row["mbh"])){
            setcookie("mbh",$pwd,time()+3600);
            $url = "zhaohuei.php";
            echo "<script type='text/javascript'>";
            echo "window.location.href='$url'";
            echo "</script>";
        }else{

        }

    }
//显示结果
    mysql_free_result($result);
//释放结果
    mysql_close();
//关闭连接
    echo "<script type='text/javascript'>alert('密保号错误，请重试！！');</script>";
    echo '<meta http-equiv="refresh" content="0;url=index.html">';
}
$name=isset($_POST['name'])?$_POST['name']:'1';
$pwd=isset($_POST['pwd'])?$_POST['pwd']:'1';
$mibao=isset($_POST['mibao'])?$_POST['mibao']:'1';
if($name!=1&&$pwd!=1){
    denglu($name,$pwd);
}elseif ($mibao!=1) {
    zhaohuei($mibao);
}else{
    echo "<<script>alert('出现bug！！')</script>";
}
?>