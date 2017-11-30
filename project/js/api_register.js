
	
	function submitCategoryAjax(event){

		event.preventDefault();
		let nameValue = document.getElementById('categoryName').value;
		let colorValue = document.getElementById('categoryColor').value;
		let foreignIDValue = document.getElementById('foreignID').value;
		let isUserRadio = document.getElementsByName('isUser');
		let isUserValue;

		if(isUserRadio[0].checked == true){
			isUserValue = true;	
		}
		else{
			isUserValue = false;
		}

		let request = new XMLHttpRequest();
		request.addEventListener("load", finishRegister);
		request.open('post', 'actions/action_add_category.php', true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		request.send(encodeForAjax({categoryName: nameValue, categoryColor: colorValue, foreignID: foreignIDValue, isUser: isUserValue}));
	}

	function encodeForAjax(data){
		return Object.keys(data).map(function(k){
			return encodeURIComponent(k) +'='+ encodeURIComponent(data[k])
		}).join('&');
	}

	function finishRegister(event){
		document.getElementsByTagName('p')[0].innerHTML = this.responseText;
		
	}