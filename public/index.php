<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/><title>CI2T - Congreso Internacional de Tecnologia Tijuana</title></head><body><nav><div class="start"><h1 id="logo">CI2T</h1><a class="link" href="/public/images/CI2T-2020_general-program.png" target="_blank"><h2>Programa</h2></a></div><div class="center"></div><div class="end"><div class="languages"><?php foreach($props["links"] as $link => $p) { ?>
<a <?php echo "href=$p[0]"; if($p[1]) echo " class='active lang'"; else echo " class='lang'" ?> ><h2><?php echo strtoupper($link); ?></h2></a>
<?php } ?></div><div class="burger"><div class="line"></div><div class="line"></div><div class="line"></div></div></div></nav><section id="info"><h2><?php echo $props['name_event']; ?></h2><h3 class="accent"><?php echo $props['event_location']; ?></h3><div class="btn-option"><a href="<?php echo $props['link_home_opt_primary']; ?>" class="btn btn-secondary">
<?php echo $props['home_opt_primary'] ?>
</a>
<a href="<?php echo $props['link_home_opt_secondary'] ?>" class="btn btn-primary">
<?php echo $props['home_opt_secondary'] ?>
</a></div></section><section class="container" id="about"><h1><?php echo $props['about_h1']; ?></h1><p><?php echo $props['about_p']; ?></p><a class="link" href="http://www.uabc.mx/" target="_blank"><p class="accent"><?php echo $props['about_to_visit']; ?></p></a></section><section class="container white" id="conferences"><h1><?php echo $props['conf_h1']; ?></h1><div class="conferences"><?php foreach($props['conferences'] as $conferenceId => $conference) { ?>
<div class="conference" id=<?php echo $conferenceId; ?>><i><?php echo $conference['esimo']; ?></i><p class="title"><?php echo $conference['title']; ?></p><p class="description"><?php echo $conference['description']; ?></p><a href="<?php echo $conference['link'] ?>">
<?php echo $conference['text_link'] ?>
</a>
</div>
<?php } ?></div><button id="download_poster"><a href="public/images/CI2T_2020_CFP.png" target="_blank"><?php echo $props['conf_dw_pt'] ?></a></button></section><footer id="footer"><div id="copyright"><p>Copyright © 2020 por ci2tijuana.org | Todos los derechos reservados.</p></div></footer></body></html>