
function editProfileValidation(){

    // var username = document.getElementById('username').value;
    var full_name = document.getElementById('full_name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var program = document.getElementById('program').value;
    var dob = document.getElementById('dob').value;
    var submit = document.getElementById('submit').value;

//===================================================================================================

    const xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../students/edit_student_profile.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200) {
            // document.getElementById('txtHint').innerHTML = this.responseText;

            if(this.responseText == "success") {
                var result = this.responseText;
                location ="../views/students/edit_student_profile.php";
            }else{
                var result = this.responseText;
            }
            document.getElementById('txtHint').innerHTML = result.fontcolor('red');
        }
    }
    xhttp.send('&full_name='+full_name+'&phone='+phone+'&email='+email +'&program='+program+'&dob='+dob +'&submit='+submit);

//=====================================================================================
}
