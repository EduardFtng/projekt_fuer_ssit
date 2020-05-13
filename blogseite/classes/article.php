<?php

/* Class für BlogArtikel */
class Article
{
    // Eigenschaften:
    // BlogArtikel Id(int)
    public $id = null;

    // Wann der Artikel geschrieben wurde
    public $publDate = null;

    // Titel vom Artikel(string)
    public $title = null;

    // Inhalt vom Artikel
    public $content = null;


    // Konstrunktor zum Erzeugen von Artikel Objekt beim Üergeben eines Arrays
    // Die Array Felder werden dann als Werte den Attributen(Eigenschaften) zugewiesen 
    public function __construct($data = array())
    {
        if (isset($data['id'])) $this->id = (int) $data['id'];
        if (isset($data['publDate'])) $this->publDate = (int) $data['publDate'];
        if (isset($data['title'])) $this->title = (string) $data['title'];
        if (isset($data['content'])) $this->content = (string) $data['content'];
    }

    // Öffnet die Json Datei und gibt einen Array zurück
    public function openJson() {
        $data = file_get_contents("artikelliste.json");
        return(json_decode($data, true));
    }

    // Mit dieser statischer Methode wird ein Objekt erzeugt, der eine bestimmte Id zugewiesen bekommen hat
    public function getById($id)
    {
        $data_array = self::openJson();
        for($a=0; $a<count($data_array); $a++) {
            if ($data_array[$a]["id"] == $id) {
                return $artikel = new Article($data_array[$a]);
                break;
            }      
        }
    }

    // Methode für das Erzeugen von einem Array aus den übergebenen Werten in den Formen (nimmt Objekt? an, gibt ein array zurück)

    // Methode um neuen Array in die JSON datei einfügen ()
    public function addToJson($new_data_array) {
        $decoded_data = self::openJson();

        $data_to_append = $new_data_array;

        array_push($decoded_data, $data_to_append);

        file_put_contents("artikelliste.json", json_encode($decoded_data));
    }

    // Funktion um einen Artikel zu aktualisieren/korrigieren

    // Funktion um einen Artikel aus dem Array zu löschen

    // Printet den Inhalt der Json Datei als Array aus
    public function printJsonList() {
        $data = file_get_contents("artikelliste.json");
        print_r(json_decode($data, true));
    }
}
?>