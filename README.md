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
- Sistema de login com e-mail e senha para cadastrar e identificar o usuário

# Arquitetura da Aplicação

# Back-end

API Rest com Django.
O Back-end vai armazenar e fornecer para o app os resumos de livros que já estiverem na base de dados
O Back-end será distribuído, sem um servidor central, formando uma rede descentralizada. 
Qualquer pessoa pode pegar o código opensource e subir um novo servidor para manter o app funcionando

Material de estudo pra quem for desenvolver o back-end do projeto que basicamente é uma API Rest que retorna informações sobre resumo dos livros em JSON: https://medium.com/@marcosrabaioli/criando-uma-api-rest-utilizando-django-rest-framework-parte-1-55ac3e394fa

Introdução a API REST: https://becode.com.br/o-que-e-api-rest-e-restful/

Conhecimentos sobre JSON que é o formato de dados para a comunicação entre o front-end e o back-end: https://pythonhelp.wordpress.com/2013/03/21/acessando-conteudo-via-apis-web-baseadas-em-json/
https://www.w3schools.com/python/python_json.asp
https://pt.wikipedia.org/wiki/JSON

Software para testar APIS REST
https://insomnia.rest/download/

# Front-End(A Fazer)

- página inicial com um catálogo dos resumos e espaço para colocar titulo e imagem da capa do livro.
- Na página de resumo, inserir espaço para colocar imagem da capa do livro, nome do livro e texto do resumo.
- opção para ouvir a versão em áudio do resumo.
- Sistema de login com e-mail e senha

Outro conhecimento importante pro projeto: saber consumir uma API Rest com Python. Precisa aprender isso quem for consumir a API REST do Back-End: https://www.youtube.com/watch?v=SKlF2PmIkrU

## Front-end Mobile

O App mutiplataforma poderá ser desenvolvido usando Python com Kivy

Material de estudo para quem tem mais interesse na parte de desenvolver APP Multiplataforma em Python com Kivy: https://pythonacademy.com.br/blog/desenvolva-aplicativos-para-android-ios-com-python-e-kivy
https://www.vivaolinux.com.br/dica/Criando-aplicativos-multiplataforma-Android-iOS-Windows-com-Python-Kivy

## Front-end Web

HTML5, CSS3 e Javascript já é o suficiente pra versão inicial.
Página Responsiva.

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
https://medium.com/clebertech/o-guia-definitivo-do-ipfs-2e87d684e355

# Como contribuir com o Projeto

Como Criar um Pull Request no GitHub para contribuir com o projeto
https://www.digitalocean.com/community/tutorials/como-criar-um-pull-request-no-github-pt
