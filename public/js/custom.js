// const selectedAxes = [];
// const maxChoixes = 3;
// // Get all checkboxes with the 'checkbox' class
// const checkboxes = document.querySelectorAll(".selection");

// checkboxes.forEach((checkbox) => {
//     checkbox.addEventListener("change", function () {
//         const nomAxe = this.getAttribute("data-nom-axe");
//         console.log(nomAxe);
//         if (this.checked) {
//             selectedAxes.push(nomAxe);
//         } else {
//             // If the checkbox is unchecked, remove the nomAxe from the array
//             const index = selectedAxes.indexOf(nomAxe);
//             if (index !== -1) {
//                 selectedAxes.splice(index, 1);
//             }
//         }

//         // You can display or manipulate the selectedAxes array as needed
//         console.log(selectedAxes);
//     });
// });

//// this function is to check and desable all the check boxes after 3 checks

const checkboxesfun = document.querySelectorAll(".selection");
const checkboxesfun2 = document.querySelectorAll(".selection");
let checkedCount = 0;

checkboxesfun.forEach((checkbox) => {
    checkbox.addEventListener("click", function () {
        // this.removeAttribute();
        if (this.checked) {
            // this.setAttribute(
            //     "name",
            //     "selected_choices[{{ $frm->id }}][{{ $axe->id }}]"
            // );
            checkedCount++;
            if (checkedCount >= 3) {
                disableCheckboxes();
            }
        } else {
            this.removeAttribute("name");
            checkedCount--;
            if (checkedCount < 3) {
                enableCheckboxes();
            }
        }
    });
});

function disableCheckboxes() {
    checkboxesfun.forEach((checkbox) => {
        if (!checkbox.checked) {
            checkbox.disabled = true;
            // checkbox.display = "none";
        }
    });
}

function enableCheckboxes() {
    checkboxesfun.forEach((checkbox) => {
        checkbox.disabled = false;
        // checkbox.display = "block";
    });
}

const sendform = document.querySelector("#choix-form");
sendform.addEventListener("submit", function (event) {
    if (checkedCount == 0) {
        alert(
            "veuillez choisir au moins un sujet \n المرجو إختيار محور واحد على الأقل"
        );
        event.preventDefault();
    } else {
        const confirmed = confirm(
            "Veuillez vérifier attentivement les axes sélectionnés, il n'est pas possible de les modifier après avoir cliqué sur(Ok) \n المرجو التحقق جيدا من المحاور المختارة لا يمكن التعديل بعد الضغط على (Ok) \n للإلغاء (Cancel) "
        );
        if (confirmed) {
            event.submit();
        } else {
            event.preventDefault();
        }
    }
});
// checkboxesfun2.forEach((checkbox) => {
//     checkbox.removeAttribute("name");
// });
// const checkboxesrmv = document.querySelectorAll(".selection");

// // Loop through the checkboxes
// checkboxesrmv.forEach(function (checkbox) {
//     // Check if the checkbox is checked
//     if (checkbox.checked) {
//         // Set the name attribute with a desired value
//         checkbox.setAttribute("name", "selectedCheckbox");
//     }
// });

// this function to remove the unchecked checkboxes

// const checkboxesrmv = document.querySelectorAll(".selection");
// const selectedAxesInput = document.getElementById("selected-axes");

// const selectedAxesrmv = {}; // Object to store selected axes by formation

// checkboxesrmv.forEach(function (checkbox) {
//     checkbox.addEventListener("change", function () {
//         const formationId = this.getAttribute("data-formation-id");
//         const axeId = this.getAttribute("value");

//         if (this.checked) {
//             // Checkbox is checked, add axeId to the selectedAxes object
//             if (!selectedAxesrmv[formationId]) {
//                 selectedAxesrmv[formationId] = [];
//             }
//             selectedAxesrmv[formationId].push(axeId);
//         } else {
//             // Checkbox is unchecked, remove axeId from the selectedAxes object
//             const index = selectedAxesrmv[formationId].indexOf(axeId);
//             if (index !== -1) {
//                 selectedAxesrmv[formationId].splice(index, 1);
//             }
//         }

//         // Update the selected-axes hidden input with the selectedAxes object as JSON
//         selectedAxesInput.value = JSON.stringify(selectedAxesrmv);
//     });
// });

// const submitButton = document.getElementById("submit-form");
// submitButton.addEventListener("click", function () {
//     // Submit the form
//     document.getElementById("choix-form").submit();
// });

// const submitButton = document.getElementById("submit-form");
// submitButton.addEventListener("click", function () {
//     const checkboxesrmv = document.querySelectorAll(".selection");
//     checkboxesrmv.forEach(function (checkbox) {
//         if (!checkbox.checked) {
//             const checkboxName = checkbox.getAttribute("name");
//             const inputToRemove = document.querySelector(
//                 `input[name="${checkboxName}"]`
//             );
//             if (inputToRemove) {
//                 inputToRemove.remove();
//             }
//         }
//     });
// });

// const checkboxesrmv = document.querySelectorAll(".selection");

// checkboxesrmv.forEach(function (checkbox) {
//     checkbox.addEventListener("change", function () {
//         if (this.checked) {
//             // If checkbox is checked, enable it and set the name attribute
//             this.disabled = false;
//             // const formationId = this.getAttribute("data-formation-id");
//             this.setAttribute("name");
//             // this.setAttribute("name", `selected_axes[${formationId}]`);
//         } else {
//             // If checkbox is unchecked, disable it and remove the name attribute
//             this.disabled = true;
//             this.removeAttribute("name");
//         }
//     });
// });

// const submitButton = document.getElementById("submit-form");
// submitButton.addEventListener("click", function () {
//     // Submit the form
//     document.getElementById("choix-form").submit();
// });

// var acc = document.getElementsByClassName("accordion-choix");
// var i;

// for (i = 0; i < acc.length; i++) {
//     acc[i].addEventListener("click", function () {
//         console.log("clicked");
//         /* Toggle between adding and removing the "active" class,
//     to highlight the button that controls the panel */
//         this.classList.toggle("active-choix");

//         /* Toggle between hiding and showing the active panel */
//         var panel = this.nextElementSibling;
//         console.log(panel);
//         if (panel.style.display === "block") {
//             panel.style.display = "none";
//         } else {
//             panel.style.display = "block";
//         }
//     });
// }

// document.addEventListener("DOMContentLoaded", function () {
// var acc = document.getElementsByClassName("accordion-choix");
// var i;

// for (i = 0; i < acc.length; i++) {
//     acc[i].addEventListener("click", function () {
//         console.log("clicked");
//         /* Toggle between adding and removing the "active-choix" class,
//         to highlight the button that controls the panel */
//         this.classList.toggle("active-choix");

//         /* Toggle between hiding and showing the active panel */
//         var panel = this.nextElementSibling;
//         console.log(panel);
//         if (panel.style.display === "block" || panel.style.display === "") {
//             panel.style.display = "none";
//         } else {
//             panel.style.display = "block";
//         }
//     });
// }
// });
