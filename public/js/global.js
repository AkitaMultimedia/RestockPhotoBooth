// ===================================================
// This js file must be added to each page of the app
// because it handles server callbacks for data
// ===================================================

function callBackUploadBoothData(response) {

    alert("Lot data and pictures had been correctly saved.");
    window.location.href = "/booth/scan"; // Symfony path

}

function callBackUploadBoothData2(response) {

    const flag = "OkOk_";

    if (!response.includes(flag)) {
        return;
    }

    let dataId = response.replace(flag, "");

    let dataContent = localStorage.getItem("boothData");
    if (dataContent) {
        dataContent = JSON.parse(dataContent);
        if (dataId in dataContent) {


            delete dataContent[dataId];
            localStorage.setItem("boothData", JSON.stringify(dataContent))
        }
    }


}

function uploadBoothData2() {

    var uri = "/upload"; // Symfony route

    let data = localStorage.getItem("boothData");
    if (data) {
        data = JSON.parse(data);
    } else {
        return;
    }

    Object.keys(data).forEach(key => {

        let element = data[key];

        var xhr = new XMLHttpRequest();
        var fd = new FormData();

        xhr.open("POST", uri, true);
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                if (this.responseText.includes("OkOk_")) {
                    callBackUploadBoothData(this.responseText);
                }
            }
        };

        fd.append('po', element.po);
        fd.append('number', element.code); // Envoi du code complet
        fd.append('nbfiles', element.files.length); // Pour faciliter code serveur


        for (let i = 0; i < element.files.length; i++) {
            fd.append('file_' + i, element.files[i]);
        }

        fd.append('format', element.lot_format);
        fd.append('quantity', element.lot_quantity);
        fd.append('weight', element.weight);

        // Initiate a multipart/form-data upload
        xhr.send(fd);

    });

}

function uploadBoothData() {

    var uri = "/upload"; // Symfony route

    var xhr = new XMLHttpRequest();
    var fd = new FormData();

    xhr.open("POST", uri, true);
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText.includes("OkOk_")) {
                callBackUploadBoothData(this.responseText);
            }
        }
    };

    fd.append('po', appData.po);
    fd.append('lot', appData.code); // Envoi du code complet
    fd.append('nbfiles', appData.files.length); // Pour faciliter code serveur


    for (let i = 0; i < appData.files.length; i++) {
        fd.append('file_' + i, appData.files[i]);
    }

    fd.append('format', appData.lot_format);
    fd.append('quantity', appData.lot_quantity);
    fd.append('weight', appData.weight);

    // Initiate a multipart/form-data upload
    xhr.send(fd);

}


function testLocalStorage() {

    data = localStorage.getItem("boothData");
    let count = 0;
    if (data) {
        data = JSON.parse(data);
        Object.keys(data).forEach(key => {
            count++
        });
    }
    return count;

}