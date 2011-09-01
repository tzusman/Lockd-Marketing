      
      <footer>
        <? if ( ! preg_match('#demo_#',$_SERVER['REQUEST_URI']) ): ?>
        <a class="btn success" href="/demo_dashboard.php" style="float:right">View Demo</a>
        <? endif; ?>
        <p>&copy; Lockd 2011</p>
      </footer>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $('#btnDropdown').click( function(){
          $(this).next().toggle();
        } );
      });
    </script>

  </body>
</html>
