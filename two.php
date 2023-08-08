<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>FundMyStartup</title>
  <link rel="stylesheet" href="stylo.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>

      <ul>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Setup</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-address-card"></i>
          <span class="nav-item">Info</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-project-diagram"></i>
          <span class="nav-item">Features</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Contact</span>
        </a></li>

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Duniya Dekho</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="img/menu1.png">
          <h4>Shubhangi</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <a href="https://www.linkedin.com/in/shubhangi-bhattacharya-94136a200" class="button">Profile</a>
        </div>
        <div class="card">
            <img src="img/menu2.png">
          <h4>Shubhangi\'s Best Friend</h4>
          <p>Progammer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>82%</span></td>
                <td><span>85%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <a href="https://www.linkedin.com/in/shubhangi-bhattacharya-94136a200" class="button">Profile</a>
        </div>
        <div class="card">
            <img src="img/menu3.png">
          <h4>Shubhangi\'s Best Friend 2</h4>
          <p>tester</p>
          <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <a href="https://www.linkedin.com/in/shubhangi-bhattacharya-94136a200" class="button">Profile</a>
        </div>
        <div class="card">
            <img src="img/menu1.png">
          <h4>Salina micheal</h4>
          <p>Ui designer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>82%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div>
          <a href="https://www.linkedin.com/in/shubhangi-bhattacharya-94136a200" class="button">Profile</a>
        </div>
      </div>
<br>
          <h1>Startup Details</h1>
          <table class="table">
            <thead>
              <tr>

                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Funding</td>
                <td><button onclick="myFunction()">View</button>
                  <div id="myDIV">
                    <br>
                    Funding
DuniaDekho has raised a total of $5.8B in funding over 26 rounds. 
Their latest funding was raised on Oct 27, 2022 from a Debt Financing round.
BYJU’S is funded by 58 investors. 
<br>
Aakash Educational Services and Qatar Investment Authority are the most recent investors.
<br>
BYJU’S has acquired 17 organizations. 
<br>
Their most recent acquisition was Icebox Diamonds inc on Nov 22, 2022. 
<br>
They acquired Icebox Diamonds inc for $200M.
                  </div>
                </td>
              </tr>
                <td>Employee</td>
                <td><button onclick="myFunctions()">View</button>
                  <div id="myDIVs">
                    <br>
                    BYJU’S has 26 current employee profiles, including Chief Operating Officer Mrinal Mohit.
                    <br>
                    BYJU’S has 3 board members and advisors, including GV Ravishankar.
                  </div>
                </td>
              </tr>
              <tr>
                <td>Technology</td>
                <td><button onclick="myFunctionss()">View</button>
                <div id="myDIVss">
                  <br>
                  BYJU’S uses 45 technology products and services including HTML5, jQuery, and Google Analytics, according to G2 Stack.
                  <br>
BYJU’S is actively using 65 technologies for its website, according to BuiltWith. 
<br>
These include LetsEncrypt, Domain Not Resolving, and nginx.
                </div>
                </td>
              </tr>
              <tr>
                <td>Summary</td>
                <td><button onclick="myFunctionsss()">View</button>
                  <div id="myDIVsss">
                    <br>
                    BYJU\'S is an educational technology company that develops personalized learning programs for K-12 students.
                    <br>
                    Bangalore, Karnataka, India.
                    <br>
                    10001+
                    <br>
                    Debt Financing
                    <br>
                    Private
                    <br>
                    www.byjus.com
                    <br>
                    1,443
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
    
    <script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function myFunctions() {
      var y = document.getElementById("myDIVs");
      if (y.style.display === "none") {
        y.style.display = "block";
      } else {
        y.style.display = "none";
      }
    }

    function myFunctionss() {
      var y = document.getElementById("myDIVss");
      if (y.style.display === "none") {
        y.style.display = "block";
      } else {
        y.style.display = "none";
      }
    }

    
    function myFunctionsss() {
      var y = document.getElementById("myDIVsss");
      if (y.style.display === "none") {
        y.style.display = "block";
      } else {
        y.style.display = "none";
      }
    }
    </script>
</body>
</html>

';
?>