<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="https://unpkg.com/vue"></script>
    <title>Binário para Decimal</title>
</head>
<body>
    <main id="app">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="titles text-center mb-4">
                        <h1>Bin to Dec</h1>
                        <h3>Conversor de Binário para Decimal </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 px-5 d-flex justify-content-center">
                    <div id="converter">                                           
                        <div class="mb-3">
                            <label for="bin_number" class="form-label">Binário</label>
                            <input v-model="binario" type="text" class="form-control" name="bin_number" id="bin_number" aria-describedby="binaryHelp">
                            <div id="binaryHelp" class="form-text">Por favor digite apenas números binários</div>
                        </div>

                        <button class="btn btn-primary mb-4" @click="converter(); validaCampo()">Converter</button>

                        <div id="resultado">
                            <label for="result" class="fs-3 me-2">Resultado:</label>
                            <p id=result class="fs-3">{{ resultado }}</p>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer fixed-bottom">
        Desenvolvido por <a href="https://www.linkedin.com/in/guilhermebrandaosantos/" target="_blank">Guilherme Brandão</a>
    </footer>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>