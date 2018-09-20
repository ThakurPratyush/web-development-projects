// JavaScript Document
function validation()
{
	var a=document.getElementById('pass').value;
	var b=document.getElementById('cpass').value;
	if(a!=b)
	{
		alert("please enter your correct password here")
		document.getElementById('cpass').focus();
		return false;
		}
	}