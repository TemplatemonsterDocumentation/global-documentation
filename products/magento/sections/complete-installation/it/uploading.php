		
<h3>Caricamento e decompressione</h3>

<p>Per iniziare a lavorare con Magento bisognerà prima caricare i file sul server di hosting. Per farlo potrete utilizzare il vostro hosting file manager o un FTP manager esterno.</p>
            
<ol class="index-list">
  <li>Selezionare i file <strong>'unzip.php'</strong> e <strong>'fullpackage.zip'</strong> e caricateli sul vostro server(
   <a href="/help/how-upload-files-server-2.html" target="_blank">Come caricarei file sul server.</a>
    )</li>
  <li>Digitate il percorso del file <strong>'unzip.php'</strong> sul vostro server (http://your_domain_name/unzip.php) in your <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc.">nel browser.</abbr>.</li>
  <li>Dovreste visualizzare la seguente schermata:<figure class="img-polaroid"><img src="<?php echo $this->getImgPath('magento/complete-install-unzip-php.jpg') ?>" alt="Unzip.php initial screen."></figure></li>
  <li>Nella finestra <strong>'Choose your zip file'</strong> seleziona il file <strong>fullpackage.zip</strong> caricato.</li>
  <li>Nella casella <strong>'Unzip to'</strong> specifica la directory in cui volete estrarre i file.</li>
  <li>Clicca sul pulsante <strong>'Unzip'</strong> per proseguire.</li>
</ol>
          

          
<p class="alert alert-warning"><span>Assicurarsi di avere impostato i permessi corretti per la directory in cui avete deciso di estrarre i file. I permessi dovrebbero essere CHMOD 755 o 777 a seconda della configurazione del vostro server.</span></p>
		
