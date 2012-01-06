<? require 'header.php'; ?>
    
        <div class="alert-message warning" style="margin: 60px 0 0;">
          <a class="close" href="#">×</a>
          <p><strong>Recommended Security Improvement</strong> MySQL should only be accessible from your servers. Currently MySQL is accessible globally.</p>
          <div class="alert-actions">
            <a class="btn small primary" href="#">Configure Access</a>
            <a class="btn small" href="#">Learn More</a>
            <a class="btn small" href="#">Ignore this Warning</a>
          </div>
        </div>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" style="margin-top: 20px;">
        <h2>Firewall</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

        <table class="zebra-striped">
          <thead>
            <tr>
              <th style="width:8%;">Rule #</th>
              <th>Service</th>
              <th>Port</th>
              <th>Origin</th>
              <th>Protocol</th>
              <th>Device</th>
              <th style="width:20%;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>HTTP</td>
              <td>80</td>
              <td>any</td>
              <td>tcp</td>
              <td>all</td>
              <td>
                <a href="#" class="btn">copy</a>
                <a href="#" class="btn" style="margin-left: 8px;">delete</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>SSH</td>
              <td>2022</td>
              <td>any</td>
              <td>tcp</td>
              <td>all</td>
              <td>
                <a href="#" class="btn">copy</a>
                <a href="#" class="btn" style="margin-left: 8px;">delete</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>MySQL</td>
              <td>3306</td>
              <td>191.168.2.4</td>
              <td>tcp</td>
              <td>eth1</td>
              <td>
                <a href="#" class="btn">copy</a>
                <a href="#" class="btn" style="margin-left: 8px;">delete</a>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="text" class="small" /></td>
              <td><input type="text" class="small" /></td>
              <td><input type="text" class="small" /></td>
              <td><select class="small"><option>Both</option><option>tcp</option><option>udp</option></select></td>
              <td><select class="small"><option>All</option><option>eth0</option><option>eth1</option></select></td>
              <td>
                <a href="#" class="btn success">save</a>
              </td>
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

<? require 'footer.php'; ?>
