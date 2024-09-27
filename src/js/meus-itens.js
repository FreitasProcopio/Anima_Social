 // Recuperar os itens cadastrados do localStorage
 const itensCadastrados = JSON.parse(localStorage.getItem('itensCadastrados')) || [];

 // Selecionar o container onde os cards serão exibidos
 const cardContainer = document.getElementById('card-container');

 // Iterar sobre os itens cadastrados e criar os cards
 itensCadastrados.forEach(item => {
     // Criar um card para o item
     const card = document.createElement('div');
     card.classList.add('card');

     // Adicionar imagem do primeiro arquivo selecionado como exemplo
     const img = document.createElement('img');
     img.src = item.fotos[0]; // Utiliza a primeira imagem do item

     // Adicionar o conteúdo do card
     const cardContent = `
         <h3>Categoria: ${item.categoria}</h3>
         <p><strong>Status:</strong> ${item.status}</p>
         <p><strong>Descrição:</strong> ${item.descricao}</p>
         <p><strong>Localização:</strong> ${item.localizacao}</p>
     `;

     // Adicionar a imagem e o conteúdo ao card
     card.appendChild(img);
     card.innerHTML += cardContent;

     // Adicionar o card ao container de cards
     cardContainer.appendChild(card);
 });