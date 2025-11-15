
// parcours
let toggleParcours = document.querySelector(".toggleParcours");
let parcours = document.querySelector(".parcours");

toggleParcours.addEventListener("click", function() {
    parcours.classList.toggle("hidden");
    
    // Switch button text
    if (toggleParcours.textContent === "Voir mon parcours") {
        toggleParcours.textContent = "Masquer mon parcours";
    } else {
        toggleParcours.textContent = "Voir mon parcours";
    }
});


// loisirs
let toggleLoisir = document.querySelector(".toggleLoisir");
let loisir = document.querySelector(".loisir");

toggleLoisir.addEventListener("click", function() {
    loisir.classList.toggle("hidden");
    
    // Switch button text
    if (toggleLoisir.textContent === "Voir mes loisirs") {
        toggleLoisir.textContent = "Masquer mes loisirs";
    } else {
        toggleLoisir.textContent = "Voir mes loisirs";
    }
})