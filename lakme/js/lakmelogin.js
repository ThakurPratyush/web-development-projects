// JavaScript Document
function validation()
{
	if(document.getElementById('user').value=='')
	{
		alert("please enter your username here");
		document.getElementById('user').focus();
		return false;
	}
		


	if(document.getElementById('pass').value=='')
	{
		alert("please enter your password here")
		document.getElementById('pass').focus();
		return false;
	}
}
