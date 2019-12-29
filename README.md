people.tchelinux.org
====================

Este repositório contém páginas com informações para contato dos membros do Tchelinux, similares a pagina https://people.tchelinux.org/tchelinux/.

## Como criar sua página

### Crie um fork deste este repositorio

### Clone o repositório que você acabou de forcar e crie uma branch

```
  $ git clone https://github.com/<username>/people.git

  $ git checkout -b username_page
``` 

### Crie um diretório com nome do seu usuário, este será o nome que aparecerá na URL da sua página (ex. https://people.tchelinux.org/leonardovaz)

``` 
  $ mkdir <username>
``` 

### Copie o arquivo `template.json` para o diretório criado no passo anterior

```
  $ cp template.json <username>/
```

### Edite o arquivo `template.json`, insira seu nome e demais informações que quiser compartilhar.

> Importante: os campos `Usuario` e `Nome` são mandatórios para que a página possa ser propriamente criada. Sugerimos que pelo menos um meio de contato seja adicionado (website, email ou rede social).

### Ao concluir as edições faça o commit localmente

``` 
  $ git commit -m "Adicionado página do <seu_nome_aqui> no people.tchelinux.org"
``` 

### Envie as mudanças para seu repositório

``` 
  $ git push
``` 

### Por fim, crie um pull-request para o repositório original para que possamos criar sua página
