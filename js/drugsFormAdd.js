// Fontion pour ajouter une ligne dans la partie Morphine
var MorphEnCours = 3;

function AddInputMorph() {

    var table = document.getElementById("myTable");
    var row = table.insertRow(3);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);

    var nextVa3_1 = MorphEnCours;
    var nextVal3_2 = MorphEnCours;
    var nextVal3_3 = MorphEnCours;
    var nextVal3_4 = MorphEnCours;
    var nextVal3_5 = MorphEnCours;

    if (MorphEnCours >= 10) {
        alert("Pas plus de 10 !");
        document.getElementById("Bouton+").disabled = true;
    } else

        var input = document.createElement("input");
    cell1.innerHTML = '<input type="text" name="morphineValue' + nextVa3_1 + '" />';
    cell2.innerHTML = '<input type="text" name="pharma_MValue' + nextVal3_2 + '" />';
    cell3.innerHTML = '<input type="text" name="VHC1_MorphineUsed' + nextVal3_3 + '" />';
    cell4.innerHTML = '<input type="text" name="VHC2_MorphineUsed' + nextVal3_4 + '" />';
    cell5.innerHTML = '<input type="text" name="pharma2_MValue' + nextVal3_5 + '" />';
    document.body.appendChild(input);
    MorphEnCours++;

}
