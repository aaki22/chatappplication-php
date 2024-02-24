const pswrdfield=document.querySelector(".form input[type='password']");
togglebtn=document.querySelector(".form .field i");

togglebtn.onclick= ()=>{
	
	if (pswrdfield.type=='password')
	{
		pswrdfield.type='name';
		togglebtn.classList.add("active")
	}
	else{
		pswrdfield.type='password'
		togglebtn.classList.remove("active")
	}
}