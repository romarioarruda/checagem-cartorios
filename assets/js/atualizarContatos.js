$(function() {
    $(".atualizar-contatos").click(function() {
       let id = $(this).data('id')
       let nomeExists = $(this).data('nome')
       let razaoExists = $(this).data('razao')
       let docsExists = $(this).data('documento')
       let cepExists = $(this).data('cep')
       let enderecoExists = $(this).data('endereco')
       let bairroExists = $(this).data('bairro')
       let cidadeExists = $(this).data('cidade')
       let ufExists = $(this).data('uf')
       let emailExists = $(this).data('email')
       let telExists   = $(this).data('tel')
       let tabeliaoExists   = $(this).data('tabeliao')
       let statusExists   = $(this).data('status')

       $('#nome').val(nomeExists)
       $('#razao').val(razaoExists)
       $('#docs').val(docsExists)
       $('#cep').val(cepExists)
       $('#endereco').val(enderecoExists)
       $('#bairro').val(bairroExists)
       $('#cidade').val(cidadeExists)
       $('#uf').val(ufExists)
       $('#email').val(emailExists)
       $('#telefone').val(telExists)
       $('#tabeliao').val(tabeliaoExists)
       $('#ativo-status').val(statusExists)
       
       $('.salvarContatos').click(function() {
            let nome        = $('#nome').val()
            let razao       = $('#razao').val()
            let docs        = $('#docs').val()
            let cep         = $('#cep').val()
            let endereco    = $('#endereco').val()
            let bairro      = $('#bairro').val()
            let cidade      = $('#cidade').val()
            let uf          = $('#uf').val()
            let email       = $('#email').val()
            let tel         = $('#telefone').val()
            let tabeliao    = $('#tabeliao').val()
            let status      = $('#ativo-status').val()

            swal({ buttons: false, text: 'Processando...'});
            $.post('http://localhost:80/desafio-p21-sistemas/atualizar-dados', {
                idCartorio: id,
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
                status: status
            })
            .then((data) => {
                if (data == 'dados-atualizados') {
                    sweetAlert('Sucesso!', 'Os dados foram atualizados.', 'success')
                    .then((reload)=> {
                        window.location.href = window.location.href
                    })
                } else {
                    sweetAlert('Falha!', 'Preencha todos os campos.', 'error');
                }
            })
       })

       $('.close-modal-contatos').click(function() {
            $('#email').val('')
            $('#telefone').val('')
       })
    })
})