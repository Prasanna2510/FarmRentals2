const btns = document.querySelectorAll(".help-top314");
const nxt_btns = document.querySelectorAll(".help-top313");
for(let btn of btns){
    btn.addEventListener("click", function(){
        const nxt_btn=btn.nextElementSibling;
        let child = nxt_btn.childNodes;
        if(nxt_btn.style.display == "contents"){
            nxt_btn.style.display = "none";
        } else{
            nxt_btn.style.display = "contents"
        }
    });
}
for(let nxt of nxt_btns){
    nxt.addEventListener("click", function(){
        if(nxt.style.display=="contents"){
            nxt.style.display="none";
        }
    })
}