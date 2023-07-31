



function validateForm(form)

{
    var inputs = [...form.getElementsByTagName("input")]
    var required = inputs.filter(element => element.hasAttribuete("required"));
    var email = inputs.find(element => element.getattribute("name") === "email" )
    var result = validateRequired(required) && validateEmail(email);
    return result;
}

//validate required
function validateRequired(requiredElements)
{
    var result = true
    requiredElements.forEach(element  => {
        if(element.value == " " || element.value == null || element.value == undefined || element.value == "vyberte")
        { result = false;
            window.alert("Nevyplnili jste všechna požadovaná pole")
        }
        
    });
    return true;

    
}
//validate email
function validateEmail(email)
{
    if(!email.value.includes("@")){
        console.log("email neobsahuje zavináč");
        return false;
    }

    if(!email.value.includes(".")){
        console.log("email neobsahuje tečku")
    }

    if(!(email.value.indexOf(".") < email.value.lenght - 1))
    { console.log("email obsahuje tečku jako poslední");
return false;}

console.log("email je v pořádku");
return true;
}








// const form = document.getElementById("form")

    
//     var username = document.getElementById("username")
//     var email = document.getElementById("e-mail")
//     var phone = document.getElementById("phone")
//     var obrat = document.getElementById("obrat")
//     var karty = document.getElementById("karty")
//     var zamestnanaci = document.getElementById("zaměstnanci")
//     var doklady = document.getElementById("doklady")
//     var forma = document.getElementById("forma")
//     var podnikani = document.getElementById("podnikani")
//     var zajem = document.getElementById("zajem")
//     var DPH = document.getElementById("DPH")
//     var informace = document.getElementById("informace")

    
//     if(username.value == "" || username.value == null || username.value == undefined)
//     {
//        alert("Prosím vyplntě jméno")
//     }
   




//    if(!(phone.value.indexOf("+") == 0))
//     {alert("Telefon musí obsahovat znaménko + a předčíslí státu ")
//     return false
//     }


//    if(obrat.value == "" || obrat.value == null || obrat.value == undefined)
//     {alert("Zadejte prosím váš roční obrat v KČ")
//     return false
//     }


//    if(karty.value == "" || karty.value == null || karty.value == undefined)
//     {alert("Zadejte prosím kolik máte Inventárních karet")
//     return false
//     }




//    if(zamestnanaci.value == "" || zamestnanaci.value == null || zamestnanaci.value == undefined)
//    {alert("Zadejte prosím počet zaměstnanců vaší firmy")
//     return false
//    }




//    if(doklady.value == "" || doklady.value == null || doklady.value == undefined)
//     {alert("Zadejte prosím kolik dokladů máte k zaúčtování")
//     return false
//     }

//    if(forma.value == "" || forma.value == null || forma.value == undefined)
//     {alert("Zadejte prosím jaká je vaše právní forma")
//     return false
//     }



//    if(podnikani.value == "" || podnikani.value == null || podnikani.value == undefined)
//    {alert("Zadejte prosím obor vašeho podníkání")
//    return false
//    }

//    else
   
//    {
//     return true
//    }

   
