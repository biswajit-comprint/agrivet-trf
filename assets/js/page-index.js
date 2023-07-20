window.addEventListener("DOMContentLoaded",() => {
	const loginForm = new LoginForm(".login__form");
    alert('DOMContentLoaded');
});

class LoginForm {
	isLoggingIn = false;
	timer = null;

	// creadiential from db
	db_user_email = "biswajit@comprint.in";
	db_user_pass = 123;

	constructor(el) {
		this.el = document.querySelector(el);
		this.init();
	}

	init(){
		// this.copyright();

		this.form = this.el?.querySelector("form");
		this.form?.addEventListener("submit",this.login.bind(this));

		this.loginBtn = this.el?.querySelector("[data-login]");
		this.loginBtn?.addEventListener("click",this.login.bind(this));
	}

	// copyright(){
	// 	const year = this.el?.querySelector("[data-year]");
	// 	if (year) year.innerHTML = new Date().getFullYear();
    //     alert('copyrite');
	// }

	login(){

		if(this.isLoggingIn) {
			alert('Already login');
            return;
        }else{
			this.isLoggingIn = true;
			this.loginStateToggle(); // false

			// get data from login form
			let user_email_el 	= this.el.user_email;
			let user_pass_el 	= this.el.user_pass;
			let user_email 		= user_email_el.value;
			let user_pass 		= user_pass_el.value;
			var loginForm 		= new FormData(this.el);
			let actionUrl 		= './assets/action/login_user.php';

			// console.log(user_email);
			// console.log(user_pass);
			console.log(loginForm);

			// console.log(typeof(loginForm));
			// this.callAjax(loginForm);

			$.ajax({
				url: './assets/action/login_user.php',
				type: 'POST',
				data: {
					id:JSON.stringify(loginForm)
				},
				// dataType: 'json',
				success: function(res){
					console.log(res);
					// if((this.db_user_email == user_email) && (this.db_user_pass == user_pass)){
					// 	alert('login data match');
					// 	// if query true
					// 	clearTimeout(this.timer);
					// 	// close sprin on btn
					// 	this.timer = setTimeout(this.reset.bind(this),1500);
					// }else{
					// 	alert('login data not match');
					// 	// if query false
					// 	clearTimeout(this.timer);
					// 	// close sprin on btn
					// 	this.timer = setTimeout(this.reset.bind(this),1500);
					// }
				},
				error: function (xhr, ajaxOptions, thrownError) {
					alert(xhr.status);
					alert(thrownError);
					// // if query false
					// clearTimeout(this.timer);
					// // close sprin on btn
					// this.timer = setTimeout(this.reset.bind(this),1500);
				}
			});
		}
	}

	callAjax(loginForm){
		// alert(loginForm);
		// call ajax
		
	}

	loginStateToggle(){
		this.loginBtn.disabled = this.isLoggingIn;
		this.loginBtn.setAttribute("data-login",this.isLoggingIn);
	}

	reset(){
		this.isLoggingIn = false;
		this.loginStateToggle();
		this.form.reset();
        alert('reset');
	}
}