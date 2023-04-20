const pswrdField = document.querySelector(".form  input[type='password']");
toggleBtn = document.querySelector(".form .form-outline");

// este evento es para cambiar el tipo de el campo contraseña, 
//pero no puse el boton, si se lo quieren implementar es solo de meter el boton al lado de el input
toggleBtn.onclick=()=>{
if(pswrdField.type == "password"){

    pswrdField.type = "text";
}
else{
    pswrdField.type = "password";
}


}















