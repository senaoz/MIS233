var blackSquares = document.querySelectorAll(".blackSquare");
var whiteSquares = document.querySelectorAll(".whiteSquare");
var whitePieces = document.querySelectorAll(".WhitePiece") ;
var blackPieces = document.querySelectorAll(".BlackPiece");

var turn = true; //if is it "true", it is the white's turn

//Once a player has 0 pieces, the opposite player wins
var whiteScore = 12;
var blackScore = 12;

var possibleMoves; // the moves that is given the current board and player state.

// || means or

var selected = {

}