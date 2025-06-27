document.getElementById("fname").addEventListener("input",function(){
    let data=document.getElementById("fname").value;
    if(!data){
        document.getElementById("v").innerHTML="First name required !!!";
        document.getElementById("v").style.color="red"

    }
    else if(data.length < 3){
        document.getElementById("v").innerHTML="minimun should be 3 character long !!!";
        document.getElementById("v").style.color="red";
    }
    else{
        document.getElementById("v").innerHTML="valid !!!";
        document.getElementById("v").style.color="green";

    }
})

document.getElementById("pass").addEventListener("input", function(){
    let x=document.getElementById("pass").value;
    let i=0;
    if(!x){
        document.getElementById("key").innerHTML="Password required !!!";
        document.getElementById("key").style.color="red"
    }
    else {
        for (i = 0; i < x.length; i++) {
            if(x[i]>="A" && x[i]<="Z"){
                document.getElementById("capital").innerHTML="&check; Capital alphabet";
                
            }
            else if(x[i]>="a" && x[i]<="z"){
                document.getElementById("lower").innerHTML="&check; Lower alphabet";
                
            }
            else if(x[i]>="0" && x[i]<="9"){
                document.getElementById("digit").innerHTML="&check; Digit alphabet";
                
            }
            else{
                document.getElementById("s_char").innerHTML="&check; Special alphabet";
            }
            
            
        }
    
    
    }
    
})


document.getElementById("car").addEventListener("input",function(){
    let car=document.getElementById("car").value;
    let i=0;
    if(!car){
        document.getElementById("carvalid").innerHTML="ex: XXX-X-00-0000 required !!!"
        document.getElementById("carvalid").style.color="red";
    }
    else{
        document.getElementById("carvalid").innerHTML="ex: XXX-X-00-0000"
        document.getElementById("carvalid").style.color="black";
        for ( i = 0; i < car.length; i++) {
            if(i<=2 && car[i]>="A" && car[i]<="Z"){
                document.getElementById("carv").innerHTML=" --> Vaild !!!";
                document.getElementById("carv").style.color="Green";
            }
            else if(i==3 && car[i]=="-"){
                document.getElementById("carv").innerHTML=" --> Vaild !!!";
                document.getElementById("carv").style.color="Green";
            }
            else if(i==4 && car[i]>="A" && car[i]<="Z"){
                document.getElementById("carv").innerHTML=" --> Vaild !!!";
                document.getElementById("carv").style.color="Green";
            }
            else if(i==5 && car[i]=="-"){
                document.getElementById("carv").innerHTML=" --> Vaild !!!";
                document.getElementById("carv").style.color="Green";
            }
            else if(i>=6 && i<=12 && i!=8 && car[i]>="0" && car[i]<="9"){
                document.getElementById("carv").innerHTML=" --> Vaild !!!";
                document.getElementById("carv").style.color="Green";
            }
            else if(i==8 &&  car[i]=="-"){
                document.getElementById("carv").innerHTML=" --> Vaild !!!";
                document.getElementById("carv").style.color="Green";
            }
            else{
                document.getElementById("carv").innerHTML=" --> Invaild !!!";
                document.getElementById("carv").style.color="red";
            }

            
        }

    }

    
})


