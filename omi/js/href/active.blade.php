
document.addEventListener("DOMContentLoaded", () => {
	document.querySelectorAll('nav a').forEach(link => {
		if (link.href === window.location.href || link.pathname === window.location.pathname) {
			link.classList.add('active');
		}
	});
});
