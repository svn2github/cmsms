<?php
$lang['param_inline'] = 'Daca e adevarat, iesirea formularului de cautare va inlocui continutul original al etichetei &#039;search&#039; in blocul continut de origine.  Folositi acest parametru daca sablonul dumneavoastra are blocuri continut multiple, si nu doriti ca efectul cautarii sa va inlocuiasca blocul continut implicit.';
$lang['param_passthru'] = 'Trimite parametrii denumiti catre modulele specificate.  Formatul fiecarui parametru este: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; ex.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Limiteaza rezultatele cautarii la valorile indexate din lista de module(separate prin virgula) specificata';
$lang['searchsubmit'] = 'Trimite';
$lang['search'] = 'Cauta';
$lang['param_submit'] = 'Text pentru a fi plasat in butonul de trimitere';
$lang['param_searchtext'] = 'Text pentru a fi plasat in casuta de cautare';
$lang['prompt_searchtext'] = 'Text cautare implicit';
$lang['param_resultpage'] = 'Pagina unde for fi afisate rezultatele cautarii.  Aceasta poate fi fie un alias de pagina fie un id.  Se foloseste pentru a permite ca rezultatele cautarii sa fie afisate intr-un sablon diferit de formularul de cautare';
$lang['description'] = 'Modul pentru cautarea in continutul site-ului si a altor module.';
$lang['reindexallcontent'] = 'Reindexeaza tot continutul';
$lang['reindexcomplete'] = 'Reindexare completa!';
$lang['stopwords'] = 'Opreste cuvintele';
$lang['searchresultsfor'] = 'Rezultatele cautarii pentru';
$lang['noresultsfound'] = 'Nici un rezultat gasit!';
$lang['timetaken'] = 'Timpul scurs';
$lang['usestemming'] = 'Foloseste stemming-ul cuvintelor (doar in Engleza)';
$lang['searchtemplate'] = 'Sablon cautare';
$lang['resulttemplate'] = 'Sablon rezultate';
$lang['submit'] = 'Trimite';
$lang['sysdefaults'] = 'Restaureaza implicit';
$lang['searchtemplateupdated'] = 'Sablon cautare actualizat';
$lang['resulttemplateupdated'] = 'Sablon rezultate actualizat';
$lang['restoretodefaultsmsg'] = 'Aceasta operatie va restaura continutul sablonului la setarile sistem implicite.  Sunteti sigur(a) ca doriti sa continuati?';
$lang['options'] = 'Optiuni';
$lang['eventdesc-SearchInitiated'] = 'Trimis cand este initiata o cautare.';
$lang['eventdesc-SearchCompleted'] = 'Trimis cand este finalizata o cautare.';
$lang['eventdesc-SearchItemAdded'] = 'Trimis cand un nou obiect este indexat.';
$lang['eventdesc-SearchItemDeleted'] = 'Trimis cand un obiect este sters din index.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Trimis cand toate obiectele sunt sterse din index.';
$lang['eventhelp-SearchInitiated'] = '<p>Trimis cand este initiata o cautare.</p>
<h4>Parametri</h4>
<ol>
<li>Textul care a fost cautat.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Trimis cand este finalizata o cautare.</p>
<h4>Parametri</h4>
<ol>
<li>Textul care a fost cautat.</li>
<li>Sir-ul complet al rezultatelor.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Trimis cand un nou obiect este indexat.</p>
<h4>Parametri</h4>
<ol>
<li>Numele modulului.</li>
<li>Id-ul obiectului.</li>
<li>Atribut aditional.</li>
<li>Continutul pentru index si adaugare.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Trimis cand un obiect este sters din index.</p>
<h4>Parametri</h4>
<ol>
<li>Numele modulului.</li>
<li>Id-ul obiectului.</li>
<li>Atribut aditional.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Trimis cand toate obiectele sunt sterse din index.</p>
<h4>Parametri</h4>
<ul>
<li>Fara</li>
</ul>
';
$lang['help'] = '<h3>What does this do?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['changelog'] = '<ul>
<li>1.1 - Original release</li>
<li>1.2 - April 2007 (calguy1000)
  <p>Added the ability to limit results to certain modules,and added the ability to pass parameters through to the various modules to allow different formatting of the output.</p>
  <p>Modified so that the search module could be used in non default content blocks.</p>
</li>
<li>1.3 - May 2007 (calguy1000)
  <p>Adds calls to SetParameterType</p>
</li>
</ul>';
$lang['utma'] = '156861353.1422824650.1193244506.1193628758.1193779823.8';
$lang['utmb'] = '156861353';
$lang['utmz'] = '156861353.1193251702.3.2.utmccn=(referral)|utmcsr=localhost|utmcct=/cmsmadesimple/admin/moduleinterface.php|utmcmd=referral';
$lang['utmc'] = '156861353';
?>