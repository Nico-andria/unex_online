const cookieContainer = document.querySelector(".cookie-alert");
const cookieButton = document.querySelector("button_cookie");

cookieButton.addEventListener("click", () =>{
	cookieContainer.classList.remove("active");
	localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeOut(()=>{
	if(!localStorage.getItem("cookieBannerDisplayed")){
		cookieContainer.classList.add("active");
	}
}, 2000);