var blackSquares = document.querySelectorAll(".blackSquare");
var whiteSquares = document.querySelectorAll(".whiteSquare");
var whitePieces = document.querySelectorAll(".WhitePiece") ;
var blackPieces = document.querySelectorAll(".BlackPiece");

var turn = true; //if it is true,the turn of the game is the white pieces.


$(".WhitePiece").click(function(){
    if (turn = false) {
        alert("The turn of the game is the black pieces.")
    }

    else {
        showPossibleMoves()
        $(this).fadeOut();
    }
});

$(".BlackPiece").click(function(){
    if (turn = true) {
        alert("The turn of the game is the white pieces.")
    }
    else {
        $(this).fadeOut();
    }
});

function showPossibleMoves(){

    PossibleMoves()

}

function PossibleMoves(){

}

for (whitePieces of whitePieces) {
    whitePieces.addEventListener("click", clicked);
}

for (blackPieces of blackPieces) {
    blackPieces.addEventListener("click", clicked);
}