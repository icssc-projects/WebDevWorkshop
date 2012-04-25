function validateForm()
{

var name=document.getElementById("name").value;
if (name==null || name=="")
{
	alert("First name must be filled out");
	return false;
}
  
email=document.getElementById("email").value;
if (email==null || email=="")
{
	alert("E-mail must be filled out");
	return false;
}
var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
{
	alert("Not a valid e-mail address");
	return false;
}
  
subject=document.getElementById("subject").value;
if (subject==null || subject=="")
{
	alert("Subject must be filled out");
	return false;
}

content=document.getElementById("content").value;
if (content==null || content=="")
{
	alert("Content must be filled out");
	return false;
}
return false;

}