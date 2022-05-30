
 const input = document.querySelector(".modale input");
 const notyf = new Notyf();
input.addEventListener("click", () => {
    notyf.error("Inscrivez vous pour participer !");
});