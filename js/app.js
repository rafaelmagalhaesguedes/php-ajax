
// Função para carregar a lista de usuários via AJAX
function carregarUsuarios() {
    $.ajax({
        url: "includes/listar_usuarios.php",
        success: function(data) {
            $("#tabela-usuarios").html(data);
        }
    });
}

// Função para criar ou atualizar um usuário via AJAX
function salvarUsuario() {
    var id = $("#id").val();
    var nome = $("#nome").val();
    var email = $("#email").val();

    $.ajax({
        type: "POST",
        url: "includes/salvar_usuarios.php",
        data: {
            id: id,
            nome: nome,
            email: email
        },
        success: function(data) {
            alert(data);
            carregarUsuarios();
        }
    });
}

// Função para excluir um usuário via AJAX
function excluirUsuario(id) {
    if (confirm("Tem certeza que deseja excluir este usuário?")) {
        $.ajax({
            type: "POST",
            url: "includes/excluir_usuario.php",
            data: {
                id: id
            },
            success: function(data) {
                alert(data);
                carregarUsuarios();
            }
        });
    }
}

// Função para preencher o formulário de edição com os dados do usuário selecionado
function editarUsuario(id, nome, email) {
    $("#id").val(id);
    $("#nome").val(nome);
    $("#email").val(email);
}

// Função para limpar o formulário de edição
function limparFormulario() {
    $("#id").val("");
    $("#nome").val("");
    $("#email").val("");
}

// Carrega a lista de usuários ao carregar a página
$(document).ready(function() {
    carregarUsuarios();
});