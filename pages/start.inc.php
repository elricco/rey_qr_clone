<?php
	echo '<div class="rex-addon-output">'."\n";
	echo '  <h2 class="rex-hl2">Modul Beispiel</h2>'."\n";
if(OOAddon::isAvailable("textile"))
{
  if(file_get_contents($REX['INCLUDE_PATH'].'/addons/rex_qr/modul_output.txt'))
  {
  	$motxt = file_get_contents($REX['INCLUDE_PATH'].'/addons/rex_qr/modul_output.txt');
    $textile = htmlspecialchars_decode($motxt, ENT_QUOTES);
    echo '<div class="rex-tx1">'."\n";
    echo '<pre><code>'.rex_a79_textile($textile).'</code></pre>';
    echo '</div>'."\n";
    // options:
    // rex_a79_textile($textile, true)             -> Textile restricted mode
    // rex_a79_textile($textile, false, 'html5') -> doctype html5
  }
}
else
{
  echo rex_warning('Dieses Modul ben&ouml;tigt das "textile" Addon!');
}
  echo '</div>'."\n";
?>