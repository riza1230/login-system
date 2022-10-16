const form = document.getElementById("generate-form");
const qr = document.getElementById("qrcode");
const btn = document.getElementById("generate-btn");

const onGenerateSubmit = (e) => {
    e.preventDefault();
    clearUI();

    const input = document.getElementById("input").value;
    const size = document.getElementById("size").value;

    if (input === "") {
        alert("Please enter a Text");
    } else {


        setTimeout(() => {
            generateQRCode(input, size);

            setTimeout(() => {
                const saveUrl = qr.querySelector("img").src;
                createSaveBtn(saveUrl);
            }, 50);
        }, 1000);
    }
    btn.disabled = true;
};

const generateQRCode = (input, size) => {
    const qrcode = new QRCode("qrcode", {
        text: input,
        width: size,
        height: size,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });
};

const clearUI = () => {
    qr.innerHTML = "";
    const saveBtn = document.getElementById("save-link");
    if (saveBtn) {
        saveBtn.remove();
    }
};


const createSaveBtn = (saveUrl) => {
    const link = document.createElement("a");
    link.id = "save-link";
    link.href = saveUrl;
    link.download = "qrcode";
    link.innerHTML = "<b><u>Save Image</u></b>";
    document.getElementById("generated").appendChild(link);
};



form.addEventListener("submit", onGenerateSubmit);