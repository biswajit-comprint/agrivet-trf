window.addEventListener("DOMContentLoaded",() => {
	const loginForm = new LoginForm(".login__form");
    // alert('addEventListener');
});

class LoginForm {
	isLoggingIn = false;
	timer = null;

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
		if (this.isLoggingIn) {
            return;
        }

		this.isLoggingIn = true;
		this.loginStateToggle();

		clearTimeout(this.timer);
		this.timer = setTimeout(this.reset.bind(this),1500);

        alert('login function');
        let xx =  this.form;
        console.log(xx);
	}

	loginStateToggle(){
		this.loginBtn.disabled = this.isLoggingIn;
		this.loginBtn.setAttribute("data-login",this.isLoggingIn);
        alert('loginStateToggle');
	}

	reset(){
		this.isLoggingIn = false;
		this.loginStateToggle();
		this.form.reset();
        alert('reset');
	}
}