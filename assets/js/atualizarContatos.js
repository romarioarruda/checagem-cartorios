$(function() {
    $(".atualizar-contatos").click(function() {
       let id = $(this).data('id')
       let emailExists = $(this).data('email')
       let telExists   = $(this).data('tel')

       $('#email').val(emailExists)
       $('#telefone').val(telExists)
       
       $('.salvarContatos').click(function() {
            let email = $('#email').val()
            let tel   = $('#telefone').val()

            swal({ buttons: false, text: 'Processando...'});
            $.post('http://localhost:8081/desafio-p21-sistemas/salvar-contatos', {
                idCartorio: id,
                email: email,
                telefone: tel
            })
            .then((data) => {
                if (data == 'contato-salvo') {
                    sweetAlert('Sucesso!', 'Os dados de contatos foram atualizados.', 'success')
                    .then((reload)=> {
                        window.location.href = window.location.href
                    })
                } else {
                    sweetAlert('Falha!', 'Os dados não puderam ser atualizados.', 'error');
                }
            })
       })

       $('.close-modal-contatos').click(function() {
            $('#email').val('')
            $('#telefone').val('')
       })
    })
})