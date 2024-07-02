// import jsPDF from "jspdf";

document.addEventListener("DOMContentLoaded", function () {
    //////////////
    //////////////
    document.querySelector("#btn-print").addEventListener("click", function () {
        window.print();

        // let wspFrame = document.getElementById("content").contentWindow;
        // wspFrame.focus();
        // wspFrame.print();
    });
    //////////////
    //////////////

    document.querySelector("#btn-one").addEventListener("click", function () {
        // html2canvas(document.querySelector("#content")).then((canvas) => {
        const htmlcontent = document.querySelector("#content");
        // let base64image = canvas.toDataURL("image/png");
        html2pdf().from(htmlcontent).save("exported_file.pdf");
        // console.log(base64image);
        // let pdf = new jsPDF("p", "px", [
        //     window.innerWidth,
        //     window.innerHeight,
        // ]);
        // pdf.addImage(
        //     base64image,
        //     "PNG",
        //     0,
        //     0,
        //     window.innerWidth,
        //     window.innerHeight
        // );
        // let pdf = new jsPDF("p", "px", [2500, 1600]);
        // let pdf = new jsPDF("p", "px", [canvas.width, canvas.height]);
        // pdf.addImage(
        //     canvas.toDataURL("image/png"),
        //     "PNG",
        //     0,
        //     0,
        //     canvas.width,
        //     canvas.height
        // );
        // // pdf.addImage(base64image, "PNG", 15, 15, 2500, 1600);
        // pdf.save("Fiche pre-candidature.pdf");
        // const options = {
        //     margin: [10, 10, 10, 10],
        //     filename: "Fiche pre-candidature.pdf",
        //     html2canvas: { scale: 2 },
        //     jsPDF: { unit: "m", format: "a4", orientation: "portrait" },
        // };
        // var options = {
        // margin: 1,
        // filename: "myfile.pdf",
        // image: { type: "jpeg", quality: 0.98 },
        // html2canvas: { scale: 2 },
        // jsPDF: { unit: "in", format: "A4", orientation: "portrait" },
        //     margin: 10,
        //     filename:
        //         "Fiche pre-inscrip <?php {{$user->id }}{{$etatcivil->cin}} ?>.pdf",
        //     image: { type: "png", quality: 1 },
        //     html2canvas: {
        //         dpi: 300,
        //         letterRendering: true,
        //         // width: 800,
        //         // height: 1550,
        //     },
        //     jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
        //     // pagebreak: { mode: ["avoid-all", "css"] },
        // });
        // html2pdf().set(options).from(htmlcontent).save();
    });

    //////////////
    //////////////
    //     document.querySelector("#btn-two").addEventListener("click", function () {
    //         html2canvas(
    //             document
    //                 .querySelector("iframe")
    //                 .contentWindow.document.querySelector(".receipt-wrap")
    //         ).then((canvas) => {
    //             let base64image = canvas.toDataURL("image/png");
    //             // console.log(base64image);
    //             let pdf = new jsPDF("p", "px", [1600, 1131]);
    //             pdf.addImage(base64image, "PNG", 15, 15, 1140, 966);
    //             pdf.save("webtylepress-receipt.pdf");
    //         });
    //     });
    //     //////////////
    //     //////////////
});

console.log("working js ");
