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







