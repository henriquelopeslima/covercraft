
# CoverCraft

CoverCraft é um repositório visando explorar e testar diferentes aspectos relacionados à cobertura de testes em aplicações. Ele serve como um ambiente prático para entender como as ferramentas de cobertura funcionam e como melhorar a confiabilidade do código através de testes.

## Objetivos

- 📏 Demonstrar como medir a cobertura de testes.
- 🌿 Explorar diferentes tipos de cobertura (ex.: cobertura de linha, ramo, e condição).
- 🛠️ Experimentar ferramentas populares de cobertura de testes.
- 📈 Mostrar práticas recomendadas para aumentar a cobertura sem comprometer a qualidade.

## Requisitos

Para executar o projeto, certifique-se de ter as seguintes ferramentas instaladas:

- 🐘 **PHP** (>= 8.0)
- 📦 **Composer**
- 🐳 Docker (opcional, para executar em contêiner)
- 🧪 Ferramentas de teste e cobertura, como:
    - 🧪 PHPUnit
    - 🐞 Xdebug ou PCOV (para relatórios de cobertura)

## Configuração do Ambiente

1. 📥 Clone o repositório:
   ```bash
   git clone https://github.com/henriquelopeslima/covercraft.git
   ```

2. 📂 Acesse o diretório do projeto:
   ```bash
   cd covercraft
   ```

3. 🐳 Subir ambiente docker
   ```bash
   make up
   ```

4. 📦 Instale as dependências:
   ```bash
   make install
   ```

## Como Usar

1. 🧪 Execute os testes para gerar o relatório de cobertura:
   ```bash
   make tests_coverage
   ```

2. 🌐 Abra o relatório no navegador.

    Note que os arquivos estão a ser gerados no caminho `artifact/coverage-html`.

3. 🔄 Experimente modificar os testes ou o código para observar como isso afeta a cobertura.

## Estrutura do Repositório

- 📂 `src/`: Contém o código principal a ser testado.
- 📂 `tests/`: Contém os testes automatizados.
- 📂 `artifact/coverage-html`: Diretório gerado para os relatórios de cobertura.

## Contribuição

Contribuições são bem-vindas! Se você deseja propor melhorias ou relatar problemas, abra uma [issue](https://github.com/usuario/covercraft/issues) ou envie um [pull request](https://github.com/usuario/covercraft/pulls).

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).
