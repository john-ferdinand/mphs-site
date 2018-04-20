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

var container = document.getElementById("c9");

homeLink.addEventListener("click", loadHome);
ourSchoolLink.addEventListener("click", loadOurSchool);
admissionLink.addEventListener("click", loadAdmission);
facilitiesLink.addEventListener("click", loadFacilities);
contactUsLink.addEventListener("click", loadContactUs);

function loadHome() {
	alert("Home");
	container.innerHTML = carouselContainer.innerHTML;
}

function loadOurSchool(){
	alert("Our School");
	container.innerHTML = ourSchool.innerHTML;
}

function loadAdmission(){
	alert("Admission");
	container.innerHTML = admission.innerHTML;
}

function loadFacilities(){
	alert("Facilities");
	container.innerHTML = facilities.innerHTML;
}

function loadContactUs(){
	alert("Contact Us");
	container.innerHTML = contactUs.innerHTML;
}