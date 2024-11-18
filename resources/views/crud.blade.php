<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script defer>
        const baseUrl = 'http://localhost:8000/api';

        function createItem(dados) {
            fetch(`${baseUrl}/users`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(dados),
                })
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error('Erro:', error));
        }

        function readItens() {
            fetch(`${baseUrl}/users`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    }
                })
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error('Erro:', error));
        }

        function readItem(id) {
            fetch(`${baseUrl}/users/${id}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    }
                })
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error('Erro:', error));
        }

        function updateItem(id, dados) {
            fetch(`${baseUrl}/users/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(dados),
                })
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error('Erro:', error));
        }

        function deleteItem(id) {
            fetch(`${baseUrl}/users/${id}`, {
                    method: 'DELETE',
                })
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error('Erro:', error));

        }

        const dadosItem = {
            name: 'Marcos da Silva',
            email: 'marcos_silva@teste.com',
            password: 'Marcos123',
        }

        // createItem(dadosItem);

        // readItens();

        const id = 5;

        // readItem(id);

        const dadosAtualizacao = {
            name: 'Marcos Atualizado',
            email: 'marcos_atualizado2@teste.com',
        }

        // updateItem(id, dadosAtualizacao);

        deleteItem(id);
    </script>
</head>

<body>
    <h1>Teste API</h1>


</body>

</html>