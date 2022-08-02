
function loginCheckValidation(){

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const remember = document.getElementById('remember').checked;
    const submit = document.getElementById('submit').value;

    if(username==''){
        document.getElementById('user').innerHTML = "* Please required user id ?";
    }else {
        document.getElementById('user').innerHTML="";
    }

    if(username==''){
        document.getElementById('pass').innerHTML = "* Please required password ?";
    }else {
        document.getElementById('pass').innerHTML="";
    }

    const xhttp = new XMLHttpRequest();

    xhttp.open('post', '../controllers/loginCheckTest.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

            if(this.responseText == "success"){
                location="../views/students/dashboard.php";

            }else {
                // if(this.responseText == "Invalid users credential don't match !") {
                var resutl = this.responseText;
            // }
                document.getElementById('txtHint').innerHTML =resutl.fontcolor('red');
            }
        }
    }
    xhttp.send('&username='+username+'&password='+password+'&remember='+remember+'&submit='+submit);
}
