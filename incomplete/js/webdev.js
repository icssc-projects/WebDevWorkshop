function validateForm()
{

	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	var subject=document.getElementById("subject").value;
	var content=document.getElementById("content").value;
	
	if (name==null || name=="")
	{
		alert("First and Last name must be filled out");
		return false;
	}
  
	if (email==null || email=="")
	{
		alert("E-mail must be filled out");
		return false;
	}


	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
		alert("Not a valid e-mail address");
		return false;
	}
  

	if (subject==null || subject=="")
	{
		alert("Subject must be filled out");
		return false;
	}

	if (content==null || content=="")
	{
		alert("Content must be filled out");
		return false;
	}
	
return true;

}