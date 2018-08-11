<?php
    session_start();
    $link=mysql_connect("localhost","root","");
    mysql_select_db("abc") or die ("db error");
    
?>
<html>

<head>

  <title> Welcome To Apollo </title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <link rel="stylesheet" href="style.css" >





</head>
<body>

  <header class="header">
    <nav>
      <img src="logo.jpg" class="header-image" />
      <ul class="header-links">
        <li> <a href="index.html">Home</a> </li>
        
      </ul>
    </nav>
  </header><br /><br /><br /><br /><br /><br /><br />
  
  <div style="text-align:center;width=100%;height:70px;background-color:;padding:10px;">
        <form method="post" enctype="multipart/form-data">
            <table width="40%" align='center' border='2'> 
            <tr><td>Admin ID:</td><td><input type="text" name="admin_id"/></td></tr>
            <tr><td>Password:</td><td><input type="password" name="pass"/></td></tr>
            <tr><td colspan="2">&nbsp;&nbsp;<input type="submit" name="sub" value="Login" /></td></tr>
            </table>
        </form>
    </div>
  
  
  
  
 <footer>
  <ul>
    <h2>About us </h2>
    <li> Apollo is the best consultancy service provider. Come and avail the intriguing experience. </li>
  </ul>
  <ul>
    
  </ul>
  <ul>
    <h2> Contact </h2>
    <li> Phone: 04047476965 </li>
    <li> www.apollohospitals.com </li>
     </ul>
</footer>
<?php
if(isset($_POST['sub']) && !empty($_POST['admin_id']) && !empty($_POST['pass'])){
    
    $uname=$_POST['admin_id'];
    $pass=$_POST['pass'];
    $qry1="select * from login_master where email='$uname' and password='$pass'";
    $rs1=mysql_query($qry1);
    if($row1=mysql_fetch_array($rs1)){
        $_SESSION['userid1']=$uname;
        $_SESSION['name']=$row1[3];
        header("location:admin.php");
    }
    else{
        echo "<script>alert('Invalid username or password');</script>";
    }    
}
?>

</html>
