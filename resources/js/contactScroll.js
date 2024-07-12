document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.gallery');

    if (scrollContainer) {
        const scrollIncrement = 400;
        let scrollingRight = true;

        setInterval(() => {
            scrollContainer.style.scrollBehavior = 'smooth';

            if (scrollingRight) {
                scrollContainer.scrollLeft += scrollIncrement;
                if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth) {
                    scrollingRight = false;
                }
            } else {
                scrollContainer.scrollLeft -= scrollIncrement;
                if (scrollContainer.scrollLeft <= 0) {
                    scrollingRight = true;
                }
            }
        }, 5000);
    }
});