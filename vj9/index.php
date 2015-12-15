<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Vježba 8 - Programiranje za Internet</title>
        <link rel="stylesheet" href="styles/font-awesome.min.css"/>
        <link rel="stylesheet" href="styles/style.css"/>
        <script type="text/template" id="card-template"></script>
        <script type="text/template" id="comment-template"></script>
    </head>
    <body>
        <header>
            <div class="title left"> Vježba 9</div>
            <div id="search-container" class="right">
                <span class="search-icon-container">
                    <i class="fa fa-search search-icon"></i>
                </span>
                <input type="text" id="search-box" placeholder="search"/>
            </div>
        </header>
        
        <main>
            <div id="main-container-header">
                <div id="fesb-logo-container">
					<img src="images/fesb-logo.png"/>
				</div>
                <ul class="menu right">
                    <li><a>Vježba 5</a></li>
                    <li><a>Vježba 6</a></li>
                    <li><a>Vježba 7</a></li>
                    <li><a>Vježba 8</a></li>
                    <li><a class="selected">Vježba 9</a></li>
                </ul>
            </div>
            
            <div id="slider">
                <div>
                    <img id="slider-image" src="images/cetina.jpg"/>
                </div>
                
                <div id="thumbnail-container">
                    <div data-large-image-url="images/cetina.jpg" class="thumbnail selected"><img src="images/thumbnails/cetina.jpg" alt="svilaja"/></div>
                    <div data-large-image-url="images/kozjak.jpg" class="thumbnail"><img src="images/thumbnails/kozjak.jpg" alt="cetina"/></div>
                    <div data-large-image-url="images/primosten.jpg" class="thumbnail"><img src="images/thumbnails/primosten.jpg" alt="primosten"/></div>
                    <div data-large-image-url="images/sibenik.jpg" class="thumbnail"><img src="images/thumbnails/sibenik.jpg" alt="sibenik"/></div>
                    <div data-large-image-url="images/svilaja.jpg" class="thumbnail"><img src="images/thumbnails/svilaja.jpg" alt="kozjak"/></div>
                </div>
                
                <i class="fa fa-chevron-circle-left arrow-left arrow"></i>
				<i class="fa fa-chevron-circle-right arrow-right arrow"></i>
            </div>    
            
            <h1>Vježba 9 - Osnove php-a</h1>
            
            <button class="button" id="add-card-button">Add</button>
            
            <div id="main-container-content">
                <aside id="cards-container">
                    <?php
                    require_once("php/model/Card.php");
                    require_once("php/model/Comment.php");
                    
                    $cards = array();
                        
                    $cards[] = new Card("Svilaja", "images/newsHeadings/svilaja.jpg", "Svilaja", array(new Comment("aa","bb")));
                    $cards[] = new Card("Kozjak", "images/newsHeadings/kozjak.jpg", "Kozjak", array());
                    $cards[] = new Card("Cetina", "images/newsHeadings/cetina.jpg", "Cetina", array());;
                        
                    echo(Card::generateCardsHTML($cards));
                    ?>
                </aside>
            </div>
        </main>
        
        <footer>
            Copyright: Ime i Prezime @ FESB - PZI
        </footer>
    </body>
</html>