
function regCheckValidation(){

	var username = document.getElementById('username').value;
	var name = document.getElementById('name').value;
	var password = document.getElementById('password').value;
	var confpass = document.getElementById('confpass').value;
	var phone = document.getElementById('phone').value;
	var email = document.getElementById('email').value;
	var address = document.getElementById('address').value;
	var gender = document.getElementById('gender').value;
	var department = document.getElementById('department').value;
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

	if(username==""){
		document.getElementById('un').innerHTML = "*Please fill the username field ?";
	}else if(username.length<2 || username.length>15){
		document.getElementById('un').innerHTML = "*Username must be btween 2 to 15 ?";
	}else {
		document.getElementById('un').innerHTML="";
	}

//=============================Name Validataion=======================================

	if(name==""){
		document.getElementById('n').innerHTML = "*Please fill the name field ?";
	}else if(name.length<4 || name.length>20){
		document.getElementById('n').innerHTML = "*At least 4 to 20 characters ?";
	}else if(!isNaN(name)){
		document.getElementById('n').innerHTML = "*Only characters are allowed ?";
	}else if(!(name[0]>='A'&&name[0]<='Z') ){
		document.getElementById('n').innerHTML = "*First letter must be capital ?";
	}else {
		document.getElementById('n').innerHTML="";
	}

//=====================Password Validation=================================

	if(password==""){
		document.getElementById('p').innerHTML = "*Please fill the password field ?";
	}else if(password.length<=7 || password.length>20){
		document.getElementById('p').innerHTML = "*Password length must be btween 8 to 20 ?";
	}else {
		document.getElementById('p').innerHTML="";
	}
//============================================================================================
	if(confpass==""){
		document.getElementById('cp').innerHTML = "*Please fill the confpass field ?";
	}
	if(confpass.length>0){
		document.getElementById('cp').innerHTML="";
	}else if(password != confpass){
		document.getElementById('cp').innerHTML = "*Confirm password are not matching ?";
	}else {
		document.getElementById('cp').innerHTML="";
	}

//=====================Phone Validation=========================================

	if(phone==""){
		document.getElementById('pn').innerHTML = "*Please fill the mobile no field ?";
	}else if(isNaN(phone)){
		document.getElementById('pn').innerHTML = "*Must be write numbers ?";
	}else if(phone.length != 11){
		document.getElementById('pn').innerHTML = "*11 digits must be write ?";
	}else {
		document.getElementById('pn').innerHTML="";
	}

//==============================Email Validation=========================================

	if(email==""){
		document.getElementById('e').innerHTML = "*Please fill the email field ?";
	}else if(email.indexOf('@') <=0 ){
		document.getElementById('e').innerHTML = "*@ Invalid position  ?";
	}else if(email.charAt(email.length-4) != '.' ){
		document.getElementById('e').innerHTML = "*dot(.) Invalid position  ?";
	}else {
		document.getElementById('e').innerHTML="";
	}

//==================================Address Validation==========================================

	if(address==""){
		document.getElementById('a').innerHTML = "*Please fill the address field ?";
	}else{
		document.getElementById('a').innerHTML="";
	}

//==================================Gender Validation==========================================

	if(gender==""){
		document.getElementById('g').innerHTML = "*Please fill the gender field ?";
	}else {
		document.getElementById('g').innerHTML="";
	}

//==================================Department Validation==========================================

	if(department==""){
		document.getElementById('dept').innerHTML = "*Please fill the department field ?";
	}else {
		document.getElementById('dept').innerHTML="";
	}

//==================================Blood Validation==========================================

	if(blood==""){
		document.getElementById('bg').innerHTML = "*Please fill the blood field ?";
	}else {
		document.getElementById('bg').innerHTML="";
	}

//==================================DOB Validation==========================================

	if(dob==""){
		document.getElementById('d').innerHTML = "*Please fill the dob field ?";
	}else {
		document.getElementById('d').innerHTML="";
	}

//==============================User Type Validation=================================================

	// if(usertype==""){
	// 	document.getElementById('ut').innerHTML = "* Please fill the dob field ?";
	// 	return false;
	// }

//===================================================================================================

	const xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../controllers/regCheckTest.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			//document.getElementById('txtHint').innerHTML=this.responseText;

			if(this.responseText == "success"){
				location="../views/login_check.php";
			}else{
				// console.log('t');
				if(this.responseText == "missingInfo"){
					// console.log('t');
					var result = this.responseText;
					document.getElementById('txtHint').innerHTML=result.fontcolor('red');
				}
			}
		}
	}
	xhttp.send('&username='+username+'&name='+name+'&password='+password+'&confpass='+confpass+
		'&phone='+phone+'&email='+email+'&address='+address+'&gender='+gender+'&department='+department+
		'&blood='+blood+'&dob='+dob+'&submit='+submit);

//=====================================================================================

}