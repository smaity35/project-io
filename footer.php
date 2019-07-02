
  <footer>
        <section class="upper-footer">
            <div class="container">
                <div class="row">
  
          

                    <div class="col-md-3">
                        <h3>QUICK LINKS</h3>
                        <ul class="flink">
                            <li><a href="" title="">Become A Creator</a></li>
                            <li><a href="" title="">Become A Supporter</a></li>
                            <li><a href="" title="">Shop</a></li>
                            <li><a href="" title="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Terms</h3>
                        <ul class="flink">
                            <li><a href="">Terms And Conditions</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Cookie Policy</a></li>                    
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h3>ACCOUNT</h3>
                        <ul class="flink">
                            <li><a href="" title="">My Account</a></li>
                            <li><a href="" title="">Login</a></li>
                            <li><a href="" title="">Register</a></li>
                            
                        </ul>
                    </div>
                    
            <div class="col-md-4">
              <h3>Stay Updated</h3>
              <div class="form">
                <div class="frow">
                  <input type="text" name="" value="" placeholder="Enter Mail Id">
                  <button type="submit">Subscribe</button>
                </div>
              </div>

              <h3>Follow US</h3>
              <ul class="fsocial">
                <li><a href="" target="_blank" title=""><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="" target="_blank" title=""><i class="fa fa-instagram"></i></a></li>
                <li><a href="" target="_blank" title=""><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
                </div>
            </div>
        </section>
        <section class="copy-wrap">
            <div class="container">
                <div class="copy-in clearfix">
                     <p>Copyright 2018 © Project.Io. All Rights Reserved.</p>
                    <span class="ovlink"><a target="_blank"><img src="images/pay.png"></a></span>
                </div>
            </div>  
        </section>
        
        <div class="click-to-top"><a href="#" uk-totop uk-scroll></a></div>
  </footer>

    
    







<!--    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1uFCjRS7v6w_5m0mGxZP4-kLpnzFDaO8&callback=initMap"></script>  -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/fancybox.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.mCustomScrollbar.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/typeit.min.js"></script>
    <script src="js/isotope.pkgd.js"></script>
    <script type="text/javascript" src="js/www.gstatic.com_charts_loader.js"></script>
     <!--  <a href="images/2.jpg" data-fancybox="gallery" style="background-image:url(images/2.jpg);"><img src="images/blpic1.png" alt=""></a>-->
    <script src="js/uikit.min.js"></script>
    <script src="js/custom.js"></script>
    
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     0],
          ['Target Price',  500],
          ['Commute',  0],
          ['Earned Price', 100],
          ['Sleep',    0]
        ]);

        var options = {
          // title: 'Price chart',
          pieHole: 0.5,
          legend: 'none'
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <script>

		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		    anchor.addEventListener('click', function (e) {
		        e.preventDefault();

		        document.querySelector(this.getAttribute('href')).scrollIntoView({
		            behavior: 'smooth'
		        });
		    });
		});

	</script>
    
  </body>
</html>