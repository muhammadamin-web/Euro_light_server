document.addEventListener('DOMContentLoaded', () => {
  const slides = document.querySelectorAll('.slide');
const sliderBtns = document.querySelectorAll('.slider-btn');
let currentSlide = 0;

// Manual navigation function
function manualNav(index) {
    slides.forEach((slide) => {
        slide.classList.remove('active');
    });

    sliderBtns.forEach((btn) => {
        btn.classList.remove('active');
    });

    slides[index].classList.add('active');
    sliderBtns[index].classList.add('active');
}

// Attach event listeners for manual navigation
sliderBtns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        manualNav(i);
        currentSlide = i;
    });
});

// Automatic navigation function
function autoNav() {
    slides[currentSlide].classList.remove('active');
    sliderBtns[currentSlide].classList.remove('active');

    currentSlide++;

    if (currentSlide >= slides.length) {
        currentSlide = 0;
    }

    slides[currentSlide].classList.add('active');
    sliderBtns[currentSlide].classList.add('active');
}

// Slider interval for automatic navigation
let sliderInterval = setInterval(autoNav, 5000);

// Clear slider interval when user clicks on a slider button
sliderBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(autoNav, 5000);
    });
});

  // Mobile menu variables
  const check = document.getElementById('check');
  const links = document.querySelectorAll('.menu ul a');
  const cancelBtn = document.querySelector('.cancel');

  function closeMenu(event) {
      if (check.checked) {
          check.checked = false;
      }
      if (event.target.classList.contains('lang')) {
          event.preventDefault();
          const href = event.target.getAttribute('href');
          setTimeout(() => {
              window.location.href = href;
          }, 300);
      }
    }
    function closeMenuOnly() {
      if (check.checked) {
          check.checked = false;
      }
  }

  links.forEach(link => {
      link.addEventListener('click', closeMenu);
  });

  cancelBtn.addEventListener('click', closeMenuOnly);
});
