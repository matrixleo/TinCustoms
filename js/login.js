
function validate(number){
  console.log("Hyn ne funksion funksion");
  if(number == 0){
    var usernameValue = inputElements[0].value;
    var passwordValue = inputElements[1].value;
    console.log(inputElements);
    console.log("username: "+usernameValue);
    console.log("password: "+passwordValue);
    if(usernameValue == "" || passwordValue == ""){
      alert("Mbushini te gjitha hapsirat!");
    }
    else{
      alert("Kycja u krye me sukses.");
    }
  }
  else if(number == 1){
    var nameValue = inputElements[3].value;
    var lastNameValue = inputElements[4].value;
    var usernameRegValue = inputElements[5].value;
    var passwordRegValue = inputElements[6].value;
    console.log(inputElements);
    console.log("name "+nameValue);
    console.log("lastName "+lastNameValue);
    console.log("usernameReg "+usernameRegValue);
    console.log("passwordReg "+passwordRegValue);
    if(nameValue == "" || lastNameValue == "" || usernameRegValue=="" || passwordRegValue == ""){
      alert("Mbushini te gjitha hapsirat!");
    }
    else{
      alert("Regjistrimi u krye me sukses.");
    }
  }
}

function changeForm(number){
  var format = document.getElementsByClassName('forms');
  if(number == 0){
    format[0].classList.remove("hidden");
    format[0].classList.add("form-style");
    format[1].classList.add("hidden");
    format[1].classList.remove("form-style");
  }
  else if(number == 1){
    format[1].classList.remove("hidden");
    format[1].classList.add("form-style");
    format[0].classList.add("hidden");
    format[0].classList.remove("form-style");
  }
}

var inputElements = document.getElementsByClassName("input");
var usernameValue = inputElements[0].value;
var passwordValue = inputElements[1].value;
console.log(inputElements);
console.log("username "+usernameValue);
console.log("password "+passwordValue);
