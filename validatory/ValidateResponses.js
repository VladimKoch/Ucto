



function validateForm(form)

{
    var inputs = [...form.getElementsByTagName("input")]
    var required = inputs.filter(element => element.hasAttribute("required"));
    var email = inputs.find(element => element.getattribute("name") === "email" )
    var result = validateRequired(required) && validateEmail(email) && 
    validateInputs(username,phone,obrat,karts,employes,doklady,forma,podnikani,zajem,DPH);
    return result;
}

//validate required
function validateRequired(requiredElements)
{
    var result = true
    requiredElements.forEach(element  => {
        if(element.value == "" || element.value == null || element.value == undefined || element.value == "vyberte")
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







function validateInputs(username,phone,obrat,karts,employes,doklady,forma,podnikani,zajem,DPH){

    const form = document.getElementById("form")
    
        
        var username = document.getElementById("username")
        
        var phone = document.getElementById("phone")
        var obrat = document.getElementById("obrat")
        var karts = document.getElementById("karts")
        var employes = document.getElementById("employes")
        var doklady = document.getElementById("doklady")
        var forma = document.getElementById("forma")
        var podnikani = document.getElementById("podnikani")
        var zajem = document.getElementById("zajem")
        var DPH = document.getElementById("DPH")
        
    
        
        if(username.value == "" || username.value == null || username.value == undefined)
        {
           alert("Prosím vyplntě jméno")
        }
       
    
    
    
    
       if(!(phone.value.indexOf("+") == 0))
        {alert("Telefon musí obsahovat znaménko + a předčíslí státu ")
        return false
        }
    
    
       if(obrat.value == "" || obrat.value == null || obrat.value == undefined)
        {alert("Zadejte prosím váš roční obrat v KČ")
        return false
        }
    
    
       if(karts.value == "" || karty.value == null || karty.value == undefined)
        {alert("Zadejte prosím kolik máte Inventárních karet")
        return false
        }
    
    
    
    
       if(employes.value == "" || zamestnanaci.value == null || zamestnanaci.value == undefined)
       {alert("Zadejte prosím počet zaměstnanců vaší firmy")
        return false
       }
    
    
    
    
       if(doklady.value == "" || doklady.value == null || doklady.value == undefined)
        {alert("Zadejte prosím kolik dokladů máte k zaúčtování")
        return false
        }
    
       if(forma.value == "" || forma.value == null || forma.value == undefined)
        {alert("Zadejte prosím jaká je vaše právní forma")
        return false
        }
    
    
    
       if(podnikani.value == "" || podnikani.value == null || podnikani.value == undefined)
       {alert("Zadejte prosím obor vašeho podníkání")
       return false
       }

       if(zajem.value == "" || zajem.value == null || zajem.value == undefined)
       {alert ("Vyberte prosím o jaký typ účetnictví máte zájem")
       return false
       }

       if(DPH.value =="" || DPH.value == null || DPH.value == undefined)
       {alert ("Vyberte prosím zda-li jste plátci DPH")
        return false
        }
        
       else
       
       {
        return true
       }
}

   
