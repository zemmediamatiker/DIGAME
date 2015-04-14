<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/03.anwenderfunktionen/05.bearbeiten/02.mediaassets */
class __TwigTemplate_0a8df9cc70f04ca031fa454fddb29793ef9626c5604eda49efe634c672d41131 extends Twig_Template
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
        echo "<h2>Bearbeiten eines einzelnen Media Assets</h2>
<hr />
<p>Der Bearbeiten-Bereich (1) kann mit Hilfe der Maus auf- und zugeklappt werden. Die Grobinformationen zur Datei werden in (2) dargestellt dazu gehören:</p>
<ul>
<li>AssetID</li>
<li>Dateiname</li>
<li>Grösse der Datei in MB</li>
<li>Ist das Media Asset in Bearbeitung (Checked out)</li>
<li>Sprache des Assets (sofern definiert)</li>
<li>Titel</li>
</ul>
<p><br></p>
";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "single.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 20: Funktionen Bearbeiten.</h6>
<p><br></p>
<p>Werden mehrere Media Assets selektiert, sieht die Anzeige im Bearbeiten-Bereich folgendermassen aus.</p>
<p><br></p>
";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "multi.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 21: Mehrere Assets selektiert.</h6>
<p><br></p>
<p>Mit den Icons (3) werden Funktionen auf den selektierten Media Assets ausgeführt. Die Funktionen werden nachfolgend beschrieben.
Hinweis:
Die in Abbildung 22: Icons Bearbeiten aufgeführten Funktionen werden in der Applikation nie alle zusammen verfügbar sein. Es werden immer nur die Funktionen zur Verfügung stehen, welche mit dem Status des Media Assets korrespondieren. Fährt der Benutzer mit der Maus auf das jeweilige Icon wird eine Beschreibung angezeigt.</p>
<p><br></p>
";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "icons.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 22: Icons bearbeiten.</h6>
<p><br></p>
<hr />
<h3>Zugriffsordner / Rechte Publikation ändern (1)</h3>
<p>Ermöglicht es dem Benutzer ein Media Asset in eine andere „Ablage“ zu verschieben. Damit die Änderung durchgeführt werden kann, muss das Media Asset eingecheckt sein (siehe 3.7.1.5 Media Asset check in (5)). Nach dem der Benutzer mit der Maus auf das Icon geklickt hat erscheint Abbildung 23: Zugriffsstufe ändern. Mit der Änderung ändert sich auch die Sichtbarkeit eines Media Assets (siehe auch 3.5.4 Dateityp und Rechte Publikation).</p>
<p><br></p>
";
        // line 32
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "zugriffsstufe.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 23: Zugriffsstufe ändern</h6>
<p><br></p>
<hr />
<h3>Inhalt ersetzen (2)</h3>
<p>Mit dieser Funktion kann die Mediadatei ersetzt werden, also beispielsweis das effektive Bild. Die Funktion wird verwendet wenn die Mediadatei nachbearbeitet werden musste oder wenn die Mediadatei bei der Erstellung des Media Assets noch nicht verfügbar war.
<br>
Beispiele:
Mediadatei nicht verfügbar:
Der Benutzer erstellt das Media Asset mit einer Platzhalterdatei. Der Benutzer definiert die Metadaten und alle weiteren Daten über die er bereits verfügt. Sobald er die Mediadatei erhält kann er die Platzhalterdatei durch die effektive Datei ersetzen.
<br>
Mediadatei wurde nachbearbeitet:
Ein Bild muss mit dem Photoshop nachbearbeitet werden. Nach der Nachbearbeitung kann die aktuelle Mediadatei durch die bearbeitete Mediadatei ersetzt werden.</p>
<hr />
<h3>Media Asset herunterladen (3)</h3>
<p>Damit kann ein Media Asset mitsamt den Metadaten auf ein lokales Speichermedium kopiert werden. Die Mediadatei kann dann beispielsweise in Photoshop bearbeitet werden. Die Metadaten werden nur bei Bildern hinzugefügt bei Videos funktioniert dies aus technischen Gründen nicht. Die Metadaten werden, sofern von der jeweiligen Applikation erkannt, auch in anderen dritt Applikationen angezeigt.</p>
<hr />
<h3>Media Asset check out (4)</h3>
<p>Um ein Media Asset bearbeiten zu können muss dieses „ausgecheckt“ werden. Dies bedeutet so viel wie den Schreibschutz entfernen. Beim jeweiligen Media Asset wird danach der Name des Bearbeiters angezeigt. Der Benutzer kann nun Änderungen an dem Media Asset vornehmen. Das Media Asset kann jeweils nur von dem Benutzer bearbeitet werden von welchem es ausgecheckt wurde. Die Änderungen werden nur temporär übernommen und können mit (6) wieder rückgängig gemacht werden.</p>
<hr />
<h3>Media Asset check in (5)</h3>
<p>Hat der Benutzer alle seine Änderungen gemacht und geprüft, kann er das Media Asset „einchecken“. Alle Änderungen werden definitiv übernommen und der Schreibschutz wird wieder gesetzt.</p>
<hr />
<h3>Media Asset undo check out (6)</h3>
<p>Der Benutzer möchte alle seine Änderungen nicht übernehmen, jedoch weiss er nicht mehr genau was er geändert hat oder es sind so viele Änderungen, dass es zu lange dauert diese von Hand rückgängig zu machen. Der Benutzer kann „undo check out“ ausführen, damit wird der Stand des Media Assets auf den Stand vor dem check out des Benutzers zurückgesetzt. Alle Änderungen die der Benutzer gemacht hat gehen verloren.</p>
<hr />
<h3>Media Asset exportieren</h3>
<p>Der Benutzer kann eines oder mehrere selektierte Media Assets in ein Worddokument exportieren. Dabei werden das Vorschaubild sowie die erfassten Metadaten im Dokument aufgeführt.</p>
<p><br></p>
";
        // line 61
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 24: Beispiel eines exportierten Assets</h6>
<p><br></p>
<hr />
<h3>Medien Asset löschen (8)</h3>
<p>Der Benutzer kann ein Media Asset löschen. Das Media Asset wird jedoch nicht definitiv aus dem System entfernt sondern nur in den Papierkorb verschoben und mit einer entsprechenden Anzeige versehen Abbildung 25: Asset im Papierkorb. Um ein Media Asset im Papierkorb definitiv löschen zu können muss der Benutzer über die entsprechenden Zugriffsrechte verfügen. Diese Rechte haben pro Organisation meistens nur ein paar wenige Benutzer meistens sind dies die Administratoren oder die Benutzer die für das System verantwortlich sind.</p>
<p><br></p>
";
        // line 68
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 25: Asset im Papierkorb.</h6>
<p><br></p>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/pages/03.anwenderfunktionen/05.bearbeiten/02.mediaassets";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 68,  93 => 61,  61 => 32,  51 => 25,  41 => 18,  33 => 13,  19 => 1,);
    }
}
