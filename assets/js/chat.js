const form = document.querySelector("#send_MSG"),
inputFiled = form.querySelector(".form-control"),
sendBtn = form.querySelector("button");



sendBtn.onclick =()=>{

    let xhr = new XMLHttpRequest();
    xhr.open("POST","mainscreen.php", true);
xhr.onload =()=>{

    if(xhr.readyState===XMLHttpRequest.DONE){
        if(xhr.status===200){
            let data = xhr.response;
            console.log(data);
        }else{
            alert("ERROR");
        }

    }

}

let formData = new formData(form);
xhr.send(formData);
}












