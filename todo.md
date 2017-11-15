## TODO

### Geral
- [ ] Criar uma base de dados **sqlite**.
- [ ] Criar documentos **HTML** e **CSS**.
- [ ] Usar **PHP** para gerar as páginas web após receber/mudar informação na base de dados.
- [ ] Usar **Javascript** para melhorar UX (por exemplo **Ajax**).

### Requisitos
- [ ] Registar uma nova conta.
- [ ] Login e Logout.
- [ ] Editar perfil.
- [ ] Listar as to-do lists.
- [ ] Criar nova lista.
- [ ] Adicionar itens à lista.
- [ ] Marcar item como completo ou incompleto.
- [ ] Apagar lista.

### Requisitos Extra
- [ ] Adicionar informação a cada lista (categoria, título, cor, ...).
- [ ] Adicionar informação a cada item (data, dependência, cor, ...).
- [ ] Permitir que itens sejam atribuidos a utilizadores.
- [ ] Mostrar a lista de itens atribuidos ao utilizador atual.
- [ ] Permitir a criação de projetos. Cada projeto tem um conjunto de users e listas.
- [ ] Mecanismo de pesquisa avançado.
- [ ] Outros...

### Base de Dados

| User | List | UserList | Category | Task | Project | ProjectUser |
|---|---|---|---|---|---|---|
| ID | ID | idUser | ID | ID | ID | idUser |
| Name | Name | idList | Name | idList | Name | idProject |
| Username | idCategory |  | Color | Name | Description |   |
| Email | isArchived |   |   | Date | Color |   |
| Password | idProject |   |   | Level | isArchived |   |
| Photo |   |   |   |   |   |   |

