/**
 * Le fichier shiftEnd.js contient les fonctionnalités javascript qui ne sont utilisées que pour la remise de garde
 *
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

var verifPrevNext = 1;
function ShiftEndAdd() {
    var Add = document.getElementById("ShiftEndAdd");
    var Add2 = document.getElementById("ShiftEndDivButton");
    if (Add.style.display === "block") {
        Add.style.display = "none";
        Add2.style.display = "block";
    }else{
        Add.style.display = "block";
        Add2.style.display = "none";

    }
}

function PreviousAdd(){
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");

    var firstPage =document.getElementById("firstPage");
    var lastPage =document.getElementById("lastPage");

    var first = document.getElementById("first");
    var tableMaterielTelecom = document.getElementById("tableMaterielTelecom");
    var tableVehiculeIntervention = document.getElementById("tableVehiculeIntervention");
    var tableEcranDeCom = document.getElementById("tableEcranDeCom");
    var tableCentraleTache = document.getElementById("tableCentraleTache");
    var currentPage = document.getElementById("currentPage");


    if (verifPrevNext > 1){
        verifPrevNext--;
    }

    switch (verifPrevNext){
        case 1:
            prev.disabled = true;
            firstPage.disabled = true;
            first.style.display = "block";
            tableMaterielTelecom.style.display = "none";
            currentPage.innerHTML = verifPrevNext;
            break;
        case 2:
            tableMaterielTelecom.style.display = "block";
            tableVehiculeIntervention.style.display = "none";
            currentPage.innerHTML = verifPrevNext;
            break;
        case 3:
            tableVehiculeIntervention.style.display = "block";
            tableEcranDeCom.style.display = "none";
            currentPage.innerHTML = verifPrevNext;
            break;
        case 4:
            next.disabled = false;
            lastPage.disabled = false;
            tableEcranDeCom.style.display = "block";
            tableCentraleTache.style.display = "none";
            currentPage.innerHTML = verifPrevNext;
            break;
        default:
            verifPrevNext = 1;
    }
}

function NextAdd(){
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");

    var firstPage =document.getElementById("firstPage");
    var lastPage =document.getElementById("lastPage");

    var first = document.getElementById("first");
    var tableMaterielTelecom = document.getElementById("tableMaterielTelecom");
    var tableVehiculeIntervention = document.getElementById("tableVehiculeIntervention");
    var tableEcranDeCom = document.getElementById("tableEcranDeCom");
    var tableCentraleTache = document.getElementById("tableCentraleTache");
    var currentPage = document.getElementById("currentPage");

    if (verifPrevNext < 5){
        verifPrevNext++;
    }

    switch (verifPrevNext){
        case 2:
            prev.disabled = false;
            firstPage.disabled = false;
            first.style.display = "none";
            tableMaterielTelecom.style.display = "block";
            currentPage.innerHTML = verifPrevNext;
            break;
        case 3:
            tableMaterielTelecom.style.display = "none";
            tableVehiculeIntervention.style.display = "block";
            currentPage.innerHTML = verifPrevNext;
            break;
        case 4:
            tableVehiculeIntervention.style.display = "none";
            tableEcranDeCom.style.display = "block";
            currentPage.innerHTML = verifPrevNext;
            break;
        case 5:
            next.disabled = true;
            lastPage.disabled = true;
            tableEcranDeCom.style.display = "none";
            tableCentraleTache.style.display = "block";
            currentPage.innerHTML = verifPrevNext;
            break;
        default:
            verifPrevNext = 5;
    }
}

function toFirstPage() {
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");

    var firstPage =document.getElementById("firstPage");
    var lastPage =document.getElementById("lastPage");

    var first = document.getElementById("first");
    var tableMaterielTelecom = document.getElementById("tableMaterielTelecom");
    var tableVehiculeIntervention = document.getElementById("tableVehiculeIntervention");
    var tableEcranDeCom = document.getElementById("tableEcranDeCom");
    var tableCentraleTache = document.getElementById("tableCentraleTache");

    verifPrevNext = 1;
    next.disabled = false;
    prev.disabled = true;

    firstPage.disabled = true;
    lastPage.disabled = false;

    first.style.display = "block";
    tableMaterielTelecom.style.display = "none";
    tableVehiculeIntervention.style.display = "none";
    tableEcranDeCom.style.display = "none";
    tableCentraleTache.style.display = "none";
    currentPage.innerHTML = verifPrevNext;

}

function toLastPage() {
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");

    var firstPage =document.getElementById("firstPage");
    var lastPage =document.getElementById("lastPage");

    var first = document.getElementById("first");
    var tableMaterielTelecom = document.getElementById("tableMaterielTelecom");
    var tableVehiculeIntervention = document.getElementById("tableVehiculeIntervention");
    var tableEcranDeCom = document.getElementById("tableEcranDeCom");
    var tableCentraleTache = document.getElementById("tableCentraleTache");

    verifPrevNext = 5;
    next.disabled = true;
    prev.disabled = false;

    firstPage.disabled = false;
    lastPage.disabled = true;

    first.style.display = "none";
    tableMaterielTelecom.style.display = "none";
    tableVehiculeIntervention.style.display = "none";
    tableEcranDeCom.style.display = "none";
    tableCentraleTache.style.display = "block";
    currentPage.innerHTML = verifPrevNext;

}