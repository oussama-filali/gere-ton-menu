// Gestion de la modale
function ouvrirModale() {
    document.getElementById("modale").style.display = "flex";
}

function fermerModale() {
    document.getElementById("modale").style.display = "none";
}

// Changer entre Connexion et Inscription
function changerFormulaire() {
    let formConnexion = document.getElementById("form-connexion");
    let formInscription = document.getElementById("form-inscription");
    let titre = document.getElementById("titre-modale");
    let switchText = document.getElementById("switch-form");

    if (formConnexion.style.display === "none") {
        formConnexion.style.display = "block";
        formInscription.style.display = "none";
        titre.innerText = "Connexion";
        switchText.innerHTML = `Pas encore inscrit ? <a href="#" onclick="changerFormulaire()">Créer un compte</a>`;
    } else {
        formConnexion.style.display = "none";
        formInscription.style.display = "block";
        titre.innerText = "Inscription";
        switchText.innerHTML = `Déjà inscrit ? <a href="#" onclick="changerFormulaire()">Se connecter</a>`;
    }
}

// Fermer la modale si on clique en dehors
window.onclick = function(event) {
    let modale = document.getElementById("modale");
    if (event.target === modale) {
        modale.style.display = "none";
    }
};

// Slider automatique
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function nextSlide() {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
}
setInterval(nextSlide, 5000);
