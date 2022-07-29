
function regCheckValidation(){

    var student_id = document.getElementById('student_id').value;
    var name = document.getElementById('name').value;
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

    if(student_id==''){
        document.getElementById('u_id').innerHTML = "* Please required student id ?";
    }else if(isNaN(student_id)){
        document.getElementById('u_id').innerHTML = "* Must be integer type ?";
    }else if(student_id.length<4 || student_id.length>15){
        document.getElementById('u_id').innerHTML = "* Student id must be between 4 to 11 ?";
    }else{
        document.getElementById('u_id').innerHTML="";
    }


//=============================Name Validation=======================================
    if(name==''){
        document.getElementById('n').innerHTML = "* Please fill the name field ?";
    }else if(name.length<4 || name.length>20){
        document.getElementById('n').innerHTML = "* At least 4 to 20 characters ?";
    }else if(!isNaN(name)){
        document.getElementById('n').innerHTML = "* Only characters are allowed ?";
    }else if(!(name[0]>='A'&&name[0]<='Z') ){
        document.getElementById('n').innerHTML = "* First letter must be capital ?";
    }else{
        document.getElementById('n').innerHTML="";
    }

//=====================Password Validation=================================
    if(password==''){
        document.getElementById('p').innerHTML = "* Please fill the password field ?";
    }else if(password.length<=7 || password.length>20){
        document.getElementById('p').innerHTML = "* Password length must be between 8 to 20 ?";
    }else{
        document.getElementById('p').innerHTML="";
    }

    if(confpass==''){
        document.getElementById('cp').innerHTML = "* Please required confirm password >";
    }else if(password != confpass){
        document.getElementById('cp').innerHTML = "* Confirm password are not matching ?";
    }else{
        document.getElementById('cp').innerHTML="";
    }

//=====================Phone Validation=========================================

    if(phone==""){
        document.getElementById('pn').innerHTML = "* Please fill the mobile no field ?";
    }else if(isNaN(phone)){
        document.getElementById('pn').innerHTML = "* Must be write numbers ?";
    }else if(phone.length != 11){
        document.getElementById('pn').innerHTML = "* 11 digits must be write ?";
    }else{
        document.getElementById('pn').innerHTML="";
    }

//==============================Email Validation=========================================

    if(email==""){
        document.getElementById('e').innerHTML = "* Please fill the email field ?";
    }else if(email.indexOf('@') <=0 ){
        document.getElementById('e').innerHTML = "* @ Invalid position  ?";
    }else if(email.charAt(email.length-4) != '.' ){
        document.getElementById('e').innerHTML = "* dot(.) Invalid position  ?";
    }else{
        document.getElementById('e').innerHTML="";
    }

//==================================Address Validation==========================================

    if(address==""){
        document.getElementById('a').innerHTML = "* Please fill the address field ?";
    }else{

    }

//==================================Gender Validation==========================================

    if(gender==""){
        document.getElementById('g').innerHTML = "* Please fill the gender field ?";
    }else{
        document.getElementById('g').innerHTML="";
    }

//==================================Department Validation==========================================

    if(program==""){
        document.getElementById('pro').innerHTML = "* Please fill the program field ?";
    }
    if(program.length>0){
        document.getElementById('pro').innerHTML="";
    }

//==================================Blood Validation==========================================

    if(blood==""){
        document.getElementById('bg').innerHTML = "* Please fill the blood field ?";
    }else{
        document.getElementById('bg').innerHTML="";
    }

//==================================DOB Validation==========================================

    if(dob==""){
        document.getElementById('d').innerHTML = "* Please fill the dob field ?";
    }
    if(dob.length>0){
        document.getElementById('d').innerHTML="";
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
            //document.getElementById('txtHint').innerHTML=this.responseText;

            if(this.responseText == "success"){
                location="../controler/login_check.php";
            }else{
                if(this.responseText == "missingInfo"){
                    var result = this.responseText;
                    document.getElementById('txtHint').innerHTML=result.fontcolor('red');
                }
            }
        }
    }
    xhttp.send('username='+username+'&name='+name+'&password='+password+'&confpass='+confpass+
        '&phone='+phone+'&email='+email+'&address='+address+'&gender='+gender+'&department='+department+
        '&blood='+blood+'&dob='+dob+'&usertype='+usertype+'&submit='+submit);

//=====================================================================================

}