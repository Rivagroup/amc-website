<h1>Adventure Minigolf Chemnitz</h1>
<img class="img-fluid w-100 mb-3" src="<?= base_url('assets/header/minigolf_weltraum.jpg') ?>" alt="Schwarzlicht / Adventure Minigolf Chemnitz Weltraum">
<p>
Ihr bewegt euch spielerisch auf einem 16-Loch-Indoor-Minigolf-Parcours durch 4 unterschiedliche Fantasiewelten. Die gesamte Spielfläche wurde mit Wandmotiven in fluoreszierenden Farben gestaltet, die im Schwarzlicht gut zur Geltung kommen. Der Freizeitspaß ist natürlich wetter unabhängig und eignet sich daher sehr gut ganzjährig für gemeinsame Aktivitäten mit Freunden und Familie, für Junggesellenabschiede, Geburtstag oder auch Firmenevents.
</p>

<div class="card shadow-sm text-white bg-danger my-3" style="width: auto;">
    <img src="<?= base_url('assets/header/Corona.jpg'); ?>" class="card-img-top" alt="China-Virus">
    <div class="card-body">
    <h4 class="card-title text-uppercase"><i class="fas fa-viruses"></i> COVID-19 INFORMATIONEN</h4>
        <div class="card-text text-justify text-white">           
        <?php
            $url = 'https://spielcenter-chemnitz.de/corona.html';
            $content = file_get_contents($url);

            $doc = new DOMDocument();
            $doc->loadHtml($content);

            echo $content;
        ?>
        </div>
    </div>
    <div class="card-footer d-flex flex-column">
        <a href="<?=base_url("hygienekonzept")?>" class="btn btn-danger mt-auto"><i class="fas fa-shield-virus"></i> aktuelles Hygiene-Konzept</a>
    </div>
</div>

<img class="img-fluid w-100 mb-3" src="<?= base_url('assets/header/minigolf_dschungel.jpg') ?>" alt="Schwarzlicht / Adventure Minigolf Chemnitz Dschungel">
<h2>Unsere Anlage</h2>
<p>Ihr startet das Minigolf Abenteuer im Weltall. Seid darauf gefasst, das euch Aliens beobachten. Danach beamt ihr euch runter zur Erde. Genauer gesagt in einen Dschungel auf einer fernab gelegenen Insel. Es gleicht einem Jurassic Park, in dem überraschend noch wenige Arten von Dinosauriern überlebt haben.</p>
<p>Doch plötzlich bricht ein großer Vulkan aus, unter mächtigem Getöse ergießen sich gewaltige Lavaströme. Ihr findet euch in einer apokalyptischen Szenrie wieder. Den letzten Ball habt ihr noch erfolgreich in den glühenden Krater geschlagen.</p>
<p>Jedoch bricht der Boden unter euch weg. Gewaltige Erdmassen fallen ins Meer und ihr werdet mit in die Tiefe gerissen. Nun gilt es auf dem Meeresboden die letzten Bälle einzulochen. Geratet nicht in Panik, wenn ein großer Hai oder ein Riesenkraken hinter dem Korallenriff auftaucht. Eine Meerjungfrau geleitet euch sicher zum Ziel.</p>
<a href ="https://spielcenter-chemnitz.de/silvester/" target="_blank"><img src="<?=base_url("assets/header/slider_silvester2020.png")?>" alt="Silvester 2020/21" class="img-fluid"></a>