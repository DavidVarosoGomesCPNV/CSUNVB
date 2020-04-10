// Fontion pour ajouter une ligne dans la partie Morphine
var MorphEnCours = 3;


function AddInputMorph() {
    // Récupère la table de drugHome
    var table = document.getElementById("myTable");

    // var NoRow = table.rowIndex("morphineIndex");

    // Trouve ou le mettre dans la table
    var row = table.insertRow(3);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    // La variable de la prochaine valeure est definie par celle en haut MorphEnCours
    var nextVa3_1 = MorphEnCours;
    var nextVal3_2 = MorphEnCours;
    var nextVal3_3 = MorphEnCours;
    var nextVal3_4 = MorphEnCours;
    var nextVal3_5 = MorphEnCours;
    // Si la variable (les input donc) sont >= 10 il y a une alerte utilisateur et le bouton + est desactivé
    if (MorphEnCours >= 10) {
        alert("Pas plus de 10 !");
        document.getElementById("Bouton+").disabled = true;
    } else

    // Insertion des input pour toutes les cases du tableau
        var input = document.createElement("input");
    cell1.innerHTML = '<input type="number" name="morphineValue' + nextVa3_1 + '" />';
    cell2.innerHTML = '<input type="number" name="pharma_MValue' + nextVal3_2 + '" />';
    cell3.innerHTML = '<input type="number" name="VHC1_MorphineUsed' + nextVal3_3 + '" />';
    cell4.innerHTML = '<input type="number" name="VHC2_MorphineUsed' + nextVal3_4 + '" />';
    cell5.innerHTML = '<input type="number" name="pharma2_MValue' + nextVal3_5 + '" />';
    document.body.appendChild(input);
    MorphEnCours++;

}

// Fontion pour ajouter une ligne dans la partie Fernyl
var FernylEnCours = 3;

function AddInputFernyl() {

    var table = document.getElementById("myTable");
    var row = table.insertRow(7);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);

    var nextVa3_1 = FernylEnCours;
    var nextVal3_2 = FernylEnCours;
    var nextVal3_3 = FernylEnCours;
    var nextVal3_4 = FernylEnCours;
    var nextVal3_5 = FernylEnCours;

    if (FernylEnCours >= 10) {
        alert("Pas plus de 10 !");
        document.getElementById("Bouton++").disabled = true;
    } else

        var input = document.createElement("input");
    cell1.innerHTML = '<input type="number" name="fernylValue' + nextVa3_1 + '" />';
    cell2.innerHTML = '<input type="number" name="pharma_FValue' + nextVal3_2 + '" />';
    cell3.innerHTML = '<input type="number" name="VHC1_FernylUsed' + nextVal3_3 + '" />';
    cell4.innerHTML = '<input type="number" name="VHC2_FernylUsed' + nextVal3_4 + '" />';
    cell5.innerHTML = '<input type="number" name="pharma2_FValue' + nextVal3_5 + '" />';
    document.body.appendChild(input);
    FernylEnCours++;

}