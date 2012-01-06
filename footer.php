      
      <footer>
        <? if ( ! preg_match('#demo_#',$_SERVER['REQUEST_URI']) ): ?>
        <a class="btn success" href="/demo_dashboard.php" style="float:right">View Demo</a>
        <? endif; ?>
        <p>&copy; Fortress.io 2011</p>
      </footer>

    </div> <!-- /container -->

    <br />

    <script src="jquery.min.js"></script>
    <script>
      $(function(){
        $('#btnDropdown').click( function(){
          $(this).next().toggle();
        } );
      });
    </script>
    <? if ( isset($js) && $js ): ?>
    <script src="js/<?= str_replace('.php','.js',basename($_SERVER['PHP_SELF'])); ?>"></script>
    <? endif; ?>

  </body>
</html>
