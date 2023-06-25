<?php
    class Functions extends Connect
    {
        public function seflink( $str )
        {
            $find = array("/Ğ/","/Ü/","/Ş/","/İ/","/Ö/","/Ç/","/ğ/","/ü/","/ş/","/ı/","/ö/","/ç/");
            $degis = array("G","U","S","I","O","C","g","u","s","i","o","c");
            $str = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇğüşıöç]/"," ",$str);
            $str = preg_replace($find,$degis,$str);
            $str = preg_replace("/ +/"," ",$str);
            $str = preg_replace("/ /","-",$str);
            $str = preg_replace("/\s/","",$str);
            $str = strtolower($str);
            $str = preg_replace("/^-/","",$str);
            $str = preg_replace("/-$/","",$str);
            return $str;
        }

        public function trchar_toupper($text)
        {
            $search=array("ç","i","ı","ğ","ö","ş","ü");
            $replace=array("Ç","İ","I","Ğ","Ö","Ş","Ü");
            $text=str_replace($search,$replace,$text);
            $text=ucfirst($text);
            return $text;
        }

        public function degi( $texty )
        {
            $finder = array("Ğ","Ü","Ş","İ","Ö","Ç","ğ","ü","ş","ı","ö","ç");
            $degiser = array("G","U","S","i","O","C","g","u","s","i","o","c");
            $texty = preg_replace("/ +/"," ",$texty);
            $texty = preg_replace("/ /","-",$texty);
            $texty = preg_replace("/\s/","",$texty);
            $texty = preg_replace("/^-/","",$texty);
            $texty = preg_replace("/-$/","",$texty);
            $texty = str_replace( $finder, $degiser, $texty );
            return ucwords( $texty );
        }

        public function helper( $url, $time = 0 )
        {
            if( $time != 0 )
            {
                header("Refresh: $time; url=$url");
            }

            else
            {
                header("Location: $url");
            }
        }
    }
?>