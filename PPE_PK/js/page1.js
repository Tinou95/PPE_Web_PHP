document.addEventListener("DOMContentLoaded", () => {

  const redirect_page2 = document.querySelector(".redirect_page2");
  const image_header = document.querySelector(".image_header");
  const hache2 = document.querySelector("main section h2")
  const image_header2 = document.querySelector(".image_header2")

 
  

  // redirect_page2.addEventListener("click", (e) =>{
  //   e.preventDefault;
  //   window.location.href="page2.php"
  // })


image_header2.addEventListener("click", () => {
    hache2.classList.toggle("hache2")   
});



// participer input



// Modal


let el, modal, closed, open_modal, closed_all;

el = document.querySelectorAll(".grid-picture-large li");
modal = document.querySelector(".parent-modale");
closed = document.querySelector(".modale button");
closed_all = document.querySelector(".modale img");


open_modal = function () {
    console.log(this.dataset);
    /* les variables */
    let image = this.dataset.image;
    let title = this.dataset.title;
    let desc = this.dataset.description;
    let dates = this.dataset.dates;
    let id = this.dataset.id;
    
    modal.classList.add("modale-active"); /* ajouter la classe active */
    /* sélectionner les sélecteurs html*/
    document.querySelector(".modale img").setAttribute("src", image);
    document.querySelector(".modale .desc h3").innerText = title;
    document.querySelector(".modale .desc p").innerHTML = `<strong>Description : </strong>${desc}`;
    document.querySelector(".modale .desc time").innerText = `Année : ${dates}`;
    document.querySelector(".modale .desc time").setAttribute("datetime", dates);

    let btn = document.querySelector("main .grid-picture-large");
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        let stateObj = { id: "100" };
        window.history.pushState(stateObj, "PPE_WEB", "/PPE_PK/page_m.php?id_evenement=" + id);
    });

};

for (rows of el) {
    rows.addEventListener("click", open_modal);
}
closed.addEventListener("click", () => {
    modal.classList.remove("modale-active");
});
closed_all.addEventListener("click", () => {
    modal.classList.remove("modale-active");
});


  });
  