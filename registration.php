<?php
$link=mysql_connect("localhost","root","") or die ("some error");
mysql_select_db("abc") or die("db error");

?>



<html>
    <head>
        <title>
            Employee Registration
        </title>
    </head>
    <body>
    
    <hr size="5" color="red"/>
    <fieldset>
    <legend> Employee Details </legend>
    
    <form method="post" enctype="multipart/form-data">
        <table width="34%" align='center' border='2'> 
          <tr>
                <td>Email</td>
                <td><input type="email"   name="uemail" placeholder="enter email" value="<?php
                if(isset($_POST['Find']))
                {
                
                $uname=$_POST['uname'];
                $qry="select email from employee_master where fullname='$uname'";
                $rs=mysql_query($qry)or die(mysql_error());
                while($row=mysql_fetch_array($rs))
                {
                  echo "$row[0]";
                }
    
            }
            ?>"/></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password"   placeholder="enter password" name="upass" value="<?php
                if(isset($_POST['Find']))
                {
                
                $uname=$_POST['uname'];
                $qry="select password from employee_master where fullname='$uname'";
                $rs=mysql_query($qry)or die(mysql_error());
                while($row=mysql_fetch_array($rs))
                {
                  echo "$row[0]";
                }
    
            }
            ?>"/>
                
            </tr>
                <tr>
                <td>Mobile</td>
                <td><input type="numeric" maxlength="10"  name="umobile" placeholder="enter mobile" value="<?php
                if(isset($_POST['Find']))
                {
                
                $uname=$_POST['uname'];
                $qry="select mobile from employee_master where fullname='$uname'";
                $rs=mysql_query($qry)or die(mysql_error());
                while($row=mysql_fetch_array($rs))
                {
                  echo "$row[0]";
                }
    
            }
            ?>"/></td>
            </tr>
            
            <tr>
                <td><label>Full-Name</label></td>
                <td><input type="text"   placeholder="enter name" name="uname" value="<?php
                if(isset($_POST['Find']))
                {
                
                $uname=$_POST['uname'];
                $qry="select fullname from employee_master where fullname='$uname'";
                $rs=mysql_query($qry)or die(mysql_error());
                while($row=mysql_fetch_array($rs))
                {
                  echo "$row[0]";
                }
    
            }
            ?>"/>
                <input type="submit" value="Find" name="Find"/></td>
            </tr>
            
        
            <tr>
                <td colspan="2">&nbsp;<input type="submit" name="sbt1" value="Insert"/>&nbsp;<input type="submit" name="sbt2" value="Update Record"/>&nbsp;<input type="submit" name="sbt3" value="Display Saved Data"/>
                
            </tr>
               
        </table>
        </form>
    </fieldset>
    <center>
    <?php
       //function display()
    if(isset($_POST['sbt3']))   
   {
    $qry="select * from employee_master";
    $rs=mysql_query($qry)or die(mysql_error());
    echo"<table border='2' width='100%'><tr><th>E-mail</th><th>Password</th><th>Mobile</th><th>Full-Name</th></tr>";
    $count=mysql_num_fields($rs);
    while($row=mysql_fetch_array($rs))
    {
        echo"<tr>";
         for($i=0;$i<$count;$i++)
         {
            
                echo"<td>$row[$i]</td>";
            
         }
        echo"</tr>";
    }
    echo"</table>";
    
   }
   
   
   if(isset($_POST['sbt1']))
   {
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass']; 
    $umobile=$_POST['umobile'];
    $uname=$_POST['uname'];
    
   $qry="insert into employee_master values('$uemail','$upass',$umobile,'$uname')";
   mysql_query($qry)or die(mysql_error());    
    echo "<script>alert('Data saved successfully!');</script>";
    
   //display();
   }
   
   if(isset($_POST['sbt2']))
   {
    
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass']; 
    $umobile=$_POST['umobile'];
    $uname=$_POST['uname'];
    $qry="update employee_master set email='$uemail',password='$upass',mobile=$umobile where fullname='$uname'";
    mysql_query($qry)or die(mysql_error()); 
     echo "<script>alert('Data updated successfully!');</script>";  
  //  display();
   }
   
 
    ?>
    </center>
    </body>

</html>