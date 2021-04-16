<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Сайт web-студії "Web-DECO"</title>
<script src="js/clock.js"></script>
<script>
window.onload = function() { setInterval(clockPainting, 1000);}
</script>
</head>

<body background="images/bg.jpg">
	  
<table border="1" align="center"   background="images/bg-3.jpg" cellpadding="10" >
 
    <tr>
      <td colspan="2" height="150" align="right" hspace="5">
		<img src="images/logo.png" height="140" width="140" align="left" >	  
	  <font size="5" color="Maroon"><h1>Сайт web-студії "Web-DECO"</h1></font></td>
    </tr>
    <tr>
      <td colspan="2">
			    <font size="4"><b>
				<a href="index.php">Головна</a>&nbsp;&nbsp; 
				<a href="zwit.php">Зареєстровані</a>&nbsp; &nbsp;
				<a href="foto.php">Фотогалерея</a>&nbsp;&nbsp; 				
				<a href="tel09.php">Телефонний довідник</a>&nbsp;&nbsp;
				<a href="log.php">Статистика</a>
				</b></font>    </tr>
    <tr>
      <td width="30%" valign="top" background="images/bg.jpg">
<center><canvas id="canvas" height="120" width="120"></canvas></center>
<br>
<hr>
	  <font size="5" color="navy"><h2>Новини</h2></font>
      <font size="5" ><ul>
      <li><a href="#">Сайт будіівельної компанії </a></li>
      <li><a href="#">Сайт ТМ "Новашкола" </a></li>
      <li><a href="#">Редизайн сайту classno.com.ua</a></li>
      <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
      <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
      <p align="right"><a href="#">інші...</a></p>
      </ul>
      </font>

	  
<H1 align="center"><font color="green">Реєстрація</font></H1>

 <form action="forma.php" method="post" onsubmit="return send();">
 
<TABLE align="center" bgcolor="#ccc">
<TR>
<TD><font color="green">Прізвище</font>: </TD>
<TD><input type="text" size="10" maxlength="20" name="name2"> </TD>
</TR>

<TR>
<TD><font color="green">Ім'я</font> :  </TD>
<TD><input type="text" size="10" maxlength="20" name="name1"> </TD>
</TR>
<TR>
<TD><font color="green">Бажаний Login</font> :  </TD>
<TD><input type="text" size="10" maxlength="20" name="nic1"> </TD>
</TR>
<TR>
<TD><font color="green">E-Mail</font> : </TD>
<TD><input type="email" size="10" maxlength="20" name="email"></TD>
</TR>
<TR>
<TD><font color="green">Пароль</font> : </TD>
<TD><input type="password" size="10" maxlength="20" name="password"></TD>
</TR>
</TABLE>

<p align="center"> 
<input type="submit" value="Зареєструватись" >
<input type="reset" value="Очистити">
</p>
 </form> 
<hr>

      <td width="70%" background="images/bg.jpg" valign="top"><font size="5" color="navy">
<!--  log --------------------------------------------------------- -->

<!-- -------------------------------------------------------------- -->
	</td>
    </tr>
    <tr>
      <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90"><font size="4">Сайт розробив "Автор"</font></td>
     
    </tr>
 
</table>

 </body>
