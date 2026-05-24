document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".theme-input");

    inputs.forEach((input) => {
        input.addEventListener("change", function (event) {
            const previewId = event.target.dataset.preview;
            const previewArea = document.getElementById(previewId);
            const files = Array.from(event.target.files || []);

            previewArea.innerHTML = "";

            if (files.length === 0) {
                previewArea.innerHTML =
                    '<p class="no-images">Belum ada gambar dipilih.</p>';
                return;
            }

            files.forEach((file) => {
                if (!file.type.startsWith("image/")) {
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (loadEvent) {
                    const card = document.createElement("div");
                    card.className = "preview-card";

                    const img = document.createElement("img");
                    img.src = loadEvent.target.result;
                    img.alt = file.name;

                    const caption = document.createElement("div");
                    caption.className = "preview-caption";
                    caption.textContent = file.name;

                    card.appendChild(img);
                    card.appendChild(caption);
                    previewArea.appendChild(card);
                };
                reader.readAsDataURL(file);
            });
        });
    });
});
