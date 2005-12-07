<?php
header('Content-type: text/xml'); 

$inclfilename = '../include.php';

while(!@file_exists($inclfilename)){
            $inclfilename = "../".$inclfilename;
}
@require_once($inclfilename);


if (isset($_GET["id"]))
  $id = $_GET["id"];
else
  $id = 1;
  

$res = get_stylesheet($id);

//CLASS parser of a CSS file
require_once(dirname(__FILE__).'/cssparser.inc.php');

        $cssparser = new cssparser();
        
        // $html = array("ADDRESS","APPLET","AREA","A","BASE","BASEFONT","BIG","BLOCKQUOTE","BODY","BR","B", "CAPTION","CENTER","CITE","CODE","DD","DFN","DIR","DIV","DL","DT","EM","FONT","FORM","H1","H2","H3","H4","H5","H6","HEAD","HR","HTML","IMG","INPUT","ISINDEX","I","KBD","LINK","LI","MAP","MENU","META","OL","OPTION","PARAM","PRE","P","SAMP","SCRIPT","SELECT","SMALL","STRIKE","STRONG","STYLE","SUB","SUP","TABLE","TD","TEXTAREA","TH","TITLE","TR","TT","UL","U","VAR");
        // LIST of HTML tag that cannot have a custom CSS
        
//         $cssparser->Parse($this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/'.'fck_editorarea.css.php?id='.$templateid);

        $cssparser->ParseStr($res['stylesheet']);
        

        //+++++++++++++++++++++++++++++++++++++++++++++++
        // Construction of "fckstyles.xml" for FCKeditor
        //+++++++++++++++++++++++++++++++++++++++++++++++
        $styles  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>"."\n";
        $styles .= '<Styles>'."\n";
        
        //LOOP on ALL CSS styles
        foreach ($cssparser->css as $key => $value) {
          //SKIP CSS that are a combination of CSS
          //SKIP CSS that are binded on an EVENT
          if ((strpos($key, " ") === FALSE)&&(strpos($key, ":") === FALSE)){
              $pieces = explode(".", $key, 2);
    
              if (strcmp($pieces[0], "") != 0)
                continue;//$style_elem = $pieces[0];
              else 
                $style_elem = "span";
              
              if (strcmp($pieces[1], "") != 0)
                $style_class_name = "$pieces[1]";
              else 
                $style_class_name = $pieces[0];
    
              //SKIP custom CSS that are HTML tag
//               if ((in_array(strtoupper($style_elem), $html))&&(strcmp($style_class_name, $style_elem) == 0))
//                 continue;

              $styles .= '  <Style name="'.$style_class_name.'" element="'.$style_elem.'"';
              if (strcmp($style_class_name, $style_elem) != 0)
                $styles .= '>'."\n".'   <Attribute name="class" value="'.$style_class_name.'" />'."\n".'  </Style>'."\n";
            	else
                $styles .= '/>'."\n";
           }
          }
        
        $styles .= '</Styles>'."\n";
        //+++++++++++++++++++++++++++++++++++++++++++++++
        // END Construction of "fckstyles.xml" for FCKeditor
        //+++++++++++++++++++++++++++++++++++++++++++++++
        
 echo trim($styles);
?>
