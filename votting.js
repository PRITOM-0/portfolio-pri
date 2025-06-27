



//First Name

document.getElementById("fname").addEventListener("input",function(){
    let value=document.getElementById("fname").value;
    if(!value){
        document.getElementById("v_fname").innerHTML="First name required !!!";
        document.getElementById("v_fname").style.color="red"
    }
    else{
        document.getElementById("v_fname").innerHTML="Minimum 3 letter requied";
        document.getElementById("v_fname").style.color="red";
        if(value.length>=3){
            document.getElementById("v_fname").innerHTML="Valid !";
            document.getElementById("v_fname").style.color="Green";
        }
    }
})


//Last Name


document.getElementById("lname").addEventListener("input",function(){
    let value=document.getElementById("lname").value;
    if(!value){
        document.getElementById("v_lname").innerHTML="Last name required !!!";
        document.getElementById("v_lname").style.color="red"
    }
    else{
        document.getElementById("v_lname").innerHTML="Minimum 3 letter requied";
        document.getElementById("v_lname").style.color="red";
        if(value.length>=3){
            document.getElementById("v_lname").innerHTML="Valid !";
            document.getElementById("v_lname").style.color="Green";
        }
    }
})


//Password
document.getElementById('showPass').addEventListener('change', function() {
    const passInput = document.getElementById('password');
    passInput.type = this.checked ? 'text' : 'password';
  });

document.getElementById("password").addEventListener("input", function(){
    let x=document.getElementById("password").value;
    let i=0;
    if(!x){
        document.getElementById("key").innerHTML="Password required !!!";
        document.getElementById("key").style.color="red"
    }
    else {
        document.getElementById("key").innerHTML="";
        for (i = 0; i < x.length; i++) {
            if(x.length>=8){
                document.getElementById("length").innerHTML="&check; Length more then equal 8 character.";
            }
            else if(x[i]>="A" && x[i]<="Z"){
                document.getElementById("capital").innerHTML="&check; Capital alphabet.";
            }
            else if(x[i]>="a" && x[i]<="z"){
                document.getElementById("lower").innerHTML="&check; Lower alphabet.";
                
            }
            else if(x[i]>="0" && x[i]<="9"){
                document.getElementById("digit").innerHTML="&check; Digit alphabet.";
                
            }
            else{
                document.getElementById("s_char").innerHTML="&check; Special alphabet.";
            }
        }
    }
})


//Date of birth

document.getElementById('dob').addEventListener('change', function() {
    let dob = new Date(this.value);
    let today = new Date();
    let age = today.getFullYear() - dob.getFullYear();
    if (age >= 18) {
      document.getElementById('ageMessage').textContent = 'You can vote.';
      document.getElementById('ageMessage').style.color = 'green';
    } else {
      document.getElementById('ageMessage').textContent = "Not eligible to vote.";
      document.getElementById('ageMessage').style.color = 'red';
    }
  });



// varification Code

document.getElementById("code").addEventListener("input",function(){
    let code = document.getElementById("code").value;
    let i=0;
    if(!code){
        document.getElementById("v_code").innerHTML="ex: XXX-X-00-0000 required !!!"
        document.getElementById("v_code").style.color="red";
    }
    else{
        document.getElementById("v_code").innerHTML="ex: XXX-X-00-0000"
        document.getElementById("v_code").style.color="black";
        for ( i = 0; i <code.length; i++) {
            if(i<=2 && code[i]>="A" &&code[i]<="Z"){
                document.getElementById("codev").innerHTML=" --> Vaild !!!";
                document.getElementById("codev").style.color="Green";
            }
            else if(i==3 && code[i]=="-"){
                document.getElementById("codev").innerHTML=" --> Vaild !!!";
                document.getElementById("codev").style.color="Green";
            }
            else if(i==4 && code[i]>="A" && code[i]<="Z"){
                document.getElementById("codev").innerHTML=" --> Vaild !!!";
                document.getElementById("codev").style.color="Green";
            }
            else if(i==5 && code[i]=="-"){
                document.getElementById("codev").innerHTML=" --> Vaild !!!";
                document.getElementById("codev").style.color="Green";
            }
            else if(i>=6 && i<=12 && i!=8 &&code[i]>="0" &&code[i]<="9"){
                document.getElementById("codev").innerHTML=" --> Vaild !!!";
                document.getElementById("codev").style.color="Green";
            }
            else if(i==8 && code[i]=="-"){
                document.getElementById("codev").innerHTML=" --> Vaild !!!";
                document.getElementById("codev").style.color="Green";
            }
            else{
                document.getElementById("codev").innerHTML=" --> Invaild !!!";
                document.getElementById("codev").style.color="red";
            }

            
        }

    }

    
})

//Phone number
document.getElementById("phone").addEventListener("input",function(){
    let data=document.getElementById("phone").value;
    if(!data){
        document.getElementById("v_phone").innerHTML="Phone number required !";
        document.getElementById("v_phone").style.color="red"
    }
    else{
        document.getElementById("v_phone").innerHTML="should be +8801XXXXXXXXX ";
        document.getElementById("v_phone").style.color="red";
        for (i = 0; i < data.length; i++) {
            if(data.length<=14){
                document.getElementById("v_phone").innerHTML="invaild";
                document.getElementById("v_phone").style.color="red"
            }
            else{
                document.getElementById("v_phone").innerHTML="vaild";
                document.getElementById("v_phone").style.color="green"
            }
        }
    }
})