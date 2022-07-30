
function loginCheckValidation(){

	const username = document.getElementById('username').value;
	const password = document.getElementById('password').value;
	const remember = document.getElementById('remember').checked;
	const submit = document.getElementById('submit').value;

	if(username==""){
		document.getElementById('user').innerHTML = "*Please fill the username ?";
	}else{
		document.getElementById('user').innerHTML = "";
	}

	if(password==""){
		document.getElementById('pass').innerHTML = "*Please fill the password ?";
		return false;
	}else{
		document.getElementById('pass').innerHTML = "";
	}

	const xhttp = new XMLHttpRequest();

	xhttp.open('post', '../controllers/loginCheckTest.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){

			if(this.responseText == "success"){
				location="../views/dashboard.php";
				
			}else{
				if (this.responseText == "Invalid User"){
					var resutl = this.responseText;
					document.getElementById('txtHint').innerHTML =resutl.fontcolor('red');
				}
			}
		}
	}
	xhttp.send('username='+username+'&password='+password+'&remember='+remember+'&submit='+submit);

}
