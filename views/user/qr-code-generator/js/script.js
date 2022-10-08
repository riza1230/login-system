

const form = document.getElementById("generate-form");
const qr = document.getElementById("qrcode");
const btn = document.getElementById("generate-btn");

// Button submit
const onGenerateSubmit = (e) => {
	e.preventDefault();
	clearUI();

	const input = document.getElementById("input").value;
	const size = document.getElementById("size").value;

	// Validate url
	if (input === "") {
		alert("Please enter a Text");
	} else {
		

		// Show spinner for 1 sec
		setTimeout(() => {
			generateQRCode(input, size);

			// Generate the save button after the qr code image src is ready
			setTimeout(() => {
				// Get save url
				const saveUrl = qr.querySelector("img").src;
				// Create save button
				createSaveBtn(saveUrl);
			}, 50);
		}, 1000);
	}
	btn.disabled = true;
};

// Generate QR code
const generateQRCode = (input, size) => {
	const qrcode = new QRCode("qrcode", {
		text: input,
		width: size,
		height: size,
	});
};

// Clear QR code and save button
const clearUI = () => {
	qr.innerHTML = "";
	const saveBtn = document.getElementById("save-link");
	if (saveBtn) {
		saveBtn.remove();
	}
};


// Create save button to download QR code as image
const createSaveBtn = (saveUrl) => {
	const link = document.createElement("a");
	link.id = "save-link";
	link.href = saveUrl;
	link.download = "qrcode";
	link.innerHTML = "Save Image";
	document.getElementById("generated").appendChild(link);
};



form.addEventListener("submit", onGenerateSubmit);
