

<html>







<body>
<p>&nbsp;</p>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="72" align="left"><img src="ic_house2.png" width="169" height="119"  ></td>
  </tr>
</table>
<table width="700" border="0" align="center" bordercolor="#E3F1FF" bgcolor="#CCCCCC" class="wysiwyg">
  <tr> 
    <td width="900" height="100" align="center" class="thead">BIENVENUE: <br>SMART HOUSE </td>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="alt2">
  <tr> 
    <td height="180" valign="middle">
<table width="426" border="0" align="center">
        <tr>
          <td width="420" align="center" class="titresmain2 style1">
		            </td>
        </tr>
      </table>
      <table width="700" height="98" border="0" align="center">
        <tr align="center"> 
          <td  height="41" align="center">
















<form method="post" action="smart.php">
<table width="301" border="0" bordercolor="#E3F1FF" bgcolor="#CCCCCC" class="wysiwyg  align="center" class="panel">
              <tr align="center" bgcolor="#cfd1ff"> 
                <td colspan="2" class="momaizcctbord"><strong>Authentification</strong></td>
              </tr>
              <tr align="left"> 

<tr align="left"> 
                <td class="titresmain2"><div align="right">Login</div></td>
                <td class="titresmain2"><div align="center">
                <input name="id" type="text" size="20"  >
                </div></td>
              </tr>

<tr align="left"> 
                <td class="titresmain2"><div align="right">Mot de passe</div></td>
                <td class="titresmain2"><div align="center">
                <input name="pass" type="password"  onkeyup="if(event.keyCode==13)this.form.submit();" size="20" >
                </div></td>
              </tr>
              <tr> 
                <td width="105" align="center" class="titresmain2">&nbsp;</td>
                <td width="182" align="center" class="titresmain2"><a href="#" target="_self"><img src="enter.gif" width="40" height="30" border="0" onClick="javascript:submit()"></a></td>
              </tr>
          </table>
		  </form>		  </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<table width="700" border="0" align="center" class="tborder">
  <tr> 
    <td align="center" class="thead">JBM &copy; 2019</td>
  </tr>
</table>




</form>











</html>


<?php

session_start();

$username = trim($_POST['id']);
$password = trim($_POST['pass']);

if (!strlen($username) || !strlen($password)) {
    die('');
}

$success = false;

$handle = fopen("nomf.csv", "r");

while (($data = fgetcsv($handle)) !== FALSE) {
    if ($data[6] == $username && $data[7] == $password) {
        $success = true;
header('Location: ./index1.php');

//$_SESSION['password'] = $password;
$_SESSION['username'] = $username; 
setcookie("username", $_POST['id'], time()+(84600*30)); 
		exit();
       break;
    }
}

fclose($handle);

if ($success) {
header('Location: ./index1.php');
		exit();
    // they logged in ok
} else {
    // login failed
}
?>

