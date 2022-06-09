const pass_field = document.querySelector('.pass-key');     
const showBtn = document.querySelector("span i");

showBtn.onclick = (()=>{
    if(pass_field.type === "password"){
        pass_field.type = "text";
        showBtn.classList.add("hide-btn");
    } else{
        pass_field.type = "password";
        showBtn.classList.remove("hide-btn");
    }
}
);

