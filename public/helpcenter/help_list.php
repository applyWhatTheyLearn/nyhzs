
<?php
	search="select * from z_helpClass where l_views='显示' order by l_sort desc"
	$msql->query(search)
	l_classname=""
	while($msql->next_record()){
	l_helpclassid=trim($msql->f(0))
	l_classname=l_classname&"<a href=help_list.php?l_classid="&l_helpclassid&"><font color=#003399>"&trim($msql->f("l_classname"))&"</font></a>"&" | "

	}

	l_classname=l_classname&"<a href=help_list.php><font color=#003399>ȫ��</font></a> | "
	
	
	$l_classid=trim($_REQUEST["l_classid"]);
	$_REQUEST[
	if len(l_classid)=0 {
	Search = "select * from z_helpdetail where l_views='显示' order by l_sort desc"
	else
	Search = "select * from z_helpdetail where l_views='显示' and l_classid=".$l_classid." order by l_sort desc"
	}
	'response.Write("Search="&Search)
	'Search = "select * from z_helpdetail where l_views='显示' order by l_sort desc"
    $msql->query($Search);
		 
'?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>暂无内容</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_top scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
          <td height="32">&nbsp;&nbsp;��ҳ��&gt; 暂无内容 </td>
        </tr>
      </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor2">
          <tr>
            <td height="32">&nbsp;&nbsp;<?php echo $l_classname ?></td>
          </tr>
        </table>
		<?php if($msql->next_record()){ ?>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="24">
            
              <div align="right">
                <div align="right"><font color="#333333" size="2">��ҳ
                  &lt;</font><font size="2">
                    <?php
		if $_GET("pageno")<=0 {
		pageno=1
		else
		pageno=$_GET("pageno")
		}
						 
		intPageMax = 10 'ÿҳ�不显示intPageMax����¼
		intPageintNo = 1
		if $_GET("pageno") <= 0 {
		intPageintNo = 1
		else
		intPageintNo = $_GET("pageno")
		}
		intNo = 1
		intCountMax = rs.recordcount
		if intCountMax <= 0 {
		'   û����ؼ�¼
		 intPageintNo = 1
		 }
		 if (intPageintNo * intPageMax > intCountMax) {
		 intPageintNo = int(intCountMax / intPageMax) + 1
		 }
		 rs.move (intPageintNo-1)*intPageMax
							 
		 dim count
		  count=rs.pagecount
									  
		 if intCountMax > 0 {
		  if intPageintNo > 1 {
		 ?>
                    <a href="help_list.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp;
                    <?php
				  echo("<a href='help_list.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
				  }
				  for i = 1 to int((intCountMax-1)/intPageMax)+1
					  if int(i) = int(intPageintNo) {
					  echo("<font color=red>"&i&"</font> ")
					  else
		  ?>
                    <a href="help_list.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
                    <?php
					  }
				  next
				  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
					 echo("<a href='help_list.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
		 ?>
  &nbsp;&nbsp;<a href="help_list.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
  <?php
				  }
			 }
				
		?>
  <font color="#333333">&gt;</font></font> </div>
              </div>
            </td>
          </tr>
          <tr>
            <td height="6"></td>
          </tr>
        </table>
        <?php 'if($msql->next_record()){
			dim num 
		 	num=1 
			while( (not rs.eof) and (intNo<=intPageMax)
			l_id=trim($msql->f("l_id"))
			l_title=trim($msql->f("l_title"))
			l_detail=left(trim($msql->f("l_detail")),300)
	
		?>
	    <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
     
          <tr>
            <td width="25" height="27">&nbsp;</td>
            <td width="727"><strong><font color="#FF6600"><?php echo( Num ?>��</font></strong><a href="help_detail.php?l_id=<?php echo $l_id ?>&pageno=<?php echo $pageno ?>"><font color="#006699"><?php echo $l_title ?></font></a></td>
          </tr>
          <tr>
            <td height="1"></td>
            <td height="1" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td valign="top"><p style="line-height: 130%"><font color="404040"><?php echo $l_detail ?></font></p></td>
          </tr>
        </table>
        
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
            <?php
			Num=Num+1
			intNo = intNo +1						

			}
			?>
        </table>
		<?php } ?>
      </td>
      <td width="222" align="right" valign="top"><iframe frameborder=0 name=window_left scrolling="no" src=../include/right_list_1.php  style=WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
    <tr>
      <td height="6" colspan="2"></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_bottom scrolling="no" src=../include/copyright.php  style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <br>
  <br>
</div>
</body>
</html>
