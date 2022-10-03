   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js') ?>"></script>
   <script>
       // Sidenav
       const sideNav = document.querySelectorAll('.sidenav');
       M.Sidenav.init(sideNav);
       // Slider
       const slider = document.querySelectorAll('.slider');
       M.Slider.init(slider, {
           indicators: false,
           height: 700,
           transition: 700,
           duration: 800,
           interval: 4000
       });
       // Box Size
       const material = document.querySelectorAll('.materialboxed');
       M.Materialbox.init(material);
       // Parallax
       const parallax = document.querySelectorAll('.parallax')
       M.Parallax.init(parallax, {
           responsiveThreshold: 0
       })
   </script>
   </body>

   </html>