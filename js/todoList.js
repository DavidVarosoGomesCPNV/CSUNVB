/**
 * Auteur : Valentin Zingg & Gwenael west
 **/

function toggleedit()
{
    //désactive our réactive l'édition de la todolist en cours.
    var inputs=document.getElementsByTagName('input');
    var boutonedit = document.getElementById("edit");
    for(i=0;i<inputs.length;i++){
        if(inputs[i].style.visibility === "hidden")
        {
            inputs[i].style.visibility = "visible";
            boutonedit.innerHTML = "Arrêter la modification"
        }
        else
        {
            inputs[i].style.visibility= "hidden";
            boutonedit.innerHTML = "Modifier la liste"
        }

    }
}
