const searchbar=document.querySelector(".users .search input");
searchbtn=document.querySelector(".users .search button"),
usersList=document.querySelector(".users .user-list");

searchbtn.onclick=() =>{
	searchbar.classList.toggle("active");
	searchbar.focus();
	searchbtn.classList.toggle("active");
}

searchbar.onkeyup=()=>{
	let searchTerm=searchbar.value;

	if (searchTerm != "")
	{
		searchbar.classList.add("active");
	}
	else{
		searchbar.classList.remove("active");
	}

	let xhr=new XMLHttpRequest();
	xhr.open("POST","php/search.php",true);
	xhr.onload = () => {
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data= xhr.response;
				usersList.innerHTML=data;
			}
		}
	}
	xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
	xhr.send("searchTerm="+searchTerm);
}

setInterval(()=>{
	let xhr=new XMLHttpRequest();
	xhr.open("GET","php/users.php",true);
	xhr.onload = () => {
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data= xhr.response;
				if(!searchbar.classList.contains("active")){
				usersList.innerHTML=data;
				}
			}
		}
	}
	xhr.send();
},500);