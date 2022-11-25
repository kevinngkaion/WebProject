function validateForm(){
    let fname = document.forms["regForm"]["fname"].value;
    let lname = document.forms["regForm"]["lname"].value;
    let email = document.forms["regForm"]['email'].value;
    let phone = document.forms["regForm"]['phone'].value;
    let submitBTN = document.getElementById('valSubmit');
    let isValid = true;
    if (fname.length == 0){
        alert("First name cannot be empty");
        isValid = false;
    }
    if(lname.length == 0){
        document.getElementById('alertBox').removeAttribute('hidden');
        isValid = false;
    } else {
        document.getElementById('alertBox').setAttribute('hidden', 'hidden');
    }
    if(phone.length == 0 || isNaN(phone)){
	alert("Phone number cannot be empty\nPlease enter a valid phone number using only digits e.g. 1234567890");
	isValid = false;
    }
    if (isValid) {
	 alert("Success. You have entered valid input");
    }
    return isValid;
}
