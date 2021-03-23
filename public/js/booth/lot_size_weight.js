// * Controls the lot format, size and weight steps * //

$(document).ready(function() {

    $('.minus').click(function() {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 0 ? 0 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function() {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });

    document.getElementById("lot_format_box").onchange = () => launchLotsFormat();
    document.getElementById("lot_format_pallet").onchange = () => launchLotsFormat();

    document.getElementById("lot_format_box").value = 0;
    document.getElementById("lot_format_pallet").value = 0;

});

function initFields() {
    // Initialiser les champs de textes
    for (element of elements_fields) {
        element.classList.remove("field_active");
        element.innerText = "0";
    }
    document.getElementById("favorites_select").value = 0;
}

// ** VUE : LOT FORMAT ** //

const elements_b = document.getElementsByClassName("lot_format_box");
const elements_p = document.getElementsByClassName("lot_format_pallet");



function launchLotsFormat() {

    let quantity_box = 0;
    let quantity_pallet = 0;

    // Rest
    for (element of elements_b) {
        element.disabled = false;
    }
    for (element of elements_p) {
        element.disabled = false;
    }

    quantity_box = parseInt(document.getElementById("lot_format_box").value);
    quantity_pallet = parseInt(document.getElementById("lot_format_pallet").value);

    confirmButton.style.display = "none";

    let trackLotTypeChange = appData.lot_format;

    if (quantity_box > 0) {
        for (element of elements_p) {
            element.disabled = true;
            appData.lot_format = "box";
            appData.lot_quantity = quantity_box;
            confirmButton.style.display = "block";
        }
    }
    if (quantity_pallet > 0) {
        for (element of elements_b) {
            element.disabled = true;
            appData.lot_format = "pallet";
            appData.lot_quantity = quantity_pallet;
            confirmButton.style.display = "block";
        }
    }

    if (trackLotTypeChange !== appData.lot_format) {
        // L'utilisateur est revenu en arrière et a changé le format de lots.
        // Donc on réinitialise tous les champs à zéro
        appData.lot_items = [];
        initFields();
    }
}


// ** VUE : SIZE PAGE ** //

/*
 * Cette page se répète selon le nombre d'items
 */

const element_current_size_number = document.getElementById("size_current_item");
const elements_fields = document.getElementsByClassName("value_field");

function launchSizePage() {


    // Titre de la page
    if (appData.lot_format === "box") {
        el_vue_name.innerText = "Box size page"
        document.getElementById("size_height_detail").innerText = "inches";
        document.getElementById("favorites_wrapper").style.display = "block";
    } else {
        el_vue_name.innerText = "Pallet size page"
        document.getElementById("size_height_detail").innerText = "FEET";
        document.getElementById("favorites_wrapper").style.display = "none";
    }

    // Variable d'étape
    if (!appData.sizePage) appData.sizePage = 1;

    // On remet les champs à zéro
    initFields();
    document.getElementById("length").classList.add("field_active");

    element_current_size_number.innerText = appData.lot_format + " " + appData.sizePage;

    // Pour les pallettes, les deux premiers champs sont pré-remplis
    if (appData.lot_format === "pallet") {
        var l = document.getElementById("length");
        var w = document.getElementById("wide");
        var h = document.getElementById("height");
        l.innerText = "40"; // Default
        w.innerText = "48"; // Default
        h.classList.add("field_active");
        document.getElementById("length").classList.remove("field_active");
    }

    // Si des valeurs ont déjà été mémorisées pour cet item, on les affiche
    let query = appData.sizePage - 1;
    if (appData.lot_items[query]) {
        var l = document.getElementById("length");
        var w = document.getElementById("wide");
        var h = document.getElementById("height")
        l.innerText = appData.lot_items[query].length;
        w.innerText = appData.lot_items[query].wide;
        h.innerText = appData.lot_items[query].height;
    }
    check_fields_size();
}

function check_fields_size() {

    var l = document.getElementById("length").innerText;
    var w = document.getElementById("wide").innerText;
    var h = document.getElementById("height").innerText;

    if (l !== "0" && w !== "0" && h !== "0") {
        confirmButton.style.display = "block";
    } else {
        confirmButton.style.display = "none";
    }

    // Spécial pour les palettes
    if (appData.lot_format === "pallet" && h > 9) {
        alert("Error: Height");
        confirmButton.style.display = "none";
    }
}

function change_favorite_size() {
    // Get the choice
    var value = document.getElementById("favorites_select").value;
    var res = value.split("-");
    document.getElementById("length").innerText = res[0];
    document.getElementById("wide").innerText = res[1];
    document.getElementById("height").innerText = res[2];
    check_fields_size()
}

// Ajout des événements clics
for (element of elements_fields) {

    element.onclick = (e) => {
        for (el of elements_fields) {
            el.classList.remove("field_active");
        }
        e.target.classList.add("field_active");
        if (appData.lot_format === "box") {
            check_fields_size();
        } else {
            check_fields_weight();
        }
    }
}

function backInSizePage() {

    if (appData.sizePage > 1) {
        appData.sizePage--;
        launchSizePage()
        return true;
    }
    return false;
}

function registerSize() {

    let length = parseInt(document.getElementById("length").innerText);
    let wide = parseInt(document.getElementById("wide").innerText);
    let height = parseInt(document.getElementById("height").innerText);

    appData.lot_items[appData.sizePage - 1] = { length: length, wide: wide, height: height };

    if (appData.sizePage < appData.lot_quantity) {
        appData.sizePage++;
        launchSizePage();
    } else {
        navigate("weight_page");
    }

}









// ** VUE : WEIGHT PAGE ** //

function launchWeightPage() {

    // Activer le champ
    initFields();
    document.getElementById("weight").classList.add("field_active");
    check_fields_weight();

    // Calculate suggested weight
    let weight = 0;

    for (item of appData.lot_items) {
        let L = item.length;
        let W = item.wide;
        let H = item.height;

        switch (appData.lot_format) {
            case "box":
                weight += (L * W * H / 139);
                break;
            case "pallet":
                weight += (H * 150);
                break;
        }
    }

    // Round by 5
    weight = Math.ceil(weight / 5) * 5;

    document.getElementById("weight_suggestion").innerText = weight;

}

document.getElementById("use_suggested_weight").onclick = function() {
    let text = document.getElementById("weight_suggestion").innerText;
    document.getElementById("weight").innerText = text;
    confirmButton.style.display = "block";
}

function registerWeight() {

    // Register the weight
    appData.weight = document.getElementById("weight").innerText;
    navigate("final_confirmation_page");
}

function check_fields_weight() {


    var p = document.getElementById("weight").innerText;
    if ((p !== "0") && (p !== "")) {
        confirmButton.style.display = "block";
    } else {
        confirmButton.style.display = "none";
    }

}