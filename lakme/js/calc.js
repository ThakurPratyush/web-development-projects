// JavaScript Document
function abc()
{
	var a=document.getElementById('text').value;
	var b=document.getElementById('txt').value;
	
	document.getElementById('total').value=parseInt(a)+parseInt(b);
	

	}
function ab()
{
	
	var a=document.getElementById('text').value;
	var b=document.getElementById('txt').value;
	
	document.getElementById('total').value=parseInt(a)-parseInt(b);
	return false;

	}
function bc()
{
	
	var a=document.getElementById('text').value;
	var b=document.getElementById('txt').value;
	var c=parseInt(a)*parseInt(b);
	document.getElementById('total').value=c;
	return false;

	}
function ca()
{
	
	var a=document.getElementById('text').value;
	var b=document.getElementById('txt').value;
	
	document.getElementById('total').value=parseInt(a)/parseInt(b);
	return false;

	}