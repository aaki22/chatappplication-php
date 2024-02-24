const pswrdfield=document.querySelector(".form input[type='password']");
togglebtn=document.querySelector(".form .field i");

togglebtn.onclick= ()=>{
	
	if (pswrdfield.type=='password')
	{
		pswrdfield.type='name';
	}
	else{
		pswrdfield.type='password'
	}
}