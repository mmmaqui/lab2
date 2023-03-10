const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.sections');
	const navLinks = document.querySelectorAll('.sections li');
		//Toggle Nav
	burger.addEventListener('click', () => {
		nav.classList.toggle('nav-active');

		//Animate Links
		navLinks.forEach((link, index) => {
			if(link.style.animation) {
				link.style.animation = ''
			} else {
				link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1}s`;
			}
		});
		burger.classList.toggle('toggle');
	});
}

navSlide();

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener("click", function(e){
		e.preventDefault();
		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior: "smooth"
		})
	})
})

var navbar = document.querySelector(".navbar")
window.onscroll = ()=>{
	this.scrollY > 20 ? navbar.classList.add("sticky"):
	navbar.classLift.remove("sticky")
}


