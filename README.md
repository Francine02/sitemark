<div align="center"> 
    <img width="55" height="46" alt="favicon" src="https://github.com/user-attachments/assets/36015abb-5b32-42f3-91b3-f8810ec1572a" />
    <h1>Sitemark</h1>
    <div>
        <img src="https://img.shields.io/github/last-commit/Francine02/Sitemark?style=flat&logo=git&logoColor=white&color=110F0E" alt="Last Commit">
        <img src="https://img.shields.io/github/languages/top/Francine02/Sitemark?style=flat&color=ED712E" alt="Top Language">
        <img src="https://img.shields.io/github/languages/count/Francine02/Sitemark?style=flat&color=110F0E" alt="Languages Count">
    </div>
</div>

**Sitemark** é um desafio do curso de **PHP - Rocketseat**, nesse desafio é necessário desenvolver um Organizador de Links em PHP com o framework Laravel, uma aplicação onde os usuários podem salvar e gerenciar links de conteúdos que desejam assistir em plataformas de streaming, como séries, filmes e shows.

---

## Visualização do Projeto:
<img width="500" alt="Captura de tela 2026-05-10 130720" src="https://github.com/user-attachments/assets/c1dbe91a-be78-4104-8309-ad2c5f9a1537" />
<img width="500" alt="Captura de tela 2026-05-10 130834" src="https://github.com/user-attachments/assets/a8a19183-177d-4ac3-86ef-4ff35fdc387b" />
<img width="500" alt="Captura de tela 2026-05-10 130847" src="https://github.com/user-attachments/assets/bae24535-6b56-44de-93e2-3c638743daa4" />
<img width="500" alt="Captura de tela 2026-05-10 130855" src="https://github.com/user-attachments/assets/eb7fb8dd-7cc8-4003-a5d9-1bd6f74094c4" />
<img width="500" alt="Captura de tela 2026-05-10 130907" src="https://github.com/user-attachments/assets/118ed0c1-ff8f-4567-ac91-62db5627db27" />

---

## Demonstração em Vídeo:
https://github.com/user-attachments/assets/7afea740-edb9-4bb6-a403-9535cea96bc2

---

## Funcionalidades:
### Autenticação

- Cadastro de usuário
- Tela de login
- Validação de formulário em tempo real
- Validação de senha com mínimo de 8 caracteres
- Feedback visual de erros e acertos nos campos

---

### Gerenciamento de Links

- Listagem de links cadastrados
- Exibição de:
  - imagem do link
  - título
  - URL
  - categoria
  - ações disponíveis
- Reordenação de links utilizando arrastar e soltar
- Atualização visual imediata da ordem dos links

---

### Cadastro de Novos Links

- Adição de novos links
- Upload de imagem
- Cadastro de:
  - título
  - URL
  - plataforma de stream
- Validação de campos

---

### Perfil do Usuário

- Edição de perfil
- Atualização de:
  - nome
  - e-mail
  - bio
  - imagem de perfil
- Upload e substituição de imagem
- Validação dos campos

---

## Tecnologias utilizadas:
- **PHP (^8.3)**  
  Linguagem utilizada no desenvolvimento do backend da aplicação.

- **Laravel (^13.0)**  
  Framework PHP responsável pelas rotas, validações, autenticação e estrutura geral do projeto.

- **Blade**  
  Engine de templates do Laravel utilizada na componentização e renderização das views.

- **Vite (^8.0.0)**  
  Ferramenta de build e desenvolvimento frontend com recarregamento rápido.

- **Tailwind CSS (^4.2.2)**  
  Framework CSS utilitário utilizado para estilização e responsividade da interface.

- **SortableJS (^1.15.7)**  
  Biblioteca utilizada para manipulação e reordenação dinâmica dos links.

- **Toastify JS**  
  Biblioteca utilizada para exibição de notificações e feedbacks visuais ao usuário.

---

## Arquitetura do projeto:

```bash
sitemark
│
├── app/               
│   ├── Http/          # Controllers, Requests e Middlewares
│   ├── Models/        # Models responsáveis pela comunicação com o banco
│   ├── Providers/     # Configurações e providers do Laravel
│   └── Services/      # Serviços e lógicas reutilizáveis da aplicação
├── bootstrap/         # Inicialização e carregamento do framework
├── config/            # Arquivos de configuração do Laravel
├── database/          # Migrations, seeders e factories do banco de dados
├── public/            # Arquivos públicos acessíveis pelo navegador
├── resources/         # Arquivos frontend 
│   ├── css/           # Estilos globais e customizados
│   ├── js/            # Scripts JavaScript da aplicação
│   └── views/         # Views Blade e componentes da interface
├── routes/            # Definição das rotas da aplicação
├── storage/           # Uploads, logs e arquivos temporários
├── tests/             # Testes automatizados  
├── composer.json      # Dependências PHP e scripts do Composer
├── package.json       # Dependências frontend e scripts NPM
└── vite.config.js     # Configuração do Vite
```

---

## Como executar o projeto:
### Pré-requisitos

Antes de começar, você precisa ter instalado em sua máquina:

- PHP 8.3+
- Composer
- [Node.js](https://nodejs.org/en/download)
- [Docker](https://www.docker.com/) ou qualquer outro banco de dados SQL

Recomendo o [Laravel Herd](https://herd.laravel.com) pois ele já vem configurado com PHP, Laravel e Nginx.

### Etapas para rodar o projeto:
1. Clone o repositório:

```bash
git clone https://github.com/Francine02/sitemark.git
cd sitemark
```

---
2. Instale as dependências do backend

```bash
composer install
```

---
3. Instale as dependências do frontend

```bash
npm install
```

---

4. Configure o ambiente

Crie o arquivo `.env`:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

---
5. Caso utilize Docker, inicie o container

```bash
docker-compose up
```

---
6. Execute as migrations

```bash
php artisan migrate
```

---
7. Inicie o servidor

Frontend:

```bash
npm run dev
```

Se não tiver o Laravel Herd:

```bash
php artisan serve
```

Caso tenha instalado o Laravel Herd, siga esses passos sobre como [linkar um projeto existente](https://herd.laravel.com/docs/windows/getting-started/sites)

---

## Aprendizados

Durante o desenvolvimento deste projeto foram praticados conceitos como:

- Componentização com Blade
- Validações frontend e backend
- Upload de imagens
- Manipulação dinâmica de listas
- Organização de estrutura Laravel
- Reordenação com drag and drop

---

## Contribuição:
Contribuições são bem-vindas!

1. Faça um fork deste repositório
2. Crie uma branch para sua feature

```bash
git checkout -b feature/minha-feature
```

3. Faça commit das alterações

```bash
git commit -m "feat: adiciona nova funcionalidade"
```

4. Faça o push para sua branch

```bash
git push origin feature/minha-feature
```

5. Abra um Pull Request

---
## Issues

Encontrou algum problema ou tem alguma sugestão?

Abra uma issue neste repositório descrevendo:
- o problema encontrado
- comportamento esperado
- prints ou mensagens de erro (se houver)
- passos para reproduzir

Toda contribuição e feedback são bem-vindos.
