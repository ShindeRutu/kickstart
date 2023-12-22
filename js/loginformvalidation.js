
	// form validation for login useremail: @gmail.com
	function submit_login(){
		var loginname=document.loginform.loginname.value;
		if (!(loginname.includes("@gmail.com"))) {
			alert("Please enter your @gmail.com email.");
			document.loginform.loginname.value="";
			document.loginform.loginname.focus();
			return false;
		}
		return true;
	}
	// form validation for signup useremail
	function submit_signup(){
		var loginname=document.signupform.loginname.value;
		if (!(loginname.includes("@gmail.com"))) {
			alert("Please enter your @gmail.com email.");
			document.loginform.loginname.value="";
			document.loginform.loginname.focus();
			return false;
		}
		return true;
	}

