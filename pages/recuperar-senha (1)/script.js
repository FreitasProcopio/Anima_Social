// Função para exibir o pop-up
document.getElementById('resend-link').addEventListener('click', function(event) {
     // tira o padrão do link (que é recarregar a página ou navegar para outra.
     event.preventDefault();
     // Exibe o pop-up de carregamento, mudando seu estilo de "display" para "flex"
    document.getElementById('loading-popup').style.display = 'flex';

    // Simulação de um tempo de carregamento (exemplo: 3 segundos)
    setTimeout(function() {
        // depos de 3 segundos o pop-up de carregamento é escondido
        document.getElementById('loading-popup').style.display = 'none';
        //  mensagem de alerta indicando que o código foi reenviado com sucesso
        alert('Código reenviado com sucesso!');
    }, 3000);
});