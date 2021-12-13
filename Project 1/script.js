let turn = true; //if it is true, the turn of the game is the white pieces.

$(".WhitePiece").click(function(event){
    if (turn == false) {
        document.getElementById("message").innerHTML = "The turn of the game is the black pieces."; }
    else {
        do {
            PossibleMoves($(this));
        } while ($('.WhitePiece').length == 0);
    }
});

$(".BlackPiece").click(function(event){
    if (turn == true) {
        document.getElementById("message").innerHTML = "The turn of the game is the white pieces."; }
    else {
        do {
            PossibleMoves($(this));
        } while ($('.BlackPiece').length == 0);
    }
});

function PossibleMoves(e){
    let Y = parseInt(e.closest('tr').attr('id')); // Satır numarasını seçiyor.
    let X = parseInt(e.closest('td').attr('id')); // O satırdaki taş numarasını seçiyor.

    if (turn == true){
        var PossibleY = Y+1;
        var skippedPossibleY = Y+2;
        var PossibleX1 = X;
        var PossibleX2 = X-1;
        var skippedPossibleX1 = X+1; // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için X kordinatlarını belirliyor
        var skippedPossibleX2 = X-2;
    } else {
        var PossibleY = Y-1;
        var skippedPossibleY = Y-2;
        var PossibleX1 = X;
        var PossibleX2 = X+1;
        var skippedPossibleX1 = X-1; // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum için X kordinatlarını belirliyor
        var skippedPossibleX2 = X+2;
    }

    document.getElementById("message").innerHTML = "Now you should select the square that<br>is where to go with <b>double click.</b>";
    selectSquare()

    function selectSquare() {
        $(".blackSquare").dblclick(function (event) { // Siyah karelere çift tıkladığında gideceği kareyi seçmiş olacak.
            var SquareY = parseInt($(this).closest('tr').attr('id')); //Seçilen karenin satır numarasını seçiyor. 
            var SquareX = parseInt($(this).closest('td').attr('id')); //Seçilen karenin satır içerisindeki sırasını seçiyor. 
            var inner = $(this).html();

            if (inner == "") { // Eğer karenin içerisinde taş yok ise;
                if (SquareY == PossibleY) { //Karşı tarafın taşını yemeden tek kare ilerlediği durum
                    if ((SquareX == PossibleX1) || (SquareX == PossibleX2)) {
                        if (turn == true) {
                            $(this).html("<span class=\"WhitePiece\"></span>");
                            turn = false;
                        } else if (turn == false) {
                            $(this).html("<span class=\"BlackPiece\"></span>");
                            turn = true;
                        }
                        e.remove();
                        document.getElementById("message").innerHTML = "The turn of the game is changed.";
                    }

                    else document.getElementById("message").innerHTML = "It is not valid move.";
                }

                else if (SquareY == skippedPossibleY) { // Taşın üstünden atlayıp, karşı tarafın taşını yediği durum
                    if ((SquareX == skippedPossibleX1) || (SquareX == skippedPossibleX2)) { // Yeni kordinatlar doğru mu?
                        var row = document.getElementById(PossibleY);
                        $("td").closest("tr", row).html();
                    }

                }

                else document.getElementById("message").innerHTML = "It is not valid move.";
            }

            else document.getElementById("message").innerHTML = "<b>You can't put the piece on a piece.</b>";
        });
    }
}
