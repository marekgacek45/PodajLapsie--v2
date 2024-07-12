
const loadingBar = document.querySelector('.loading-bar');
const percentageElement = document.getElementById('percentage');

const targetPercentage = 87;


const animateProgressBar =() => {
  let currentPercentage = 0;

  const animationInterval = setInterval(() => {
    if (currentPercentage >= targetPercentage) {
      clearInterval(animationInterval);
    } else {
      currentPercentage += 1;
      loadingBar.style.width = currentPercentage + '%';
      percentageElement.textContent = currentPercentage + '%';
    }
  }, 13); //
}

if(loadingBar){

  window.addEventListener('load', animateProgressBar);
}
