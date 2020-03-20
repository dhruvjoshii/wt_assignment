
var is_error = true;
function passcheck()
{
	var pass=document.getElementById("password");
	if(pass.value.length<8)
	{
		alert("password should at least be 8 character long!");
		pass.style.borderColor = "red";
		return false;
	}
	else
	{
		pass.style.borderColor = "green";
	}

}
function numcheck()
{
	var num=document.getElementById("telno");
	if(num.value.length<10)
	{
		alert("telephone number should at least be 10 character long!");
		num.style.borderColor = "red";
		return false;
	}
	else
	{
		num.style.borderColor = "green";
	}
}
function basicheck(name)
{
	if(name.value.length<1)
	{
		name.style.borderColor = "red";
	}
	else
	{
		name.style.borderColor = "green";
	}

}
function emailcheck()
{
	var mail=document.getElementById("EMAIL");
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(mail.value.match(mailformat))
	{
		mail.style.borderColor = "green";
	}
	else
	{
		alert("please follow the format someone@example.com");
		mail.style.borderColor = "red";	
		return false;
	}
}
function cpasscheck()
{
	var pass1=document.getElementById("password");
	var pass2=document.getElementById("cpassword");
	if(pass1.value==pass2.value && pass2.value.length>=8)
	{
		pass2.style.borderColor = "green";
	}
	else 
	{
		alert("passwords don't match");
		pass2.style.borderColor = "red";
		return false;
	}
}
function completed(fname,lname)
{
	//if(!is_error)
		alert("Hello, "+fname.value+" "+lname.value+"\nYour form is submitted successfully");
}