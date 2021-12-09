<?php include __DIR__ . '/../inicio-html.php'; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h4>Descrição do projeto</h4>
            <p>Você recebeu um arquivo de texto com os dados de vendas da empresa. Precisamos criar uma maneira para que estes dados sejam importados para um banco de dados.</p>

            <p>Sua tarefa é criar uma interface web que aceite upload de arquivos, normalize os dados e armazene-os no banco de dados.</p>

            <p>Sua aplicação web DEVE:</p>
            <ul>
                <li>Aceitar (via um formulário) o upload de arquivos text, com dados separados por TAB testar o aplicativo usando o arquivo fornecido. A primeira linha do arquivo tem o nome das colunas. Você pode assumir que as colunas estarão sempre nesta ordem, e que sempre haverá uma linha de cabeçalho. Um arquivo de exemplo chamado 'dados.txt' está incluído neste repositório;
                </li>
                <li>Interpretar ("parsear") o arquivo recebido, normalizar os dados, e salvar corretamente a informação em um banco de dados relacional;
                </li>
                <li>Se sua vaga é para PHP, deve ser escrita obrigatoriamente em: PHP 7.4 ou superior(sem frameworks) e MySQL;
                </li>
                <li>Ser simples de configurar e rodar a partir das instruções fornecidas;
                </li>
                <li>Funcionando em ambiente Linux ou Windows. Ela deve utilizar apenas linguagens e bibliotecas livres ou gratuitas;
                </li>
                <li>Ter uma boa aparecia e ser fácil de usar;
                </li>
                <li>Pontos positvos para o uso das tecnologias: Docker, Bootstrap, MVC e Dotenv.
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../fim-html.php'; ?>
