
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Inline CSS since i don't use alot -->
      <style>.brand-logo,.card-panel { left: 1%;  } #stocks,#feargreedindex { padding-left: 1%; padding-right: 1%} </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <nav>
        <div class="nav-wrapper blue navbar-left">
        <a href="#" class="brand-logo"> API Finance</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#stocks">Stocks</a></li>
            <li><a href="#feargreedindex">Fear Greed Index</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        </div>
    </nav>



    <section id="stocks">
        <h5 class="header"><a class="waves-effect waves-light btn" href="/api/stocks/AAPL">GET</a> /api/stocks/{ticker}</h5>
        <div class="card-panel">


                <div class="blue-text blue lighten-5"><p><u>Required Parameter:</u> This method requires the {ticker} parameter</p>

                    <p class="blue lighten-4">It allows to return for the associated ticker the real time results from the market</p>
                </div>

                    <p><u>Example:</u> <a href="/api/stocks/AAPL">/api/stocks/AAPL</a></p>

                 <div class="green-text green lighten-5">
                    <p><u>Result (success) (code HTTP: 200):</u></p>
                    <code class="green lighten-4">{"ticker":"AAPL","price":"133,11","full_percentage_details":"-0,30 (-0,22 %)","percentage":"-0,22 %","status":"success"}</code>
                </div>

                <p>If the ticker does not exist or is not found you will get this error message</p>
                <p><u>Example:</u> <a href="/api/stocks/DEVILCORP">/api/stocks/DEVILCORP</a></p>
                <div class="red-text red lighten-5">
                    <p><u>Result (error) (code HTTP: 400):</u></p>
                    <p class="red lighten-4">{"ticker":"DEVILCORP","price":"","percentage":"","status":"Error bad ticket or not found"}</p>
                </div>

            <span class="black-text"></span>
        </div>
    </section>


    <section id="feargreedindex">
        <h5 class="header"><a class="waves-effect waves-light btn" href="/api/feargreedindex/">GET</a> /api/feargreedindex/</h5>
        <div class="card-panel">


                <div class="blue-text blue lighten-5">
                    <div class="blue-text blue lighten-5"><p><u>Required Parameter:</u> Nothing</p></div>

                    <p class="blue lighten-4">This method returns the fear greed index (source: CNN MONEY) in a picture encoded in base64</p>
                </div>

                    <p><u>Example:</u> <a href="/api/feargreedindex/">/api/feargreedindex/</a></p>

                 <div class="green-text green lighten-5">
                    <p><u>Result (success) (code HTTP: 200):</u></p>
                    <p class="green lighten-4">{"picture":"PGltZyBzcmM9J2h0dHA6Ly9tYXJrZXRzLm1vbmV5LmNubi5jb20vTWFya2V0c2RhdGEvdXBsb2FkaGFuZGxlci96NmY4ZjdjMGF6NjdjMGI3MTlmMjAyNGU4YWI5NjJhNGUwMTVhMmNhYTkucG5nJz48L2ltZz4=","status":"success"}</code>
                </div>

                <p>If the picture can't be retrive </p>

                <div class="red-text red lighten-5">
                    <p><u>Result (error) (code HTTP: 400):</u></p>
                    <p class="red lighten-4">{"picture":"","status":"Error bad picture or not found"}</p>
                </div>

            <span class="black-text"></span>
        </div>
    </section>

    <section id="about">
        <footer class="page-footer blue darken-1">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">API Finance</h5>
                  <p class="grey-text text-lighten-4">API Finance is a free API made by a french developper, if you have any question or want to contact me you are free to use any contact in your right</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Contact</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/digitstudio">Github: <b>https://github.com/digitstudio</b></a></li>
                    <li><a class="grey-text text-lighten-3" href="email:jeromemarichez@ik.me">Email: <b>jeromemarichez@ik.me</b></a></li>
                    <li><a class="grey-text text-lighten-3" href="tel:0771651588">Contact Number: <b>0771651588</b></a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Discord: <b>NanoPips#9964</b></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2021 Copyright API Finance
              <a class="grey-text text-lighten-4 right" href="#!">Made with pas$ion</a>
              </div>
            </div>
          </footer>
    </section>


      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </body>
  </html>
