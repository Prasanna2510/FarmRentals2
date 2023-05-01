let pph = document.getElementById("eq-pph-rp");
let opph = document.getElementById("out-pph");
opph.textContent=pph.value;
pph.oninput=()=>{
    opph.textContent=pph.value;
}
let ppd = document.getElementById("eq-ppd-rp");
let oppd = document.getElementById("out-ppd");
oppd.textContent=ppd.value;
ppd.oninput=()=>{
    oppd.textContent=ppd.value;
}
let ppm = document.getElementById("eq-ppm-rp");
let oppm = document.getElementById("out-ppm");
oppm.textContent=ppm.value;
ppm.oninput=()=>{
    oppm.textContent=ppm.value;
}
let rp7 = document.querySelectorAll(".right-part7");
for(let rp_7 of rp7){
    rp_7.addEventListener("click", function(){
        let rp_71=rp_7.nextElementSibling;
        if(rp_71.style.display=="none"){
            rp_71.style.display="contents";
        }
        else{
            rp_71.style.display="none";
        }
    });
}
const cont_but=document.querySelectorAll(".right-part16");
for(let i of cont_but){
    i.addEventListener("click", function(){
        const cont_dis=i.parentElement.nextElementSibling.nextElementSibling;
        console.log(cont_dis);
        if(cont_dis.style.display=="none"){
            cont_dis.style.display="block";
        } else{
            cont_dis.style.display="none";
        }
    });
}
const buy_now = document.querySelectorAll(".right-part18");
for(let i of buy_now){
    i.addEventListener("click", function(){
        if(confirm("Pakka!")){
            if(i.textContent=="BUY NOW"){
                i.textContent = "BOOKED";
                i.style.backgroundColor = "rgb(69, 175, 189)";
            } else{
                i.textContent = "BUY NOW";
                i.style.backgroundColor = "#68ac62";
            }
        }
    });
}