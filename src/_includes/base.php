<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>Little Innocent Angel</title>
        
        <link rel="stylesheet" type="text/css" href="https://w3css.staticly.cc/4.15/w3.css">
        <link rel="stylesheet" type="text/css" href="https://w3css.staticly.cc/w3-colors-metro.css">
        <link rel="stylesheet" type="text/css" href="https://webfonts.staticly.cc/nunito/nunito.css">
    </head>
    
    <body class="w3-black">
        <header class="w3-metro-darken">
            <div class="w3-content w3-padding w3-padding-64 w3-center w3-text-metro-magenta">
                <h1 class="font-nunito"><b><a href="/" class="w3-button w3-hover-none w3-hover-text-metro-magenta">Little Innocent Angel</a></b></h1>
                <p class="font-nunito w3-opacity-min w3-wide"><i>A Blog by Angelica Henderson</i></p>
            </div>
        </header>
        
        <section class="w3-metro-darken">
            <div class="w3-content w3-padding w3-padding-64">
                <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>
            </div>
        </section>
        
        <footer>
            <div class="w3-content w3-padding w3-text-gray w3-center w3-small">
                <p>Copyright &copy; <a href="https://www.angelicahenderson.ict.rocks" target="_blank">Angelica Henderson</a>.</p>
                <p class="w3-opacity">Designed and developed by my best friend <a href="https://www.paulawhitefield.ict.rocks" target="_blank"><b>Paula Whitefield</b></a>.</p>
            </div>
        </footer>
    </body>
</html>
