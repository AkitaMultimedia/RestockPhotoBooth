// * Controls the picture steps * //

// var confirmButton comes from main.js
// var backButton comes from main.js

var dataIMG;

function launchPictureStep() {

    // Is it First picture or additionnal picture?
    let el_additional = document.getElementById("number_of_pictures");



    if (appData.files.length < 1) {
        document.getElementById("shutter").textContent = "Take Main Picture";
        el_additional.style.display = "none";
        // At least one picture has to be taken to move foward to next step
        confirmButton.style.display = 'none';
    } else {
        document.getElementById("shutter").textContent = "Take Additional Picture?";
        el_additional.innerText = "Number of additional pictures taken so far : " + (appData.files.length - 1);
        el_additional.style.display = "block";
        confirmButton.style.display = 'block';
    }
    navigate("picture_step");

}

$("#shutter").click(function() {
    $("#camera").click();
});

const input = document.getElementById('camera'); // see Example 4

input.onchange = function() {

    var file = input.files[0];

    const reader = new FileReader();

    reader.addEventListener("load", () => {
        // Once the photo is loaded in the app
        appData.files.push(reader.result);
        displayAsImage(file);
        //appData.files.push(file);
        launchPictureStep();
    });

    reader.readAsDataURL(file);



};

function displayAsImage(file) {

    var imgURL = URL.createObjectURL(file);
    var div = document.createElement('div');
    div.style.backgroundImage = "url('" + imgURL + "')";
    div.onload = function() {
        URL.revokeObjectURL(imgURL);
    };
    document.getElementById("showcase").appendChild(div);

}