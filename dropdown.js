$( document ).ready(function() {
    $('.dropdown-button').dropdown(
    {
      hover: false 
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
});

        <!--                      <md-menu>
                        <button ng-click="$mdOpenMenu()">Tutorials</button>
                        <md-menu-content>
                           <md-menu-item>
                              <md-button ng-click="ctrl.sampleAction('share', $event)">Share...</md-button>
                           </md-menu-item>
                           <md-menu-divider></md-menu-divider>
                           <md-menu-item>
                              <md-menu>
                                 <md-button ng-click="$mdOpenMenu()">Learn</md-button>
                                 <md-menu-content>
                                    <md-menu-item><md-button ng-click="ctrl.sampleAction('HTML5', $event)">HTML5</md-button></md-menu-item>
                                    <md-menu-item><md-button ng-click="ctrl.sampleAction('jQuery', $event)">jQuery</md-button></md-menu-item>
                                    <md-menu-item><md-button ng-click="ctrl.sampleAction('AngularJS', $event)">AngularJS      </md-button></md-menu-item>
                                    <md-menu-item><md-button disabled="disabled" ng-click="ctrl.sampleAction('AngularJS 2.0', $event)">AngularJS 2.0</md-button></md-menu-item>
                                    <md-menu-divider></md-menu-divider>
                                    <md-menu-item><md-button ng-click="ctrl.sampleAction('CSS', $event)">CSS</md-button></md-menu-item>                                 </md-menu-content>
                              </md-menu>
                           </md-menu-item>
                        </md-menu-content>
                     </md-menu> --