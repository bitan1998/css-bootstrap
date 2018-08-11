<?php
    session_start();
    if(!isset($_SESSION['userid1'])){        
        header("location:index.html");
    }
?>
<html>

<head>

  <title> Welcome To Apollo</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <link rel="stylesheet" href="style.css" >

</head><body>
<div style="text-align:right;width=100%;height205px;background-color:;padding:0px;">
 <img src="logo.jpg" class="header-image" align="left"/>
        <span style="text-align: left;color: black;"><?php echo $_SESSION['name'];?>&nbsp;&nbsp;</span>
        <form method="POST"><input type="submit" name="sub" value="Log out"/></form>
        <?php
            if(isset($_POST['sub'])){
                session_destroy();
                header("location:index.html");
            }
        ?>
</div>
<table border='2' width='100%' align='center'>
        <tr><!--header-->
            <td>
                <img src="slide1.jpg"  width="100%" height="250px" />   
            </td>
        </tr>
        <tr>
            <td>
                <table width='100%' align='center' border='2'>
                <tr align='center'>
                <td><a href="registration.php" target="frm">Employee Registration</a></td>
               
                <!--<td><a href="home.php">Log Out</a></td>-->
                </tr>
        </table>
    
            </td>
        </tr>
        <tr>
            <td>
                    <iframe name="frm" width="100%" height="350px"><input type="submit" name="sbt" value="View Cases"/>  </iframe>       
            </td>
        </tr>
        
</table>
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
</body>
</html>
