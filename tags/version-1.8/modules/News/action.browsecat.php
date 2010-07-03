<?php

if (!isset($gCms)) exit;

$items = $this->get_categories($id,$params,$returnid);

#Display template
$this->smarty->assign('count', count($items));
$this->smarty->assign('cats', $items);

$template = 'browsecat'.$this->GetPreference('current_browsecat_template');
if (isset($params['browsecattemplate']))
  {
    $template = 'browsecat'.$params['browsecattemplate'];
  }
echo $this->ProcessTemplateFromDatabase($template);


?>
