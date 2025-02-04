document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".input-gambar").forEach((input) => {
        input.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const container = input.closest(".area-drop"); // Cari parent terdekat
                    const pratinjauGambar =
                        container.querySelector(".pratinjau-gambar");
                    const teksDrag = container.querySelector(".teks-drag");

                    pratinjauGambar.src = e.target.result;
                    pratinjauGambar.classList.remove("hidden");
                    teksDrag.classList.add("hidden");
                };
                reader.readAsDataURL(file);
            }
        });
    });
    document
        .querySelectorAll("[data-tw-target='#update']")
        .forEach((button) => {
            button.addEventListener("click", function () {
                // Ambil data dari atribut data-*
                const avatar = this.getAttribute("data-avatar");
                const name = this.getAttribute("data-name");
                const mentor = this.getAttribute("data-mentor");
                const deskripsi = this.getAttribute("data-deskripsi");
                const token = this.getAttribute("data-token");

                // Masukkan data ke dalam input modal update
                document.getElementById("update-name").value = name;
                document.getElementById("preview-image-update").src =
                    "img/team/" + avatar;
                document.getElementById("update-deskripsi").value = deskripsi;
                document.getElementById("form-update").action =
                    "/team/update/" + token;

                // Menandai mentor yang sesuai dalam select
                const selectMentor = document.getElementById("mentor-update");
                selectMentor.querySelectorAll("option").forEach((option) => {
                    option.selected = option.textContent.trim() === mentor;
                });
            });
        });
    document
        .querySelectorAll("[data-tw-target='#delete']")
        .forEach((button) => {
            button.addEventListener("click", function () {
                const token = this.getAttribute("data-token");
                document.getElementById("form-delete").action =
                    "/team/destroy/" + token;
            });
        });
});
