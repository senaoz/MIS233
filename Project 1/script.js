var turn = 1; //if it is 1, the turn of the game is the white pieces.

$(".WhitePiece").click(function(event){
    if (turn = 0) {
        document.getElementById("message").innerHTML = "The turn of the game is the black pieces.";
    }

    else {
        PossibleMoves($(this));
        return turn = 0;
    }
});

$(".BlackPiece").click(function(){
    if (turn = 1) {
        document.getElementById("message").innerHTML = "The turn of the game is the white pieces.";
    }
    else {
        $(this).fadeOut();
        return turn = 1;
    }
});


function PossibleMoves(e){
    var Y = parseInt(e.closest('tr').attr('id'));
    var X = parseInt(e.closest('td').attr('id'));
    var classN = e.closest('span').attr('class');

    if ( classN = 'WhitePiece'){
        var PossibleY = Y+1;
        var PossibleX1 = X;
        var PossibleX2 = X-1;
    }

    else {
        var PossibleY = Y-1;
        var PossibleX1 = X;
        var PossibleX2 = X+1;
    }

    document.getElementById("message").innerHTML = "Now you should select the square that is <br> where to go with double click.";

    $(".blackSquare").dblclick(function(){
        var SquareY = parseInt($(this).closest('tr').attr('id'));
        var SquareX = parseInt($(this).closest('td').attr('id'));
        var inner =  $(this).html();

        if ( inner == "") {
            if (SquareY == PossibleY){
                if (SquareX == (PossibleX1 || PossibleX2)) {
                    alert("OLDU");
                }
            }
            else document.getElementById("message").innerHTML = "It is not valid move.";
        }
        else alert("You can't put the piece on a piece.");
    });
}