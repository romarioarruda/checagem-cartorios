$(function() {
    $('.salvarCartorio').click(function() {
        let nome        = $('#nomeCartorio').val()
        let razao       = $('#razaoCartorio').val()
        let docs        = $('#docsCartorio').val()
        let cep         = $('#cepCartorio').val()
        let endereco    = $('#enderecoCartorio').val()
        let bairro      = $('#bairroCartorio').val()
        let cidade      = $('#cidadeCartorio').val()
        let uf          = $('#ufCartorio').val()
        let email       = $('#emailCartorio').val()
        let tel         = $('#telefoneCartorio').val()
        let tabeliao    = $('#tabeliaoCartorio').val()
        let status      = $('#status').val()
        

        swal({ buttons: false, text: 'Processando...'});
        $.post('http://localhost:80/desafio-p21-sistemas/salvar-cartorio', {
            nome: nome,
            razao: razao,
            docs: docs,
            cep: cep,
            endereco: endereco,
            bairro: bairro,
            cidade: cidade,
            uf: uf,
            email: email,
            telefone: tel,
            tabeliao: tabeliao,
            statusCode: status
        })
        .then((data) => {
            if (data == 'cartorio-salvo') {
                sweetAlert('Sucesso!', 'Os dados do cartório foram salvos.', 'success')
                .then((reload)=> {
                    window.location.href = window.location.href
                })
            } else {
                sweetAlert('Falha!', 'Preencha todos os campos', 'error');
            }
        })
   })

   $('.close-modal-cartorio').click(function() {
        
   })
})