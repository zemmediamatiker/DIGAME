<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.technische_anforderungen */
class __TwigTemplate_45d3a0bd178423e8c8c2664cf8b4f7da3e0577e38b80072c8784539342d6c505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Technische Anforderungen</h2>
<hr />
<p>Die Anwendung Digame stellt dokumentenbasierte Web Services zur Verfügung, über welche Daten gesucht und abgefragt werden können. Diese REST Web Services werden mit HTTPS als Nachrichtenprotokoll und Transportprotokoll realisiert. Für den Austausch der Nachrichten wird der XML oder JSON-Standard als Basis von REST verwendet.</p>
<p><br></p>
<h4>Protokolle</h4>
<p>Die Webservices werden als REST Services über HTTPS realisiert. Die Antworten werden als XML- oder JSON Daten (abhängig vom Http Request) zurückgegeben.</p>
<h4>Sicherheit</h4>
<p>Die Kommunikation zwischen dem Server und der Drittanwendung wird mit SSL 128 Bit verschlüsselt.</p>
<hr />
<h2>Assets erstellen</h2>
<p>Durch betätigen des Knopf Assets erzeugen (2) aus Abbildung 7: Funktionen Arbeitsbereich können neue Media Assets erstellt werden.
Ein Dateiexplorer Fenster wird geöffnet. Damit kann das entsprechende Originalfile gewählt werden aus welchem ein Media Asset erzeugt werden soll.
Es ist möglich mehrere Files anzuwählen und Media Assets daraus zu erstellen. Weiter ist es möglich direkt Media Assets aus Originalfiles zu erstellen, welche in einem ZIP zusammengefasst sind.</p>
<p><br></p>
";
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "progress.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 8: Fortschrittsanzeige beim Erstellen eines Assets.</h6>
<p><br></p>
<p>Der Balken (1) zeigt den gesamt Fortschritt des Prozess zur Erzeugung von Media Assets an.
Der Balken (2) zeigt den Fortschritt und den jeweiligen Namen eines einzelnen Files an.
Der Knopf (3) verfügt über zwei Funktionen. Während der Prozess zur Erzeugung von Media Assets läuft wird der Text Hintergrund angezeigt. Dies erlaubt dem Benutzer an bereits erzeugten Media Assets weiterzuarbeiten und den Erstellungsprozess im Hintergrund laufen zu lassen. Wird der Dialog im Vordergrund behalten, erscheint sobald der gesamte Prozess abgeschlossen ist und alle Media Assets erzeugt wurden der Text Schliessen auf dem Knopf (3). Der Benutzer kann den Knopf (3) betätigen und der Dialog verschwindet.</p>
<p>Folgende Formate werden in Digame unterstützt:</p>
<ul>
<li>Bilder: .jpg, .png, .tiff, .eps</li>
<li>Filme: .mp4, .mv4, .mov</li>
<li>Dokumente: .pdf, .doc</li>
<li>Archive: .zip</li>
</ul>
<p>Information: für eps-Dateien können keine Vorschaubilder automatisch erstellt werden. Das Vorschaubild muss manuell hinzugefügt werden.</p>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.technische_anforderungen";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  19 => 1,);
    }
}
