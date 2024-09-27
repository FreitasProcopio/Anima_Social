

// Função para controlar o menu lateral no modo responsivo
function toggleMenu() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
}
document.addEventListener("DOMContentLoaded", () => {
    const addPhotoButton = document.getElementById("fotos");
    const fileInput = document.getElementById("file-input");
    const previewContainer = document.getElementById("preview");

    // Evento para abrir o input de arquivos ao clicar no botão "Adicionar Fotos"
    addPhotoButton.addEventListener("click", () => {
        fileInput.click();
    });

    // Evento para exibir as fotos selecionadas
    fileInput.addEventListener("change", () => {
        previewContainer.innerHTML = ""; // Limpa a visualização anterior
        const files = fileInput.files;
        for (const file of files) {
            const reader = new FileReader();
            reader.onload = (event) => {
                const imgElement = document.createElement("img");
                imgElement.src = event.target.result;
                imgElement.classList.add("preview-image");
                previewContainer.appendChild(imgElement);
            };
            reader.readAsDataURL(file);
        }
    });
});

