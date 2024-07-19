var btn = document.querySelector("input");
var txt = document.querySelector("p");

btn.addEventListener("click", updateBtn);

function updateBtn() {
  if (btn.value === "Infos") {
    btn.value = "Fermé les infos";
    txt.textContent = "Nom : Elezam | Prénom : Ilane | Numéro : 0789635445 | Permis : Permis B | Ville : Mouans-Sartoux | Adresse mail : elezam.ilane@gmail.com";
  } else {
    btn.value = "Infos";
    txt.textContent = "Info Fermé";
  }
}
