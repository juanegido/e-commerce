<?php
session_start();
include '../global/config.php';
include '../global/conexion.php';
include '../templates/cabecera_admin.php';
?>


<?php

        ###################################################################
        //----------Comprobamos sesion y si es administrador-----//
        ###################################################################
    if (!isset($_SESSION['correo']) ||  $_SESSION['administrador']==false) { //comprobamos que se haya logueado como administrador
        echo '<div align="center" class="card" style="background-color:lightblue">';
        echo 'ERROR!! debe registrarse con una cuenta válida: <a href="login.php"> Login </a> </div>';
    } else { //si la sesión existe 
        if (isset($_SESSION['ultimoAcceso'])) { //comprueba que no haya pasado x tiempo desde la sesion
            $ahora = time();
            $antes = $_SESSION['ultimoAcceso'];
            $_SESSION['ultimoAcceso'] = $ahora;
            if ($ahora - $antes > 3600) {
                $_SESSION = array(); //eliminamos las variables de sesión
                session_destroy();
                //eliminamos las cookies de sesión:
                $paramCookies = session_get_cookie_params();
                setcookie(session_name(), 0, time() - 3600, $paramCookies["path"]);
                echo '<script type="text/javascript">
                alert("Sesión expiró. Vuelve a loguearte");
                window.location.assign("login.php"); </script>';
            }
        }
        

        echo '<h5 class="card-title">Bienvenid@ a la página de Analiticas de Tachbot: '.$_SESSION['correo'].'</h5> ';
        echo ' <div class="col-12">';
  

        echo '</div>';
    } ?>
      <!--
      ###################################################################
      //----------GOOGLE ANALYTICS PART-----//
      ###################################################################
      -->
      <!--
      links de referencias:
      https://developers.google.com/analytics/devguides/reporting/embed/v1/getting-started
      https://ga-dev-tools.appspot.com/embed-api/third-party-visualizations/
      https://developers.google.com/identity/protocols/OAuth2
      //loguearse como tachbot7@gmail.com 
      link de la consola de google:https://console.developers.google.com/apis/credentials
      -->
        
      <div id="embed-api-auth-container"></div>
      <div id="chart-container"></div>
      <div id="chart-1-container"></div>
      <div id="chart-2-container"></div>       
      <div id="view-selector-container"></div>
      <div id="view-selector-1-container"></div>
      <div id="view-selector-2-container"></div>
    <script>

    (function(w,d,s,g,js,fs){
    g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
    js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
    js.src='https://apis.google.com/js/platform.js';
    fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
    }(window,document,'script'));
    </script>

   

<script>

gapi.analytics.ready(function() {

  /**
   * Authorize the user immediately if the user has already granted access.
   * If no access has been created, render an authorize button inside the
   * element with the ID "embed-api-auth-container".
   */
  gapi.analytics.auth.authorize({
    container: 'embed-api-auth-container',
    clientid: '1094470646624-8onij4he61mnj2lvujas53cr4gnq4ujr.apps.googleusercontent.com'
  });


  /**
   * Create a ViewSelector for the first view to be rendered inside of an
   * element with the id "view-selector-1-container".
   */

  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector-container'
  });

  var viewSelector1 = new gapi.analytics.ViewSelector({
    container: 'view-selector-1-container'
  });



  /**
   * Create a ViewSelector for the second view to be rendered inside of an
   * element with the id "view-selector-2-container".
   */
  var viewSelector2 = new gapi.analytics.ViewSelector({
    container: 'view-selector-2-container'
  });

  // Render both view selectors to the page.
  viewSelector1.execute();
  viewSelector2.execute();
  viewSelector.execute();

  var dataChart = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:date',
      'start-date': '30daysAgo',
      'end-date': 'yesterday'
    },
    chart: {
      container: 'chart-container',
      type: 'LINE',
      options: {
        width: '100%'
      }
    }
  });

  /**
   * Create the first DataChart for top countries over the past 30 days.
   * It will be rendered inside an element with the id "chart-1-container".
   */
  var dataChart1 = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:country',
      'start-date': '30daysAgo',
      'end-date': 'yesterday',
      'max-results': 6,
      sort: '-ga:sessions'
    },
    chart: {
      container: 'chart-1-container',
      type: 'PIE',
      options: {
        width: '100%',
        pieHole: 4/9
      }
    }
  });


  /**
   * Create the second DataChart for top countries over the past 30 days.
   * It will be rendered inside an element with the id "chart-2-container".
   */
  var dataChart2 = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:country',
      'start-date': '30daysAgo',
      'end-date': 'yesterday',
      'max-results': 6,
      sort: '-ga:sessions'
    },
    chart: {
      container: 'chart-2-container',
      type: 'PIE',
      options: {
        width: '100%',
        pieHole: 4/9
      }
    }
  });

  /**
   * Update the first dataChart when the first view selecter is changed.
   */

  viewSelector.on('change', function(ids) {
    dataChart.set({query: {ids: ids}}).execute();
  });

  viewSelector1.on('change', function(ids) {
    dataChart1.set({query: {ids: ids}}).execute();
  });

  /**
   * Update the second dataChart when the second view selecter is changed.
   */
  viewSelector2.on('change', function(ids) {
    dataChart2.set({query: {ids: ids}}).execute();
  });

});
</script>