const pass = document.querySelector(".form form .field input[type='password']");
toggleBtn = document.querySelector(".form form .field i");

toggleBtn.onclick = () =>{
    if(pass.type == "password"){
        pass.type = "text";
        toggleBtn.classList.add("active");
    }
    else{
        pass.type = "password";
        toggleBtn.classList.remove("active");

    }
}