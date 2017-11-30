

function handler(){
  var confirmPassword = document.querySelector('input[name=confirmPassword]');
  var password = document.querySelector('input[name=password]');
  var confirmPasswordValue = confirmPassword.value;
  var passwordValue = password.value;
  if(confirmPasswordValue != passwordValue){
    document.getElementById('pass_int').innerHTML='Passwords dont match!';
    return false;
  }
  else{
    document.getElementById('pass_int').innerHTML='';
    return true;
  }
}
