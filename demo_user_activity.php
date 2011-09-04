<? require 'header.php'; ?>

        <div class="alert-message success" style="margin: 80px 0 -20px;">
          <a class="close" href="#">×</a>
          <p><strong>Good news!</strong> Lockd has thwarted 391 attacks on your server in the last week!</p>
        </div>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h2>User Activity</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

        <table class="zebra-striped">
          <thead>
            <tr>
              <th>User &amp; Server</th>
              <th>IP Address</th>
              <th>Location</th>
              <th># of Connections</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>todd @ dev-aws</td>
              <td>123.129.21.31</td>
              <td>Chicago, USA</td>
              <td>4 connections</td>
              <td>since 12:30pm GMT</td>
            </tr>
            <tr>
              <td>bob @ prod-web-1</td>
              <td>28.189.23.1</td>
              <td>Seattle, USA</td>
              <td>1 connection</td>
              <td>1h 30m</td>
            </tr>
            <tr>
              <td>jason @ dev-aws</td>
              <td>82.100.19.92</td>
              <td>Boston, USA</td>
              <td>4 connections</td>
              <td>48m</td>
            </tr>
            <tr>
              <td>todd @ prod-mysql-2</td>
              <td>123.129.21.31</td>
              <td>Chicago, USA</td>
              <td>2 connections</td>
              <td>2h 03m</td>
            </tr>
          </tbody>
        </table>
        <a class="btn" href="#">view more activity &raquo;</a>

        <br /> <br />
        <h2>Automatically Banned IP Addresses</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

        <table class="zebra-striped">
          <thead>
            <tr>
              <th>IP Address</th>
              <th>Location</th>
              <th>Reason</th>
              <th>Timestamp</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>128.21.29.81</td>
              <td>Bucharest, Romania</td>
              <td>Attempted NMAP port scan [hit 17 ports]</td>
              <td>Aug 30, 2011 8:23pm GMT</td>
            </tr>
          </tbody>
            <tr>
              <td>99.11.84.49</td>
              <td>Istanbul, Turkey</td>
              <td>Bruteforce SSH attack [banned after 3 attempts]</td>
              <td>Aug 30, 2011 4:19pm GMT</td>
            </tr>
          </tbody>
        </table>

        <a class="btn" href="#">view all 259 banned IP Addresses &raquo;</a>

      </div>

<? require 'footer.php'; ?>
