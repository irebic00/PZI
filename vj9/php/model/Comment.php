<?php
require_once("php/TemplateProvider.php");

    class Comment
    {
        public $user;
        public $comment;
        
        public function __construct($user, $comment)
        {
            $this->user = $user;
            $this->comment = $comment;
        }
        
        public function generateHTML()
        {
            $html = TemplateProvider::getCommentTemplate();
            
            $html = str_replace("{{user}}", $this->user, $html);
            $html = str_replace("{{comment}}", $this->comment, $html);
            
            return $html;
        }
        
        public static function generateCommentHTML($comments)
        {
            $html = "";
            
            foreach($comments as $Comment) //druga varijabla: ime proizvoljno, pazit u ostatku foreacha da se koristi isto ime
            {
                $html .= $Comment->generateHTML();
            }
            
            return $html;
        }
    }