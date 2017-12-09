let username = document.querySelector('form input[name=username]');
username.addEventListener('input', validateUsername, false);
let password = document.querySelector("form input[name=password]");
password.addEventListener('input', validatePassword, false);
let newpassword = document.querySelector("form input[name=newpassword]");
newpassword.addEventListener('input', validatePassword, false);
let passwordagain = document.querySelector("form input[name=passwordagain]");
passwordagain.addEventListener('keyup', validateRepeat.bind(passwordagain, newpassword), false);


function validateUsername() {
    console.log(this.value);
    if (!/^[a-z]{6,}$/.test(this.value))
        this.classList.add('invalid');
    else
      this.classList.remove('invalid');
}
  
  function validatePassword(other) {
    if (!/^.*(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9]).{6,}$/.test(this.value))
      this.classList.add('invalid');
    else
      this.classList.remove('invalid');
  }
  
  function validateRepeat(password) {
    if (this.value !== password.value)
      this.classList.add('invalid');
    else
      this.classList.remove('invalid');
  }