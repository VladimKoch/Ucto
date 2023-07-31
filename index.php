<?php

// echo "Ahoj";

require_once(__DIR__."./db/db.php");
require_once(__DIR__."./dal/CommentRepository.php");
require_once(__DIR__."/model/Comment.php");
require_once(__DIR__."/dal/UserRepository.php");
require_once(__DIR__."/auth/signer.php");
require_once(__DIR__."/auth/check_cookie.php");



// $repo = new CommentRepository($connection);
// $crypt = new Crypt();

// $input = array("Username" => "VladimirKochan", "Email" => "VKochan@tiscali.cz", "Password" => "aabbccdd" );
// $newUserId = $repo -> create($input);

// var_dump( $repo -> retrieve("id = 1"));
// $input = array("Username" => "Petr Pavel");
// $podminka = "Id = 1";

// $repo -> update($input, $podminka);

// $res = $repo -> get_comments_by_user("JojoBand");
// echo $crypt -> encrypt("aabbccdd");   // kYdXvE2DhIc= //

// var_dump($res);
?>





<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styly.css">

 
    
    <title>MSdaně</title>
</head>
<body>

    <header id="domu">
        <div class="pozadi"></div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <div class="img"><img src="./img/MarciSRO.svg" class="marciFOTO" alt=""></div>
            
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li><a href="#domu"><button class="btn" on>Domů</button></a></li>
                <li><a href="#cenik"><button class="btn">Služby</button></a></li>
                <li><a href="#omne"><button class="btn">O mně</button></a></li>
                <li><a href="#registrace"><button class="btn">Registrace</button></a></li>
                <li><a href="#kontakt"><button class="btn">Kontakt</button></a></li>
            </ul>

            <div class="menu"><img src="./img/home.png" alt="" class="secretary"></div>

            <div class="containerPoradna">
                <div class="poradna1"><h4>Poradna zdarma</h4></div>
                <div class="poradna2"><h4>7305558888</h4></div>
                <div class="poradna3"><h4>ucto@seznam.cz</h4></div>
            </div>
            <div class="ikonaMenu"><img src="./img/hamburgermenu.png" class="ikohamburger" alt=""></a></div>
        </nav>

        <div class="building"></div>
    

    </header>


    <main>

    <div class="login">
        <span ><a href="login.php" class="loginOdkaz" >Přihlásit</a></span>
        <span ><a href="registr.php" class="loginOdkaz" >Založit nový účet</a></span>
        <span ><a href="deleteform.php" class="loginOdkaz">Smazat účet</a></span>
        
    </div>
<div class="uzivatel"><span> <p>Uživatel <?php echo $_COOKIE["email"]?></p></span></div>
        
        <div class="container1">
              
                <div class="ucetnictvi">
                    <h1 class="Domaci">Domácí e-účetnictví</h1>
                    <p class="home">Poskytuji účetnictví daňové a podvojné pro malé a střední podnikatele.</p>
                    <img src="./img/feather.svg" alt="" class="homeImg1">

                    <div class="odkazy">
                        <div class="linky">
                        <a href="#" ><img src="./img/linkedin.png" class="foto"></a></div>
                        <div class="linky">
                        <a href="#"><img src="./img/twitter.png" class="foto"></a></div>
                        <div class="linky">
                        <a href="#"><img src="./img/instagram1.png" class="foto"></a></div>
                        <div class="linky">
                        <a href="#"><img src="./img/facebook.png" class="foto"></a></div>
                        <div class="linky">
                        <a href="#"><img src="./img/telegram.png" class="foto"></a></div>
                    </div>
               
                </div>

         



        </div>
       
    
   
        <div class="container3" id="cenik">


            <div><h2 class="Domaci">Jaké domácí ceny jsem Vám schopna nabídnout?</h2></div>
           
            <div class="cenikfoto">
                <div class="obrazek1"><a href="#"><img src="./img/company.jpg" alt="" class="obr1"></a>
                    <div class="text1"><h5>Podvojné účetnictví</h5><p>lorem ipsum ferris inabi tekume nas ti be rio mena</p>
                        <div class="cena1">2 500 Kč</div></div></div>



                <div class="obrazek2"><a href="#"><img src="./img/india.jpg" alt="" class="obr2"></a>
                    <div class="text2"><h5>Podvojné účetnictví</h5><p>lorem ipsum ferris inabi tekume nas ti be rio mena</p>
                        <div class="cena1">2 500 Kč</div></div></div>



                <div class="obrazek3"><a href="#"><img src="./img/money.jpg" alt="" class="obr3"></a>
                    <div class="text3"><h5>Podvojné účetnictví</h5><p>lorem ipsum ferris inabi tekume nas ti be rio mena</p>
                        <div class="cena1">2 500 Kč</div></div></div>
            </div>
            
        </div>
        <div class="linie"></div>

        <div class="container4" id="omne">
            <div><h1 class="DomaciOmne">Praxe a zkušenosti</h1>
                <p class="homeOmne">Jsme kancelář s energickým týmem specialistů na účetnictví, mzdy i daňovou agendu. Máme dlouholeté zkušenosti a řadu spokojených zákazníků.

                    Našim cílem je poskytovat klientům komplexní servis v oblasti účetních služeb. To Vám umožní věnovat se plně tomu, co umíte nejlépe, tedy podnikání. Starosti s papírováním můžete nechat na nás, čímž zefektivníte svoje podnikání.
                    
                    Při své práci klademe důraz především na osobní přístup k zákazníkům, preciznost a přesnost, které jsou v tomto oboru základem.</p></div>
                <img src="./img/Pero.svg" alt="" class="homeImg">
            </div>


        <div class="linie"></div>




        <div class="containerSize" id="registrace">
        <div class="container5">
        
            <div class="title">Dejte mi vědět o svých potřebách.</div>
                    <form action="./auth/check_responses.php" method="POST" class="form-border" id="form">
                        <div class="user-details">

                            <div class="input-box">
                                <label for="username" class="details">Celé jméno:</label>
                                <Input type="text" id="username" name="Username_post" placeholder="Jméno a přijmení" required ></div>


                            <div class="input-box">
                                <label for="e-mail" class="details">E-mail:</label>
                                <input type="email" id="e-mail"placeholder="Zadejte E-mail" name="Email" required></div>



                            <div class="input-box">
                                <label for="phone" class="details">Váš telefon:</label>
                                <input type="telefon" id="phone" placeholder="Telefonní číslo" name="Phone" required></div>

                            <div class="input-box">
                                <label for="obrat" class="details">Roční obrat (Kč):</label>
                                <input type="text" id="obrat"  placeholder="Roční obrat v Kč " name="Annual_turnover" required ></div>


                            <div class="input-box">
                                <label for="karty" class="details">Hmotný i nehmo. majetek:</label>
                                <input type="text" id="karty" placeholder="Počet Inv. karet" name="Property_cards" required></div>


                            <div class="input-box">
                                <label for="zaměstnanci" class="details">Počet zaměstnanců:</label>
                                <input type="text" id="zaměstnanci" placeholder="Počet zaměstnanců" name="Employe" required></div>



                            <div class="input-box">
                                <label for="doklady" class="details">Počet dokladů:</label>
                                <input  id="doklady" type="Celkový počet dokladů" placeholder="Celkový počet dokladů" name="Documents" required></div>

                            <div class="input-box">
                                <label for="forma" class="details">Právní forma</label>   
                                <input id="forma" type="text" placeholder="Právní forma" name="Legal_form" required></div> 
                                
                            <div class="input-box">
                                <label for="podnikání"class="details">Předmět podnikání</label>
                                <input id="podnikani" type="text" placeholder="Předmět podnikání" name="Business" required></div> 

                        </div>   
                        <div class="selects">
                            <div class="select1">
                                <label for="zájem" class="selectInfo" required>Mám zájem o</label>
                                <select name="Interest" id="zajem" class="SO" >
                                    <option value="">Vyberte</option>
                                    <option value="">Podvojné účetnictví</option>
                                    <option value="">Daňová evidence</option>
                                    <option value="">Mzdová a personální agenda</option>
                                </select></div>


                            <div class="select2">
                                <label for="DPH" class="selectInfo" required>Jste plátce DPH?</label>     
                                <select name="TaxPay" id="DPH" class="SO" >
                                    <option value="vyberte" class="vyberte">Vyberte</option>
                                    <option value="Ne">Ne, nejsem</option>
                                    <option value="Ano, měsíční">Ano, měsíční</option>
                                    <option value="Ano, čtvrtletní">Ano, čtvrtletní</option>
                                    <option value="Ne"></option>
                                </select></div>
                                
                        </div>      


                        <div class="textarea">
                                <label for="informace" class="doplnInfo">Doplňující Informace</label>
                                <textarea  class="textA" name="Info" id="informace" cols="20" rows="10"></textarea>
                                <input onclick="validateForm(this.parentNode.parentNode.parentNode)" name="submit" type="submit" class="sub">
                        </div>
                    </form>
                    
            </div>
        </div>       
            <div class="comments">
                <form action="./auth/check_comments.php" method="POST">
                <textarea name="komenty" id="" cols="30" rows="10"></textarea>
                <input type="submit" name="submit" value="Odeslat komentář">
                </form>
            </div>    

    </main>
    <footer>
        <div class="contact" id="kontakt">
            
            <div class="kontakty">
                <div class="adressa"> Rybáře 210/24 Tvrdonice 691 53
                <span class="material-icons"><img src="./img/ikona_lokace.png" alt="">
                    </span></div>
                <div class="ico">IČO: cz52484364856413
                    <span class="material-icons">
                        <img src="./img/ikona_ico.png" alt="">
                        </span>
                </div>
                <div class="telefon">+420 555 777 888
                    <span class="material-icons">
                        <img src="./img/ikona_telefon.png" alt="">
                        </span>
                </div>
                <div class="email">marcelasalajkova@ucto.cz

                    <span class="material-icons">
                        <img src="./img/ikona_email.png" alt="">
                        </span>     

                </div>
                <div class="datovka">Identifikátor datovky: 542348
                    <span class="material-icons">
                        <img src="./img/ikona_klic.png" alt="">
                        </span>  
                       
                
            </div>


        </div>

    </footer>
</body>
<script type="text/javascript" src="./validatory/ValidateRegistr.js"></script>
 <script type="text/javascript" src="./validatory/ValidateResponses.js"></script>

</html>



 <!-- <a href="https://www.flaticon.com/free-icons/ledger" title="Ledger icons">Ledger icons created by Eucalyp - Flaticon</a> -->

<!-- <a href="https://www.freepik.com/free-vector/manager-prioritizing-tasks-list_9649949.htm#page=10&query=pen&position=48&from_view=search&track=sph">Image by pch.vector</a> on Freepik -->

<!-- 
<a href="https://www.flaticon.com/free-icons/worksite" title="worksite icons">Worksite icons created by Dragon Icons - Flaticon</a> -->

<!-- 
<a href="https://www.flaticon.com/free-icons/office-worker" title="office worker icons">Office worker icons created by Eucalyp - Flaticon</a> -->


<!-- <a href="https://www.flaticon.com/free-icons/paper" title="paper icons">Paper icons created by SyafriStudio - Flaticon</a> -->


<!-- <a href="https://www.flaticon.com/free-icons/school" title="school icons">School icons created by Eucalyp - Flaticon</a> -->

<!-- Image by <a href="https://www.freepik.com/free-vector/gradient-quill-pen-logo-design-template_33758811.htm#page=2&query=pen&position=48&from_view=search&track=sph">Freepik</a>

Image by <a href="https://www.freepik.com/free-vector/gradient-quill-pen-logo-design-template_33758817.htm#page=10&query=pen&position=7&from_view=search&track=sph">Freepik</a> -->





<!-- ~!@#$%^&*_-+=`|(){}[]:;\"'<>,.?/




/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ -->