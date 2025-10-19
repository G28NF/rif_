# Configurações de Ambiente

```
Na sua máquina, renomeie o arquivo env para .env
Em seguida, configure conforme as dicas...
```

### _**no arquivo .env:**_

```

#para mostrar todos os erros no ambiente de desenvolvimento
CI_ENVIRONMENT = development

#configure corretamente o endereço web raiz para a pasta pública do sistema em sua máquina
app.baseURL = 'http://localhost/refeicoes/public'

#para conectar corretamente ao banco de dados
database.default.hostname = localhost
database.default.database = refeicoes
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306

```

# Criação do banco de dados (caso não tenha feito isso ainda):

### _**executar no terminal o comando:**_

```
php spark db:create refeicoes

```

### _**em seguida executar no terminal o comando:**_

```
php spark migrate --all
```

## Instalação do SHIELD

### 1) Baixar e instalar o composer:

```
Download: https://getcomposer.org/Composer-Setup.exe

Tutorial: https://www.youtube.com/watch?v=t-WoLniiBfc
```

### 2) Instalar o shield usando composer:

```
Abra o terminal da sua IDE e utilize o comando: composer require codeigniter4/shield
```

### 3) Configurar o shield:

```
Abra o terminal do VSCode e utilize o comando: php spark shield:setup
n -> Enter
n -> Enter
y -> Enter

Tabelas do shield criadas
```

# Métodos SHIELD comumente utilizados

### **Métodos da Classe `Session`**

| **Método** | **Descrição** | **Exemplo de Uso** | **Caminho do Arquivo** |
| --- | --- | --- | --- |
| `loggedIn()` | Verifica se o usuário está logado. | `if ($auth->loggedIn()) { ... }` | `/Shield/Auth/Authenticators/Session.php` |
| `user()` | Retorna o usuário autenticado. | `$user = $auth->user();` | `/Shield/Auth/Authenticators/Session.php` |
| `check()` | Verifica se um usuário existe. | `if ($auth->check($credentials)) { ... }` | `/Shield/Auth/Authenticators/Session.php` |
| `attempt()` | Realiza o login do usuário. | `if ($auth->attempt($credentials)) { ... }` | `/Shield/Auth/Authenticators/Session.php` |
| `logout()` | Realiza o logout do usuário. | `$auth->logout();` | `/Shield/Auth/Authenticators/Session.php` |
| `register()` | Registra um novo usuário. | `if ($auth->register($userData)) { ... }` | `/Shield/Auth/Authenticators/Session.php` |

### **Métodos da Classe `User`**

| **Método** | **Descrição** | **Exemplo de Uso** | **Caminho do Arquivo** |
| --- | --- | --- | --- |
| `can()` | Verifica permissões do usuário. | `if ($auth->user()->can('edit-posts')) { ... }` | `/Shield/Models/UserModel.php` |
| `inGroup()` | Verifica se o usuário pertence a um grupo. | `if ($auth->user()->inGroup('admin')) { ... }` | `/Shield/Models/UserModel.php` |
| `isActivated()` | Verifica se o usuário está ativo. | `if ($auth->user()->isActivated()) { ... }` | `/Shield/Models/UserModel.php` |
| `changePassword()` | Altera a senha do usuário. | `if ($auth->user()->changePassword($newPassword)) { ... }` | `/Shield/Models/UserModel.php` |

### **Métodos da Classe `Token`**

| **Método** | **Descrição** | **Exemplo de Uso** | **Caminho do Arquivo** |
| --- | --- | --- | --- |
| `loggedIn()` | Verifica se o token de API é válido. | `if ($auth->loggedIn()) { ... }` | `/Shield/Auth/Authenticators/Token.php` |

* * * * *
