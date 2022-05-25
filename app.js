function openmenu() {
    if(open == true){
    closeNav();    
}else{
    openNav();    
}
}


function openNav() {
document.getElementById("u-navi").style.transition = "2.5s ease";
document.getElementById("u-navi").style.marginRight = "200px";
document.getElementById("u-navi").style.display = "block";


document.getElementById("main-conts").style.marginRight = "200px";
document.getElementById("navi").classList.add("close-nav");
open = true;
}

function closeNav() {
document.getElementById("u-navi").style.transition = "2.5s ease";
document.getElementById("u-navi").style.marginRight = "0";
document.getElementById("u-navi").style.display = "none";

document.getElementById("main-conts").style.marginRight = "0px";
document.getElementById("navi").classList.remove("close-nav");
open = false;
}
