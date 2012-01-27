<script type="text/javascript">{literal}
$(function() {
   var thediv = '#theme_dropzone';

   // prevent browser default drag/drop handling
   $(document).bind('drop dragover', function(e) {
       // prevent default drag/drop stuff.
       e.preventDefault();
   });

   $(thediv+'_i').fileupload({
     dataType: 'json',
     dropZone: $(thediv),
     maxChunkSize: {/literal}{$max_chunksize},{literal}
  
     progressall: function(e,data) {
       var total = (data.loaded / data.total * 100).toFixed(0);
       $(thediv).progressbar({ value: parseInt(total) });
       $('.ui-progressbar-value').html(total+'%');
     },

     stop: function(e,data) {
       $(thediv).progressbar('destroy');
     }
   });
});
{/literal}</script>

<div id="theme_dropzone">
{$formstart}<input type="hidden" name="disable_buffer" value="1"/>
<input type="file" id="theme_dropzone_i" name="{$actionid}files[]" multiple style="display: none;"/>
{$prompt_dropfiles}
{$formend}
</div>
