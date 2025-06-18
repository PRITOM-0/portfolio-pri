function fun(){
    let uname=document.getElementById("un").value

    if(uname.length==0){
        document.getElementById("test").innerHTML="Username requirewd";
        document.getElementById("test").style.color="red";
        event.preventDefault();
    }
}

function lightOn(){
    document.getElementById("img").src="pic_bulbon.gif";
}

function lightOff(){
    document.getElementById("img").src="pic_bulboff.gif";
}