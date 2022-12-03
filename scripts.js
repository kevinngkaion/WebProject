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

function loadDoc() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 1 ) {
            document.getElementById("ready1").innerHTML =
                "Readystate = 1 and server connection established";
        }
        if (this.readyState == 2 ) {
            document.getElementById("ready2").innerHTML =
                "Readystate = 2 and Request has been received.";
        }
        if (this.readyState == 3 ) {
            document.getElementById("ready3").innerHTML =
                "Readystate = 3 and Request is being processed.";
        }
        if (this.readyState == 4 ) {
            document.getElementById("ready4").innerHTML =
                "Readystate = 4 and Request finished and Response is ready. ";
        }
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "ajax_info.html", true);
    xhttp.send();
}

function postToDB() {
    let email = document.getElementById("postEmail").value;
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange =  function() {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("post").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST","AJAXdbEntry.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send("&email=" + email);
}

function getFromDB() {
    let xhttp = new XMLHttpRequest();
    let email = document.getElementById("getEmail").value;
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("getResponse").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","AJAXdbGET.php?email="+email,true);
    xhttp.send();
}