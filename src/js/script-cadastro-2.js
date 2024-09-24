function validarFormulario(event) {
    event.preventDefault(); // Evita o envio automático do formulário

    // Verifica se algum campo de cor foi selecionado
    const corSelecionada = document.querySelector('input[name="cor"]:checked');
    if (!corSelecionada) {
        alert("Por favor, selecione sua cor/etnia.");
        return false;
    }

    // Verifica se algum campo de renda foi selecionado
    const rendaSelecionada = document.querySelector('input[name="renda"]:checked');
    if (!rendaSelecionada) {
        alert("Por favor, selecione sua renda familiar.");
        return false;
    }

    // Verifica se os campos de texto estão preenchidos
    const genero = document.getElementById('input_genero').value.trim();
    const sexualidade = document.getElementById('input_sexualidade').value.trim();
    const estadoCivil = document.getElementById('input_estado_civil').value.trim();

    if (genero === "") {
        alert("Por favor, insira o seu gênero.");
        return false;
    }

    if (sexualidade === "") {
        alert("Por favor, insira sua sexualidade.");
        return false;
    }

    if (estadoCivil === "") {
        alert("Por favor, insira seu estado civil.");
        return false;
    }

    // Verifica se os termos foram aceitos
    const termosAceitos = document.getElementById('checkbox_termos').checked;
    if (!termosAceitos) {
        alert("Você deve aceitar os termos de uso.");
        return false;
    }

    // Se todas as validações passarem, o formulário pode ser enviado
    document.getElementById('formCadastro').submit();
}
