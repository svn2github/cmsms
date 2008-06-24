<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title>{$entry->title}</title>
</head>
<body>
<pre>
Categories: {$entry->category}
      Date: {$entry->postdate|cms_date_format}
     Title: {$entry->title}
</pre>

{if $entry->summary}

{$entry->summary}
<br />
<br />

{/if}

{$entry->content}

</body>
</html>
