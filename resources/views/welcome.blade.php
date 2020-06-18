<!DOCTYPE html>
<html class="no-js ">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SPH : PHP Assignment</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/common/favicon.png">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <!-- if lt IE 10p.browserupgrade You are using an strong outdated browser. Please a(href='http://browsehappy.com/') upgrade your browser to improve your experience.
    -->
    
    <div id="overlayer">
      <div class="ball-wrap">
        <div class="bounceball"></div>
      </div>
    </div>
    <div class="wrap fluid-container">
      <main class="main">
        <div class="page-content">
          <div class="section-container"> 
            <!-- Page Header - START-->
            <div class="comp comp-page-short-header inverse" id="ch-1">
              <div class="comp-holder">
                <div class="hero-image-bg" style="background-color:#1c1c45">
                  <div class="container">
                    <div class="hero-header-text">
                      <h1>Pollutant Standards Index (PSI)</h1>
                      <p class="subtext"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page Header - END-->
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-container account">  
                  <div class="container account-container">  
                    <div class="row"> 
                      <div class="col-md-9 account-left">
                        <p class="option-label">Keep track of PSI</p>
                        <div class="account-body"> 
                          <div class="table-responsive-sm account-table">
                            <table class="table">
                              <thead>
                                <tr>
                                  <td>PSI 24 Hourly</td>
                                  <td>PM10 24 Hourly</td>
                                  <td>PM2.5 24 Hourly</td>
                                  <td>CO Sub index</td>
                                  <td>O3 Sub Index</td>
                                  <td>S)2 Sub Index</td>
                                </tr>
                              </thead>
                              <tbody id="psiTableBody">
                                <tr class="alert">
                                  <td>National</td>
                                  <td>26</td>
                                  <td>17</td>
                                  <td>100</td>
                                  <td>80</td>
                                  <td>15</td>
                                </tr>
                                <tr> 
                                  <td>North</td>
                                  <td>26</td>
                                  <td>17</td>
                                  <td>100</td>
                                  <td>80</td>
                                  <td>15</td>
                                </tr>
                                <tr> 
                                  <td>South</td>
                                  <td>26</td>
                                  <td>17</td>
                                  <td>100</td>
                                  <td>80</td>
                                  <td>15</td>
                                </tr>
                                <tr> 
                                  <td>East</td>
                                  <td>26</td>
                                  <td>17</td>
                                  <td>100</td>
                                  <td>80</td>
                                  <td>15</td>
                                </tr>
                                <tr> 
                                  <td>West</td>
                                  <td>26</td>
                                  <td>17</td>
                                  <td>100</td>
                                  <td>80</td>
                                  <td>15</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 account-right">
                        <!-- Breadcrumbs - START-->
                        <div class="comp comp-account-sidebar" id="ac-1">
                          <div class="comp-holder">
                            <div class="account-sidebar">
                              <div class="account-side-nav">
                                <ul>
                                  <li> <a class="bold" href="#">Air Temperature</a>
                                    <ul class="child-item">
                                      <li><b>Station Name</b>
                                      </li>
                                      <li>Ang Mo Kio Avenue 5
                                      </li>
                                      <li><b>Time Stamp</b>
                                      </li>
                                      <li id="tempTime">2020 06 08 01:02:00
                                      </li>
                                      <li><b>Air Temperature</b>
                                      </li>
                                      <li id="tempDegree">30 Degree</a>
                                      </li>
                                    </ul>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Breadcrumbs - END-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <footer class="fluid-container"> 
      <div class="container">
        <div class="row">
          <div class="col-9 col newspaper-links">
            <div class="copy"><span>Copyright © 2020 Singapore Press Holdings Ltd. Co. Regn. No. 198402868E. All Rights Reserved. <br></span>1000 Toa Payoh North Annexe Level 6, News Centre Singapore 318994</div>
          </div>
        </div>
      </div>
    </footer>
    <div class="helper-box-overlay"> </div>
    <div class="sph-lightbox" id="common">
      <div class="overlay"></div>
      <div class="custom-ligthbox">
        <div class="close-lightbox"> <img src="images/icons/close-cross-white.svg"><span>Close</span></div>
        <div class="lightbox-content">
          <div class="lightbox-body" id="lbody"></div>
          <div id="error"></div>
        </div>
      </div>
    </div>
    <script src="js/app.js"> </script>
    <script src="js/data-gov.js"> </script>
    <!-- <script src="js/checkout.js"> </script> -->
  </body>
</html>