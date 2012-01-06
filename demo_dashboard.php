<? require 'header.php'; ?>

      <div class="hero-unit" style="margin-top: 80px;">

        <h2>Security Dashboard</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

        <style type="text/css">
          #servers .alert-message { cursor: pointer; }
        </style>
        <div id="servers" class="row" style="margin-top: 50px;">
          <div class="span7 columns">
            <div class="alert-message success">
              <strong>dev-aws</strong>
              <span style="float: right;">secure - checked at 5:12pm</span>
            </div>
            <div class="alert-message error">
              <strong>mysql-prod-1</strong>
              <span style="float: right;"><strong>vulnerable!</strong></span>
            </div>
            <div class="alert-message success">
              <strong>mysql-slave-1</strong>
              <span style="float: right;">secure - checked at 5:05pm</span>
            </div>
            <div class="alert-message warning">
              <strong>load-balancer-1</strong>
              <span style="float: right;">3 notices - checked at 5:08pm</span>
            </div>
          </div>
          <div class="span7 columns">
            <div class="alert-message warning">
              <strong>web-prod-1</strong>
              <span style="float: right;">5 notices - checked at 5:12pm</span>
            </div>
            <div class="alert-message warning">
              <strong>web-prod-2</strong>
              <span style="float: right;">2 notices - checked at 5:11pm</span>
            </div>
            <div class="alert-message error">
              <strong>web-prod-3</strong>
              <span style="float: right;"><strong>vulnerable!</strong></span>
            </div>
          </div>
        </div>

        <h2>Security Audits</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

        <style type="text/css">
          ul#addl_protections li:before { content: '\002713\0000a0\0000a0'; }
          ul#addl_protections li { list-style-type: none; margin-left: -20px; line-height: 2; }
        </style>
        <ul id="addl_protections">
          <li>A rootkit analysis was performed on all 7 servers. No anomalies were detected.</li>
          <li>SSH rate limiting. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
          <li>Extensive logging. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
          <li>"Default Deny" policy. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
        </ul>

      </div>

<? require 'footer.php'; ?>
