<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>BBB</title>
</head>

<body>

    <div class="container mt-2">

        <div class="row g-0">
            <div class="col-12 col-md-3 bg-danger">
                <img src="<?php echo base_url('img/girl.jpg') ?>" class="rounded mx-auto img-thumbnail d-block" alt="...">
                <div class="btn-group-vertical mx-5 ">
                    <button type="button" class="btn btn-primary btn-lg mt-4 center ">Detalhes da Sala</button>
                    <button type="button" class="btn btn-primary btn-lg mt-4">Queridometro</button>
                    <button type="button" class="btn btn-primary btn-lg mt-4">Lider</button>
                    <button type="button" class="btn btn-primary btn-lg mt-4">Anjo</button>
                    <button type="button" class="btn btn-primary btn-lg mt-4">Paredão</button>
                    <button type="button" class="btn btn-primary btn-lg mt-4">Bate papo</button>
                    <button type="button" class="btn btn-primary btn-lg mt-4">Jogo da discórdia</button>
                </div>

            </div>
            <div class="col-12 col-md-6 bg-warning">
                <h1>Inserir dados do Participante</h1>
                <form method="Post">
                <input type="hidden" name="cod_usu" value='4'>
                    <div class="mb-3">
                        <label for="nomeparticipante" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome_ptc" id="nomeparticipante" placeholder="João da Silva">
                    </div>

                    <div class="mb-3">
                        <label for="dnparticipante" class="form-label">Data de nascimento</label>
                        <input type="text" class="form-control" name="dtn_ptc" id="dnparticipante" placeholder="12/12/2000">
                    </div>

                    <div class="mb-3">
                        <label for="statusparticipante" class="form-label">Status</label>
                        <textarea class="form-control" name="status_ptc" id="statusparticipante" rows="3">

                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg mt-4">Salvar</button>
                </form>
            </div>

            <div class="col-12 col-md-3 bg-danger">
                .col-6 .col-md-4
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>