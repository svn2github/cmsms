<?php
if (!isset($gCms)) exit;
$this->CheckPermission('dummy permission'); //Redirect if not logged in

if (isset($params['reindex']))
  {
    $this->Reindex();
    echo '<div class="pagemcontainer"><p class="pagemessage">'.$this->Lang('reindexcomplete').'</p></div>';
  }
else if (isset($params['clearwordcount']))
  {
    $query = 'DELETE FROM '.cms_db_prefix().'module_search_words';
    $db->Execute($query);
  }
else if (isset($params['exportcsv']) )
  {
    $query = 'SELECT * FROM '.cms_db_prefix().'module_search_words ORDER BY count DESC';
    $data = $db->GetArray($query);
    if( is_array($data) )
      {
	header('Content-Description: File Transfer');
	header('Content-Type: application/force-download');
	header('Content-Disposition: attachment; filename=search.csv');
	while(@ob_end_clean());

	$output = '';
	for( $i = 0; $i < count($data); $i++ )
	  {
	    $output .= "\"{$data[$i]['word']}\",{$data[$i]['count']}\n";
	  }
	echo $output;
	exit();
      }
    
  }
else if (isset($params['submit']))
   {
     $this->SetPreference('stopwords', $params['stopwords']);
     $this->SetPreference('searchtext', $params['searchtext']);
	
     $curval = $this->GetPreference('usestemming', 'false');
     $newval = 'false';
     if (isset($params['usestemming']))
       $newval = 'true';

     if ($newval != $curval)
       {
	 $this->SetPreference('usestemming', $newval);
	 $this->Reindex();
	 echo '<div class="pagemcontainer"><p class="pagemessage">'.$this->Lang('reindexcomplete').'</p></div>';
       }

     $newval = 'false';
     if (isset($params['savephrases']))
       $newval = 'true';
     $this->SetPreference('savephrases',$newval);

	$newval = 'false';
	if (isset($params['alpharesults']))
		$newval = 'true';
	$this->SetPreference('alpharesults', $newval);
   }


#The tabs
echo $this->StartTabHeaders();
if (FALSE == empty($params['active_tab']))
  {
    $tab = $params['active_tab'];
  } else {
  $tab = '';
 }

if ($this->CheckPermission('Modify Site Preferences'))
  {
    echo $this->SetTabHeader('statistics',$this->Lang('statistics'), 
			     ('statistics' == $tab)?true:false);
    echo $this->SetTabHeader('options',$this->Lang('options'), ('options' == $tab)?true:false);
  }

if ($this->CheckPermission('Modify Templates'))
  {
    echo $this->SetTabHeader('search_template',$this->Lang('searchtemplate'), ('search_template' == $tab)?true:false);
    echo $this->SetTabHeader('result_template',$this->Lang('resulttemplate'), ('result_template' == $tab)?true:false);
  }

echo $this->EndTabHeaders();



#The content of the tabs
echo $this->StartTabContent();

if ($this->CheckPermission('Modify Site Preferences'))
  {
    echo $this->StartTab('statistics',$params);
    include(dirname(__FILE__).'/function.admin_statistics_tab.php');
    echo $this->EndTab();

    echo $this->StartTab('options', $params);
    echo $this->CreateFormStart($id, 'defaultadmin');

    echo $this->CreateInputSubmit($id, 'reindex', $this->Lang('reindexallcontent'));

    echo '<hr />';

    echo '<p>'.$this->Lang('stopwords').':<br />'.$this->CreateTextArea(false, $id, str_replace(array("\r", "\n"), '', $this->GetPreference('stopwords', $this->DefaultStopWords())), 'stopwords', '', '', '', '', '50', '6').'</p>';

    echo '<p>'.$this->Lang('usestemming').':&nbsp;' . $this->CreateInputCheckbox($id, 'usestemming', 'true', $this->GetPreference('usestemming', 'false')) . '</p>';

    echo '<p>'.$this->Lang('prompt_searchtext').':&nbsp;' . $this->CreateInputText($id,'searchtext',
									     $this->GetPreference('searchtext','')).'</p>';

    echo '<p>'.$this->Lang('prompt_savephrases').':&nbsp;' . $this->CreateInputCheckbox($id,'savephrases','true',$this->GetPreference('savephrases','false')).'</p>';

    echo '<p>'.$this->Lang('prompt_alpharesults').':&nbsp;' . $this->CreateInputCheckbox($id,'alpharesults','true',$this->GetPreference('alpharesults','false')).'</p>';

    echo $this->CreateInputSubmit($id, 'submit', $this->Lang('submit'));

    echo $this->CreateFormEnd();
    echo $this->EndTab();
  }

if( $this->CheckPermission( 'Modify Templates' ) )
  {
    echo $this->StartTab('search_template', $params);
	
    echo $this->CreateFormStart($id, 'updatesearchtemplate');
	
    echo '<p>'.$this->CreateTextArea(false, $id, $this->GetTemplate('displaysearch'), 'templatecontent', 'pagebigtextarea').'</p>';
	
    echo $this->CreateInputSubmit($id, 'submitbutton', $this->Lang('submit'));
    echo $this->CreateInputSubmit($id, 'defaultsbutton', $this->Lang('sysdefaults'), '', '', $this->Lang('restoretodefaultsmsg'));
	
    echo $this->CreateFormEnd();
	
    echo $this->EndTab();
	
    echo $this->StartTab('result_template', $params);
	
    echo $this->CreateFormStart($id, 'updateresulttemplate');
	
    echo '<p>'.$this->CreateTextArea(false, $id, $this->GetTemplate('displayresult'), 'templatecontent2', 'pagebigtextarea').'</p>';
	
    echo $this->CreateInputSubmit($id, 'submitbutton', $this->Lang('submit'));
    echo $this->CreateInputSubmit($id, 'defaultsbutton', $this->Lang('sysdefaults'), '', '', $this->Lang('restoretodefaultsmsg'));
	
    echo $this->CreateFormEnd();
	
    echo $this->EndTab();
  }

echo $this->EndTabContent();

?>
