// Animation au défilement pour les sections
window.addEventListener('scroll', function() {
    const servicesSection = document.querySelector('.services-section');
    const aboutSection = document.querySelector('.about-section');

    if (window.scrollY > servicesSection.offsetTop - window.innerHeight / 2) {
        servicesSection.classList.add('show');
    }

    if (window.scrollY > aboutSection.offsetTop - window.innerHeight / 2) {
        aboutSection.classList.add('show');
    }
});
