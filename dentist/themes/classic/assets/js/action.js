$(document).ready(function(){
	// for new user with url for js
	$('#createUser').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/user/create';
	});
	// for list user with url for js
	$('#listUsers').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/user';
	});	
	// for new Country with url for js
	$('#createCountry').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/country/create';
	});
	// for list Countries with url for js
	$('#listCountries').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/country';
	});	
	// for new Country with url for js
	$('#createCity').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/city/create';
	});
	// for list Countries with url for js
	$('#listCities').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/city';
	});
	// for new Healt Regimen with url for js
	$('#createRegimen').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/healtregimen/create';
	});
	// for list Healt Regimenes with url for js
	$('#listRegimenes').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/healtregimen';
	});
	// for new Healt institution with url for js
	$('#createEntity').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/healtinstitution/create';
	});
	// for list Healt Institutions with url for js
	$('#listEntities').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/healtinstitution';
	});	
	// for new level Schooling with url for js
	$('#createLevelSchooling').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/levelschooling/create';
	});
	// for list Level Schoolings with url for js
	$('#listLevelSchooling').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/levelschooling';
	});	
	// for new Profession with url for js
	$('#createProfession').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/profession/create';
	});
	// for list professions with url for js
	$('#listProfessions').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/profession';
	});	
	// for new Patient data with url for js
	$('#createAnamnesis').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/patientdata/create';
	});
	// for list Patient Data with url for js
	$('#listAnamnesis').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/patientdata';
	});
	// for new Personal Background with url for js
	$('#createPersonalBackground').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/personalbackground/create';
	});
	// for list Persona Background with url for js
	$('#listPersonalBackground').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/personalbackground';
	});
	// for new Phyiscal Examination with url for js
	$('#createPhysicalExamination').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/physicalexamination/create';
	});
	// for list Physical Examination with url for js
	$('#listPhysicalExamination').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/physicalexamination';
	});
	// for new ATM with url for js
	$('#createAtm').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/atm/create';
	});
	// for list ATMs with url for js
	$('#listAtms').click(function(event) {
		var newURL = window.location.pathname;
		window.location = newURL+'/atm';
	});	
});