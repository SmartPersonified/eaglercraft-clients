<div class="footer">
  <p>breh moment</p>
</div>
<script src="/assets/clipboard.min.js"></script>
<script>

	// clipboard.js
	
 var clipboard = new ClipboardJS('.copyme');

      clipboard.on('success', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });

      clipboard.on('error', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });


	
</script>
</body>
</html>