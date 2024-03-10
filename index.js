/*const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');




form.addEventListener('submit', e => {
    e.preventDefault();
    validateInputs();

    if(isFormValid()==true){
        form.submit();
    } else {
        event.preventDefault();
    }
});



function isFormValid(){
    const inputContainers = form.querySelectorAll('.input-control');
    let result = true;
    inputContainers.forEach((container)=>{
        if(container.classList.contains('error')){
            result = false;
        }
    });

    return result;
}




const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  inputControl.classList.add('success');
  inputControl.classList.remove('error');
};

const isValidEmail = email => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();

 

if(emailValue === '') {
    setError(email, 'Email is required');
} else if (!isValidEmail(emailValue)) {
    setError(email, 'Provide a valid email address');
} else {
    setSuccess(email);
}

if(passwordValue === '') {
    setError(password, 'Password is required');
} else if (passwordValue.length < 8 ) {
    setError(password, 'incorrect password.')
} else {
    setSuccess(password);
}

};

function disable(x){
 x.disabled = true;
}

