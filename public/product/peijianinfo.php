
<?php
	
	
	
	f_id=trim($_REQUEST["f_id"))
	'response.Write("f_id="&f_id)
	'l_id=20
	Search = "select * from z_fittings where l_classid="&f_id&" and l_views='显示' order by l_sort desc"
	$msql->query(search)
	fittingsClassName=""
	while($msql->next_record()){
	zl_id=trim($msql->f(0))
	l_name=trim($msql->f(2))
	fittingsClassName=fittingsClassName&"<a href=peijianinfo.php?l_id="&zl_id&"&f_id="&f_id&"><strong><font color=#006600>". $l_name."</font></strong></a> | "

	}
	
	
	
	l_id=trim($_REQUEST["l_id"))
	$_REQUEST[
	if len(l_id)=0 {
	Search = "select * from fittings_list where l_classid="&f_id&" and l_views='显示' order by l_sort desc"
	else
	Search = "select * from fittings_list where l_pjid=".$l_id." and l_views='显示' order by l_sort desc "
	}
	response.Write("Search="&Search)
	Search = "select * from fittings_list"
	
	$msql->query($Search);

	
		 
'?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>�����Ϣ</title>
<style type="text/css">
<!--
body {
	margin-left: 20px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body onLoad="parent.window.document.all.ProductInfoExt.height=document.body.scrollHeight">

<br>
<table width="715" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
  <tr>
    <td height="32">������ࣺ<?php echo( fittingsClassName ?></td>
  </tr>
</table>
<?php if($msql->next_record()){?>
<table width="720" height="42" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="710" height="24"><div align="right"><font size="2">
      <?php
		intPageMax = 18 'ÿҳ�不显示intPageMax����¼
		intPageintNo = 1
		if $_GET("pageno") <= 0 {
		intPageintNo = 1
		else
		intPageintNo = $_GET("pageno")
		}
		intNo = 1
		intCountMax = rs.recordcount
		if intCountMax <= 0 {
		'û����ؼ�¼
		intPageintNo = 1
		}
		if (intPageintNo * intPageMax > intCountMax) {
		intPageintNo = int(intCountMax / intPageMax) + 1
		}
		
		rs.move (intPageintNo-1)*intPageMax
							 
		dim count
		count=rs.pagecount
		'response.Write("Ucount="&Ucount)
										  
		if intCountMax > 0 {
		   if intPageintNo > 1 {
			 echo("<a href='peijianinfo.php?pageno="&intPageintNo-1&"&l_id=".$l_id."&f_id="&f_id&">&lt;&lt;</a>")
			}
			for i = 1 to int((intCountMax-1)/intPageMax)+1
				if int(i) = int(intPageintNo) {
					echo("<font color=blue>"&i&"</font> ")
				else
		?>
      <a href="peijianinfo.php?pageno=<?php echo(i?>&l_id=<?php echo $l_id?>&f_id=<?php echo(f_id?>"><?php echo(i?></a>
      <?php
		 }
			next
				 if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
					 echo("<a href='peijianinfo.php?pageno="&intPageintNo+1&"&l_id=".$l_id."&f_id="&f_id&">&gt;&gt;</a>")
				}
		 }
      ?>
</font></div></td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr>
    <form name="form1" method="post" action="">
      <td height="18" colspan="2"><?php
		    i=1
			echo "<table width=720 border=0 cellspacing=2 cellpadding=0>"
			while($msql->next_record()){ and (intNo<=intPageMax)
			echo "<Tr>"
			   while (i<=6) 
	             aa="120"
				 echo "<td width="&aa&" height=137 valign=top >"
				 echo "<a href=../folder/fittings/"&trim($msql->f("l_pic"))&"."&trim($msql->f("l_ext"))&" target=_blank>"
				 echo "<img src='../folder/fittings/"&trim($msql->f("l_pic"))&"."&trim($msql->f("l_ext"))&"' width=100  class=picborder>"
				 echo "</a>"
				 echo "<table width=120 border=0 cellspacing=0 cellpadding=0>"
				 echo "<tr>"
				 echo "<td height=34><font color=#404040 size=2>"&left($msql->f("l_extname"),10)&"<br>�г���: "
				 echo ""&trim($msql->f("l_price1"))&""
				 echo "Ԫ</font><font size=2><br><font color=#404040>�̳Ǽ�: <font color=#ff0000>"
				 echo ""&trim($msql->f("l_price2"))&"</font>"
				 echo " Ԫ</font></font>"
				 echo "</td>"
				 echo "</tr>"
			 	 echo "</table>"
				 response.Write "</td>"
				 i=i+1
				 intNo = intNo +1

				 if rs.eof {
	                exit do
	             }
				 wend
				 
			 if i>2 {
		      i=1
             }

			}
			echo "</Tr>"
			echo "</table>"
			Rs.close
			set Rs=nothing
			
			
			  ?>      </td>
    </form>
  </tr>
</table>
<p>
  <?php } ?>
</p>
</body>
</html>
