import './bootstrap';

/* header section */
/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId)

    toggle.addEventListener('click', () =>{
        // Add show-menu class to nav menu
        nav.classList.toggle('show-menu')

        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle('show-icon')
    })
 }

 showMenu('nav-toggle','nav-menu')


/* faq table */
// Sélectionnez tous les éléments avec la classe .faq
const faqs = document.querySelectorAll(".faq");

// Parcourez chaque élément .faq et ajoutez un écouteur d'événements
faqs.forEach((faq) => {
  // Écoutez l'événement click sur chaque élément .faq
  faq.addEventListener("click", () => {
    // À l'intérieur de l'écouteur d'événements, utilisez "this" pour faire référence à l'élément .faq actuel
    faq.classList.toggle("active");
  });
});
