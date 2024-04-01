var y=document.getElementById('bu')
let cards=document.getElementById('more')
let c1 = document.getElementById('c1')
let c2 = document.getElementById('c2')
let c3 = document.getElementById('more')
y.onclick=function(){
    cards.style.display="grid"
    y.style.display="none"
}
function myFunction(x) {
    if (x.matches) {
        y.style.display="flex"
        cards.style.display = "none"

    } else {
        y.style.display="grid"
        cards.style.display = "none"
    }
}


var x = window.matchMedia("(max-width: 768px)")


myFunction(x);

x.addEventListener("change", function() {
    myFunction(x);
});
function search() {
    let input = document.getElementById('searchbar').value.toLowerCase();
    let cards = document.querySelectorAll('.card');
    let searchGrid = document.getElementById('c_search');

    searchGrid.innerHTML = '';
    searchGrid.style.display = 'grid';
    
    let addedCards = new Set();

    cards.forEach(card => {
        let title = card.querySelector('.card-title').textContent.toLowerCase();
        if (title.includes(input) && !addedCards.has(title)) {
            let cloneCard = card.cloneNode(true);
            cloneCard.classList.add('col-span-2');
            cloneCard.style.display = 'grid';
            searchGrid.appendChild(cloneCard);
            addedCards.add(title);
            c1.style.display= "none"
            c2.style.display= "none"
            c3.style.display= "none"
            c3.style.display= "none"
            y.style.display="none"
        }
    });

    if (searchGrid.innerHTML === '') {
    }
}












