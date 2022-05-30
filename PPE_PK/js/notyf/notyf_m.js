
 const input = document.querySelector(".modale input");
 const notyf = new Notyf();
input.addEventListener("click", () => {
    notyf.success("Merci pour votre participation !");
});