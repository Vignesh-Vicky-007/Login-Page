function validpass(){
    var uname=document.getElementById("uname").value;
    var upass=document.getElementById("upass").value;
    if(uname==null || uname==""){
            document.getElementById("errorBox").innerHTML="enter the user name";
         return false;
    }
    if(upass==null || upass==""){
         document.getElementById("errorBox").innerHTML="enter the password";
        return false;
    }
    if(uname!='' && upass!=''){
        alert("Login successfully");
    }
}
function validpass2(){
    var uname1=document.getElementById("uname1").value;
    var email1=document.getElementById("email1").value;
    var upass1=document.getElementById("upass1").value;
    var upass2=document.getElementById("upass2").value;
    if(uname1==null || uname1==""){
        document.getElementById("errorBox2").innerHTML="enter the user name";
     return false;
    }
    if(email1==null || email1==""){
        document.getElementById("errorBox2").innerHTML="enter the email";
     return false;
    } 
    if(upass1==null || upass1==""){
        document.getElementById("errorBox2").innerHTML="enter the password";
        return false;
    }
    if(upass2==null || upass2==""){
        document.getElementById("errorBox2").innerHTML="enter the retype-password";
        return false;
    }
    if(upass1!=upass2){
        document.getElementById("errorBox2").innerHTML="password dont match";
        return false;
    }
    if(uname1!=''&&upass1!=''&&upass2!=''&&email1!=''){
        alert("Register successfully");
    }
}