var y = document.getElementById("bu");
let cards = document.getElementById("more");
let c1 = document.getElementById("c1");
let c2 = document.getElementById("c2");
let c3 = document.getElementById("more");
y.onclick = function () {
  cards.style.display = "flex";
  cards.style.justifyContent = "center";
  y.style.display = "none";
};
function myFunction(x) {
  if (x.matches) {
    y.style.display = "flex";
    cards.style.display = "none";
  } else {
    y.style.display = "grid";
    cards.style.display = "none";
  }
}

var x = window.matchMedia("(max-width: 768px)");

myFunction(x);

x.addEventListener("change", function () {
  myFunction(x);
});
function search() {
  let input = document.getElementById("searchbar").value.toLowerCase();
  let cards = document.querySelectorAll(".card");
  let searchGrid = document.getElementById("c_search");

  searchGrid.innerHTML = "";
  searchGrid.style.display = "grid";

  let addedCards = new Set();

  cards.forEach((card) => {
    let title = card.querySelector(".card-title").textContent.toLowerCase();
    if (title.includes(input) && !addedCards.has(title)) {
      let cloneCard = card.cloneNode(true);
      let cardLink = card.querySelector("a").getAttribute("href");
      let linkElement = document.createElement("a");
      linkElement.setAttribute("href", cardLink);
      linkElement.classList.add("col-span-3");
      linkElement.style.display = "grid";
      linkElement.appendChild(cloneCard);
      searchGrid.appendChild(linkElement);
      addedCards.add(title);
      c1.style.display = "none";
      c2.style.display = "none";
      c3.style.display = "none";
      y.style.display = "none";
    }
  });

  if (searchGrid.innerHTML === "") {
    searchGrid.style.display = "flex";
    searchGrid.innerHTML =
      "<h1 class='text-2xl text-center flex justify-center'>No Result To Show </h1>";
  }
  if (input === "") {
    searchGrid.style.display = "none";
    c1.style.display = "grid";
    c2.style.display = "grid";
    y.style.display = "flex";
    y.style.justifyContent = "center";
  }
}

///acordeon
const accordeonItmHeader = document.querySelectorAll(".accordeon-itm-header");
console.log(accordeonItmHeader);

accordeonItmHeader.forEach((hederItm) => {
  hederItm.addEventListener("click", () => {
    hederItm.classList.toggle("active");
    const accordeonItmContent = hederItm.nextElementSibling;
    console.log(accordeonItmContent);
    if (hederItm.classList.contains("active")) {
      accordeonItmContent.style.maxHeight =
        accordeonItmContent.scrollHeight + "px";
    } else {
      accordeonItmContent.style.maxHeight = 0;
    }
  });
});
