<?php
include("../include/common.inc.php");
include("../_inc/func.php");
session_start();
$UserID = trim($_REQUEST["UserID"]);
$msql->query("select * from admin where UserID=" . $UserID);
if ($msql->next_record()) {
    $UserName = trim($msql->f("UserName"));
    $UserPass = trim($msql->f("UserPass"));
}

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css.css" rel="stylesheet" type="text/css">
    <title>修改用户信息</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="246" valign="top">
            <form name="form1" method="post" action="Login_User_Modi_Submit.php">
                <table width="740" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改用户信息</font></td>
                        <td width="517" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                        <td width="104" bgcolor="#FFFFFF">
                            <div align="center"><a href="Login_User.php">返回前页</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="18" colspan="3">
                            <div align="right"></div>
                        </td>
                    </tr>
                    <tr>
                        <td width="115" height="22" bgcolor="#999999">
                            <div align="right"></div>
                        </td>
                        <td colspan="2" bgcolor="#999999">
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="left"></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="22" bgcolor="F1F0F1">&nbsp;用户名称：</td>
                        <td colspan="2" bgcolor="F1F0F1"><input name="MemaberName" type="text" id="MemaberName"
                                                                value="<?php echo $UserName ?>" size="20"
                                                                maxlength="15"></td>
                    </tr>
                    <tr>
                        <td height="22" bgcolor="F1F0F1">&nbsp;输入密码：</td>
                        <td colspan="2" bgcolor="F1F0F1"><font color="#990000">
                                <input name="MemberPass" type="password" id="MemberPass" size="40" maxlength="15">
                                *</font></td>
                    </tr>
                    <tr>
                        <td height="22" bgcolor="F1F0F1">&nbsp;重复密码：</td>
                        <td colspan="2" bgcolor="F1F0F1"><input name="ReMemberPass" type="password" id="ReMemberPass"
                                                                size="40" maxlength="15">
                            <font color="#990000">*</font></td>
                    </tr>
                    <tr>
                        <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                        <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="修改">
                            <input type="button" name="Submit3" value="返回前页" onClick="location='Login_User.php'">
                            <input name="UserID" type="hidden" value="<?php echo $UserID?>"></td>
                    </tr>
                    <tr>
                        <td height="21" colspan="3" valign="top">&nbsp;</td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</body>
</html>
