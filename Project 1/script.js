var blackSquares = document.querySelectorAll(".blackSquare");
var whiteSquares = document.querySelectorAll(".whiteSquare");
var whitePieces = document.querySelectorAll(".WhitePiece") ;
var blackPieces = document.querySelectorAll(".BlackPiece");

var turn = 1; //if it is 1, the turn of the game is the white pieces.


$(".WhitePiece").click(function(event){
    var keycode = String.fromCharCode(event.keyCode);

    if (turn = 0) {
        alert("The turn of the game is the black pieces.")
    }

    else {
        PossibleMoves($(this))
        $(this).fadeOut();
        return turn = 0;
    }
});

$(".BlackPiece").click(function(){
    if (turn = 1) {
        alert("The turn of the game is the white pieces.")
    }
    else {
        $(this).fadeOut();
        return turn = 1;
    }
});

function PossibleMoves(x){
    var colNumber = x.closest('td').attr('id');
    var rowNumber = x.closest('tr').attr('id');

    if ( x.className = 'WhitePiece'){
    }

    else {
    }
}