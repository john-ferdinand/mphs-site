var homeLink = document.getElementById("home-link");
var ourSchoolLink = document.getElementById("our-school-link");
var admissionLink = document.getElementById("admission-link");
var facilitiesLink = document.getElementById("facilities-link");
var contactUsLink = document.getElementById("contact-us-link");

var carouselContainer = document.getElementById("c10");
var ourSchool = document.getElementById("our-school");
var admission = document.getElementById("admission");
var facilities = document.getElementById("facilities");
var contactUs = document.getElementById("contact-us");

var contentContainer = document.getElementById("content-container");



homeLink.addEventListener("click", loadHome);
ourSchoolLink.addEventListener("click", loadOurSchool);
admissionLink.addEventListener("click", loadAdmission);
facilitiesLink.addEventListener("click", loadFacilities);
contactUsLink.addEventListener("click", loadContactUs);

function loadHome() {
	//alert("Home");
	contentContainer.innerHTML = carouselContainer.innerHTML;
}

function loadOurSchool(){
	//alert("Our School");
	contentContainer.innerHTML = ourSchool.innerHTML;
}

function loadAdmission(){
	//alert("Admission");
	contentContainer.innerHTML = admission.innerHTML;
}

function loadFacilities(){
	//alert("Facilities");
	contentContainer.innerHTML = facilities.innerHTML;
}

function loadContactUs(){
	//alert("Contact Us");
	contentContainer.innerHTML = contactUs.innerHTML;
}


window.onscroll= function() {myFunction()};

var header = document.getElementById("c2");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        header.classList.add("sticky-style-for-header-container");
    } else {
        header.classList.remove("sticky-style-for-header-container");
    }
}