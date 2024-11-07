let tColorA = document.getElementById('tColorA'),
tColorB = document.getElementById('tColorB'),
tColorC = document.getElementById('tColorC'),
iconA = document.querySelector('.fa-credit-card'),
iconB = document.querySelector('.fa-building-columns'),
iconC = document.querySelector('fa-wallet'),
cDetails = document.querySelector('.card-details');

function doFun(){
    tColorA.style.color = "green";
    tColorB.style.color = "#444";
    tColorC.style.color = "#444";
    iconA.style.color = "green";
    iconB.style.color = "#aaa";
    iconC.style.color = "#aaa";
    cDetails.style.display = "block"
}

function doFunA(){
    tColorA.style.color = "#444";
    tColorB.style.color = "green";
    tColorC.style.color = "#444";
    iconA.style.color = "#aaa";
    iconB.style.color = "green";
    iconC.style.color = "#aaa";
    cDetails.style.display = "none"
}
function doFunB(){
    tColorA.style.color = "#444";
    tColorB.style.color = "#444";
    tColorC.style.color = "green";
    iconA.style.color = "#aaa";
    iconB.style.color = "#aaa";
    iconC.style.color = "green";
    cDetails.style.display = "none"
}
