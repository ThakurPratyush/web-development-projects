// JavaScript Document
function validation()
{
	if(document.getElementById('user').value=='')
	{
		alert("please enter your name here");
		document.getElementById('user').focus();
		return false;
	}
		


	if(document.getElementById('mail').value=='')
	{
		alert("please enter your email id here")
		document.getElementById('mail').focus();
		return false;
	}
	var a=document.getElementById('pass').value;
	var b=document.getElementById('cpass').value;
	if(a!=b)
	{
		alert("please enter your correct password here")
		document.getElementById('cpass').focus();
		return false;
		}
	}