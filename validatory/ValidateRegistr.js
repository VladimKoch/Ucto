function validateForm(form){
    var inputs = [...form.getElementsByTagName("input")];
    var Required = inputs.filter(element => element.hasAttribute("required"));
    var Email = inputs.find(element => element.getAttribute("name") === "Email");
    var Password = inputs.find(element => element.getAttribute("name") === "Password");
    var ConfirmPassword = inputs.find(element => element.getAttribute("name") === "ConfirmPassword");

    var result = validateRequired(Required) && validateEmail(Email) && validatePassword1(Password) && validatePasswords(Password,ConfirmPassword);
   
    console.log(result);
    return result;
    
    
}

function validateRequired(requiredElements)
{
 requiredElements.forEach(element => {
    if(element.value === "" || element === null || element === undefined){
        console.log("Nejsou vyplněna všechna pole")
        
        return false
    }
 });
 return true
}



function validateEmail(Email){
    
 
    if(!Email.value.includes("@")){
        console.log("Email neobsahuje zavináč");
        return false;
    }

    if(!Email.value.includes(".")){
        console.log("Email neobsahuje tečku");
        return false;
    }

    if(!(Email.value.indexOf("@") < Email.value.indexOf("."))){
        console.log("Tečka musí být za zavináčem");
        return false;
    }

    if(!Email.value.indexOf("@") > 0){
        console.log("Zavináč nesmí být na prvním místě");
        return false;
    }

    if(!Email.value.indexOf(".") > Email.value.length - 1){
        console.log("Tečka nesmí být na první místě");
        return false;
    }

return true

}


function validatePassword1(Password){

    const passwordValue = Password.value.trim();
    const capitals = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    const numbers = "0123456789"
    const specials = "~!@#$%^&*_-+=`|(){}[]:;\"'<>,.?/"



    if(!(passwordValue.length >= 6 && passwordValue.length < 100)){
        console.log("Heslo je příliš dlouhé nebo krátké, Použijte nejméně 6 znaků.");
        window.alert("Heslo je příliš krátke nebo dlouhé");
        return false;
    }

    else if(!Password.value.split("").some((letter) => capitals.includes(letter))){
        console.log("Heslo neobsahuje velká písmena.");
        window.alert("Heslo neobsahuje velká písmena");
        return false;
    }

    else if(!Password.value.split("").some((letter) => numbers.includes(letter))){
        console.log("Heslo neobsahuje čísla.");
        window.alert("Heslo neobsahuje čísla.");
        return false;
    }

    else if(!Password.value.split("").some((letter) => specials.includes(letter))){
        console.log("Heslo neobsahajue speciální znaky.");
        window.alert("Heslo neobsahajue speciální znaky.");
        return false;
    }

    return true
}
  
function validatePasswords(Password, ConfirmPassword){
    if(Password.value !== ConfirmPassword.value)
    {
        window.alert("Hesla se neshodují");
        console.log("Hesla se neshodují");
        return false;
    }


return true;
    }
