
 <html>
    <head> <title> leading no. one animation institute </title> 
           <link rel="stylesheet" href="css/style3.css"/>

    </head>
 <body>
<form name="f1" action="sign.php" method="POST" onsubmit="return main();">
   <div id="header" style="width: 1350px;"> 
     <div id="logo">
         <a href="home.php">  <img src="images/logo.png"/></a>
       </div>
               <script>
               function main()
               {
               var a=document.getElementById('a5').value;
              var b=document.getElementById('a6').value;
               var s=true;
             
               if(a==null || a=="")
               {
                  s=false;
                  alert("password is not filled");
               }
               if(a.length<=6 || a.length>=12)
               {
                     s=false;
                     alert("password you entered is not valid");
                }
                if(a!=b)
                {
                    s=false;
                    alert("paswords you entered should match");
                    
        }       
                return s;
    }
            
           </script>
      <div id="menu">
         <table id="t1">
            <tr> <td> <a href="home.php" style="color:white;text-decoration:none"><p style="margin-right: 6px;"> Home </p></a> </td>
                 <td> <a href="photography.php" style="color:white;text-decoration:none"><p style="margin-right: 6px;"> Photography</p></a></td> 
                 <td> <a href="about.php" style="color:white;text-decoration:none"><p style="margin-right: 6px;">  About us </p></a></td>
                 <td> <a href="web.php" style="color:white;text-decoration:none"><p style="margin-right: 6px;"> Web designing </p></a> </td> 
                 <td> <a href="registration.php" style="color:white;text-decoration:none"><p style="margin-right: 6px;"> Online registration </p></a></td>
                 <td> <a href="contact.php" style="color:white;text-decoration:none"><p style="margin-right: 6px;"> Contact us </p></a></td>
            </tr>
          </table>
       </div>
   </div>

         
          
<?php
$host="localhost";
$username="root";
$pass="";
$link=mysqli_connect($host,$username,$pass,"morph");
if(isset($_POST["x1"]))
{
    $a=$_POST["a1"];
    $b=$_POST["a2"];
    $c=$_POST["a3"];
    $d=$_POST["a5"];
    $e=$_POST["a6"];
    $f=$_POST["a7"]; 
$qry="insert sign values('$a','$b','$c','$d','$e',$f)";
$res=mysqli_query($link,$qry) or die(mysqli_error($link));
if(mysqli_affected_rows($link)==1)
{
    echo("data saved");
    
}
else
{
    echo("not saved");
    
}
}

?>  


    <table border="4" style="height:500px;width:500px; margin-left:399px;margin-top:44px;text-align:center;background-color: wheat;">
           <tr><td>first name</td>
               <td><input type="text" name="a1" required/> </td>
           </tr>
           <tr><td> last name </td>  
                <td><input type="text" name="a2" required/> </td>
            </tr>
          <tr> <td> email </td>   
               <td><input type="text" name="a3" required/> </td>
          </tr>
          <tr> <td> password </td> 
               <td> <input type="password" name ="a5" id="a5"/> </td>
          </tr>
          <tr> <td>confirm password </td>
                <td><input type="password" name="a6" id="a6" required/> </td>
          </tr>
          <tr> <td> mobile number </td>   
               <td><input type="text" name="a7" required/> </td>
          </tr>
          <tr> <td colspan="2"> <input type="checkbox" name="w[]" required> i agree terms and conditons </td> </tr>
           <tr> <td colspan="2">  <input type="submit" value="submit" name="x1" /> </td> </tr>
     </table>
    
</form>
</body>
</html>