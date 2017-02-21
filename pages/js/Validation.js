function Validation()
{

if (valid.username.value == "")
{
alert("Username is Required.");
return (false);
}

if (valid.password.value == "")
{
alert("Password is Required.");
return (false);
}

return true;
}
