<?php include __DIR__ . '/../inicio-html.php'; ?>

    <form action="/salvar-dados" METHOD="post" enctype="multipart/form-data" >
        <div class="imput-group">
                <div class="mb-3">
                    <label class="form-label" for="formFile">Selecione o arquivo</label>
                    <input class="form-control" type="file" id="formFile" name="arquivo" accept=".txt" required>
                </div>
            <button class="btn btn-primary mt-3">Importar</button>
        </div>
    </form>
<?php include __DIR__ . '/../fim-html.php'; ?>