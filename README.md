
# Consulta Fácil API

API para listar, adicionar e
atualizar as cidades, médicos e pacientes cadastrados no banco de dados.

## Instalação
##### run **composer install**
##### run **php artisan db:seed --class=UserSeeder**
##### run **php artisan db:seed --class=CidadeSeeder**
##### run **php artisan db:seed --class=MedicoSeeder**

## Usuário de autenticação
##### email: **christian.ramires@example.com**
##### senha: **password**

## Documentação da API

#### Login
```http
  POST /api/login
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `email`      | `string` | **Obrigatório**. O e-mail do usuário |
| `password`      | `string` | **Obrigatório**. A senha do usuário |

#### Retorna os dados do usuário
```http
  POST /api/user
```

#### Adicionar paciente
```http
  POST /api/pacientes
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `nome`      | `string` | **Obrigatório**. O nome do paciente |
| `cpf`      | `string` | **Obrigatório**. O CPF do paciente |
| `celular`      | `string` | **Obrigatório**. O celular do paciente |

#### Atualiza paciente
```http
  PUT /api/pacientes/{paciente_id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `nome`      | `string` | **Opcional**. O nome do paciente |
| `cpf`      | `string` | **Opcional**. O CPF do paciente |
| `celular`      | `string` | **Opcional**. O celular do paciente |

#### Listar pacientes do médico
```http
  GET /api/medicos/{medico_id}/pacientes
```

#### Para documentação completa, acesse:

https://documenter.getpostman.com/view/1080508/2s9XxvTaQQ

## Autores

- [@edinhorod](https://github.com/edinhorod)

