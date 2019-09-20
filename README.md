# APP-de-resumos-de-livros

O Projeto é um aplicativo para organizar e disponibilizar resumos de livros em texto e audio para quem quer estudar na rua com celular ou tablet.
É uma alternativa aos aplicativos pagos de resumos de livros.
Os resumos serão feitos de forma colaborativa pelos próprios usuários do APP. Os usuários do app poderão ler os resumos e/ou colaborar adicionando novos resumos de livros.
Não precisa se limitar a livros, pode ser também para resumos de conceitos, ideias, anotações de aula ou algum conhecimento específico.

# Features(A Fazer)

- Listar todos os resumos disponíveis
- Buscar resumo por nome do livro ou autor
- Ler o resumo
- Armazenar o resumo para ler offline
- Publicar novo resumo
- Sugerir livro para resumir
- Listar os livros sugeridos
- Verificação anti-robo
- Sintetizador de voz para ouvir o texto

# Arquitetura da Aplicação

# Back-end

API Rest com Django.
O Back-end vai armazenar e fornecer para o app os resumos de livros que já estiverem na base de dados
O Back-end será distribuído, sem um servidor central, formando uma rede descentralizada. 
Qualquer pessoa pode pegar o código opensource e subir um novo servidor para manter o app funcionando.

# Front-end Mobile

O App mutiplataforma poderá ser desenvolvido usando Python com Kivy

# Front-end Web

HTML5, CSS3 e Javascriptt já é o suficiente pra versão inicial.

# Conexão do APP com a Rede Distribuída

Tem varias formas de resolver esse problema
uma delas é o aplicativo vir com uma lista de ips e/ou domínios.
qualquer um dos dos domínios da lista vai retornar a lista dos servidores conectados a rede e aí o o usuário do app vai ver a lista de livros disponíveis na rede e vai poder escolher um para ler, o que ele escolher, fica gravado no celular dele para ler offline.
Essa é uma forma de resolver isso, mas é um projeto opensource, se outra pessoa tiver alguma solução mais eficiente que esse, pode usar.
Os resumos de livros srão baixados para o App em formato JSON

# Modelagem dos dados

Livro Possui

- ID
- Titulo do Livro
- Nomes dos Autores do Livro
- ISBN
- Link para imagem da capa

O Resumo de livro possui:

- ID do livro
- Texto do Resumo
- Autor do Resumo
- nota(usuarios podem dar notas para a qualidade de cada resumo)
- outras fontes de informação

Cada livro pode possuir mais de um resumo, feito por autores diferentes.

# Linguagens de Programação e Tecnologias que usaremos no projeto

- Python
- HTML5
- CSS3
- Javascript

# Bibliotecas e Frameworks

- Django
- Kivy

# Data Science

Conhecimentos de data science são ótimos para organizar os resumos, fazer estatísticas de acesso, saber quais os conteúdos mais acessados, dar recomendações de outros resumos para a pessoa ler, etc. Por exemplo, se uma pessoa leu o resumo da biografia do bill gates e do steve jobs, o app pode prever que a pessoa tem interesse no resumo biografia do mark zuckerberg.

# Tecnologias para usar futuramente na arquitetura distribuida

Blockchain do Ethereum (https://www.ethereum.org/)
IPFS (https://ipfs.io/)
