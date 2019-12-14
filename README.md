# Objetivo do desafio-p21-sistemas

O objetivo do sistema é facilitar o trabalho da funcionaria quando for necessario atualizar os cartorios.

Para impedir o trabalho repetitivo, basta clicar no botao "Checar xml" e inserir o link xml do cliente no campo
e processar a varredura.

O sistema vai varrer os dados do xml e salvar todos os valores necessarios no banco de dados.

Logo em seguida, vai listar todos os dados salvos.

A partir desse momento ja sera possivel atualizar e excluir todos os dados.

Também sera possivel cadastrar um novo dado se necessario for.

O Sistema também disponibiliza de um campo para filtrar dados.

# Tecnologias usadas

Para este desafio, usei apenas:

- PHP orientado a objetos
- Um micro-framework extensivel para PHP chamado Flight, documentaçao: http://flightphp.com/
   - Usei para facilitar o roteamento.
   
- Composer para gerenciar as dependencias.
- Bootstrap e Jquery
- sweetAlert, documentacao: https://sweetalert.js.org/guides/
- Mysql
- Apache server

# Estrutura
- Construi a aplicaçao baseado em MVC
