const form =  document.querySelector(".signup form");
const continueBtn  = form.querySelector(".button input ");
const error  = form.querySelector(".error-text ");

form.onsubmit= (e)=>{ 
    e.preventDefault(); // preventing form from submitting
}

continueBtn.onclick =()=>{
     let xhr = new XMLHttpRequest();
     xhr.open("POST", "php/signup.php", true);
     xhr.onload =()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                   if(data == "success"){
                        location.href = "users.php";
                   }
                   else{   error.innerHTML = data;
                        error.style.display = "block";
                     
                   }
                }

            }
     }
    //  sending form data ajax to php 
    let formData =  new FormData(form);
    xhr.send(formData);

}