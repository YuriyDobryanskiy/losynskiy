<?php
function ReadText($t){
	$lines = file($t);
	return $lines;
}

function TextExplode($a){
	$pieces = explode("|", $a);
	return $pieces;
}

function TextDecode($a){
	$text = trim($a);
	$text = strip_tags($text, "<br>");
	return $text;
}

function DelSpace($a){
	$text = str_replace(" ","",$a);	
	return $text;
}

function object2file($value, $filename)
{
    $str_value = serialize($value);
    
    $f = fopen($filename, 'w+');
    fwrite($f, $str_value);
    fclose($f);
}

function object_from_file($filename)
{
    $file = file_get_contents($filename);
    $value = unserialize($file);
    return $value;
}


function checkImage($image){
	$url = "/^(img\/)/";
	$result = preg_match($url, $image);
	return($result);
}








function del_tags($document)
    {
    $search = array ("'<div>'",
                "'</div>'",
                "'<div'",
                "'<span'",
                "'style'",
                "'<p>'",
                "'<p'"
                );
    $replace = array ("", 
                  "",
                  "", 
                  "", 
                  "", 
                  "", 
                  ""
                  );  
    $document = preg_replace($search, $replace, $document);
    return $document;
}

function close_tags($content)
    {
        $position = 0;
        $open_tags = array();
        $ignored_tags = array('br', 'hr', 'img');
 
        while (($position = strpos($content, '<', $position)) !== FALSE)
        {
            if (preg_match("|^<(/?)([a-z\d]+)\b[^>]*>|i", substr($content, $position), $match))
            {
                $tag = strtolower($match[2]);
                //игнорируем все одиночные теги
                if (in_array($tag, $ignored_tags) == FALSE)
                {
                    //тег открыт
                    if (isset($match[1]) AND $match[1] == '')
                    {
                        if (isset($open_tags[$tag]))
                            $open_tags[$tag]++;
                        else
                            $open_tags[$tag] = 1;
                    }
                    //тег закрыт
                    if (isset($match[1]) AND $match[1] == '/')
                    {
                        if (isset($open_tags[$tag]))
                            $open_tags[$tag]--;
                    }
                }
                $position += strlen($match[0]);
            }
            else
                $position++;
        }
        foreach ($open_tags as $tag => $count_not_closed)
        {
            $content .= str_repeat("</{$tag}>", $count_not_closed);
        }
 
        return $content;
    }
?>