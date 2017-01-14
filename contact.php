<?php $currentpage = "contact" ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'assets/head.html' ?>
<body>
  <div class="container-fluid">
    <?php include 'assets/header.html' ?>
    <?php include 'assets/navbar.php' ?>
    <div class="row">
      <div class="container">
        <div class="col-lg-12 text-center">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="col-lg-6 col-sm-12 content">
          <h2>Mail ons!</h2>
          <hr>
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">naam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="naam" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">e-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputPassword3" placeholder="e-mail" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">tel.nr</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="inputPassword3" placeholder="telefoonnummer" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">bericht</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="bericht" required>
                    </div>
                </div>
                <div class="form-group row text-center">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Verstuur bericht!</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-12">
          <h2>Adres</h2>
          <hr>
          <p>Burg. Gualthérie. van Weezelplein 13<br>
            9431 AG Westerbork (The Netherlands)
          </p>
          <p>tel: +31 (0)593-333027</p><br>
          <h2>Vind ons ook op facebook!</h2>
          <hr>
          <a href="https://www.facebook.com/modique.nl/"><i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="row text-center">
        <div id="map"></div><!-- Google maps-->
    </div>
    <?php include 'assets/footer.html' ?>

  </div>
  <?php include 'assets/scripts.html' ?>
  <script type="text/javascript" src="js/navScroll.js"></script>
  <script>var elements = document.getElementsByTagName("INPUT");
for (var i = 0; i < elements.length; i++) {
    elements[i].oninvalid = function(e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
            e.target.setCustomValidity("Dit veld moet correct ingevuld worden");
        }
    };
    elements[i].oninput = function(e) {
        e.target.setCustomValidity("");
    };
}</script>
</body>
</html>
