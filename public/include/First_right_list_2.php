
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>�ޱ����ĵ�</title>
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

<body onLoad="parent.window.document.all.window_left.height=document.body.scrollHeight">
<table width="208" height="115" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6" height="6"></td>
    <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="195" height="6"></td>
    <td width="209"  height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7" height="6"></td>
  </tr>
  <tr>
    <td height="102" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height=100?></td>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="9%" height="25" background="../images/pic_4_6.gif">&nbsp;<img src="../images/pic_4_7.gif" width="5" height="14"></td>
        <td width="59%" background="../images/pic_4_6.gif"><strong>�����</strong></td>
        <td width="32%" background="../images/pic_4_6.gif"><div align="right"><a href="../GongGao/GongGao_list.php" target="_parent"><font color="#333333">more&gt;&gt;</font></a></div></td>
      </tr>
      <?php
	  $_REQUEST[
	  Search = "select top 9 * from z_affiche where 1=1 order by l_sort desc"
	  $msql->query($Search);

	   num2=1
	   while($msql->next_record()){
	   l_id2=trim($msql->f("l_id"))
	   l_title2=left(trim($msql->f("l_title")),13)
	  ?>
      <tr>
        <td height="23" colspan="3" valign="bottom">&nbsp;<strong><?php echo( num2 ?></strong>&nbsp;<a href="../GongGao/GongGao_detail.php?l_id=<?php echo( l_id2 ?>" target="_parent" class="topMenuLink"><?php echo( l_title2 ?></a></td>
      </tr>
      <tr>
        <td height="1" colspan="3"><div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div></td>
      </tr>
      <?php
	   num2=num2+1

	   }



	   set myconn=nothing
	  ?>
    </table></td>
    <td valign="top"><img src="../images/huikuang_1_r3_c7.jpg" width="7" height=100?></td>
  </tr>
  <tr>
    <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
    <td><img src="../images/huikuang_1_r5_c5.jpg" width="195" height="7"></td>
    <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
  </tr>
</table>
</body>
</html>
