<!DOCTYPE html>
<html lang="en">
         <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="{{ asset('favicon.ico?v=3') }}">
            <title>OpenJKT</title>
            
           
            <!-- Style -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
            
            {{ HTML::style('css/jquerymobile/jquery.mobile-1.4.2.min.css') }}
            {{ HTML::style('css/jquerymobile/jqm-demos.css') }}

            <!-- Script -->
            <script>
              var BASE_PATH = "{{ url('/') }}";
            </script>
            {{ HTML::script('js/jquerymobile/jquery.js') }}
            {{ HTML::script('js/jquerymobile/index.js') }}
            {{ HTML::script('js/jquerymobile/jquery.mobile-1.4.2.min.js') }}
            {{ HTML::script('js/jquerymobile/demo.js') }}


            {{ HTML::script('js/Chart.js') }}
          </head>

          <body>
              <div data-role="page" class="jqm-demos" data-quicklinks="true">
                <!-- HEADER START -->
                <div data-role="header" class="jqm-header">
                  <h2><a href="../" title="jQuery Mobile Demos home"><img src="{{ url('/assets/img/openjkt/logo2.png') }}" alt="jQuery Mobile"></a></h2>
                  <p>  <!-- Header page Title --></p> 
                    <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
                    <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
                </div>
                <!-- HEADER END -->
                <!-- CONTENT START -->
                <div role="main" class="ui-content jqm-content">
                  {{$content}}
                </div>
                <!-- CONTENT END -->
                <!-- PANEL END -->
<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
    <ul class="jqm-list ui-alt-icon ui-nodisc-icon">
        <li data-filtertext="demos homepage" data-icon="home"><a href=".././">Home</a></li>
        <li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
        <h3>APBD</h3>
        <ul>
        <li data-filtertext="backbone requirejs navigation router"><a href="{{ url('/category/index/urusan') }}" data-ajax="false">Urusan</a></li>
        <li data-filtertext="google maps geolocation demo"><a href="{{ url('/category/index/program') }}" data-ajax="false">Program</a></li>
        <li data-filtertext="google maps hybrid"><a href="{{ url('/category/index/skpd') }}" data-ajax="false">SKPD</a></li>
        </ul>
        </li>
        <li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
        <h3>Pelayanan Masyarakat</h3>
        <ul>
        <li data-filtertext="backbone requirejs navigation router"><a href="#" data-ajax="false">Puskesmas</a></li>
        <li data-filtertext="google maps geolocation demo"><a href="#" data-ajax="false">Pemadam Kebakaran</a></li>
        <li data-filtertext="google maps hybrid"><a href="#" data-ajax="false">Kantor Polisi</a></li>
        </ul>
        </li>
        <li data-filtertext="buttons button markup buttonmarkup method anchor link button element"><a href="#" data-ajax="false">Tentang</a></li>
        <li data-filtertext="form button widget input button submit reset"><a href="#" data-ajax="false">Kontak Kami</a></li>
        
        
    </ul>
</div>
    <!-- PANEL END -->

</div>
          </body>
</html>