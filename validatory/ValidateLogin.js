console.log("Ahoj")

function validateForm(form){
    var inputs = [...form.getElementsByTagName("input")];
    console.log(inputs)
    var email = inputs.find(element => element.getAttribute("name")=== "emailLogin");
    var password = inputs.find(element => element.getAttribute("name")=== "password");
    console.log(email);
    console.log(password);
    console.log("Ahoja zase");
    var result = validateEmail(email) && validatePassword(password);
    console.log(result)
    return result
}

console.log(new Date)


function validateEmail(email){
    

    if(!email.value.includes("@")){
        console.log("Email neobsahuje zavináč");
        window.alert("Email neobsahuje zavináč");
        return false
    }

    if(!email.value.includes(".")){
        console.log("Email neobsahuje tečku");
        window.alert("Email neobsahuje tečku");
        return false
    }

    if(!(email.value.indexOf("@") < email.value.indexOf("."))){
        console.log("Tečka musí být za zavináčem");
        window.alert("Tečka mucí být za zavináčem");
        return false
    }

    if(!email.value.indexOf("@") > 0){
        console.log("Zavináč nesmí být na prvním místě");
        window.alert("Zavináč nesmí být na prvním místě");
        return false
    }

    if(!email.value.indexOf(".") > email.value.length - 1){
        console.log("Tečka nesmí být na první místě");
        window.alert("Tečka nesmí být na první místě");
        return false
    }


}


function validatePassword(password){


    const capitals = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    const numbers = "0123456789"
    const specials = "~!@#$%^&*_-+=`|(){}[]:;\"'<>,.?/"
 

    if(!(password.value.length >= 16 && password.value.length < 100)){
        console.log("Heslo je příliš dlouhé nebo krátké.");
        console.log("Heslo je příliš dlouhé nebo krátké.");
        return false
    }

    if(!password.value.split("").some((letter) => capitals.includes(letter))){
        console.log("Heslo neobsahuje velké písmena.");
        console.log("Heslo neobsahuje velké písmena.");
        return false
    }

    if(!element.value.split("").some((letter) => numbers.includes(letter))){
    console.log("Heslo neobsahuje čísla.");
    console.log("Heslo neobsahuje čísla.");
    return false
    }

    if(!element.value.split("").some((letter) => specials.includes(letter))){
    console.log("Heslo neobsahajue speciální znaky.");
    console.log("Heslo neobsahajue speciální znaky.");
    return false
    }



}



























// const email = document.getElementById("emailLogin");
// const password = document.getElementById("passwordLogin");
// const form = document.querySelector("form");
// const errorMessage = document.getElementById("errorMessage");

// form.addEventListener("submit", (e) => {
//     const errors = [];
//     if(!email.value.includes("@")){
//                errors.push("email neobsahuje zavináč");
//               return false;
//             }
        
//            if(!email.value.includes(".")){
//                 errors.push("email neobsahuje tečku")
//            }
        
//           if(!(email.value.indexOf(".") < email.value.lenght - 1))
//              { errors.push("email obsahuje tečku jako poslední");
//        return false;}

//            if(password.value.lenght < 4){
//             errors.push("Heslo musí mít více než 4 znaky")
//            }


//     if(errors.lenght > 0){
//         e.preventDefault();
//         errorMessage.toggleAttribute('hidden');
//         errorMessage.innerHTML = errors.join(', ');
//     }
// })

