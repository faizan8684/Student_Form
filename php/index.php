<!DOCTYPE html>
<html>
 <head>
    <title>CRUD Operations</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">

<style>
    .buton {
    
    display: inline-block;
    left: 48%;
    top: 70%;
    position:absolute;
}
</style>    
 </head>
<script>
function Validate(name){

	var fv = /^[a-zA-Z]+$/;
	var lv = /^[a-zA-Z]+$/;
	var cv= /^[fFsStTbB][eE]$/;
	var dv= /^[123]$/;
	var rv= /^[1-7][0-9]$/;

if(fv.test(regform.fname.value)=="" && lv.test(regform.lname.value)=="" && cv.test(regform.classs.value)=="" && dv.test(regform.divison.value)=="" && rv.test(regform.rollno.value)=="")
{ alert("Please fill all the fields"); return false; }


else if(fv.test(regform.fname.value)==false ||fv.test(regform.fname.value)=="" )
{ alert("Please enter valid First Name");return false;}

else if(lv.test(regform.lname.value)==false ||lv.test(regform.lname.value)=="" )
{ alert("Please enter valid Last Name");return false;}

else if(cv.test(regform.classs.value)==false ||cv.test(regform.classs.value)=="" )
{ alert("Please enter valid Class(FE/SE/TE/BE)");return false;}

else if(dv.test(regform.divison.value)==false || dv.test(regform.divison.value)=="")
{alert("Please enter valid Divison(1/2/3)"); return false;}

else if(rv.test(regform.rollno.value)==false || rv.test(regform.rollno.value)=="" || regform.rollno.value>70 )
{ alert("Please enter valid Roll No and between 1-70"); return false;}




}
</script>


  <body>

     <form class="form1" name="regform"  method="post" action="insert.php" onsubmit="return Validate(this)">
         <center><p class="h4 mb*-4" >Student Registration Form</p></center>
	        <label >First name</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <label >Last name</label><br/>
            <input  type="text" name="fname" placeholder="First Name">
            
            <input type="text" name="lname" placeholder="Last Name"><br/><br/>
            <label>Class</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Divison</label><br/>
            <input type="text" name="classs" placeholder="FE/SE/TE/BE">
            
			<input type="number" name="divison" placeholder="1/2/3"><br/><br/>
            
            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll Number</label><br/>
            <center>
            <input type="number" name="rollno" placeholder="1-70"><br/><br/>
            </center>
            <input type="submit" class="btn btn-primary" value="Save" name="save" >
            </form>
            
            <a class="buton btn btn-sm btn-success"  href="http://localhost/php/show.php"> Show Students </a>
   </body>
</html>
