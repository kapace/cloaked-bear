_<?php
/*
 * HTML page layout template
 */
?>
<html>
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
        <meta NAME="Keywords" CONTENT="BCIT COMP4711 XML Codeigniter">
        <link rel="stylesheet" type="text/css" href="/assets/style.css"/>
    </head>
    <body>
        <div class="wrapper">
            <div id="header">
                <!--                <div class="title">{title}</div> -->
            </div>
            <div id="navbar">
                {menubar}
            </div>
            <div id="content">
                <?php
                /* Display errors before content*/
                if (count($errors) > 0 ) {
                    foreach($errors as $booboo) {
                        echo '<p<b>Oh nooOooO!</b> ' . $booboo . '</p>';
                    }
                }
                ?>
                {content}
            </div>
            <div id="footer">
                <p><a href="mailto:{email}">{instructor}</a> (c) 2013.</p>
            </div>

        </div>
    </body>
</html>
