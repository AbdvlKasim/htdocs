<p> Dislpay_errors er en veldig nyttig funksjon hvis du vil finne den kjappeste veien til å finne errors og warnings. 
den vil vise fram alle syntax og parse errors so ikke blir vist fram </p>

<p> Document_root er en mappe hvor PHP skript kjører. Når du installerer en script, må webutviklere vite hva document rooten er. 
    for å finne denne kan man bruke en enkel php script som heter getenv() som er en snarvei på apache servers til document rooten. 
    Det er basically den adressen du ser øverst i vinduet. altså hvor du begynte først og hvor du navigerte deg fram etter det</p>

<p> Det et nyttig med phpinfo fordi du får en klar og detajert oversikt over de ulike funksjonene som display_errors og document root.
    du kan se om den er aktivert altså om det står "on". Samtidig får du sett den lokale og master variabelen. 
    Du får en klar oversikt hva du har aktivert på pcen din,  php versjonen, apache environment osv. </p>