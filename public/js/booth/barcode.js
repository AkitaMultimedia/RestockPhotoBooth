const scanner_container = document.querySelector('#scanner-container');
let _scannerIsRunning = false;


function checkReloadUrl() {


    // Un scan a-t-il été fait sur le onload?
    var scanURL = (window.location.href);
    console.log(scanURL);
    var splitFlag = "/booth/scan/"

    if (scanURL.indexOf(splitFlag) > -1) {
        let urlContent = scanURL.split(splitFlag);
        let code = urlContent[1];
        console.log(code);
        if (verifCode(code)) {
            scanner_container.innerText = urlContent[1];
            confirmButton.style.display = "block";
        } else {
            scanner_container.innerHTML = "<span>Error:</span> Please scan again";
            confirmButton.style.display = "none";
        }
    }

}


$("#btn_scancode_interne").click(function() {
    $("#scan_file_input").click();
    scanner_container.innerHTML = "Decoding...";
});

const fileInput = document.getElementById('scan_file_input');
fileInput.addEventListener('change', (files) => {
    let file = fileInput.files[0];
    var imgURL = URL.createObjectURL(file);
    // console.log(file);

    startScanner2(imgURL)
    scanner_container.innerHTML = "Decoding...";

    //doSomethingWithFiles(e.target.files)
})

function verifCode(code) {

    minLength = 6;
    maxLength = 7;

    // Pour faciliter la vérification
    code = code.toLowerCase();

    if (code.includes("cp") || code.includes("mx")) {

        if ((code.indexOf("cp") > 0) || (code.indexOf("mx") > 0)) return false;

        minLength = 8;
        maxLength = 9;
    }
    console.log(code.length);
    if ((code.length < minLength) || (code.length > maxLength)) {
        return false;
    }

    // Check for special char
    let verifString = "cpmxCPMX0123456789";
    for (var i = 0; i < code.length; i++) {
        if (!verifString.includes(code.charAt(i))) return false;;
    }

    return true;
}

function startScanner2(datafile) {

    let file = datafile;

    Quagga.decodeSingle({
        numOfWorkers: 8,
        decoder: {
            readers: ["code_39_reader"] // List of active readers
        },
        inputStream: {
            size: 1200 // restrict input-size to be 800px in width (long-side)
        },
        patchSize: 'large',
        halfSample: false,
        locate: true, // try to locate the barcode in the image
        src: file // or 'data:image/jpg;base64,' + data
            //src: '/test/fixtures/code_128/image-001.jpg' // or 'data:image/jpg;base64,' + data
    }, function(result) {

        if ((result) && (verifCode(result.codeResult.code))) {
            scanner_container.innerText = result.codeResult.code;
            confirmButton.style.display = "block";
        } else {
            scanner_container.innerHTML = "<span>Error:</span>Not detected,<br>please scan again.";
        }
    });


}