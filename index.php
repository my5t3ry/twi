<!DOCTYPE html>
<!--
 _            _
| |          (_)
| |___      ___
| __\ \ /\ / / |
| |_ \ V  V /| |
 \__| \_/\_/ |_|

TWTXT WEB INTERFACE
shows content from twt.txt in HTML format on web server
written in PHP
change values in next variables
twi on github: http://github.com/skrypte/twi
contact: skingrapher at dev@skingrapher.com
-->
<?php
// ======================================
//
// V A R I A B L E S   T O   C H A N G E
//
// ======================================
$author = "sash"; // author of twtfile
$index_url = "http://shitkatapult.org"; // index url of your website homepage
$metatitle = "sash's notes"; // content for title tag
$twturl = "http://shitkatapult.org/twtxt/twtxt.txt"; // url of the twtfile - can be relative or absolute
$lang = "en";
?>
<html lang="<?php print $lang; ?>">
<head>

    <!-- M E T A   T A G S -->

    <meta charset="UTF-8">
    <meta http-equiv="default-style" content="twt"/>
    <meta name="robots" content="noindex, nofollow, noarchive, noimageindex, nocache"/>
    <meta name="generator" content="vim"/>
    <meta name="author" content="<?php print $author; ?>"/>
    <meta name="creator" content="skingrapher me@skingrapher.com"/>
    <meta name="description" content="web interface for twtxt timeline. more info about twtxt at twtxt.readthedocs.io">
    <title><?php print $metatitle; ?></title>

    <!-- M E D I A   Q U E R I E S -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- I C O N -->

    <link rel="icon" type="image/svg+xml" href="http://skingrapher.com/m/assets/logo.svg">

    <!-- C S S -->

    <style rel="stylesheet" type="text/css">
        /* LAYOUT */
        html {
            box-sizing: border-box;
        }

        header, main, footer {
            display: block;
            width: 80vw;
            margin: 1.2em auto;
        }

        nav {
            display: block;
            text-align: center;
        }

        p {
            margin: 0;
            padding: .7em 1vw;
        }

        main p {
            border-radius: 1.2em;
        }

        /* COLORS */
        html {
            background: #241f1c;
            color: #ffefdc;
        }

        main p:nth-child(odd) {
            background: #ffefdc;
            color: #241f1c;
        }

        a {
            color: #ffcd88;
            -webkit-transition: color .3s;
            transition: color .3s;
        }

        a:hover, .tag {
            color: #ff935a;
        }

        main p:nth-child(odd) a, p:nth-child(odd) .tag {
            color: #764300;
        }

        main p:nth-child(odd) a:hover {
            color: #a10000;
        }

        svg {
            fill: #ffefdc;
        }

        /* TYPO */
        body {
            font-family: monospace;
        }

        time {
            font-size: small;
        }

        pre {
            font: 10px/5px monospace;
        }

        footer {
            text-align: center;
        }

        /* LINK */
        a {
            text-decoration: none;
            border-bottom: 1px dotted currentColor;
        }

        header a, nav a[rel=index] {
            border-bottom: none;
        }

        /* SVG */
        nav a[rel=index] svg {
            border-bottom: none;
            position: relative;
            top: .7em;
            width: 24px;
            height: 24px;
        }

        header svg:first-of-type {
            width: 55px;
            height: 55.5px;
        }

        header svg:last-of-type {
            width: 355px;
            height: 55.5px;
        }

        @media (max-width: 1100px) {
            header svg:first-of-type {
                width: 41.25px;
                height: 40.875px
            }

            header svg:last-of-type {
                width: 266.25px;
                height: 40.875px
            }
        }

        @media (max-width: 850px) {
            header svg:first-of-type {
                width: 27.5px;
                height: 27.75px
            }

            header svg:last-of-type {
                width: 177.5px;
                height: 25.75px
            }
        }

        @media (max-width: 272px) {
            header svg {
                position: relative;
                top: 0;
            }

            header svg:first-of-type {
                left: calc((100vw - 27.5px - 4rem) / 2);
            }

            header svg:last-of-type {
                left: calc((100vw - 177.5px - 4rem) / 2);
            }

            header h2 {
                font-size: small;
            }
        }
    </style>

</head>
<body>
<header>
    <a href="http://www.skingrapher.com" rel="up" title="retour à la page d'accueil">
        <svg role="img" aria-labelledby="logo" viewBox="0 0 550 555">
            <use xlink:href="/m/assets/logo.svg#skinlogo"/>
        </svg>
        <svg role="img" aria-labelledby="brandname" viewBox="0 0 356 57.5">
            <title id="brandname">skingrapher</title>
            <defs>skingrapher</defs>
            <switch>
                <use xlink:href="/m/assets/sk.svg#brandname"/>
                <!-- svg fallback -->
                <foreignObject requiredExtensions="http://www.w3.org/1999/xhtml">
                    <h1>skingrapher</h1>
                </foreignObject>
            </switch>
        </svg>
    </a>

    <h2>Notes</h2>
</header>
<aside>
    <nav><a rel="index" href="<?php print $index_url; ?>">
            <svg viewBox="0 0 36 36">
                <?php ($lang === "fr") ? $home = "accueil" : $home = "home"; ?>
                <title><?php print $home ?></title>
                <defs><?php print $home ?></defs>
                <path d="m 33.280529,19.843095 h -2.94613 v 10.57226 c 0,0.78411 -0.34184,1.76204 -1.76204,1.76204 h -7.04817 v -10.57225 h -7.04817 v 10.57225 H 7.4278492 c -1.42021,0 -1.76205,-0.97793 -1.76205,-1.76204 v -10.57226 h -2.94613 c -1.0537,0 -0.82816,-0.5709 -0.10572,-1.318 L 16.752579,4.372365 c 0.34359,-0.35593 0.79468,-0.53214 1.24752,-0.54976 0.45285,0.0176 0.90393,0.19207 1.24753,0.54976 l 14.13686,14.15096 c 0.7242,0.74887 0.94974,1.31977 -0.10396,1.31977 z"/>
            </svg>
            <?php ($lang === "fr") ? $tattr = "fichier txt pour twtxt" : $tattr = "twtfile for twtxt";
            $twtfile = basename($twturl); ?>
        </a>&nbsp;&bullet; <a href="<?php print $twturl; ?>" rel="download" title="<?php print $tattr; ?>"><?php print $twtfile; ?></a></nav>
</aside>
<main>
    <?php
    $getfile = file_get_contents_utf8($twturl);
    $r = explode("\n", $getfile);
    foreach ($r as $l) {
        // don't print empty lines
        if (!empty($l)) {
            // patterns and replacements
            // replace date between time tags
            $l = htmlentities($l);
            $date_pattern = "/(^\d{4}(-\d{2}){2})T((\d{2}:){2}\d{2})\+\d{2}:\d{2}\s/";
            $date_replace = "<time datetime='$1T$3'>$1 $3</time>&nbsp;: ";
            $l = preg_replace($date_pattern, $date_replace, $l);
            // replace 0< by @
            $at_pattern = "/(@&lt;)+/";
            $at_replace = "@";
            $l = preg_replace($at_pattern, $at_replace, $l);
            // replace @user between a tags
            $user_pattern = "/(@\w+)(?:\s)(https*:\/{2}(\w+\.)+(\w+\/*\.*)*)*(?:&gt;)/";
            preg_match("#//(.+?)/#", $l, $matches);

            $l = "<a href='$matches[1]'>$matches[0]</a>";
//            $l = preg_replace($user_pattern, $user_replace, $l);
            // replace url between external a tags
            $url_pattern = "/(?:\s)(https*:\/{2}(\w+\.)+(-*\w+\/*\.*)+)+/";
//            $l = " <a href="'++'"$1' rel='external'>$1</a>";
//            $l = preg_replace($url_pattern, $url_replace, $l);
            // replace hashtag between span tags for future css
            $tag_pattern = "/#+/";
            $tag_replace = "<span class='tag'>" . htmlentities("$0") . "</span>";
            $l = preg_replace($tag_pattern, $tag_replace, $l);
            // print each line
            print "<p>" . $l . "</p>";
        }
    }
    ?>
</main>
<footer>
    <p><a href="https://github.com/skrypte/twi" title="sources on github">twi</a>, a web interface for <a href="http://twtxt.readthedocs.io" rel="_blank">twtxt</a> file</p>
</footer>
</body>
</html>

<?php
function file_get_contents_utf8($fn)
{
    $content = file_get_contents($fn);
    return mb_convert_encoding($content, 'UTF-8',
        mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
}
