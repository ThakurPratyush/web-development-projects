// JavaScript Document
function validation()
{
	if(document.getElementById('tex').value=='')
	{
		alert("please enter your phone,email or username");
		document.getElementById('tex').focus();
		return false;
	}
	if(document.getElementById('pass').value=='')
	{
		alert("please enter your password here");
		document.getElementById('pass').focus();
		return false;
	}
}
	function validate()
	{
		if(document.getElementById('text').value=='')
	{
		alert("please enter your fullname here");
		document.getElementById('text').focus();
		return false;
	}
	if(document.getElementById('mail').value=='')
	{
		alert("please enter yoer email here");
		document.getElementById('mail').focus();
		return false;
	}
	if(document.getElementById('pas').value=='')
	{
		alert("please enter your password here");
		document.getElementById('pas').focus();
		return false;
		}
	}