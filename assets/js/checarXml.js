$(function() {
    $('.btn-check').click(function() {
        swal("Cole o link XML do cliente CNJ\n\nhttp://localhost/desafio-p21-sistemas/cartorios-cnj.xml", {
            content: "input",
            buttons: "Processar",
          })
          .then((value) => {
            swal({ buttons: false, text: 'Processando...'});
            $.post('http://localhost:80/desafio-p21-sistemas/atualizar', {url: value})
            .then((result) => {
                if (result) {
                    sweetAlert('Sucesso!', 'Os dados do XML foram carregados.', 'success')
                    .then((data)=> {
                        window.location.href = window.location.href
                    })
                } else {
                    sweetAlert('Falha!', 'Os dados não puderam ser atualizados.', 'error');
                }
            })
        });
    })

    $('.deletar-cartorio').click(function(){
        let id = $(this).data('id')

        swal({
            title: "Você tem certeza?",
            text: "Os dados desse cartório serão deletados do banco de dados.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal({ buttons: false, text: 'Processando...'});
              $.post('http://localhost:80/desafio-p21-sistemas/deletar-cartorio', {id: id})
              .then((data) =>{
                if (data == 'apagado') {
                    swal("Sucesso! Os dados foram deletados.", {
                        icon: "success",
                    })
                    .then((reload)=> {
                        window.location.href = window.location.href
                    })
                } else {
                    swal("Falha! os dados não foram deletados", {
                        icon: "error",
                    });
                }
              })
            } else {
              swal("OK! Os dados não serão apagados.");
            }
          });
    })
})