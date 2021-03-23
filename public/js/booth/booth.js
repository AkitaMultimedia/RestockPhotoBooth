"use_strict";

const pathToApp = "https://www.editionsrdl.com/restock/";

const lsWrappers = document.getElementsByClassName("booth_wrapper");

let lsStates = ["scan_step", "picture_step", "lot_format_step", "size_page", "weight_page", "final_confirmation_page"];

let quagga = null;
let appData = {};


const el_lot_number = document.getElementById("lot_number");
const el_vue_name = document.getElementById("vue_name")

let backButton = null;
let confirmButton = null;
let discardButton = null;

window.onload = function() {

    //TEMP
    //localStorage.clear();

    window.scrollTo(0, 1);


    backButton = document.querySelector('a[dest="back"]');
    backButton.onclick = (e) => {
        e.preventDefault();
        let current = appData.state;
        //
        if (current === "size_page") {
            if (backInSizePage()) return;
        }
        //
        let posi = lsStates.indexOf(current);
        if (posi > 1) {
            posi--;
            navigate(lsStates[posi]);
        } else {
            location.href = "/";
        }
    }

    confirmButton = document.getElementById("confirm_button");

    confirmButton.onclick = (e) => {
        e.preventDefault();
        confirmStep();
    }

    discardButton = document.querySelector('a[dest="discard"]');
    discardButton.onclick = () => {
        discard();
    }
    hideDiscard();

    document.getElementById("favorites_select").onchange = () => change_favorite_size();
    loadPresets();

    if (!loadScannerPresets()) {
        appPresets.scanner = "externe";
    };

    initApp();

}

function initApp() {

    appData = {};
    appData.files = [];
    appData.state = "";
    appData.lot_items = [];

    navigate("scan_step");

    // In case of reload after a scan
    checkReloadUrl();
}

function loadScannerPresets() {
    retour = localStorage.getItem("scannerPresets");
    if (retour) {
        appPresets.scanner = retour;
        return true;
    }
    return false;
    // "externe" ou "interne"
}

function hideDiscard() {
    // Security : hides discard button sauf à la dernière étape
    discardButton.style.display = "none";
}

function confirmStep() {

    let state = appData.state;
    switch (state) {

        case "scan_step":
            initPo(scanner_container.innerText);
            break;
        case "size_page":
            registerSize();
            break;
        case "weight_page":
            registerWeight();
            break;
        case "final_confirmation_page":
            confirmButton.classList.add("disabled");
            uploadData();
            break;
        default:
            // Navigation automatique au prochain state
            let posi = lsStates.indexOf(state);
            let dest = lsStates[posi + 1];
            navigate(dest);
            break;
    }
}


let predefinedBoxPresets = "";

function loadPresets() {

    var uri = "/getpresets";
    var xhr = new XMLHttpRequest();

    xhr.open("GET", uri, true);
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Handle response.
            //console.log(this.responseText); // handle response.
            appPresets.boxSizes.preDefined = JSON.parse(this.responseText);

            displayUserPresets();
        }
    };

    // Initiate a multipart/form-data upload
    xhr.send();

}
//localStorage.clear();

function displayUserPresets() {
    let retour = null;
    if (retour = localStorage.getItem("userBoxPresets")) {
        loadUserPresets();
    } else {
        // Aucune valeur définie par l'utilisateur.
        // Par défaut, on prend les 3 premières valeurs définies par l'Admin
        // appPresets.boxSizes.preDefined = appPresets.boxSizes.preDefined
        let max = appPresets.boxSizes.preDefined.length;
        if (max > 3) max = 3;
        appPresets.boxSizes.userDefined = appPresets.boxSizes.preDefined.slice(0, max);
        saveUserPresets();
    }
    // On attribue ces options à la balise select 

    select = document.getElementById('favorites_select');

    for (var i = 0; i < appPresets.boxSizes.userDefined.length; i++) {
        var opt = document.createElement('option');
        var l = appPresets.boxSizes.userDefined[i].length;
        var w = appPresets.boxSizes.userDefined[i].wide;
        var h = appPresets.boxSizes.userDefined[i].height;
        opt.value = "" + l + "-" + w + "-" + h;
        opt.innerHTML = "" + l + " x " + w + " x " + h;;
        select.appendChild(opt);
    }


}

function saveUserPresets() {
    localStorage.setItem("userBoxPresets", JSON.stringify(appPresets.boxSizes.userDefined));
}

function loadUserPresets() {
    retour = localStorage.getItem("userBoxPresets");
    appPresets.boxSizes.userDefined = JSON.parse(retour)
}

function launchScanStep() {
    console.log(appPresets.scanner);
    // Quel scanner utiliser
    // Tous à false
    document.getElementById("btn_scancode_interne").style.display = "none";
    document.getElementById("btn_scancode_externe").style.display = "none";
    // Security
    if (!appPresets.scanner) appPresets.scanner = "externe";
    // Le bon s'affiche
    document.getElementById("btn_scancode_" + appPresets.scanner).style.display = "block";

    // Empêcher de confirmer tant qu'un scan valide n'a pas été fait
    confirmButton.style.display = "none";

    // Si on est redirigé depuis un scan déjà fait
    if (document.getElementById("scanner-container").classList.contains("scaned")) {
        confirmButton.style.display = "block";
    }

}



function launchFinalConfirmationPage() {

    // Affichage des données à confirmer
    document.getElementById("final_format").innerText = appData.lot_format;
    document.getElementById("final_weight").innerText = appData.weight;

    // Affichage des miniatures
    var acceptedImages = document.getElementById("showcase").innerHTML;
    document.getElementById("final_showcase").innerHTML = acceptedImages;

}

function navigate(dest) {

    // Security
    hideDiscard();
    confirmButton.classList.remove("disabled");

    // Navigation
    for (wrapper of lsWrappers) {
        wrapper.classList.remove("active")
    }
    let elem = document.getElementById(dest)
    elem.classList.add("active");

    appData.state = dest;

    // Fonctions post navigation
    switch (dest) {
        case "main":
            el_lot_number.innerText = "";
            el_vue_name.innerText = "";

            if (_scannerIsRunning) {
                quagga.stop();
                _scannerIsRunning = false;
                document.getElementsByClassName("scanner-container").innerHTML = "";
            }
            break;
        case "scan_step":
            el_vue_name.innerText = "Barcode Scan";
            // quagga = startScanner();

            launchScanStep();

            break;
        case "picture_step":
            el_vue_name.innerText = "Pictures";
            break;
        case "add_picture_step":
            el_vue_name.innerText = "Add picture?";
            break;
        case "picture_confirm_step":
            break;
        case "lot_format_step":
            el_vue_name.innerText = "Lot format";
            launchLotsFormat();
            break;
        case "size_page":
            // Le titre est généré dans "launchSizePage"
            launchSizePage();
            break;
        case "weight_page":
            el_vue_name.innerText = "Weight page"
            launchWeightPage();
            break;
        case "final_confirmation_page":
            el_vue_name.innerText = "Final confirmation page"
            discardButton.style.display = "block";
            launchFinalConfirmationPage();
            break;
        default:
            break;
    }
}

function discard() {

    if (window.confirm("The current lot information will be deleted.")) {
        location.href = "/booth";
    }
}

function initPo(code) {

    // Remove letters
    var rl = code.replace(/^[a-z]+/i, '');
    var po = rl.substr(0, 4);
    var lot = rl.substr(4, rl.length);

    // Vérification ajax du lot
    var uri = "/verifyLotExist/" + code;
    var xhr = new XMLHttpRequest();

    xhr.open("GET", uri, true);
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            console.log(this.responseText);
            if (this.responseText === "yes") {
                // Le lot existe. On demande au user si il veut l'écraser
                if (!confirm('This lot has already been created. Are you sure you want to override it?')) {
                    // No
                    return;
                }
            }

            appData.code = code;
            appData.po = po;
            appData.lot = lot;

            // Affichage en header
            el_lot_number.innerText = "PO # " + po + " / Lot # " + lot;

            launchPictureStep();

        }
    };

    // Initiate a multipart/form-data upload
    xhr.send();





}