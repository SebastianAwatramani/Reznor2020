window.onload = setup;

function setup() {
	setTitlePadding();
	window.addEventListener("resize", setTitlePadding, true);


}


function setTitlePadding() {
	var headerHeight = document.querySelector('header').offsetHeight;
	var titleContainer = document.getElementById('titleContainer');
	titleContainer.style.paddingTop = headerHeight +"px";
}

