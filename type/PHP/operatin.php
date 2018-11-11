<?php
@include 'DBHelper.php';
function conn(){
        $sqlconn=DBHelper::get_class_nmdb('x03aouli.2300.dnstoo.com:5503','shebao_f','as51271239');
        $sqlconn->select_db('shebao');
        // 手动更改客户端编码
        $sqlconn->query("set names utf8");
        // 选择使用哪一个数据库

        return $sqlconn;
}
//查询方法（参数是名称）
function Technique($mingcheng){
        $sjk=conn();
        // 获取总的记录数
        $sql_total_records = "select count(*) from table1";
        $total_records_result = $sjk->query($sql_total_records);
        $total_records = mysql_fetch_row($total_records_result);
        // 获得总页数，一般来说页面大小事固定的，所以这里暂且定为一页5个数据
        $page_size = 7;
        $total_pages = ceil($total_records[0]/$page_size);
        // 通过GET方式获得客户端访问的页码
        $current_page_number = isset($_GET['page_number'])?$_GET['page_number']:1;
        if($current_page_number<1) {
            $current_page_number =1;
        }
        if($current_page_number>$total_pages){
            $current_page_number = $total_pages;
        }
        // 获取到了要访问的页面以及页面大小，下面开始分页
        $begin_position = ($current_page_number-1)*$page_size;
        $sql = "select * from table1 WHERE type='$mingcheng' limit $begin_position,$page_size";
        $result = $sjk->query($sql);
        // 处理结果集  		

        while(($row = mysql_fetch_row($result))){
            echo "<a href='../../".$row[5]."'><div class='xin layui-row' style='border: 1px solid #e2e2e2;'>";
            echo "<div class='imgf  layui-col-md4'>";  
		
            echo "<img  class='imgt'  src='../../".$row[7]."' height='150' alt=''/>";
            echo "</div>";
			echo "<span class='layui-col-md7 layui-col-md-offset1'><h2><div class='titlexin'><h3>".$row[1]."</h3></div>";

            echo "<Div class='xinxineirong'><h5>".$row[9]."</h5></Div>";
            echo "<div><p>发布时间：".$row[4]." 作者：".$row[3]." 点击量：".$row[10]."</p></div></span>";
            echo "</div>";
        }
        // 循环显示总页数
        echo '<div class="layui-btn-group">';
        echo '<a href="index.php?page_number='.($current_page_number-1).'"><button class="btn layui-btn layui-btn-primary">上一页</button> </a> ';
        for($i=1;$i<=$total_pages;$i++){
            echo '<a href="./index.php?page_number='.$i.'"><button class="btn layui-btn layui-btn-primary">'.$i.'</button></a> '; 
        }
        echo '<a href="index.php?page_number='.($current_page_number+1).'"><button class="btn layui-btn layui-btn-primary">下一页</button></a>  ';
        echo '</div>';
        // 释放数据连接资源
	 	echo '</div>';
		echo '<div class="layui-col-md4" id="fangda" style="border: 2px solid #d2d2d2">';
	  	$sql="SELECT * FROM table1 ORDER BY download DESC limit 10";
        $result = $sjk->query($sql);
        $i=1;
	 	echo '<div style="background-color: #F9F9F9;height: 40px;font-size: 20px;padding-left: 25%;border: 1px solid #d2d2d2">点击量排行榜：</div>';
        while(($row = mysql_fetch_row($result))){
			echo '<div style="width:100%;height: 40px;border: 1px solid #dddddd;padding-top:7%">';
            echo '<h4><a href="'.$row[5].'">'.$i.'.'.$row[1].'&nbsp&nbsp点击量：<span style="color:red;">'.$row[10].'</span></a></h4>';
            $i++;
			echo '</div>';
        }
		
	 	echo '</div>';
       mysql_free_result($result);
        $sjk->close($sjk);
        }
//查询方法（name是名称）
function nameTechnique($mingcheng){
        $sjk=conn();
        // 获取总的记录数
        $sql_total_records = "select count(*) from table1";
        $total_records_result = $sjk->query($sql_total_records);
        $total_records = mysql_fetch_row($total_records_result);
        // 获得总页数，一般来说页面大小事固定的，所以这里暂且定为一页5个数据
        $page_size = 7;
        $total_pages = ceil($total_records[0]/$page_size);
        // 通过GET方式获得客户端访问的页码
        $current_page_number = isset($_GET['page_number'])?$_GET['page_number']:1;
        if($current_page_number<1) {
            $current_page_number =1;
        }
        if($current_page_number>$total_pages){
            $current_page_number = $total_pages;
        }
        // 获取到了要访问的页面以及页面大小，下面开始分页
        $begin_position = ($current_page_number-1)*$page_size;
         $sql = "select * from table1 WHERE name like '%"."$mingcheng"."%'limit ".$begin_position.",".$page_size;
 $result = $sjk->query($sql);
        // 处理结果集  		

        while(($row = mysql_fetch_row($result))){
            echo "<a href='../../".$row[5]."'><div class='xin layui-row' style='border: 1px solid #e2e2e2;'>";
            echo "<div class='imgf  layui-col-md4'>";  
		
            echo "<img  class='imgt'  src='../../".$row[7]."' height='150' alt=''/>";
            echo "</div>";
			echo "<span class='layui-col-md7 layui-col-md-offset1'><h2><div class='titlexin'><h3>".$row[1]."</h3></div>";

            echo "<Div class='xinxineirong'><h5>".$row[9]."</h5></Div>";
            echo "<div><p>发布时间：".$row[4]." 作者：".$row[3]." 点击量：".$row[10]."</p></div></span>";
            echo "</div>";
        }
        // 循环显示总页数
        echo '<div class="layui-btn-group">';
        echo '<a href="index.php?page_number='.($current_page_number-1).'"><button class="btn layui-btn layui-btn-primary">上一页</button> </a> ';
        for($i=1;$i<=$total_pages;$i++){
            echo '<a href="./index.php?page_number='.$i.'"><button class="btn layui-btn layui-btn-primary">'.$i.'</button></a> '; 
        }
        echo '<a href="index.php?page_number='.($current_page_number+1).'"><button class="btn layui-btn layui-btn-primary">下一页</button></a>  ';
        echo '</div>';
        // 释放数据连接资源
	 	echo '</div>';
		
       mysql_free_result($result);
        $sjk->close($sjk);
        }

 function xh(){
       $sjk=conn();
        // 获取总的记录数
        $sql_total_records = "select count(*) from table1";
        $total_records_result = $sjk->query($sql_total_records);
        $total_records = mysql_fetch_row($total_records_result);
        // 获得总页数，一般来说页面大小事固定的，所以这里暂且定为一页5个数据
        $page_size = 7;
        $total_pages = ceil($total_records[0]/$page_size);
        // 通过GET方式获得客户端访问的页码
        $current_page_number = isset($_GET['page_number'])?$_GET['page_number']:1;
        if($current_page_number<1) {
            $current_page_number =1;
        }
        if($current_page_number>$total_pages){
            $current_page_number = $total_pages;
        }
        // 获取到了要访问的页面以及页面大小，下面开始分页
        $begin_position = ($current_page_number-1)*$page_size;
        $sql = "select * from table1 order by id desc limit $begin_position,$page_size";
        $result = $sjk->query($sql);
        // 处理结果集  		

        while(($row = mysql_fetch_row($result))){
            echo "<a href='".$row[5]."'><div class='xin layui-row' style='border: 1px solid #e2e2e2;'>";
            echo "<div class='imgf  layui-col-md4'>";  
		
            echo "<img  class='imgt'  src='".$row[7]."' height='150' alt=''/>";
            echo "</div>";
			echo "<span class='layui-col-md7 layui-col-md-offset1'><h2><div class='titlexin'><h3>".$row[1]."</h3></div>";

            echo "<Div class='xinxineirong'><h5>".$row[9]."</h5></Div>";
            echo "<div><p>发布时间：".$row[4]." 作者：".$row[3]." 点击量：".$row[10]."</p></div></span>";
            echo "</div>";
        }
        // 循环显示总页数
        echo '<div class="layui-btn-group">';
        echo '<a href="index.php?page_number='.($current_page_number-1).'"><button class="btn layui-btn layui-btn-primary">上一页</button> </a> ';
        for($i=1;$i<=$total_pages;$i++){
            echo '<a href="./index.php?page_number='.$i.'"><button class="btn layui-btn layui-btn-primary">'.$i.'</button></a> '; 
        }
        echo '<a href="index.php?page_number='.($current_page_number+1).'"><button class="btn layui-btn layui-btn-primary">下一页</button></a>  ';
        echo '</div>';
        // 释放数据连接资源
	 	echo '</div>';
		echo '<div class="layui-col-md4" id="fangda" style="border: 2px solid #d2d2d2">';
	  	$sql="SELECT * FROM table1 ORDER BY download DESC limit 10";
        $result = $sjk->query($sql);
        $i=1;
	 	echo '<div style="background-color: #F9F9F9;height: 40px;font-size: 20px;padding-left: 25%;border: 1px solid #d2d2d2">点击量排行榜：</div>';
        while(($row = mysql_fetch_row($result))){
			echo '<div style="width:100%;height: 40px;border: 1px solid #dddddd;padding-top:7%">';
            echo '<h4><a href="'.$row[5].'">'.$i.'.'.$row[1].'&nbsp&nbsp点击量：<span style="color:red;">'.$row[10].'</span></a></h4>';
            $i++;
			echo '</div>';
        }
		
	 	echo '</div>';
       mysql_free_result($result);
        $sjk->close($sjk);
        }
?>
