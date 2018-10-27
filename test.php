<?php

/**
 *  Ping URL - Freeware
 * (c) 2009 Scriptol.com
 * Requires a well-formed URL with HTTP protocol at start 
 */ 


function pingURL($url)
{

   if(strlen($url)<8){
      echo "Too short URL<br>";
      return 0;
   }
   if(strtolower(substr($url,0,7))!="http://"){
      echo "Missing protocol<br>";   
      return 0;
   }
   $l=strpos($url,"/",8);
   if($l<1)
   {
      $site=substr($url,7);
      $page="/";
   }
   else
   {
      $site=substr($url,7,$l-7);
      $page=substr($url,$l);
   }
   $fp=@fsockopen($site,80,$errno,$errstr,30);

   if($fp===false)
   {
      echo "Error $errstr ($errno) for $url viewed as site:$site page:$page", "\n";
      return 0;
   }
   $out="GET /$page HTTP/1.1\r\n";
   $out.="Host: $site\r\n";
   $out.="Connection: Close\r\n\r\n";

   fwrite($fp,$out);
   $content=fgets($fp);
   $code=trim(substr($content,9,4));
   fclose($fp);
   $icode=intval($code);
   if($icode===404)
   {
      $f=@fopen($url,"r");
      if($f!=false)
      {
         $cnt=@fread($f,128);
         if(strlen(trim($cnt))>0)
         {
            $icode=200;
         }
         fclose($f);
      }
   }
   switch($icode)
   {
      case 301: 
                echo "Redirect $url<br>";
                break;
      case 404: echo "Broken:  $url<br>";
                break;
      default:  echo "OK:      $url<br>";
                $icode = 200;
   }
   
   return $icode;
}

$page = $_POST["url"];
pingURL($page)

?>
