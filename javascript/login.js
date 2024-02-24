
const form=document.querySelector(".login form"),
continuebtn=form.querySelector(".button input"),
errortext=form.querySelector(".error-txt");

form.onsubmit=(e)=>{
	e.preventDefault();
}

continuebtn.onclick=()=>{
	let xhr=new XMLHttpRequest();
	xhr.open("POST","php/login.php",true);
	xhr.onload = () => {
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data= xhr.response;
				console.log(data);

				if(data==5)
				{
					location.href="user.php";
					
				}

				else
				{
					errortext.textContent=data;
					errortext.style.display="block";

				}

			}
		}
	}
	let formdata=new FormData(form);
	xhr.send(formdata);
}