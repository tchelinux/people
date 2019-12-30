people.tchelinux.org
====================

Este repositório contém páginas com informações para contato dos membros do Tchelinux, similares a pagina https://people.tchelinux.org/tchelinux/.

## Como criar sua página

### Crie um fork deste este repositorio

### Clone o repositório que você acabou de fazer o fork e crie uma branch de trabalho

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

### Edite o arquivo `template.json`, insira seu nome e demais informações que quiser compartilhar. Uma lista contendo todos campos suportados pelo template [podem ser encontrados aqui](TEMPLATE.md).

> Importante: os campos `Usuario` e `Nome` são mandatórios para que a página possa ser propriamente criada. Sugerimos que pelo menos um meio de contato seja adicionado (website, email ou rede social).

### Instale o pacote `jq` (ou outra ferramenta para fazer a validação do arquivo JSON) e verifique se o mesmo não contém nenhum erro

```
  $ cat <username>/template.json |jq [.]
  [
    {
      "User": "tchelinux",
      "Nome": "Tchelinux",
      "Info": "Grupo de usuários de Software Livre do Sul do Brasil",
      "Cidade": "Porto Alegre",
      "Estado": "RS",
      "Foto": "https://avatars1.githubusercontent.com/u/8228496",
      "Email": "tchelinux-eventos@gmail.com",
      "Website": "https://tchelinux.org",
      "Github": "https://github.com/tchelinux",
      "Linkedin": "https://www.linkedin.com/groups/771307",
      "Twitter": "https://twitter.com/tchelinux",
      "Mastodon": "https://mastodon.social/@tchelinux",
      "Youtube": "https://youtube.com/tchelinux",
      "Instagram": "https://instagram.com/tchelinux",
      "Facebook": "https://facebook.com/tchelinux",
      "Messenger": "https://m.me/tchelinux",
      "Telegram": "https://t.me/tchelinux",
      "Whatsapp": "https://api.whatsapp.com/send?phone=5551912345678"
   }
 ]

```

### Ao concluir as edições (e certificar que o arquivo `template.json` não contem erros!), faça o commit localmente

``` 
  $ git commit -m "Adicionado página do <seu_nome_aqui> no people.tchelinux.org"
``` 

### Envie as mudanças para seu repositório

``` 
  $ git push
``` 

### Por fim, crie um pull-request para o repositório original para que possamos criar sua página
