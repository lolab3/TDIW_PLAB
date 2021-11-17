$(document).ready(function() {
    $("#roba").click(function() {
        $.ajax({
            url: "/TDIW_PLAB/controladors/llistar_roba.php", success:
            function(result) {
                $(".main").html(result);
            }
        })
    })
})

$(document).ready(function() {
    $("#complements").click(function() {
        $.ajax({
            url: "/TDIW_PLAB/controladors/llistar_complements.php", success:
                function(result) {
                    $(".main").html(result);
                }
        })
    })
})

$(document).ready(function() {
    $("#calçat").click(function() {
        $.ajax({
            url: "/TDIW_PLAB/controladors/llistar_calçat.php", success:
                function(result) {
                    $(".main").html(result);
                }
        })
    })
})



