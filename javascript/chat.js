const form=document.querySelector(".typing-area"),
inputfield= form.querySelector(".input-field"),
sendBtn=form.querySelector("button");

form.onsubmit=(e)=>{
	e.preventDefault();
}

sendBtn.onclick=()=>{
	let xhr=new XMLHttpRequest();
	xhr.open("POST","php/insert-chat .php",true);
	console.log(xhr.status);
	console.log(xhr.readyState); 	
	xhr.onload = () => {
		if(xhr.readyState === XMLHttpRequest.DONE ){
			console.log(xhr.status);
			if(xhr.status === 200){
				var data= xhr.response;
				console.log(data);

				var data= xhr.response;
				inputfield.value="";
				console.log(data);

				
		}
		else {
      console.error('Error:', xhr.status, xhr.statusText);
      console.log(xhr.responseText); // Log the response for additional information
    }
	}
	else {
      console.error('Error:', xhr.status, xhr.statusText);
      console.log(xhr.responseText); // Log the response for additional information
    }
	let formdata=new FormData(form);
	xhr.send(formdata);
}
}   