let appPresets = {};

$(document).ready(function() {

    $("#btn_confirm_scanner_presets").click(function() {

        var radios = document.getElementsByName('scan_method');
        for (var i = 0, length = radios.length; i < length; i++) {
            if (radios[i].checked) {
                appPresets.scanner = radios[i].value;
                console.log(appPresets.scanner);
                saveScannerrPresets();
                alert("Scanner method saved.");
                // only one radio can be logically checked, don't check the rest
                break;
            }
        }
    });

    // Charger le type de scanner choisi
    if (loadScannerPresets()) {
        var dest = document.getElementById(appPresets.scanner);
        if (dest) {
            dest.checked = true;
        }
    } else {
        // Default
        let def = "externe";
        appPresets.scanner = def;
        saveScannerrPresets();
        // Default
        document.getElementById(def).checked = true;
    }

});

function loadScannerPresets() {
    retour = localStorage.getItem("scannerPresets");
    if (retour) {
        appPresets.scanner = retour;
        return true;
    }
    return false;
    // "externe" ou "interne"
}

function saveScannerrPresets() {
    localStorage.setItem("scannerPresets", appPresets.scanner);
}