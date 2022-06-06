// Listen for onclick on button with class toggle-sidebar
var toggleSidebarButtons = document.getElementsByClassName('toggle-sidebar');
for (var i = 0; i < toggleSidebarButtons.length; i++) {
	  toggleSidebarButtons[i].addEventListener('click', function() {
		  toggleSidebar();
  });
}

function toggleSidebar() {
	document.body.classList.toggle('sidebar-collapsed');
	// save state to localstorage
	localStorage.setItem('sidebar-collapsed', document.body.classList.contains('sidebar-collapsed'));
}

// Register event listener CTRL+B to toggle sidebar
document.addEventListener('keydown', function (e) {
	if (e.ctrlKey && e.keyCode == 66) {
		toggleSidebar();
	}
});

// Register event listener CTRL+R to reload page (since the embeded Chromium does not have this)
document.addEventListener('keydown', function (e) {
	if (e.ctrlKey && e.keyCode == 82) {
		window.location.reload();
	}
});