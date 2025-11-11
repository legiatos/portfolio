addEventListener('DOMContentLoaded', () => {
    // hide all elements with class "competence" by default
    const competences = document.querySelectorAll('.competence');
    competences.forEach(el => el.style.display = 'none');

    // try to find a toggle button (by id or class). Create one in HTML if missing:
    // <button id="toggle-competence" aria-expanded="false">Show competences</button>
    const toggleBtn = document.getElementById('toggle-competence') || document.querySelector('.competence-toggle');

    if (!toggleBtn) return;

    // update aria and button text for accessibility
    function setButtonState(expanded) {
        toggleBtn.setAttribute('aria-expanded', String(expanded));
        if (toggleBtn.tagName === 'BUTTON') {
            toggleBtn.textContent = expanded ? 'Cacher les competences' : 'Montrer les competences mises en pratique';
        }
    }

    // initial state
    setButtonState(false);

    toggleBtn.addEventListener('click', () => {
        // determine current state from first element
        const currentlyHidden = getComputedStyle(competences[0]).display === 'none';
        competences.forEach(el => {
            el.style.display = currentlyHidden ? '' : 'none';
        });
        setButtonState(currentlyHidden);
    });
});