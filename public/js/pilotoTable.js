var csrf_token = $('meta[name="csrf-token"]').attr('content');

const dataTableTranslation = {
    "processing": '<div class="ui attached"><i class="notched circle loading icon"></i>Carregando dados...</div>',
    "emptyTable": "Nenhum registro encontrado no banco de dados",
    "info": "Mostrando registros de _START_ até _END_ de um total de _TOTAL_ registros",
    "infoEmpty": "Mostrando registros de 0 até 0 de um total de 0 registros",
    "paginate": {
        "previous": "Anterior",
        "next": "Próximo"
    },
}

function PilotoData(descriptions = {}){
    table = $("#piloto_tabela").DataTable({
        processing: true,  
        serverSide: true,
        searching: false,
        ajax: {
            url: "/datatable",
            type: "GET",
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                description: descriptions

            },
            error: function(e){
                console.log(e.responseText)
            }
            
        },
        columns: [
            
            {
                data: "imagem1",
                name: "imagem1",
            },
            {
                data: "imagem2",
                name: "imagem2"
            },
            {
                data: "cliente",
                name: "cliente"
            },
            {
                data: "observacoes",
                name: "observacoes"
            },
            {
                data: {},
                render: function(data){
                    return renderActionDropdown(data);
                },
                name: "action",
                orderable: false
            },

        ],

        lengthChange: false,  // desabilita a opção do usuário escolher quantos registros por página
        language: dataTableTranslation,
        pageLength: 20,

    })

    return table;

}

function renderActionDropdown(data){

    html = "";

    /*html += "<a onclick='openModalViewLicitacao(this)' class='ui tiny blue icon button actionView' data-tooltip='Visualizar' data-id='" + data.licitacao_id + "'>" +
                "<i class='eye icon'></i>" +
            "</a>";

    html += "<a onclick='openModalEditLicitacao(this)' class='ui tiny yellow icon button actionEdit' data-tooltip='Editar' data-id='" + data.licitacao_id + "'>" +
                "<i class='pencil alternate icon'></i>" +
            "</a>";*/

    html += "<a onclick='openModalDeletePiloto(this)' class='ui tiny red icon button actionDelete' data-tooltip='Deletar' data-id='" + data.id + "'>" +
                "<i class='trash icon'></i>" +
            "</a>";

    html += "<button onclick='openDetails(this)' class='ui tiny grey icon button details-control' data-tooltip='Mais Informações' data-id='" + data.id + "'>" + 
                "<i class='plus icon'></i>" +
            "</button>";
    
    return html;
}