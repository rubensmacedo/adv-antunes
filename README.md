# Advogados Antunes - WordPress Site

Este é um site WordPress containerizado para o escritório Advogados Antunes.

## Pré-requisitos

- Docker
- Docker Compose

## Como executar localmente

1. Clone o repositório e navegue até o diretório:
   ```bash
   cd adv-antunes
   ```

2. Inicie os containers:
   ```bash
   docker-compose up -d
   ```

3. Aguarde alguns minutos para que os serviços inicializem completamente.

4. Acesse o site:
   - **Site WordPress**: http://localhost:8080
   - **phpMyAdmin**: http://localhost:8081

## Serviços incluídos

- **WordPress**: Site principal na porta 8080
- **MySQL 5.7**: Banco de dados com dados importados automaticamente
- **phpMyAdmin**: Interface web para gerenciar o banco de dados na porta 8081

## Estrutura do projeto

- `docker-compose.yml`: Configuração dos serviços Docker
- `Dockerfile`: Imagem customizada do WordPress
- `.env`: Variáveis de ambiente para banco de dados
- `adv.sql`: Backup do banco de dados que será importado automaticamente

## Comandos úteis

### Parar os containers:
```bash
docker-compose down
```

### Visualizar logs:
```bash
docker-compose logs -f wordpress
docker-compose logs -f mysql
```

### Acessar o container WordPress:
```bash
docker-compose exec wordpress bash
```

### Backup do banco de dados:
```bash
docker-compose exec mysql mysqldump -u adv -p adv > backup.sql
```

## Configuração

As configurações de banco de dados estão no arquivo `.env` e são automaticamente carregadas pelo Docker Compose.

### Credenciais padrão:
- **Banco**: adv
- **Usuário**: adv  
- **Senha**: 230893cfs

## Troubleshooting

Se houver problemas:

1. Verifique se as portas 8080, 8081 e 3306 não estão em uso
2. Execute `docker-compose down -v` para limpar volumes e reinicie
3. Verifique os logs dos containers para erros específicos

## Temas e Plugins

- **Tema ativo**: Lawyer Zone
- **Plugins instalados**: 
  - Akismet
  - SiteOrigin Panels  
  - SO Widgets Bundle
  - WP Mail SMTP
  - WPForms Lite