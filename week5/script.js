const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.sections');
	const navLinks = document.querySelectorAll('.sections li');

	burger.addEventListener('click', () => {
		nav.classList.toggle('nav-active');
	});
}

navSlide();
