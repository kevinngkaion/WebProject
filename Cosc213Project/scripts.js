function logout(){
    alert("You have successfully logged out\n You will now be redirected to the index page");
}

function showApplications(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let div = document.getElementById("output");
            div.innerHTML = this.responseText;
            div.classList.remove('d-none');
        }
    };
    xhttp.open("GET", "studentInfo.php?status=pending", true);
    xhttp.send();
}

// Show things on table
function showCurrentStudents(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let div = document.getElementById("output");
            div.innerHTML = this.responseText;
            div.classList.remove('d-none');
        }
    };
    xhttp.open("GET", "studentInfo.php?status=active", true);
    xhttp.send();
}

function showExpiredStudents(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let div = document.getElementById("output");
            div.innerHTML = this.responseText;
            div.classList.remove('d-none');
        }
    };
    xhttp.open("GET", "studentInfo.php?status=inactive", true);
    xhttp.send();
}

function showPeople(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let div = document.getElementById("output");
            div.innerHTML = this.responseText;
            div.classList.remove('d-none');
        }
    };
    xhttp.open("GET", "showPeople.php", true);
    xhttp.send();
}

function registerChild(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let div = document.getElementById("output");
            div.innerHTML = this.responseText;
            div.classList.remove('d-none');
        }
    };
    xhttp.open("GET", "formStudent.php", true);
    xhttp.send();
}

function showChildren(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let div = document.getElementById("output");
            div.innerHTML = this.responseText;
            div.classList.remove('d-none');
        }
    };
    xhttp.open("GET", "studentInfo.php", true);
    xhttp.send();
}

//DataBase Manipulation
function createAccount(personID){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    xhttp.open("POST","createAccount.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send("id=" + personID);
    showPeople();
}

function updateStudent(newStatus, studentID, oldStatus){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange =  function() {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            alert(this.responseText);
        }
    };
    xhttp.open("POST","processStudent.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send("studentID=" + studentID + "&newStatus=" + newStatus);
    switch(oldStatus){
        case 'pending':
            showApplications();
            break;
        case 'active':
            showCurrentStudents();
            break;
        case 'inactive':
            showExpiredStudents();
    }
}