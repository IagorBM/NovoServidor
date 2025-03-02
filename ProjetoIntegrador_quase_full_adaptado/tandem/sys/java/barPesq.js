fetch('buscar_produtos.php')
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error("Erro ao buscar produtos:", error));


document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const closeBtn = document.querySelector(".lightbox .close"); // Corrigido

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evita reload da página

        const nomeProduto = document.getElementById("barPesquisa").value;
        if (nomeProduto.trim() === "") {
            alert("Digite um nome para pesquisar!");
            return;
        }

        fetch(`buscar_produto.php?var=${encodeURIComponent(nomeProduto)}`)
            .then(response => response.text())
            .then(data => {
                resultadoPesquisa.innerHTML = data;
                lightbox.style.display = "block"; // Exibir lightbox
            })
            .catch(error => console.error("Erro ao buscar produto:", error));
        /*


                .then(response => response.text())
                .then(data => {
                    document.getElementById("resultadoPesquisa").innerHTML = data;
                    document.getElementById("lightbox").style.display = "block";
                })
                .catch(error => console.error("Erro ao buscar produto:", error));*/
    });
    // Corrigido: Fechar a lightbox ao clicar no botão "X"
    closeBtn.addEventListener("click", function () {
        lightbox.style.display = "none";
    });

    // Fechar ao clicar fora da lightbox
    window.addEventListener("click", function (event) {
        if (event.target === lightbox) {
            lightbox.style.display = "none";
        }
    });
});


