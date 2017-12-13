let check1 = 0;
let check2 = 0;
let check3 = 0;


function handlerPw(){
  var confirmPassword = document.querySelector('input[name=confim_new_password]');
  var password = document.querySelector('input[name=new_password]');
  var confirmPasswordValue = confirmPassword.value;
  var passwordValue = password.value;
  if(confirmPasswordValue != passwordValue){
    document.getElementById('match_pw').innerHTML='Passwords dont match!';
    check3 = 1;
  }
  else{
    document.getElementById('match_pw').innerHTML='';
    check3=0;
  }
}



function checkEmail(){
  var emailValue= document.querySelector('input[name=email]').value;
  let request = new XMLHttpRequest();
  request.addEventListener('load', checkit);
  request.open('POST', 'checkMail.php', false);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({email: emailValue }));
}






function checkit(){
  let answerJson = JSON.parse(this.responseText);
  if(answerJson == "no"){
    document.getElementById("dont_exist").innerHTML='Wrong email!';
    check1 = 1;
  }
  else{
    check1 = 0;

  }
}



function handlerOldPw(){
  var oldPw= document.querySelector('input[name=password]').value;
  let request = new XMLHttpRequest();
  request.addEventListener('load', checkOldPw);
  request.open('POST', 'checkPw.php', false);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({password: oldPw }));
}

function checkOldPw(){
  let answer= JSON.parse(this.responseText);
  if(answer == "yes"){
    document.getElementById('pw_wrong').innerHTML = 'Wrong password!';
    check2 = 1;
  }
  else{
    check2 = 0;
}
}

function handler(){
  checkEmail();
  handlerPw();
  handlerOldPw();
  console.log(check1,check2,check3);
  if(check1 == 1 || check2 == 1 || check3 == 1){
    console.log(check1,check2,check3,"ri");
    return false;
  }else{
    console.log(check1,check2,check3,"ro");
    let email = document.querySelector('input[name=new_email]').value;
    var password = document.querySelector('input[name=new_password]').value;
    let request = new XMLHttpRequest();
    request.open('POST', 'updateUser.php', false);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(encodeForAjax({pwd: password, mail: email}));
    return true;
  }
}




function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}
