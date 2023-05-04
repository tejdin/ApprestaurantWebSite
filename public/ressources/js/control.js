function veriftel(x)
  {
  if(x.length !=8 || isNaN(x)==true )
  {  alert ("Phone number invalid");
  document.forms[0].numtel.value="";}
}

function verifnom(champ)
  {
    champ.value=champ.value.replace(/[^A-Z ^a-z ^ ]/,"");
  }

  function verifmsg(champ)
  {
    champ.value=champ.value.replace(/[^A-Z ^a-z ^  ^0-9 ^,.!?é"àù$£ ]/,"");
  }



  function validateForm() {
    var password = document.getElementById("pass");
    var repeatPassword = document.getElementById("r-pass");
    var checkBox = document.forms[0].item.checked;
  
     // check if password meets requirements
    var passwordRegex = /^(?=.*[A-Z].*[A-Z])(?=.*\d).*$/;
    if (!passwordRegex.test(password.value)) {
    alert("Password must contain at least 2 uppercase letters and numbers");
    return false;
  }

    // check if passwords match
    if (password.value != repeatPassword.value) {
      alert("Passwords do not match");
      return false;
    }
  
    // check if checkbox is checked
    if (!checkBox) {
      alert("Please agree to our terms and privacy");
      return false;
    }
  
    return true;
  }



