<!DOCTYPE html>
<html>

<head>
    <title>Edição de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>


<body>
    <div class="section">
        
    <div class="container mt-4">
    <div class="img-logo">
            <img class="img m-3" width="150px" height="120px" src="data:image/png;base64,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">
        </div>
            <h1>Edição de Cliente</h1>
            <form id="form-edicao" class="border border-2 border-radius p-2">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-select" id="sexo" required>
                                <option value="">Selecione o sexo</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="estado" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 d-flex justify-content-between">
    <button type="submit" class="btn btn-primary w-50">Salvar</button>
    <a href="/clientes" class="btn btn-danger w-50">Voltar</a>
</div>

                <div class="col-sm-3">
                </div>
            </form>

            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const form = document.getElementById('form-edicao');

    // Obtém o ID do cliente a ser editado (supondo que seja passado como parâmetro na URL)
    const urlParams = new URLSearchParams(window.location.search);
    const clienteId = urlParams.get('id');

    // Função para preencher os campos do formulário com os dados do cliente
    function preencherCampos(cliente) {
        document.getElementById('cpf').value = cliente.cpf;
        document.getElementById('nome').value = cliente.nome;
        document.getElementById('data_nascimento').value = cliente.data_nascimento;
        document.getElementById('sexo').value = cliente.sexo;
        document.getElementById('endereco').value = cliente.endereco;
        document.getElementById('estado').value = cliente.estado;
        document.getElementById('cidade').value = cliente.cidade;
    }

    // Função para buscar os dados do cliente a ser editado
    function buscarCliente() {
        axios.get(`/api/clientes/${clienteId}`)
            .then(function(response) {
                const cliente = response.data;
                preencherCampos(cliente);
            })
            .catch(function(error) {
                console.log(error.response.data);
                alert('Erro ao buscar cliente. Verifique o ID do cliente e tente novamente.');
            });
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const nome = document.getElementById('nome').value;
        const cpf = document.getElementById('cpf').value;
        const dataNascimento = document.getElementById('data_nascimento').value;
        const estado = document.getElementById('estado').value;
        const endereco = document.getElementById('endereco').value;

        const cidade = document.getElementById('cidade').value;
        const sexo = document.getElementById('sexo').value;

        const data = {
            nome: nome,
            cpf: cpf,
            data_nascimento: dataNascimento,
            endereco: endereco,
            estado: estado,

            cidade: cidade,
            sexo: sexo
        };

        axios.put(`/api/clientes/${clienteId}`, data)
            .then(function(response) {
                console.log(response.data);
                alert('Cliente atualizado com sucesso!');
               // form.reset();
            })
            .catch(function(error) {
                console.log(error.response.data);
                alert('Erro ao atualizar cliente. Verifique os campos e tente novamente.');
            });
    });

    // Chama a função para buscar os dados do cliente ao carregar a página
    buscarCliente();
</script>
