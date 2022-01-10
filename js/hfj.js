function registration()
{

    var name= document.getElementById("t1").value;
    var email= document.getElementById("t4").value;
    var birth= document.getElementById("t5").value;
    var pwd= document.getElementById("t2").value;			
    var cpwd= document.getElementById("t3").value;
    var phone= document.getElementById("t6").value;
    var jb= document.getElementById("t7").value;
    
    //email id expression code
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(name=='')
    {
        alert('Please enter your name');
    }
    else if(!letters.test(name))
    {
        alert('Name field required only alphabet characters');
    }
    else if(pwd=='')
    {
        alert('Please enter Password');
    }
    else if(cpwd=='')
    {
        alert('Enter Confirm Password');
    }
    else if(!pwd_expression.test(pwd))
    {
        alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
    }
    else if(pwd != cpwd)
    {
        alert ('Password not Matched');
    }
    else if(document.getElementById("t3").value.length < 6)
    {
        alert ('Password minimum length is 6');
    }
    else if(document.getElementById("t3").value.length > 12)
    {
        alert ('Password max length is 12');
    }
    else if(email=='')
    {
        alert('Please enter your user email id');
    }
    else if (!filter.test(email))
    {
        alert('Invalid email');
    }
    else if(birth=='')
    {
        alert('Please enter the birth date.');
    }
    
    
    else if (document.getElementById("t6").value.length > 10){
        alert ('incorrect number ');
    }
    else if(!letters.test(jb))
    {
        alert('job  or position field required only alphabet characters');
    }
    else
    {				                            
           alert('Thank You for Login & You are Redirecting to our page');
           
           
    }
}

