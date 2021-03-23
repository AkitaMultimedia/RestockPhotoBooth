// ============================================
// This function will upload booth data async
// 1) The data will be saved locally in localStorage
// 2) It will be sent to the server while the user continues to work
// 3) The callBackUploadBoothData will handle the succes response of the server by removing localStorage Data

function uploadData() {

    // Prevent multiple data send by user
    confirmButton.classList.add("disabled");

    navigate("saving_confirmation");
    confirmButton.style.display = "none";
    uploadBoothData();

}

function uploadData2() {

    // Prevent multiple data send by user
    confirmButton.classList.add("disabled");

    // Stores the information local
    retour = localStorage.getItem("boothData");

    let data;
    if (retour) {
        data = JSON.parse(retour);
    } else {
        data = {};
    }

    var stamp = appData.code;
    data[stamp] = appData;
    localStorage.setItem("boothData", JSON.stringify(data));

    navigate("saving_confirmation");
    uploadBoothData();

    setTimeout(function() {
        alert("Lot data and pictures had been correctly saved.");
        window.location.href = "/booth"; // Symfony path
    }, 1000);



}