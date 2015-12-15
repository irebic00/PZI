<?php
require_once("php/TemplateProvider.php");
require_once("php/model/Comment.php");

    class Card
    {
        public $title;
        public $headerURL;
        public $text;
        public $comments;
        
        public function __construct($title, $headerURL, $title, $comments)
        {
            $this->title = $title;
            $this->headerURL = $headerURL;
            $this->text = $text;
            $this->comments = $comments;
        }
        
        public function generateHTML()
        {
            $html = TemplateProvider::getCardTemplate();
            
            $html = str_replace("{{header_url}}", $this->headerURL, $html);
            $html = str_replace("{{title}}", $this->title, $html);
            $html = str_replace("{{text}}", $this->text, $html);
            $html = str_replace("{{comment}}", Comment::generateCommentHTML($this->comments), $html);
            
            return $html;
        }
        
        public static function generateCardsHTML($cards)
        {
            $html = "";
            
            foreach($cards as $Card) //druga varijabla: ime proizvoljno, pazit u ostatku foreacha da se koristi isto ime
            {
                $html .= $Card->generateHTML();
            }
            
            return $html;
        }
    }