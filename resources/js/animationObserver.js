const handleIntersection = (entries, observer, animationClass) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            
            entry.target.classList.add(animationClass);
        }
    });
};

const createIntersectionObserver = (animationClass) => {
    return new IntersectionObserver(
        (entries, observer) => {
            handleIntersection(entries, observer, animationClass);
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        }
    );
};

const elementsToAnimate = document.querySelectorAll(".animation-trigger");
const elementsToAnimate2 = document.querySelectorAll(".animation-trigger--2");
const elementsToAnimate3 = document.querySelectorAll(".animation-trigger--3");
const elementsToAnimate4 = document.querySelectorAll(".animation-trigger--4");
const elementsToAnimate5 = document.querySelectorAll(".animation-trigger--5");

if (window.innerWidth > 768) {
    const observer = createIntersectionObserver("tilt-in-bottom-1");
    const observer2 = createIntersectionObserver("tilt-in-fwd-tl");
    const observer3 = createIntersectionObserver("tilt-in-fwd-tr");
    const observer4 = createIntersectionObserver("tilt-in-top-1");
    const observer5 = createIntersectionObserver("fade-in-fwd");

    elementsToAnimate.forEach((element) => {
        observer.observe(element);
    });

    elementsToAnimate2.forEach((element) => {
        observer2.observe(element);
    });
    elementsToAnimate3.forEach((element) => {
        observer3.observe(element);
    });
    elementsToAnimate4.forEach((element) => {
        observer4.observe(element);
    });
    elementsToAnimate5.forEach((element) => {
        observer5.observe(element);
    });
}
