people.tchelinux.org
====================

Este repositório contém páginas com informações para contato dos membros do Tchelinux, disponíveis em https://people.tchelinux.org/<username>/.

## Como criar sua página

### Crie um fork deste este repositorio

### Clone ele localmente e crie uma branch

```
  $ git clone https://github.com/<username>/people.git

  $ git checkout -b username_page
``` 

### Copie o template

``` 
  $ cp -R template username

  $ cd username
``` 

### Coloque uma imagem com o nome com 400x400 pixels com sua fotografia (ou avatar) no diretório `img/`

``` 
  $ cp ~/username.png img/
``` 
  
### Edite o arquivo `index.html` e insira seu nome, informações de contato e o nome do arquivo contendo a imagem

### Quando estiver pronto faça o commit localmente

``` 
  $ git commit -m "Adicionado página do <seu_nome_aqui> no people.tchelinux.org"
``` 

### Envie as mudanças para seu repositório

``` 
  $ git push
``` 

### Crie um pull-request para o repositório original
