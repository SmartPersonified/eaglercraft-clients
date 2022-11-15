<div class="footer">
 <marquee scrollamount="15" > <p>this site is made and mantained by <a href="https://github.com/Paragramex/" style="color:red;"> Paragram</a> <i class="fa fa-copyright" aria-hidden="true"></i> 
 2022</p></marquee>
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