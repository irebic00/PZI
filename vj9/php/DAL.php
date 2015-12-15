<?php
require_once("model/Card.php");
require_once("model/Comment.php");

class DAL
{
    public static function getCards()
    {
        $cards = array();
        
        $cards[] = new Card
        (
            "Cetina",
            "images/newsHeadings/cetina.jpg",
            "Cetina izvire na nadmorskoj visini od 385 m u sjeverozapadnim obroncima Dinare blizu sela Cetina, 7 km sjeverno od Vrlike, a po kojem je rijeka i dobila ime. Izvor Cetine je jezero duboko preko stotinu metara."
        );
        
        $cards[] = new Card
        (
            "Kozjak",
            "images/newsHeadings/kozjak.jpg",
            "Kozjak je planina koja sa sjeverne strane okružuje grad Kaštela. Njegova je južna padina vrlo strma i klisurasta, a sjeverni kameniti  obronci postupno prelaze u valovitu visoravan Dalmatinske Zagore."
        );
        
        $cards[] = new Card
        (
            "Primošten",
            "images/newsHeadings/primosten.jpg",
            "Tijekom turske invazije 1542., otočić na kojemu se nalazi Primošten je bio zaštićen zidovima i kulama i sa pomičnim mostom koji ga je spajao  s kopnom. Kad su se Turci povukli, most je zamijenjen nasipom."
        );
        
        return $cards;
    }
}