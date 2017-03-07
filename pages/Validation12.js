
function validateForm() {
	var pwd  = document.forms["myForm"]["fname"].value;
	var conpwd = document.getElementById("val_2").value;
    if(pwd != "" && conpwd!="")
	{
		if (pwd != conpwd) {
			alert("passwords not match");
		}
		else {
			alert("passwords match!!!");
		}
		return;
	}
	else{
		alert("Please fill the fields")
	}
	var title= document.forms["myForm"]["title1"].value;
	if(title =""){
	alert("Please select title");
	return(false);
	}
	var Fname=document.forms["myForm"]["Fname"].value;
	if(Fname !="")
	{
	alert("Fname");
	return(false);
	}
	var Mname=document.forms["myForm"]["Mname"].value;
	if(Lname =""){
	alert("please fill Last Name");
	return(false);
	}
	var Lname=document.forms["myForm"]["Lname"].value;
	if(Lname =""){
	alert("please fill Last Name");
	return(false);
	}
	var Gender=document.forms["myForm"]["Gender"].value;
	if(Gender =""){
	alert("please fill Gender");
	return(false);
	}
	var Dob=document.forms["myForm"]["Dob"].value;
	if(Dob =""){
	alert("please fill DOB ");
	return(false);
	}
	var inputEmail=document.forms["myForm"]["inputEmail"].value;
	if(inputEmail =""){
	alert("please fill Email ");
	return(false);
	}
	var Mobile=document.forms["myForm"]["Mobile"].value;
	if(Mobile=""){
	alert("Please Fill Mobile Number);
	return(false);
	}
	var Country=document.forms["myForm"]["Country"].value;
	if(Country==""){
	alert("Please select country");
	return(false);
	}
	return true;
}
