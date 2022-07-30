
function regCheckValidation(){

    var user_id = document.getElementById('user_id').value;
    var full_name = document.getElementById('full_name').value;
    var password = document.getElementById('password').value;
    var confpass = document.getElementById('confpass').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var gender = document.getElementById('gender').value;
    var program = document.getElementById('program').value;
    var blood = document.getElementById('blood').value;
    var dob = document.getElementById('dob').value;
    // var usertype = document.getElementById('usertype').value;
    var submit = document.getElementById('submit').value;

    /*	console.log(confpass);
        console.log(phone);
        console.log(email);
        console.log(address);
        console.log(gender);
        console.log(blood);
        console.log(dob);
        console.log(department);
        console.log(usertype);*/



//===========================Username validation======================================
//     console.log(user_id);

    if(user_id==''){
        document.getElementById('u_id').innerHTML = "* Please required user id ?";
    }else if(isNaN(user_id)){
        document.getElementById('u_id').innerHTML = "* Must be integer type ?";
    }else if(user_id.length<4 || user_id.length>15){
        document.getElementById('u_id').innerHTML = "* User id must be between 4 to 11 ?";
    }


//=============================Name Validation=======================================
    if(full_name==''){
        document.getElementById('n').innerHTML = "* Please fill the name field ?";
    }else if(full_name.length<4 || full_name.length>20){
        document.getElementById('n').innerHTML = "* At least 4 to 20 characters ?";
    }else if(!isNaN(full_name)){
        document.getElementById('n').innerHTML = "* Only characters are allowed ?";
    }else if(!(full_name[0]>='A'&&full_name[0]<='Z') ){
        document.getElementById('n').innerHTML = "* First letter must be capital ?";
    }

//=====================Password Validation=================================
    if(password==''){
        document.getElementById('p').innerHTML = "* Please fill the password field ?";
    }else if(password.length<=7 || password.length>20){
        document.getElementById('p').innerHTML = "* Password length must be between 8 to 20 ?";
    }

    if(confpass==''){
        document.getElementById('cp').innerHTML = "* Please required confirm password ?";
    }else if(password != confpass){
        document.getElementById('cp').innerHTML = "* Confirm password are not matching ?";
    }

//=====================Phone Validation=========================================

    if(phone==""){
        document.getElementById('pn').innerHTML = "* Please fill the mobile no field ?";
    }else if(isNaN(phone)){
        document.getElementById('pn').innerHTML = "* Must be write numbers ?";
    }else if(phone.length != 11){
        document.getElementById('pn').innerHTML = "* 11 digits must be write ?";
    }

//==============================Email Validation=========================================

    if(email==""){
        document.getElementById('e').innerHTML = "* Please fill the email field ?";
    }else if(email.indexOf('@') <=0 ){
        document.getElementById('e').innerHTML = "* @ Invalid position  ?";
    }else if(email.charAt(email.length-4) != '.' ){
        document.getElementById('e').innerHTML = "* dot(.) Invalid position  ?";
    }

//==================================Address Validation==========================================

    if(address==""){
        document.getElementById('a').innerHTML = "* Please fill the address field ?";
    }
//==================================Gender Validation==========================================

    if(gender==""){
        document.getElementById('g').innerHTML = "* Please fill the gender field ?";
    }

//==================================Department Validation==========================================

    if(program==""){
        document.getElementById('pro').innerHTML = "* Please fill the program field ?";
    }


//==================================Blood Validation==========================================

    if(blood==""){
        document.getElementById('bg').innerHTML = "* Please fill the blood field ?";
    }

//==================================DOB Validation==========================================

    if(dob==""){
        document.getElementById('d').innerHTML = "* Please fill the dob field ?";
    }

//==============================User Type Validation=================================================

    // if(usertype==""){
    //     document.getElementById('ut').innerHTML = "* Please fill the dob field ?";
    //     return false;
    // }
    // if(usertype.length>0){
    //     document.getElementById('ut').innerHTML="";
    // }

//===================================================================================================

    const xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controllers/regCheckTest.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            document.getElementById('txtHint').innerHTML=this.responseText;

            if(this.responseText == "success"){
                // console.log('test');

                location="../views/login_check.php";
            }else{
                // console.log('fail');
                if(this.responseText == "fail"){
                    // console.log('f');
                    var result = this.responseText;
                    document.getElementById('txtHint').innerHTML=result.fontcolor('red');
                }
            }
        }
    }
    xhttp.send('&user_id='+user_id+'&full_name='+full_name+'&email='+email+'&phone='+phone+'&password='+password+'&address='+address+'&gender='+gender+'&blood='+blood+
        '&dob='+dob+'&program='+program+'&submit='+submit);
    // console.log('test');
//=====================================================================================

}