var ButtonGryfindor = document.querySelector(".choose-Gryffondor");
var ButtonSlytherin = document.querySelector(".choose-Slytherin");
var ButtonRavenclaw = document.querySelector(".choose-Ravenclaw");
var ButtonHufflepuff = document.querySelector(".choose-Hufflepuff");
var submit = document.querySelector(".submit-button");
var body = document.querySelector("body")

console.log(ButtonGryfindor);
console.log(ButtonSlytherin);
console.log(ButtonRavenclaw);
console.log(ButtonHufflepuff);

ButtonGryfindor.addEventListener("click", function(ButtonGryfindor)
{

    ButtonGryfindor.innerHTML = "Gryfindor " + procent + "%"
    var butgrif = document.createElement("p")
    butgrif.innerHTML = "Gryfindor " + procent + "%"

    body.append(butgrif)
});









// percentage berekenen


