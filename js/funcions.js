function carregarCat(id) {
        $.ajax({
            url: "/TDIW_PLAB/index.php?accio=cat-" + id, success:
            function(result) {
                $(".main").html(result);
            }
        })
}

function carregarProd(id) {
    $.post("/TDIW_PLAB/index.php?accio=producte", { myVar: id}, function(data) {
        $(".main").html(data);
    })
}

function carregarCarro() {
    $.ajax({
        url: "/TDIW_PLAB/index.php?accio=llistar-compra", success:
        function(result){
            $(".main").html(result);
        }
    })
}

function confirmaCompra() {
    $.ajax({
        url: "/TDIW_PLAB/index.php?accio=confirmaCompra", success:
            function(result){
                $(".main").html(result);
            }
    })
}

function llistarComandes() {
    $.ajax({
        url: "/TDIW_PLAB/index.php?accio=llistar-comandes", success:
            function(result){
                $(".main").html(result);
            }
    })
}

function editarPerfil() {
    $.ajax({
        url: "/TDIW_PLAB/index.php?accio=llistar-perfil", success:
            function (result){
                $(".main").html(result);
            }
    })
}









