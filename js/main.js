window.onload = setup;

function setup() {


    //All pages except the index have a title heading; the index has a slideshow.  Which ever one needs a top padding to star under the header
    var topElm = document.getElementById('titleContainer') || document.getElementById('slideWrapper')
    if (topElm) {
        setTopElmPadding(topElm);
        window.addEventListener("resize", function () {
            setTopElmPadding(topElm);
        }, true);
        //If it's a slidewrapper we want it to only extend to bottom of page
        if (topElm.id === 'slideWrapper') {
            setMaxHeight(topElm);
            window.addEventListener("resize", function () {
                setMaxHeight(topElm);
            }, true);
        }
    }


    //Set up the hamburger menu to drop down/up when clicked
    var nav = document.getElementById("navContainer");
    // alert(nav);
    var hamburger = document.getElementById("hamburger");
    hamburger.addEventListener("click", function () {
            toggleNavClass(nav);
        },
        true);

    toggleNavClass = function (nav) {

        if (!nav.classList.contains("navExpanded")) {
            nav.classList.add("navExpanded");
        } else {
            nav.classList.remove("navExpanded");
        }
    }


    ////

    var headings = document.getElementsByClassName("issueHeading");

    for (var i = 0; i < headings.length; i++) {
        console.log(headings.length);
        //        console.log(headings[i].nextElementSibling);
        headings[i].addEventListener("click", function (e) {
            //            console.dir(this.nextElementSibling.offsetHeight);
            if (this.nextElementSibling.offsetHeight > 0) {
                console.log('firing');
                console.log(e.target.nextElementSibling);
                e.target.nextElementSibling.classList.remove("issueTextShow");
            } else {
                console.log('firing');
                console.log(e.target.nextElementSibling);
                e.target.nextElementSibling.classList.add("issueTextShow")
            }
        }, false);
    };



}

function setTopElmPadding(topElm) {
    setTopElmPadding.headerHeight = document.querySelector('header').offsetHeight;
    topElm.style.paddingTop = setTopElmPadding.headerHeight + "px";
}

function setMaxHeight(elm) {
    elm.style.maxHeight = window.innerHeight + "px";
}