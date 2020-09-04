<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/><title>CI2T :: <?php echo strtoupper($props['conference']); ?> - Virtual</title><link href="/public/css/fonts.css" rel="stylesheet"/><style>:root{--color-accent:#ffa500}*{margin:0;padding:0;border:0;text-decoration:none;transition:200ms;font-family:Roboto,SansSerif}.bigText{font-size:2.5em;font-weight:bold;text-transform:uppercase;margin-bottom:1em}.accent{color:var(--color-accent);font-weight:bold}.highlight{color:#fff;background-color:var(--color-accent);border:2px solid var(--color-accent);padding:0 4px;border-radius:.5em}.download_poster{display:block;margin:7em auto auto auto;width:15em;text-align:center;padding:1em;font-size:1.2em;font-weight:bold;background-color:transparent;border:.1em solid var(--color-accent);color:var(--color-accent);text-transform:capitalize}.download_poster:hover{background-color:var(--color-accent);color:#fff}:root{--size-scroll:5px}::-webkit-scrollbar{background:transparent;width:var(--size-scroll)}::-webkit-scrollbar-track{background:transparent}::-webkit-scrollbar-thumb{background:#000}::-webkit-scrollbar-thumb:hover{background:var(--color-accent)}:root{--size-header:6em}#logo{font-size:3em}.linkUppercase{text-transform:uppercase}.linkUppercase h4{letter-spacing:.2em;font-size:1.5em}a.active{color:#fff !important}header{z-index:10000;position:absolute;display:grid;grid-template-columns:repeat(3,1fr);background-color:#000;padding:0 5%;width:90%;height:var(--size-header);align-items:center;top:0}header *{font-family:BebasNeue;font-weight:bold}header .start{display:flex;align-items:center}header .start .line{width:1px;height:2em;margin:0 1em;background-color:#fff}header .start a{display:flex;justify-content:flex-end;align-items:center;color:#fff}header .end{display:flex;justify-content:flex-end;align-items:center}header .end button{width:3em;height:1.8em;background-color:transparent;margin-left:1em;outline:none;cursor:pointer;user-select:none;display:grid;justify-items:flex-end;grid-gap:.3em}header .end button .line{width:100%;height:100%;background-color:#fff}header .end button .line:nth-child(2){width:70%}header .end .languages{display:flex}header .end .languages a{color:rgba(255,255,255,0.5);margin:0 .25em}#main{position:fixed;width:100%;background-color:#000;top:var(--size-header);height:calc(100vh - var(--size-header))}.showMain{display:none}footer{background-color:#000;padding:2em;color:#fff}</style></head><body><header id="header"><div class="start"><a href=<?php echo $props["home"]; echo " class='linkUppercase'" ?> ><h1 id="logo">CI2T</h1></a><div class="line"></div><a class="linkUppercase" href="/public/images/CI2T-2020_general-program.png" target="_blank"><h4>Programa</h4></a></div><div class="center"></div><div class="end"><div class="languages"><?php foreach($props["links"] as $link => $p) { ?>
<a <?php echo "href=$p[0]"; if($p[1]) echo " class='active linkUppercase'"; else echo " class='linkUppercase'" ?> ><h2><?php echo strtoupper($link); ?></h2></a>
<?php } ?></div><button id="burger"><div class="line"></div><div class="line"></div><div class="line"></div></button></div></header><div class="showMain" id="main"><h1>Menu</h1></div><section class="container" style="padding-top: var(--size-header)"><h1><?php echo $props['title'];?></h1><div class="items"><?php foreach($props['items'] as $item) { ?><div class="item"><h2><?php echo $item["title"]; ?></h2><?php foreach($item["authors"] as $author) { ?><p><?php echo $author["name"]; ?></p><?php } ?><b><?php echo $item["url_video"]; ?></b></div><?php } ?></div></section></body></html>