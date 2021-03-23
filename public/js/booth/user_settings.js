let appPresets = {};
appPresets.boxSizes = {};

$(document).ready(function() {

    $(".user_favorites").on("change", function(e) {
        e.preventDefault();
        var lsChoix = $(".user_favorites:checked");
        if (lsChoix.length > 3) {
            if ($(this).prop('checked', false)) {
                alert("Select a maximum of 3 favorites.");
                return;
            }
        }
    });

    $(".confirm_presets").click(function() {

        var lsChoix = $(".user_favorites:checked");
        appPresets.boxSizes.userDefined = []
        for (let i = 0; i < lsChoix.length; i++) {
            var newObj = {};
            newObj.id = $(lsChoix[i]).val();
            newObj.length = $(lsChoix[i]).attr("l");
            newObj.wide = $(lsChoix[i]).attr("w");
            newObj.height = $(lsChoix[i]).attr("h");
            newObj.name = $(lsChoix[i]).attr("name");
            appPresets.boxSizes.userDefined.push(newObj);
        }
        alert("Box presets saved.")
        saveUserPresets();
    });

    // Afficher les choix de boites favoris de l'utilisateur
    if (loadUserPresets()) {
        for (i in appPresets.boxSizes.userDefined) {
            // On récupère l'id des settings mis en mémoire.
            // On pré-coche le setting qui a le même ID dans la liste de choix
            let id = appPresets.boxSizes.userDefined[i].id;

            var dest = document.querySelector("[value='" + id + "']");
            if (dest) {
                dest.checked = true;
            }

        }
    }

});

function saveUserPresets() {
    localStorage.setItem("userBoxPresets", JSON.stringify(appPresets.boxSizes.userDefined));
}

function loadUserPresets() {
    retour = localStorage.getItem("userBoxPresets");
    appPresets.boxSizes.userDefined = JSON.parse(retour)
    return true;
}