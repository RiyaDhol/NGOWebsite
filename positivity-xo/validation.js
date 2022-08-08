function checkvalidation(){
   if(document.f1.txtName.value=="")
   {
    alert("Name can't be empty");
    document.f1.txtName.focus();
   }

   else if(document.f1.txtEmail.value=="")
   {
    alert("Email can't be empty");
    document.f1.txtEmail.focus();
   }
   else if(document.f1.txtEmail.value.length<5)
   {
    alert("Enter Correct Email Please");
    document.f1.txtEmail.focus();
   }

   else if((document.f1.txtEmail.value.indexOf("@")<0)|| (document.f1.txtEmail.value.indexOf('@') != document.f1.txtEmail.value.lastIndexOf("@")))
   {
    alert("Invalid Email Id");
    document.f1.txtEmail.focus();
   }

   else if(document.f1.txtPhone.value==""){
    alert("Phone No can't be empty");
    document.f1.txtPhone.focus();
   }

   else if(isNaN(document.f1.txtPhone.value)==true){
    alert("Phone No can't Alphabets");
   }

   else if (document.f1.txtpass.value==""){
    alert("Password can't be empty");
    document.f1.txtpass.focus();
   }

 else{
       f1.submit();
    }
      
}
