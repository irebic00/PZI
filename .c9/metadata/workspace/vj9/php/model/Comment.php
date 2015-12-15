{"changed":false,"filter":false,"title":"Comment.php","tooltip":"/vj9/php/model/Comment.php","undoManager":{"mark":95,"position":95,"stack":[[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["<?php",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":38,"column":5},"action":"insert","lines":["<?php","require_once(\"php/TemplateProvider.php\");","","    class Card","    {","        public $title;","        public $headerURL;","        public $text;","        ","        public function __construct($title, $headerURL, $title)","        {","            $this->title = $title;","            $this->headerURL = $headerURL;","            $this->text = $text;","        }","        ","        public function generateHTML()","        {","            $html = TemplateProvider::getCardTemplate();","            ","            $html = str_replace(\"{{header_url}}\", $this->headerURL, $html);","            $html = str_replace(\"{{title}}\", $this->title, $html);","            $html = str_replace(\"{{text}}\", $this->text, $html);","            ","            return $html;","        }","        ","        public static function generateCardsHTML($cards)","        {","            $html = \"\";","            ","            foreach($cards as $Card) //druga varijabla: ime proizvoljno, pazit u ostatku foreacha da se koristi isto ime","            {","                $html .= $Card->generateHTML();","            }","            ","            return $html;","        }","    }"]}],[{"start":{"row":3,"column":10},"end":{"row":3,"column":14},"action":"remove","lines":["Card"],"id":3},{"start":{"row":3,"column":10},"end":{"row":3,"column":11},"action":"insert","lines":["C"]}],[{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"insert","lines":["o"],"id":4}],[{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"insert","lines":["m"],"id":5}],[{"start":{"row":3,"column":13},"end":{"row":3,"column":14},"action":"insert","lines":["m"],"id":6}],[{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"insert","lines":["e"],"id":7}],[{"start":{"row":3,"column":15},"end":{"row":3,"column":16},"action":"insert","lines":["n"],"id":8}],[{"start":{"row":3,"column":16},"end":{"row":3,"column":17},"action":"insert","lines":["t"],"id":9}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":21},"action":"remove","lines":["$title"],"id":10},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["$"]}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["u"],"id":11}],[{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["s"],"id":12}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"insert","lines":["e"],"id":13}],[{"start":{"row":5,"column":19},"end":{"row":5,"column":20},"action":"insert","lines":["r"],"id":14}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":25},"action":"remove","lines":["$headerURL"],"id":15},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["$"]}],[{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["c"],"id":16}],[{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["o"],"id":17}],[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["m"],"id":18}],[{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["m"],"id":19}],[{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["e"],"id":20}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["n"],"id":21}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["t"],"id":22}],[{"start":{"row":6,"column":24},"end":{"row":7,"column":21},"action":"remove","lines":["","        public $text;"],"id":23}],[{"start":{"row":8,"column":36},"end":{"row":8,"column":42},"action":"remove","lines":["$title"],"id":24},{"start":{"row":8,"column":36},"end":{"row":8,"column":41},"action":"insert","lines":["$user"]}],[{"start":{"row":8,"column":43},"end":{"row":8,"column":53},"action":"remove","lines":["$headerURL"],"id":25},{"start":{"row":8,"column":43},"end":{"row":8,"column":51},"action":"insert","lines":["$comment"]}],[{"start":{"row":8,"column":53},"end":{"row":8,"column":59},"action":"remove","lines":["$title"],"id":26}],[{"start":{"row":8,"column":52},"end":{"row":8,"column":53},"action":"remove","lines":[" "],"id":27}],[{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"remove","lines":[","],"id":28}],[{"start":{"row":11,"column":42},"end":{"row":12,"column":32},"action":"remove","lines":["","            $this->text = $text;"],"id":29}],[{"start":{"row":10,"column":19},"end":{"row":10,"column":24},"action":"remove","lines":["title"],"id":30},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":["u"]}],[{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["s"],"id":31}],[{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":["e"],"id":32}],[{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["r"],"id":33}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":28},"action":"remove","lines":["headerURL"],"id":34},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["c"]}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["o"],"id":35}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["m"],"id":36}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["m"],"id":37}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["e"],"id":38}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["n"],"id":39}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["t"],"id":40},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["r"]}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"remove","lines":["r"],"id":41}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"remove","lines":["t"],"id":42}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["t"],"id":43}],[{"start":{"row":10,"column":26},"end":{"row":10,"column":32},"action":"remove","lines":["$title"],"id":44},{"start":{"row":10,"column":26},"end":{"row":10,"column":31},"action":"insert","lines":["$user"]}],[{"start":{"row":11,"column":29},"end":{"row":11,"column":39},"action":"remove","lines":["$headerURL"],"id":45},{"start":{"row":11,"column":29},"end":{"row":11,"column":37},"action":"insert","lines":["$comment"]}],[{"start":{"row":16,"column":42},"end":{"row":16,"column":45},"action":"remove","lines":["ard"],"id":46},{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"insert","lines":["o"]}],[{"start":{"row":16,"column":43},"end":{"row":16,"column":44},"action":"insert","lines":["m"],"id":47}],[{"start":{"row":16,"column":44},"end":{"row":16,"column":45},"action":"insert","lines":["m"],"id":48}],[{"start":{"row":16,"column":45},"end":{"row":16,"column":46},"action":"insert","lines":["e"],"id":49}],[{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"insert","lines":["n"],"id":50}],[{"start":{"row":16,"column":47},"end":{"row":16,"column":48},"action":"insert","lines":["t"],"id":51}],[{"start":{"row":25,"column":40},"end":{"row":25,"column":44},"action":"remove","lines":["ards"],"id":52},{"start":{"row":25,"column":40},"end":{"row":25,"column":41},"action":"insert","lines":["o"]}],[{"start":{"row":25,"column":41},"end":{"row":25,"column":42},"action":"insert","lines":["m"],"id":53}],[{"start":{"row":25,"column":42},"end":{"row":25,"column":43},"action":"insert","lines":["m"],"id":54}],[{"start":{"row":25,"column":43},"end":{"row":25,"column":44},"action":"insert","lines":["e"],"id":55}],[{"start":{"row":25,"column":44},"end":{"row":25,"column":45},"action":"insert","lines":["n"],"id":56}],[{"start":{"row":25,"column":45},"end":{"row":25,"column":46},"action":"insert","lines":["t"],"id":57}],[{"start":{"row":25,"column":51},"end":{"row":25,"column":57},"action":"remove","lines":["$cards"],"id":58},{"start":{"row":25,"column":51},"end":{"row":25,"column":52},"action":"insert","lines":["$"]}],[{"start":{"row":25,"column":52},"end":{"row":25,"column":53},"action":"insert","lines":["c"],"id":59}],[{"start":{"row":25,"column":53},"end":{"row":25,"column":54},"action":"insert","lines":["o"],"id":60}],[{"start":{"row":25,"column":54},"end":{"row":25,"column":55},"action":"insert","lines":["m"],"id":61}],[{"start":{"row":25,"column":55},"end":{"row":25,"column":56},"action":"insert","lines":["m"],"id":62}],[{"start":{"row":25,"column":56},"end":{"row":25,"column":57},"action":"insert","lines":["e"],"id":63}],[{"start":{"row":25,"column":57},"end":{"row":25,"column":58},"action":"insert","lines":["n"],"id":64}],[{"start":{"row":25,"column":58},"end":{"row":25,"column":59},"action":"insert","lines":["t"],"id":65}],[{"start":{"row":18,"column":35},"end":{"row":18,"column":45},"action":"remove","lines":["header_url"],"id":66},{"start":{"row":18,"column":35},"end":{"row":18,"column":39},"action":"insert","lines":["user"]}],[{"start":{"row":19,"column":35},"end":{"row":19,"column":40},"action":"remove","lines":["title"],"id":67},{"start":{"row":19,"column":35},"end":{"row":19,"column":42},"action":"insert","lines":["comment"]}],[{"start":{"row":18,"column":51},"end":{"row":18,"column":60},"action":"remove","lines":["headerURL"],"id":68},{"start":{"row":18,"column":51},"end":{"row":18,"column":55},"action":"insert","lines":["user"]}],[{"start":{"row":19,"column":54},"end":{"row":19,"column":59},"action":"remove","lines":["title"],"id":69},{"start":{"row":19,"column":54},"end":{"row":19,"column":61},"action":"insert","lines":["comment"]}],[{"start":{"row":19,"column":70},"end":{"row":20,"column":64},"action":"remove","lines":["","            $html = str_replace(\"{{text}}\", $this->text, $html);"],"id":70}],[{"start":{"row":24,"column":59},"end":{"row":24,"column":60},"action":"insert","lines":["s"],"id":71}],[{"start":{"row":28,"column":25},"end":{"row":28,"column":26},"action":"remove","lines":["s"],"id":72}],[{"start":{"row":28,"column":24},"end":{"row":28,"column":25},"action":"remove","lines":["d"],"id":73}],[{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"remove","lines":["r"],"id":74}],[{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"remove","lines":["a"],"id":75}],[{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"remove","lines":["c"],"id":76}],[{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"insert","lines":["c"],"id":77}],[{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"insert","lines":["o"],"id":78}],[{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"insert","lines":["m"],"id":79}],[{"start":{"row":28,"column":24},"end":{"row":28,"column":25},"action":"insert","lines":["m"],"id":80}],[{"start":{"row":28,"column":25},"end":{"row":28,"column":26},"action":"insert","lines":["e"],"id":81}],[{"start":{"row":28,"column":26},"end":{"row":28,"column":27},"action":"insert","lines":["n"],"id":82}],[{"start":{"row":28,"column":27},"end":{"row":28,"column":28},"action":"insert","lines":["t"],"id":83}],[{"start":{"row":28,"column":28},"end":{"row":28,"column":29},"action":"insert","lines":["s"],"id":84}],[{"start":{"row":28,"column":34},"end":{"row":28,"column":38},"action":"remove","lines":["Card"],"id":85},{"start":{"row":28,"column":34},"end":{"row":28,"column":35},"action":"insert","lines":["C"]}],[{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"insert","lines":["o"],"id":86}],[{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"insert","lines":["m"],"id":87}],[{"start":{"row":28,"column":37},"end":{"row":28,"column":38},"action":"insert","lines":["m"],"id":88}],[{"start":{"row":28,"column":38},"end":{"row":28,"column":39},"action":"insert","lines":["e"],"id":89}],[{"start":{"row":28,"column":39},"end":{"row":28,"column":40},"action":"insert","lines":["n"],"id":90}],[{"start":{"row":28,"column":40},"end":{"row":28,"column":41},"action":"insert","lines":["t"],"id":91}],[{"start":{"row":30,"column":27},"end":{"row":30,"column":30},"action":"remove","lines":["ard"],"id":92},{"start":{"row":30,"column":27},"end":{"row":30,"column":28},"action":"insert","lines":["o"]}],[{"start":{"row":30,"column":28},"end":{"row":30,"column":29},"action":"insert","lines":["m"],"id":93}],[{"start":{"row":30,"column":29},"end":{"row":30,"column":30},"action":"insert","lines":["m"],"id":94}],[{"start":{"row":30,"column":30},"end":{"row":30,"column":31},"action":"insert","lines":["e"],"id":95}],[{"start":{"row":30,"column":31},"end":{"row":30,"column":32},"action":"insert","lines":["n"],"id":96}],[{"start":{"row":30,"column":32},"end":{"row":30,"column":33},"action":"insert","lines":["t"],"id":97}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":51},"end":{"row":24,"column":60},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1450102272465}