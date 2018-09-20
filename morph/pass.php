<script>
    var s= true;
    var msg="";
    var a=document.getElementById('t1').value;
    if(var a="")
    {
        s=false;
        msg+="  fill username ";
    }
    var b=document.getElementById('t2').value;
    if(var b="")
    {
       s=false;
        msg+="  fill password ";
    }
   if(b<=6 && b>=12)
   {
       s=false;
       msg+=" invalid password ";
   }
   var c=document.getElementById('t3').value;
  if (var b != var c)
  {
      s=false;
      msg+="password don't match";
      
  }
 else
 {
     msg+="now submit";
 }
</script>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
                    <tr> <td> username </td>
                        <td> <input type="text" name="t1" /> </td>
                    </tr>
                    <tr><td> password </td>
                        <td><input type="password" name="t2" /></td>
                    </tr>
                    <tr>
                        <td> confirm password </td>
                        <td><input type="password" name="t3" /></td>
                    </tr>
                    <tr> <td colspan="2"><input type="submit" name="x1" value ="submit" </td></tr>
        </table>
    </body>
</html>
