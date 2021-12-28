var ButtonGryfindor = document.querySelector(".choose-Gryffondor");
var ButtonGr = document.querySelector(".choose-Gryffondor");
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

ButtonSlytherin.addEventListener("click", function(ButtonGryfindor)
{

    ButtonSlytherin.innerHTML = "Gryfindor " + procent + "%"
    var butslyth = document.createElement("button")
    butslyth.innerHTML = "Gryfindor " + procent + "%"

    ButtonGr.classList.add("notvis")

    body.append(butslyth)
});

ButtonGryfindor.addEventListener("click", function(ButtonGryfindor)
{

    ButtonGryfindor.innerHTML = "Gryfindor " + procent + "%"
    var butgrif = document.createElement("button")
    butgrif.innerHTML = "Gryfindor " + procent + "%"

    ButtonGr.classList.add("notvis")

    body.append(butgrif)
});

submit.addEventListener("click", function(){

document.Write("Added to Database")

});





// percentage berekenen


