<?php include("../includes/head.html"); ?>
<title>Cary's Lounge - Beers</title>
</head>
  <body id="on-tap">
    
    <div class="grid">
      <?php include "../includes/header.html"; ?>
      <?php include "../includes/nav.html"; ?>
      <div class="col-1-1">
        <div class="grid-pad content">
          
          <ul class="clear" id="beer-sub-nav">
            <li id="sub_featured">Featured</li>
            <li id="sub_on_tap">On Tap</li>
            <li id="sub_bottles">Bottled Beers</li>
            <li id="sub_cans">Canned Beers</li>
            <li id="sub_cider">Ciders</li>
            <li id="sub_wine">Wine On Tap</li>
            <li id="sub_cocktails">Cocktails</li>
          </ul>
          
          
          <div id="menu_widget">
          </div>
        </div>
      </div>
      <div class="col-1-1">
        <div class="grid-pad content bump-left">
          <p>You can also follow us on <a href="http://www.findmytap.com/">Find My Tap</a>. </p>
        </div>
      </div>

      <?php include "../includes/footer.html"; ?>

    </div>    
    
<script src="https://www.beermenus.com/menu_widgets/2827?no_links=1&beer_descriptions=1" type="text/javascript" charset="utf-8"></script>
   <script>
      $( document ).ready(function() {
        
        $("#beer-sub-nav li").click(function (event) {
          var thisItem=event.target.id.substring(4);// strip sub_ from item ID
          console.log(thisItem);
          highlightOneBeerType(thisItem);
        });
        
        highlightOneBeerType("featured");

      });
  </script>
  </body>
</html>
