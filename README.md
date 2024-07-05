Projeto API YouTube
Este projeto foi desenvolvido utilizando Laravel para o backend (PHP) e HTML, CSS e JavaScript para o frontend.

Como Rodar o Projeto
Pré-requisitos
Antes de iniciar, verifique se você tem os seguintes requisitos instalados em sua máquina:

PHP >= 7.4
Composer
Node.js (para compilar assets, se necessário)
Um servidor web (por exemplo, Apache, Nginx) configurado para rodar o Laravel
Passos para Rodar o Projeto

1- Clone o repositório
git clone https://github.com/KaueGodencio/Projeto_consumindo_API_YOUTUBE.git

2- Instale as dependências do PHP com o Composer
cd Projeto_consumindo_API_YOUTUBE
composer install

3- Configure o arquivo .env .

Configure sua chave da API do YouTube no arquivo .env. Caso a chave atual esteja sem cotas, você precisará gerar uma nova chave no Console de Desenvolvedor do Google e atualizar o valor de YOUTUBE_API_KEY no arquivo .env.

Observações
Caso o projeto não esteja retornando vídeos do YouTube, é possível que a chave da API tenha excedido suas cotas de requisições.
Para resolver isso, crie uma nova chave de API no Console de Desenvolvedor do Google, substitua o valor de YOUTUBE_API_KEY no arquivo .env e reinicie o servidor.
