<HTML>
  <HEAD>
    <meta charset="utf-8"> 
	<title>Сайт web-студії "Web-DECO"</title> 
<!-- ====================  css стили  =============================================== -->		
<style>
 .shadowtext {
    text-shadow: 1px 3px 2px white, 0 0 1em red; 
    color: #210042; 
    font-size: 4em; 
   }
</style>	
<!-- ===================  JAVASCRIPT  =============================================== -->	
<script src="js/clock1.js"></script>
<script type="text/javascript">
function send()
{ 	var valid = true;
	var elems = document.forms[0].elements;
	for(var i=0; i<document.forms[0].length; i++){
		if( elems[i].getAttribute('type') == 'text' ||
			elems[i].getAttribute('type') == 'password' ||
			elems[i].getAttribute('type') == 'email' ) {
			if(elems[i].value == '') {
				elems[i].style.border = '2px solid red';
				valid = false;
			}
		}
	}	
	if(!valid) {
		alert('Заповніть всі поля !!!');
		return false;
	} 
}	
window.onload = function() {
setInterval(clockPainting, 1000);	}
</script>
<!-- ========================================================================= -->	
  </HEAD>
  <BODY background="images/bg.jpg">
	<table border="1" align="center" cellpadding="10">
		<tr>
			<td background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5">
			<img src="images/logo.png" height="140" width="140" align="left" >	
				<font color="Maroon"><h1 class="shadowtext">Сайт студії "Web-DECO"</h1></font>
			</tr><tr>
			<td colspan="2">
			    <font size="4"><b>
				<a href="index.php">Головна</a>&nbsp;&nbsp; 
				<a href="zwit.php">Зареєстровані</a>&nbsp; &nbsp;
				<a href="foto.php">Фотогалерея</a>&nbsp;&nbsp; 				
				<a href="tel09.php">Телефонний довідник</a>&nbsp;&nbsp;
				<a href="log.php">Статистика</a>
				</b></font>			</td>
		</tr>
		<tr>
			<td width="30%" valign="top">
			<center><canvas id="canvas" height="120" width="120"></canvas></center>
			 <font size="5" color="navy"><h2>Наші роботи</h2></font>
				<font size="5" >
			<ul>
				<li><a href="#">Сайт будіівельної компанії </a></li>
				<li><a href="#">Сайт ТМ "Новашкола" </a></li>
				<li><a href="#">Редизайн сайту classno.com.ua</a></li>
				<li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
				<li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
				<p align="right"><a href="#">інші...</a></p>
			</ul>
			</font>
	  <hr>
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
	</td>
	
		 <td width="70%" background="images/bg.jpg" valign="top">
		 <font size="5" color="navy">

<?php
$st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";
$fp = fopen("baza.txt","a");
$test = fwrite($fp,$st);
echo "<h1 align='center'>".$_POST['name2']." ".$_POST['name1']."<br>Дякуємо за реєстрацію !</h1>";
echo "<h2 align='center' > на Ваш E-Mail : ".$_POST['email']."<br> відправлено повідомлення.</br>";
?>
<hr><h3 align=center><a href="index.html">Повернутись на головну</a><h3>
  
  </td>
		</tr>
		<tr>
			
			<td colspan="2" valign="middle" height="90">
			<font size="4">Сайт розробив "Автор"</font>
			</td>
		</tr>
	</table>
  </BODY>
</HTML>
