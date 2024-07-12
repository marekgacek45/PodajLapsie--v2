import "./bootstrap";
import "flowbite";
import "./hamburger";
import "./animationObserver";
import "./footerYear";
import "./progressBar";
import "./lightbox";
import './contactScroll'
import './headerBg'

const loader = document.querySelector('#preloader')



window.addEventListener('load', () => {
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 1000); 
});





import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.min.css';
const lightbox = GLightbox({  loop:true });

// Znajdź wszystkie elementy <figure> na stronie
const figures = document.querySelectorAll('figure');

figures.forEach(originalFigure => {
    // Znajdź <img> w oryginalnym <figure>
    const originalImg = originalFigure.querySelector('img');
    if (originalImg) {
        // Utwórz nowy <figure>
        const newFigure = document.createElement('figure');
        newFigure.className = 'attachment attachment--preview attachment--png';
        newFigure.setAttribute('data-trix-content-type', 'image/png');
        newFigure.setAttribute('data-trix-attributes', '{"presentation":"gallery"}');

        // Utwórz nowy <img> i skopiuj src, width, height
        const newImg = document.createElement('img');
        newImg.src = originalImg.src;
        newImg.width = originalImg.width;
        newImg.height = originalImg.height;

        // Dodaj <img> do nowego <figure>
        newFigure.appendChild(newImg);

        // Zamień oryginalny <figure> na nowy <figure>
        originalFigure.parentNode.replaceChild(newFigure, originalFigure);
    }
});
