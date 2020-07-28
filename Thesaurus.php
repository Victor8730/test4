<?php

class Thesaurus
{
    private $thesaurus;
    function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }
    public function getSynonyms($word)
    {
        if (array_key_exists($word, $this->thesaurus)) {
            return json_encode(array('word' => $word, 'synonyms' => $this->thesaurus[$word]));
        }else{
            return json_encode(array('word' => $word, 'synonyms' => []));
        }
    }
}
$thesaurus = new Thesaurus(
    array
    (
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ));

echo $thesaurus->getSynonyms("big");
echo $thesaurus->getSynonyms("agelast");
