let fg = document.getElementById("fg_button");
let rp = document.getElementById("reset_password");
let fg2 = document.getElementById("forget_password");
let rp2 = document.getElementById("reset_password2");
fg.addEventListener("click", function(){
    fg2.style.display="none";
    rp.style.display="block";
});
rp2.addEventListener("click", function(){
    fg2.style.display="block";
    rp.style.display="none";
});