# Exercicío de BackEnd

```text
ex-livraria/
├── src/
│   ├── Model/
│   │   └── Book.php
│   ├── DAO/
│   │   └── BookDAOInterface.php
│   │   └── BookDAO.php
│   ├── Service/
│   │   └── BookService.php
│   ├── Controller/
│   │   └── BookController.php
│   ├── Database/
│   │   ├── Connection.php
│   │   └── database.sql
├── tests/
│   ├── Model/
│   │   └── BookTest.php
│   ├── DAO/
│   │   └── BookDAOTest.php
│   ├── Service/
│   │   └── BookServiceTest.php
│   ├── Controller/
│   │   └── BookControllerTest.php
├── public/
│   ├── index.php
```

## Nesta estrutura

- `src/`: Contém os arquivos relacionados à lógica da aplicação.
  - `Model/`: Contém a definição das classes de modelo, como `Book.php`.
  - `DAO/`: Contém a interface e a implementação do DAO, como `BookDAOInterface.php` e `BookDAO.php`.
  - `Service/`: Contém a lógica de negócios da aplicação, como `BookService.php`.
  - `Controller/`: Contém a lógica da API, como `BookController.php`.
  - `Database/`: Contém a classe de conexão com o banco de dados, como `Connection.php`.

- `tests/`: Contém os arquivos de testes automatizados para cada componente da aplicação.
  - `Model/`: Contém os testes para as classes de modelo, como `BookTest.php`.
  - `DAO/`: Contém os testes para o DAO, como `BookDAOTest.php`.
  - `Service/`: Contém os testes para a camada de serviço, como `BookServiceTest.php`.
  - `Controller/`: Contém os testes para a camada de controle, como `BookControllerTest.php`.

- `public/`: Contém o arquivo `index.php`, que serve como ponto de entrada da aplicação e define os endpoints da API.

Dessa forma, o projeto fica organizado e cada componente tem seu lugar específico, facilitando a manutenção e a expansão do código.
