	         

          <footer class="mdl-mini-footer ">
           <div  layout="row" id="monFoot" layout-align="center center">
            <div class="footer-container ">
              <div class="mdl-logo ">
                <div class="mdl-grid">
                  <div class="mdl-cell mdl-grid site-max-width mdl-typography--body-1-force-preferred-font" >
                    A.S.B.L. Royal Cercle de Tennis de Table Anderlechtois<br>
                    Rue du Serment 87 1070 Anderlecht<br>
                    Tel: +32 (0) 2 522 75 83
                  </div>
                  <div class="mdl-grid">
                    <div class="mdl-grid ">
                      <div class="logo-foot">
                        <a target="_blank" href="http://www.cocof.irisnet.be/site/fr" target="_blank"><img src="img/cocof_logo.png" alt="COCOF" title="COCOF"></a>
                      </div>
                      <div class="logo-foot">
                        <a target="_blank" href="http://www.anderlecht.be/"><img src="img/biganderlecht.png"></a>
                      </div>
                      <div class=" mdl-cell--bottom  logo-foot">
                        <a target="_blank" href="http://www.fij.be/"><img src="img/logo_fij.svg"></a>
                      </div>
                      <div class=" mdl-cell--bottom logo-foot">
                        <a href="http://www.affrbtt.be/"><img src="img/LOGO.png"></a>
                      </div>
                      <div class=" mdl-mini-footer__link-list logo-foot">
                        <a target="_blank" href="http://www.cpbbw.be/">
                          <img src="img/logo-cppbw2.jpg">
                        </a>
                      </div>
                      <div class="  mdl-mini-footer__link-list logo-foot">
                        <a target="_blank" href="http://www.aisf.be/"><img src="img/logo-aisf.png" ></a>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            </div>
          </footer>
          </div>
        </div> 
      </main>
    <!-- </md-content> -->
	<script src="bower_components/angular/angular.js"></script>
	<script src="bower_components/angular-aria/angular-aria.js"></script>
	<script src="bower_components/angular-animate/angular-animate.js"></script>
	<script src="bower_components/angular-material/angular-material.js"></script>
  <script src="bower_components/angular-animate/angular-animate.js"></script>
<!--   <script src="bower_components/angular-material-expansion-panel/dist/md-expansion-panel.min.js "></script> -->
  <!-- <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-animate.min.js"></script> -->


<!-- 		 Include app dependency on ngMaterial

		 angular.module( 'YourApp', [ 'ngMaterial' ] );
			.controller("YourController", YourController ); -->
  <script language="javascript">
    // angular
    //         .module('firstApplication', ['ngMaterial'])
    //         .controller('menubarController', menubarController);

    //      function menubarController ($scope, $mdDialog) {
    //         this.sampleAction = function(name, ev) {
    //            $mdDialog.show($mdDialog.alert()
    //               .title(name)   
    //               .textContent('Start learning "' + name + '!')
    //               .ok('OK')
    //               .targetEvent(ev)
    //            );
    //         };
    //      };



	</script>
<script>
  angular.module('tabsDemoDynamicHeight', ['ngMaterial']);
</script>
  <script language="javascript">
  
  angular.module('firstApplication', ['ngMaterial'])
          .controller('AppCtrl', function($scope, $mdSidenav) {
            $scope.toggleSidenav = buildToggler('app-side-left');

            $scope.toggleMenu = function(elementId) {
              $(elementId).toggleClass('hide selected');
            };
            $scope.isSectionSelected = function(elementId) {
              return $(elementId).hasClass('selected');
            };

            $scope.isOpen = function(elementId) {
              var open = true;
              if ($(elementId).hasClass('hide')) {
                open = false;
              }
              return open;
            };

            function buildToggler(componentId) {
              return function() {
                $mdSidenav(componentId)
                  .toggle();
              }
            }

          });

  </script>
<script language="javascript">

</script>

</script>
<script  language="javascript">
  function resizeImages() {
    var width = window.innerWidth || document.documentElement.clientWidth;
    $(".mydiv img").each(function() {
        var oldSrc = $(this).attr('src');
        if (width >= 768) {
            var newSrc = oldSrc.replace('_normal.','_bigger.');
            var newWidth = 100;  var newHeight = 100;
        } else if ( width >= 480 ) {
            var newSrc = oldSrc.replace('_normal.','_big.');
            var newWidth = 50;  var newHeight = 50;
        }
        $(this).attr('src',newSrc);
        $(this).attr('width',newWidth);
        $(this).attr('height',newHeight);
    });
}
</script>
<script  language="javascript">
  $('.content-one').hide();
  $('.expand-one').click(function(){
  $('.content-one').not($(this).next('.description')).slideToggle('slow');

});
  $('.content-two').hide();
  $('.expand-two').click(function(){
  $('.content-two').slideToggle('slow');
});
  $('.content-three').hide();
  $('.expand-three').click(function(){
  $('.content-three').slideToggle('slow');
});
  $('.content-four').hide();
  $('.expand-four').click(function(){
  $('.content-four').slideToggle('slow');
});
  $(document).ready(function(){
      $('.titre').click(function(){
          $('.description').not($(this).next('.description')).slideUp('fast');
          $(this).next('.description').slideToggle('fast');
      });
   });
</script>
</div>
</body>
</html>