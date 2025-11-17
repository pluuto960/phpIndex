//sirge joon
function sirgeJoon(){
    //mأ¤أ¤rame tahvli
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext){
        let t=tahvel.getContext("2d"); // anname tahvlinimi on t
        //joon
        t.beginPath();
        t.strokeStyle="teal";
        t.lineWidth = 1;
        t.moveTo(20,80); // alguspunkt
        t.lineTo(50,30); //lأµpppunkt
        t.stroke();
    }
}
//kolmnurk
function kolmnurk(){
    //mأ¤أ¤rame tahvli
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext){
        let t=tahvel.getContext("2d"); // anname tahvlinimi on t
        //joon
        t.beginPath();
        t.strokeStyle="teal";
        t.fillStyle="darkgrey";
        t.lineWidth = 1;
        t.moveTo(50,100); // alguspunkt
        t.lineTo(150,100);
        t.lineTo(150,200)
        t.lineTo(50,100); //lأµpppunkt
        t.stroke();
        t.fill()
    }
}
function puhasta(){
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext){
        let t= tahvel.getContext("2d");
        t.clearRect(0,0,300,250); //0,0 -vasak yleval tahvli nurk, 300-tahvli laius, 250- tahvli k6rgus
    }
}

//ring
function ring(){
    //mأ¤أ¤rame tahvli
    const tahvel=document.getElementById("tahvel");
    let r=document.getElementById("raadius");
    if(tahvel.getContext){
        let t=tahvel.getContext("2d"); // anname tahvlinimi on t
        //ymberjoon
        t.beginPath();
        t.strokeStyle="green";
        t.lineWidth = 1;
        t.arc(50,50,r.value,0,2*Math.PI, true); //x, y-keskpunkt, R
        t.stroke();
        //ring
        t.beginPath();
        t.fillStyle="lightgreen";
        t.lineWidth = 1;
        t.arc(50,120,r.value,0,2*Math.PI, true);
        t.fill();
    }
}
function ristkylik(){
    const tahvel=document.getElementById("tahvel");
    let laius=document.getElementById("laius");
    let k6rgus=document.getElementById("k6rgus");
    if(tahvel.getContext){
        let t= tahvel.getContext("2d");
        t.fillStyle="red";
        t.fillRect(150,30,laius.value,k6rgus.value); //0,0 -vasak yleval tahvli nurk, 300-tahvli laius, 250- tahvli k6rgus
    }
}

function pilt(){
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext){
        let t=tahvel.getContext("2d");

        const fail=new Image();
        fail.src="https://picsum.photos/100/200?random=1"
        t.drawImage(fail, 50, 50 ,100, 200);
    }
}


function foor(){
    const tahvel=document.getElementById("tahvel");
    if(tahvel.getContext){
        let t= tahvel.getContext("2d");
        t.fillStyle="darkgrey";
        t.fillRect(0,0,150,250); //0,0 -vasak yleval tahvli nurk, 300-tahvli laius, 250- tahvli k6rgus
        t.beginPath();
        t.fillStyle="grey";
        t.lineWidth = 1;
        t.arc(75,40,40,0,2*Math.PI, true);
        t.arc(75,120,40,0,2*Math.PI, true);
        t.arc(75,200,40,0,2*Math.PI, true);
        t.fill();

    }
}
function eestiLipp() {
    const lipp = document.getElementById("lipp");
    if (lipp.getContext) {
        let l = lipp.getContext("2d");
        l.fillStyle="blue"
        l.fillRect(0, 0, 330, 70);
        l.fillStyle="black"
        l.fillRect(0, 70, 330, 70);
        l.fillStyle="white"
        l.fillRect(0, 140, 330, 70);
    }
}
function itaalia() {
    const lipp = document.getElementById("lipp");
    if (lipp.getContext) {
        let l = lipp.getContext("2d");
        l.fillStyle="green"
        l.fillRect(0,0, 110,210);
        l.fillStyle="white"
        l.fillRect(110, 0, 220, 210);
        l.fillStyle="red"
        l.fillRect(220, 0, 330, 210);
    }
}


