<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<script language="JavaScript">{
parent.itemFrame.location.href= "detail.html"}
</script>
<%
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from z_class where l_fid=0 order by l_sort desc  "
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
		 
'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>��Ʒ�����б�</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="230" valign="top">
          <table width="740" border="0" cellspacing="1" cellpadding="0">
            <tr> 
              <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">��Ʒ�����б�</font></td>
              <form name="form" id="form">
                <td width="514" bgcolor="#FFFFFF"> <div align="right"></div></td></form>
                <td width="89" bgcolor="#FFFFFF"><div align="center"><a href="ProBigClass_add.asp">��Ӵ����Ʒ</a></div></td>

            </tr>
          </table>
          <% if not rs.eof then %>
          <table width="740" border="0"  cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="14"><div align="right"><font color="#333333" size="2">��ҳ 
                  &lt;</font><font size="2"> 
                  <%
							 
					if request.querystring("pageno")<=0 then
					pageno=1
					else
					pageno=request.querystring("pageno")
					end if
							 
							 
							 intPageMax = 18 'ÿҳ�����ʾintPageMax����¼
							 intPageintNo = 1
							 if request.querystring("pageno") <= 0 then
							 intPageintNo = 1
							 else
							 intPageintNo = request.querystring("pageno")
							 end if
							 intNo = 1
							 intCountMax = rs.recordcount
							 if intCountMax <= 0 then
				'            û����ؼ�¼
							 intPageintNo = 1
							 end if
							 if (intPageintNo * intPageMax > intCountMax) then
							 intPageintNo = int(intCountMax / intPageMax) + 1
							 end if
							 rs.move (intPageintNo-1)*intPageMax
							 
							  dim count
							  count=rs.pagecount
										  
							 if intCountMax > 0 then
								  if intPageintNo > 1 then
								  %>
                  <a href="ProBigClass_List.asp?pageno=1"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp; 
                  <%
									  response.write("<a href='ProBigClass_List.asp?pageno="&intPageintNo-1&"'>&lt;&lt;&lt;&lt;</a>")
								  end if
								  for i = 1 to int((intCountMax-1)/intPageMax)+1
										  if int(i) = int(intPageintNo) then
										  response.write("<font color=red>"&i&"</font> ")	
										  else
							  %>
                  <a href="ProBigClass_List.asp?pageno=<%=i%>"><%=i%></a> 
                  <%
										  end if
								  next
								  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
									 response.write("<a href='ProBigClass_List.asp?pageno="&intPageintNo+1&"'>&gt;&gt;&gt;&gt;</a>")
									 %>
                  &nbsp;&nbsp;<a href="ProBigClass_List.asp?pageno=<%=count%>"><font color="#333333">βҳ</font></a> 
                  <%
								  end if
							 end if
				
							%>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr> 
              <td width="88" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="313" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;�������(����)</font></td>
              <td width="73" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2">��</font></div></td>
              <td width="69" bgcolor="#999999"> 
              <div align="center"><font color="#FFFFFF">����</font> </div></td>
              <td width="75" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">״̬</font></div></td>
              <td width="54" bgcolor="#999999"><div align="center"><font color="#FFFFFF">�޸�</font></div></td>
              <td width="60" bgcolor="#999999"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <%
						 dim num 
						 num=1 
						 do while (not rs.eof) and (intNo<=intPageMax) 
						 l_id=Trim(Rs("l_id"))
						 l_name=Trim(Rs("l_name"))
						 l_sort=Trim(Rs("l_sort")) 
						 l_tuijian=Trim(Rs("l_tuijian"))
						 l_views=Trim(Rs("l_views"))
						 
						 if l_tuijian="�Ƽ�" then 
						 l_tuijianinfo="<font color=#ff0000>��</font> "
						 else
						 l_tuijianinfo=""
						 end if
						 
						 
						 'Response.Write("OpenView="&OpenView )
						 'Response.Write("SelectColor="&SelectColor &"<br>")
						%>
            <tr> 
              <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font color="#993300"><%=Num%></font>��</font></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<a href="ProSmallClass_List.asp?l_classid=<%= l_id %>" target="itemFrame" title="����鿴��ƷС��"><%= l_name %></a> </td>
              <td height="18" bgcolor="F1F0F1"><div align="center"><%= l_tuijianinfo %></div></td>
              <td bgcolor="F1F0F1"><div align="center"><font color="<%= SelectColor %>"><%= l_sort %></font></div></td>
              <td bgcolor="F1F0F1"> 
                <div align="center"><font color="<%= SelectColor %>"><%=l_views%></font></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="ProBigClass_Modi.asp?l_id=<%=l_id%>&pageno=<%= pageno %>"><font size="2">�޸�</font></a></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="ProBigClass_Del.asp?l_id=<%=l_id%>&pageno=<%= pageno %>">ɾ��</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="14" bgcolor="#999999"></td>
            </tr>
            <%
					Num=Num+1
					intNo = intNo +1						
					rs.movenext
					loop
					%>
            <tr> 
              <td height="21" colspan="14" valign="top"><font color="#333333" size="2">��ҳ 
                &lt;</font><font size="2"> 
                <%
	       if intCountMax > 0 then
		          if intPageintNo > 1 then
				   %>
                <a href="ProBigClass_List.asp?pageno=1"><font color="#333333">��ҳ</font></a> 
                &nbsp;&nbsp; 
                <%
			          response.write("<a href='ProBigClass_List.asp?pageno="&intPageintNo-1&"'>&lt;&lt;&lt;&lt;</a>")
		          end if
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) then
				          response.write("<font color=red>"&i&"</font> ")	
			              else
              		%>
                <a href="ProBigClass_List.asp?pageno=<%=i%>"><%=i%></a> 
                <%
			              end if
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
			         response.write("<a href='ProBigClass_List.asp?pageno="&intPageintNo+1&"'>&gt;&gt;&gt;&gt;</a>")
					  %>
                &nbsp;&nbsp;<a href="ProBigClass_List.asp?pageno=<%=count%>"><font color="#333333">βҳ</font></a> 
                <%
		          end if
	         end if
			%>
                <font color="#333333">&gt;</font></font></td>
            </tr>
        </table>
<% 

  Myconn.close
  set Myconn=nothing
end if 
%>      </td>
    </tr>
  </table>

</body>
</html>
<%
 

%>