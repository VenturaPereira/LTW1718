function handlerPw(){
  var confirmPassword = document.querySelector('input[name=confim_new_password]');
  var password = document.querySelector('input[name=new_password]');
  var confirmPasswordValue = confirmPassword.value;
  var passwordValue = password.value;
  alert("hi");
  if(confirmPasswordValue != passwordValue){
    document.getElementById('match_pw').innerHTML='Passwords dont match!';
    return false;
  }
  else{
    document.getElementById('match_pw').innerHTML='';
    return true;
  }
}



function checkEmail(){
  var emailValue= document.querySelector('input[name=email]').value;
  alert(emailValue);
  let request = new XMLHttpRequest();
  request.addEventListener('load', checkit);
  request.open('POST', 'checkMail.php', false);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({email: emailValue }));
  return false;
}


function checkit(){
  let answerJson = JSON.parse(this.responseText);
 alert(answerJson);
  if(answerJson == "no"){
    document.getElementById("dont_exist").innerHTML='Wrong email!';
  }
}

function handler(){
  checkEmail();
  handlerPw();
  return false;
}
function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}
