/* Insert your javascript here */
document.addEventListener('DOMContentLoaded', function () {

  const main_secs = document.querySelectorAll(".main-section");
  const nav_links = document.querySelectorAll(".nav-item a");

  const makeActive = (item) => nav_links[item].classList.add("active");
  const removeActive = (item) => nav_links[item].classList.remove("active");
  const removeAllActive = () => [...main_secs.keys()].forEach((item) => removeActive(item));

  const sectionMargin = 200;

  let currentActive = 0;

  window.onscroll = () => {

    var current = main_secs.length - [...main_secs].reverse().findIndex((section) => window.scrollY >= section.offsetTop - sectionMargin) - 1

    if (current !== currentActive) {
      removeAllActive();
      currentActive = current;
      makeActive(current);
    }
  };
});

var movieID = ['ACT', 'AHF', 'ANM', 'RMC']

function toggleSynopsis(whichID) {
  var whichMovie = document.getElementById("synopsis" + whichID);
  var movieButton = document.getElementById("movieButton" + whichID);
  var movieName = movieButton.getAttribute("name");
  var synopsisDisplay = whichMovie.style.display;
  var i;

  for (i = 0; i < movieID.length; i++) {
    if (movieID[i] == whichID) {
      if (synopsisDisplay == 'block') {
        whichMovie.style.display = 'none';
        console.log(movieName + ": hide");
      }
      else {
        whichMovie.style.display = 'block';
        console.log(movieName + ": show");
      }
    }
    else {
      var whichMovie2 = document.getElementById("synopsis" + movieID[i]);
      whichMovie2.style.display = 'none';
      console.log(movieID[i] + ": hide 2");

    }
  }
}
var selections = [...document.querySelectorAll(".seat-select")];
selections.forEach(addList);
function addList(selection) {
  for (var i = 1; i <= 10; i++) {
    var options = document.createElement('option');
    options.text = options.value = i;
    selection.add(options);
  }
}

