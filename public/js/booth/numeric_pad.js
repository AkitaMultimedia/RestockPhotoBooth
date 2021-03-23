// ** NUMERIC PAD ** //

const elements_pad = document.getElementsByClassName("numeric_pad_digit");

// Ajout des événements clics
for (element of elements_pad) {

    element.onclick = (e) => {
        var key = e.target.innerText;
        var target_field = document.querySelector(".field_active");
        console.log(target_field);
        // Security
        if (target_field == null) return;

        var value = target_field.innerText;
        // Clear 0 value
        if (value == "0") {
            target_field.innerText = "";
        }

        switch (key) {
            case "B":
                target_field.innerText = value.slice(0, -1);
                break;
            case "E":
                if (target_field == null) {
                    document.getElementById("length").classList.add("field_active");
                } else if (target_field.id === "weight") {
                    break;
                } else {

                    let retour = ["length", "wide", "height", "length"];
                    let id = target_field.id;
                    let posi = retour.indexOf(id);

                    let next = retour[posi + 1];
                    target_field.classList.remove("field_active")
                    document.getElementById(next).classList.add("field_active");
                }
                break;
            default:
                target_field.innerText += key;
                break;
        }

        // Set 0 if no value
        if (target_field.innerText == "") {
            target_field.innerText = "0";
        }

        // Selon le cas
        if (appData.state === "size_page") {
            check_fields_size();
        } else if (appData.state === "weight_page") {
            check_fields_weight();
        }
    }
}