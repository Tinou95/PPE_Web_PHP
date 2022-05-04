document.addEventListener("DOMContentLoaded", () => {



    // Redirection vers la premiere page

    const image_header = document.querySelector(".image_header");

    // image_header.addEventListener("click", (e) =>{
    //   e.preventDefault;
    //   window.location.href="page1.php"
    // })






    // Formulaire de contact 

    let btn = document.getElementById("submit");
    let el = document.querySelector(".warning");

    btn.addEventListener("click", e => {
      e.preventDefault();
      leForm();
    });
    let leForm = () => {
let ville = document.getElementsByTagName("select")[0].value;
let nom = document.getElementsByTagName("input")[0].value;
let prenom = document.getElementsByTagName("input")[1].value;
let email = document.getElementsByTagName("input")[2].value;
let age = document.getElementsByTagName("input")[3].value;

console.log(nom, prenom, email, ville, age);

      if (!nom  || !prenom || !email || !ville  || !age ) {
        el.innerText = "Veuillez remplir tous les champs ";
       el.style.backgroundColor = "red";

      } else {
        el.innerText = "Votre formulaire a bien été envoyé";
        el.style.backgroundColor = "green";

        localStorage.setItem("user", nom + " | " + prenom + " | " + email + " | " + ville + " | " + age);
        sessionStorage.setItem("user", "sessionid");
  
      }
    };
  
















/*
let kcorpWin = document.querySelector(".warning");
let ville = document.getElementById("ville_select");
let pays = document.getElementById("pays_select");
let nom = document.getElementById("last_name");
let prenom = document.getElementById("first_name");
let email = document.getElementById("mail");
let btn = document.getElementById("submit");
    

	let formContact = () => {

    if(nom != "" && prenom != "" && email != "" && ville != "" && pays != "" ) {

      kcorpWin.classList.add("reussi");
      kcorpWin.classList.remove("erreur");
			kcorpWin.innerText = "Formulaire bien envoyé"; 
      	 

    
		} else {

      kcorpWin.classList.add("erreur");
      kcorpWin.classList.remove("reussi");
			kcorpWin.innerText = "Champs incomplets, veuillez tous les remplir";
      		
		}


	};

  btn.addEventListener("click", e => {
		e.preventDefault();
		formContact();
	});

  */

  
  
  
    
  
    });