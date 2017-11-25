
	
	function submitRegisterAjax(event){

		event.preventDefault();
		let usernameValue = document.getElementById('username').value;
		let passwordValue = document.getElementById('password').value;
		let nameValue = document.getElementById('name').value;
		let emailValue = document.getElementById('email').value;
		let profilePhotoValue = document.getElementById('profilePhoto').value;

		let request = new XMLHttpRequest();
		request.addEventListener("load", finishRegister);
		request.open('post', 'action_user_register.php', true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		request.send(encodeForAjax({username: usernameValue, password: passwordValue, name: nameValue, email: emailValue, profilePhoto: profilePhotoValue}));
	}

	function encodeForAjax(data){
		return Object.keys(data).map(function(k){
			return encodeURIComponent(k) +'='+ encodeURIComponent(data[k])
		}).join('&');
	}

	function finishRegister(event){
		document.getElementsByTagName('p')[0].innerHTML = this.responseText;

	}