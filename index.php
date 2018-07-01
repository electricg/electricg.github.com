<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>giugee.com</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="../jquery-1.4.2.js"></script>
<style>
body {
    
}
[role="main"] {
    text-align: center;
}
section[id] {
    display: inline-block;
    height: 300px;
    overflow: hidden;
    position: relative;
    vertical-align: top;
    width: 200px;
}
h2, .rear {
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
.rear {
    
}
</style>
</head>
<body>
<h1>giugee(k).com</h1>

<div role="main">
    <section id="delicious">
        <h2>delicious</h2>
        <div class="rear">
            <section>
                <h3>Last bookmark</h3>
                <a href="http://designfestival.com/the-cicada-principle-and-why-it-matters-to-web-designers/" hash="02e106107a08faabc6b565de2f3cc9af">The Cicada Principle and Why It Matters to Web Designers ...</a>
                <span>Using Prime Numbers to Generate Backgrounds</span>
                <time datetime="2011-08-03T09:01:03Z">2011-08-03T09:01:03Z</time>
                <ul class="tag">
                    <li>css</li>
                    <li>css3</li>
                    <li>background</li>
                    <li>prime</li>
                    <li>number</li>
                </ul>
                
            </section>
            <footer>
                <a href="http://www.delicious.com/electric_g/">I bookmark (a lot) on delicious</a>
            </footer>
        </div>
    </section>
    <section id="flickr">
        <h2>flickr</h2>
        <div class="rear">
            <section>
                <h3>Random photo</h3>
                <figure>
                    <h4>View of the seaside from Brighton Pier</h4>
                    <img src="flickr.jpg" alt="random photo from my flickr photostream">
                    <figcaption>description, if any</figcaption>
                </figure>
            </section>
            <footer>
                <a href="http://www.flickr.com/photos/electric_g/">my shots on flickr</a>
            </footer>
        </div>
    </section>
    <section id="github">
        <h2>github</h2>
        <div class="rear">
            <footer>
                <a href="https://github.com/electricg">my github repos</a>
            </footer>
        </div>
    </section>
    <section id="lanyrd">
        <h2>lanyrd</h2>
        <div class="rear">
            <h3>I'm attending</h3>
            <time datetime="2011-09-02">2 September 2011</time>
            <footer>
                <a href="http://lanyrd.com/profile/electric_g/">conferences I'm attending on lanyrd</a>
            </footer>
        </div>
    </section>
    <section id="lastfm">
        <h2>last.fm</h2>
        <div class="rear">
            <h3>Recent listened track</h3>
            <a href="http://www.last.fm/music/A+Perfect+Circle/_/Sleeping+Beauty"><span>A Perfect Circle</span> - <span>Sleeping Beauty</span></a>
            <time datetime="14 Aug 2011, 20:48">14 Aug 2011, 20:48</time>
            <figure>
                <img src="http://userserve-ak.last.fm/serve/126/53027909.png" alt="'Mer De Noms' cover" />
                <figcaption>Mer De Noms</figcaption>
            </figure>
            <footer>
                <a href="http://www.last.fm/user/electric_g">my favourite music on last.fm</a>
            </footer>
        </div>
    </section>
    <section id="linkedin">
        <h2>linkedin</h2>
        <div class="rear">
            <footer>
                <a href="http://it.linkedin.com/in/giuliaalfonsi">my work profile on linkedin</a>
            </footer>
        </div>
    </section>
    <section id="twitter">
        <h2>twitter</h2>
        <div class="rear">
            <section>
<?php // import & display latest tweet
$username = "electric_g";
$feed = "http://search.twitter.com/search.atom?q=from:".$username."&rpp=1";
function parse_feed($feed) {
    $stepOne = explode('<content type="html">', $feed);
    $stepTwo = explode('</content>', $stepOne[1]);
    $tweet = $stepTwo[0];
    $tweet = str_replace("&lt;", "<", $tweet);
    $tweet = str_replace("&gt;", ">", $tweet);
    return $tweet;
}
$latest_tweet = file_get_contents($feed);
echo parse_feed($latest_tweet);
?>
            </section>
            <footer>
                <a href="http://twitter.com/#!/electric_g">I jabber a lot on twitter</a>
            </footer>
        </div>
    </section>
</div><!-- /end #main -->
</body>
</html>
