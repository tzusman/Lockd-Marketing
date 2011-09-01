<? require 'header.php'; ?>

        <div class="alert-message warning" style="margin: 80px 0 -20px;">
          <a class="close" href="#">×</a>
          <p><strong>Vulnerability Detected!</strong> Memcached is accessible to the global internet. You should restrict access to only your servers.</p>
          <div class="alert-actions">
            <a class="btn small" href="#">Configure Access</a> <a class="btn small" href="#">Ignore this warning</a>
          </div>
        </div>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h2>Program Manager</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

        <table class="zebra-striped">
          <thead>
            <tr>
              <th>Service</th>
              <th>Port</th>
              <th>IP Addresses</th>
              <th>Firewall Status</th>
              <th style="width: 20%;">Startup Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Postfix</td>
              <td>25</td>
              <td>localhost</td>
              <td><a class="btn success">secure</a></td>
              <td><a href="#" class="boot btn success">started on boot</a></td>
            </tr>
            <tr>
              <td>Nginx</td>
              <td>80</td>
              <td>All IPv4</td>
              <td><a class="btn">public</a></td>
              <td><a href="#" class="boot btn success">started on boot</a></td>
            </tr>
            <tr>
              <td>Nginx</td>
              <td>443</td>
              <td>All IPv4</td>
              <td><a class="btn">public</a></td>
              <td><a href="#" class="boot btn success">started on boot</a></td>
            </tr>
            <tr>
              <td>SSH</td>
              <td>2022</td>
              <td>All IPv4</td>
              <td><a class="btn">public</a></td>
              <td><a href="#" class="boot btn success">started on boot</a></td>
            </tr>
            <tr>
              <td>MySQL</td>
              <td>3306</td>
              <td>172.20.1.1</td>
              <td><a class="btn info">semi-secure</a></td>
              <td><a href="#" class="boot btn danger">is not started</a></td>
            </tr>
            <tr>
              <td>Memcached</td>
              <td>11211</td>
              <td>All IPv4</td>
              <td><a class="btn danger">vulnerable!</a></td>
              <td><a href="#" class="boot btn success">started on boot</a></td>
            </tr>
          </tbody>
        </table>

        <br /> <br />
        <h2>Additional Protections</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

        <style type="text/css">
          ul#addl_protections li:before { content: '\002713\0000a0\0000a0'; }
          ul#addl_protections li { list-style-type: none; margin-left: -20px; line-height: 2; }
        </style>
        <ul id="addl_protections">
          <li>Kernel protections. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
          <li>SSH rate limiting. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
          <li>Extensive logging. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
          <li>"Default Deny" policy. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>

      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script>
      $('.boot').hover( function(){
        if ( $(this).hasClass('success') )
          $(this).text( 'don\'t start on boot' );
        else
          $(this).text( 'start on boot' );
        $(this).toggleClass( 'success' ).toggleClass( 'danger' );
      }, function(){
        if ( $(this).hasClass('success') )
          $(this).text( 'is not started' );
        else
          $(this).text( 'started on boot' );
        $(this).toggleClass( 'success' ).toggleClass( 'danger' );
      } );
    </script>

<? require 'footer.php'; ?>
