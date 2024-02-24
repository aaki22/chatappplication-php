
const form=document.querySelector(".signup form"),
continuebtn=form.querySelector(".button input"),
errortext=form.querySelector(".error-txt");

form.onsubmit=(e)=>{
	e.preventDefault();
}

continuebtn.onclick=()=>{
	let xhr=new XMLHttpRequest();
	xhr.open("POST","http://localhost/chat%20app-php/insert-chat.php",true);
	console.log(xhr.readystatus);
	xhr.onload = () => {
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data= xhr.response;

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