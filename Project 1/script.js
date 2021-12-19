let turn = true; // if it is true, the turn of the game is the white pieces.
let Possible1;
let Possible2;
let skippedPossible1; // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için belirliyor.
let skippedPossible2;
let X;
let selected;
let scoreW;
let scoreB;

do {
    $(".WhitePiece").click(function(){
        selected = $(this);
        if (turn == true) {
            PossibleMoves(selected);
            document.getElementById("WhiteScore").innerHTML = scoreW;
        }
        else { document.getElementById("message").innerHTML = "The turn of the game is the black pieces."; }
    });

    $(".BlackPiece").click(function(){
        selected = $(this);
        if (turn == false) {
            PossibleMoves(selected);
            document.getElementById("BlackScore").innerHTML = scoreB;
        }
        else { document.getElementById("message").innerHTML = "The turn of the game is the white pieces."; }
    });
} while (($('.WhitePiece').length == 0) || ($('.BlackPiece').length == 0));

function PossibleMoves(selected){
    console.log('PossibleMoves');
    X = parseInt(selected.closest('td').attr('id')); // taş numarasını seçiyor.

    if (turn == true){
         Possible1 = X+4; // Karşı tarafın taşı ile karşılaşmadan  tek kare ilerliyor
         Possible2 = X+3; // Karşı tarafın taşı ile karşılaşmadan  tek kare ilerliyor
         skippedPossible1 = X+7; // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için belirliyor
         skippedPossible2 = X+9; // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için belirliyor
    } else {
         Possible1 = X-3; // Karşı tarafın taşı ile karşılaşmadan  tek kare ilerliyor
         Possible2 = X-4; // Karşı tarafın taşı ile karşılaşmadan  tek kare ilerliyor
         skippedPossible1 = X-5; // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için belirliyor
         skippedPossible2 = X-7; // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için belirliyor
        }
    document.getElementById("message").innerHTML = "Now you should select the square that<br>is where to go with <b>double click.</b>";
    Move()
}

function Move(){
    $(".blackSquare").dblclick(function () { // Siyah karelere çift tıkladığında gideceği kareyi seçmiş olacak.
        var Square = parseInt($(this).closest('td').attr('id')); //Seçilen karenin numarasını seçiyor.
        var inner = $(this).html();

        console.log('selected', Square);

        // Eğer karenin içerisinde taş yok ise;
        if (inner == "") {
            // Karşı tarafın taşını yemeden tek kare ilerlediği durum
            if ((Square == Possible1) || (Square == Possible2)) {
                if (turn == true) { $(this).html("<span class=\"WhitePiece\"></span>"); turn = false; }
                else if (turn == false) { $(this).html("<span class=\"BlackPiece\"></span>"); turn = true; }
                selected.remove();
                selected = null;
                document.getElementById("message").innerHTML = "The turn of the game is changed.";
            }
            // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için kontol
            else if (Square == skippedPossible1) {
                if (Square == Possible1) {
                    console.log('Possible1', Possible1);
                    document.getElementById(Possible1).innerHTML = "";
                    if (turn == true) {
                        $(this).html("<span class=\"WhitePiece\"></span>");
                        turn = false;
                        scoreW =+1; }
                    else if (turn == false) {
                        $(this).html("<span class=\"BlackPiece\"></span>");
                        turn = true;
                        scoreB =+1; }
                    selected.remove();
                    selected = null;
                    document.getElementById("message").innerHTML = "The turn of the game is changed.";
                }
            }
            // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için kontol
            else if (Square == skippedPossible2) {
                if (Square == Possible2) {
                    document.getElementById(Possible2).innerHTML = "";
                    if (turn == true) {
                        $(this).html("<span class=\"WhitePiece\"></span>");
                        turn = false;
                        scoreW =+1; }
                    else if (turn == false) {
                        $(this).html("<span class=\"BlackPiece\"></span>");
                        turn = true;
                        scoreB =+1; }selected.remove();
                    selected = null;
                    document.getElementById("message").innerHTML = "The turn of the game is changed.";
                }
            }
            else document.getElementById("message").innerHTML = "It is not valid move.";
        }

        // Eğer karenin içerisinde taş var ise;
        else if ((inner == "<span class=\"BlackPiece\"></span>") || (inner == "<span class=\"WhitePiece\"></span>")) {
            document.getElementById("message").innerHTML = "<b>You can't put the piece on a piece.</b>"; }
    });
}