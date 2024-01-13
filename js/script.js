const navbarNav = document.querySelector('.navbar-nav');

// Ketika Hamburger Menu Diklik
document.querySelector('#hamburger-menu').onclic = () => {
  navbarNav.classList.toggle('active');
};

// Klik Diluar Sidebar untuk Menghilangkan Nav
const hamburger = document.querySelector('#hamburger-menu');
document.addEventListener('click', function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }
});
