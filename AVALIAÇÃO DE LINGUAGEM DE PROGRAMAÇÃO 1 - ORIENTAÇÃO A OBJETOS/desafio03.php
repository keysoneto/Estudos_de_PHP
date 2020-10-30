<?php
class tags
{
    private function separalinhas($entrada = array())
    {
        $arrLinhas = array();
        for ($i = 0; $i < count($entrada); $i = $i + 3) {
            array_push($arrLinhas, array($entrada[$i], $entrada[$i + 1], $entrada[$i + 2]));
        }
        return $arrLinhas;
    }
    private function sepTags($entrada = array())
    {
        $arrLinhas = array();
        foreach ($entrada as $infoTAG) {
            $tags = array();            
            for($i=0;$i<strlen($infoTAG[2]);$i++){
                if(substr($infoTAG[2],$i,1)=='<'){
                    array_push($tags, '<');
                } elseif(substr($infoTAG[2],$i,1)=='>'){
                    $tags[count($tags)-1]=str_replace(strtolower($infoTAG[0]), strtolower($infoTAG[1]), strtolower($tags[count($tags)-1])).'>';
                    array_push($tags, '');
                } else {
                    if(count($tags)==0){
                        array_push($tags, '');
                    }
                    $tags[count($tags)-1].=substr($infoTAG[2],$i,1);
                }
            }
            array_push($arrLinhas, implode('',$tags));
        }
        return $arrLinhas;
    }
    private function ajustaTags($entrada = array())
    {
        $arrLinhas = array();
        $arrLinhas = $this->sepTags($entrada);
        return $arrLinhas;
    }

    public function imprimeTags($entrada = array())
    {
        return $this->ajustaTags($this->separalinhas($entrada));
    }
}

$des03 = new tags();

$info = array();
array_push($info, 'BODY');
array_push($info, '10');
array_push($info, '<><BODY garbage>body</BODY>');
array_push($info, 'aBc');
array_push($info, '923');
array_push($info, '<dont replacethis>abcabc<abcabcde>');
array_push($info, 'table');
array_push($info, '1');
array_push($info, '<ta>bLe<TaBlewidth=100></table></ta>');
array_push($info, 'replace');
array_push($info, '323');
array_push($info, 'nothing inside');
array_push($info, 'HI');
array_push($info, '667');
array_push($info, '92<HI=/><z==//HIb><cHIhi>');
array_push($info, 'a');
array_push($info, '23');
array_push($info, '<a B c a>');
array_push($info, 'b');
array_push($info, '2');
array_push($info, "<b b abc ab c> Mangojata");

$resTAGS = $des03->imprimeTags($info);
print_r($resTAGS);
?>