/*TOPBUTTON*/

topButton = document.getElementById("topBtn");

window.onscroll = function () {
  scrollfunction();
};

function scrollfunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    topButton.style.display = "block";
  } else {
    topButton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = "0";
  document.documentElement.scrollTop = "0";
}

/*SUCHE*/

var el = document.getElementById("suchtext");
console.log(el);
el.addEventListener("input", logkey);

function logkey(e) {
  var input = document.getElementById("suchtext").value;
  console.log(input);
  mySearchFunction();
}

function mySearchFunction() {
  var input, filter, ul, li, item, i, txtValue;
  input = document.getElementById("suchtext");
  filter = input.value;
  container = document.getElementsByClassName("info");

  for (i = 0; i < container.length; i++) {
    info = container[i];
    console.log(info.textContent);
    console.log(info.getAttribute("Name"));
    console.log(
      document.querySelector(
        "[data-card-id='" + pokeName.getAttribute("data-id") + "']  .poke-name"
      )
    );

    var title = document.querySelectorAll(
      "[data-card-id='" + pokeName.getAttribute("data-id") + "'] .poke-name"
    );
    var card = document.querySelectorAll(
      "[data-card-id='" + pokeName.getAttribute("data-id") + "']"
    );

    title = title[0];
    card = card[0];
    card.style.display = "none";
    txtValue = title.innerText;
    console.log("---------------");
    console.log(txtValue);
    console.log(filter);
    console.log(txtValue.indexOf(filter.toLowerCase()));
    console.log("---------------");
    if (txtValue.indexOf(filter.toLowerCase()) > -1) {
      card.style.display = "block";
      console.log("show");
    }
  }
}

function filter() {
  document.getElementById("filter").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".fbtn")) {
    var filter = document.getElementsByClassName("filter-content");
    var i;
    for (i = 0; i < filter.length; i++) {
      var openFilter = filter[i];
      if (openFilter.classList.contains("show")) {
        openFilter.classList.remove("show");
      }
    }
  }
};

var card = document.getElementById("card");
card.addEventListener("click", weiterleitng());

function weiterleitng() {
  console.log("----------");
  console.log("Click");
  console.log("----------");
}
