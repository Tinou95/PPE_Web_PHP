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


let el, modal, closed, open_modal, closed_all;

el = document.querySelectorAll(".grid-picture-large li");
modal = document.querySelector(".parent-modale");
closed = document.querySelector(".modale button");
closed_all = document.querySelector(".modale img");


open_modal = function () {
    console.log(this.dataset);
    const image = this.dataset.image;
    const title = this.dataset.title;
    const desc = this.dataset.description;
    const dates = this.dataset.dates;
    modal.classList.add("modale-active");
    document.querySelector(".modale img").setAttribute("src", image);
    document.querySelector(".modale .desc h3").innerText = title;
    document.querySelector(".modale .desc p").innerHTML = `<strong>Déscription : </strong>${desc}`;
    document.querySelector(".modale .desc time").innerText = `Annee ${dates}`;
    document.querySelector(".modale .desc time").setAttribute("datetime", dates);
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
  