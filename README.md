# Icarus

Pacote Laravel para autenticação API via JWT e autenticação web via sessão, com rotas, controllers, requests e views prontos.

## Instalação

1. Adicione o repositório do package no `composer.json` do seu projeto Laravel, caso esteja usando um repositório privado ou local:

```json
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/JG-Souza/icarus"
    }
]
```

2. Instale via composer:

```bash
composer require jg-souza/icarus
```

3. Gere a chave secreta do JWT:

```bash
php artisan jwt:secret
```

## Rotas principais

### API (JWT)

- POST `/auth/login` — Login e emissão de token JWT.
- POST `/auth/logout` — Logout (token inválido).

### Web (Sessão)

- GET `/login` — Formulário de login.
- POST `/login` — Autenticação via sessão.
- POST `/logout` — Logout.
- GET `/dashboard` — Área restrita (autenticada).

## Requisitos

- PHP ^8.0
- Laravel ^12.0
- tymon/jwt-auth ^2.0
