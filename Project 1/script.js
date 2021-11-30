var draughtsInitial = [ // ' ' is an empty square, 'b' a black piece, 'w' a white piece; 'B' and 'W' are kings.
    [' ','b',' ','b',' ','b',' ','b'],
    ['b',' ','b',' ','b',' ','b',' '],
    [' ','b',' ','b',' ','b',' ','b'],
    [' ',' ',' ',' ',' ',' ',' ',' '],
    [' ',' ',' ',' ',' ',' ',' ',' '],
    ['w',' ','w',' ','w',' ','w',' '],
    [' ','w',' ','w',' ','w',' ','w'],
    ['w',' ','w',' ','w',' ','w',' ']];

var draughts = [];
var player = 'B'; //active player
var selected; // piece selected to be moved
var possibleMoves = []; // the moves that is given the current board and player state.