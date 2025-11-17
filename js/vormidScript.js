function nimiLugemine(){
    // let - muutuja mأ¤أ¤ramine
    let nimi=document.getElementById("nimi");
    let vastus=document.getElementById("vastus");

    //genererime innerHTML teksti dokumendis
    vastus.innerHTML="Tere, "+nimi.value;
}

function puhasta(){
    // let - muutuja mأ¤أ¤ramine
    let nimi=document.getElementById("nimi");
    let vastus=document.getElementById("vastus");
    let vastus2=document.getElementById("vastus2");

    //genererime innerHTML teksti dokumendis
    vastus.innerHTML="Vastusekoht";
    nimi.value="";
    vastus2.style.backgroundColor="white";
}
//taust vأ¤rviliseks
function varvValik(){
    let vastus2=document.getElementById("vastus2");
    let varv=document.getElementById("varv");

    vastus2.style.backgroundColor=varv.value;
}
function radioValik(){
    let naerata=document.getElementById("naerata");
    let kurvasta=document.getElementById("kurvasta");
    let pilt=document.getElementById("pilt");
    let vastus3=document.getElementById("vastus3");

    if(naerata.checked){
        vastus3.innerText="Naerata siis!";
        vastus3.style.color="green";
    }
    else if(kurvasta.checked){
        vastus3.innerText="أ„ra kurvasta!";
        vastus3.style.color="red";
    }
    else{
        pilt.src="";
        vastus3.innerText="Tee oma valik ًںک’";
        vastus3.style.color="blue";
    }
}

function tujuSlider(){

    let tuju=document.getElementById("tuju");
    let vastus4=document.getElementById("vastus4");

    if (tuju.value<=30){
        vastus4.innerHTML="Tuju slider näitab: 😒"
    }
    if (tuju.value>=31&&tuju.value<=60){
        vastus4.innerHTML="Tuju slider näitab: 😊"
    }
    if (tuju.value>=61&&tuju.value<=100){
        vastus4.innerHTML="Tuju slider näitab: 😁"
    }
}

function kooliValik(){
    let vastus5=document.getElementById("vastus5");
    let kool=document.getElementById("kool");

    //selectedIndex
    if (kool.selectedIndex!==0){
        vastus5.innerHTML="Sinu unistustekool on "+kool.value;
    }
    else{
        vastus5.innerHTML="Tee oma valik";
    }
}