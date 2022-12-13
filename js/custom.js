waiverFilevalidation = () => {
    const waiver = document.getElementById('waiver_letter');
    // Check if any file is selected
    if (waiver.files.length > 0) {
        for (const i = 0; i <= waiver.files.length - 1; i++) {
            var fext = waiver.value.split('.').pop().toLowerCase();
            const fsize = waiver.files.item(i).size;
            const file = Math.round((fsize / 1024));

            // If file is bigger than 2 mb
            if (file >= 2048) {
                alert("File too Big, Make sure your file is not more than 2 MB");
                document.getElementById('waiver_letter').value = "";
            }
            else {
                //check format

                if ((fext !== "png") && (fext !== "jpeg") && (fext !== "jpg") && (fext !== "pdf")) {
                    alert("Unaccepted file format. Please attach a .jpeg, .png, .jpg or .pdf format.");
                    document.getElementById('waiver_letter').value = "";
                }
            }
        }
    }
}