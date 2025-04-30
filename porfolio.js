document.addEventListener('DOMContentLoaded', function () {
  // Cursor animation
  const cursor = document.querySelector('.cursor');
  const cursorFollower = document.querySelector('.cursor-follower');

  if (cursor && cursorFollower) {
    document.addEventListener('mousemove', (e) => {
      cursor.style.top = `${e.clientY - cursor.offsetHeight / 2}px`;
      cursor.style.left = `${e.clientX - cursor.offsetWidth / 2}px`;

      cursorFollower.style.top = `${e.clientY - cursorFollower.offsetHeight / 2}px`;
      cursorFollower.style.left = `${e.clientX - cursorFollower.offsetWidth / 2}px`;
    });
  }

  // Navbar toggle
  const navToggle = document.querySelector('.nav-toggle');
  const navMenu = document.querySelector('.nav-menu');

  if (navToggle && navMenu) {
    navToggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
    });
  }

  // Theme switch
  const themeSwitch = document.querySelector('.theme-switch');
  const themeOptions = document.querySelectorAll('.theme-option');

  if (themeSwitch && themeOptions) {
    themeSwitch.addEventListener('click', () => {
      document.body.classList.toggle('theme-switch-active');
    });

    themeOptions.forEach(option => {
      option.addEventListener('click', (e) => {
        const theme = e.target.getAttribute('data-theme');
        document.body.classList.remove('theme-1', 'theme-2', 'theme-3');
        document.body.classList.add(theme);
      });
    });
  }

  // Go to top button
  const goTopButton = document.querySelector('.go-top');
  if (goTopButton) {
    goTopButton.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Scroll animations (using AOS)
  if (typeof AOS !== 'undefined') {
    AOS.init({
      easing: 'ease-out-back',
      duration: 1200,
    });
  }

  // Update name
  const nameElement = document.querySelector('.name');
  if (nameElement) {
    nameElement.textContent = 'Shashwati Gavhale';
  }

  // Contact form with AJAX submission
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (event) {
      event.preventDefault();

      const formData = new FormData(contactForm);

      fetch('contact.php', {
        method: 'POST',
        body: formData,
      })
      .then(response => response.text())
      .then(responseText => {
        alert(responseText);  // You can show this in a modal or message area instead
        contactForm.reset();  // Optional: reset form after submission
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Something went wrong. Please try again later.');
      });
    });
  } else {
    console.error('Contact form not found!');
  }
});
