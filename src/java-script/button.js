const button = document.getElementsByClassName("primary-button");
const closeButton = document.getElementsByClassName("close-button");

button.item(0).addEventListener('click', function(event){

    event.preventDefault();
    document.querySelector(".overlay").style.animationIterationCount = "infinitely";
    document.querySelector(".overlay").style.display = "flex";

});

closeButton.item(0).addEventListener('click', function(event){

    event.preventDefault();
    document.querySelector(".overlay").style.display = "none";
})

