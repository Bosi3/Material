<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="bower_components/angular-material/angular-material.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"> -->

  <!-- Compiled and minified JavaScript -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> -->
  <script src="bower_components/jquery/jquery.js"></script>

  
<!-- /*md-toolbar >.md-button.md-default-theme {
    border-radius: 99%; // round toolbar buttons
  }
}*/
/*.md-toolbar-tools-bottom {
  font-size: small;
  & :last-child {
    opacity: 0.8;
  }
}*/
/*md-toolbar:not(.md-hue-1),
.md-fab {
  fill: #fff;
}
*//*md-sidenav {
  fill: #737373;
  ng-md-icon {
    position: relative;
    top: 5px; // adjust for svg viewbox
  }
}*/
/*md-menu-content > md-menu-item > md-button > a{
  font-family: 'Roboto', Regular;
  font-size:16px; 
  text-transform: uppercase;
}*/ -->
  </style>

  <body id="top" ng-app="firstApplication">
  <!--  MDL  -->
 

            <!--                                   Nav-                     -->

            <!--  angular-material  -->
         
<?php 
  
?>
<!-- <md-content flex layout-padding> -->

<!--       <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <a href="contact.html" id="contact-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">mail</i></a>
        <a href="phone.html" id="phone-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">phone</i>
        </a>
        <header class="mdl-layout__header mdl-layout__header--waterfall site-header">
          <div class="mdl-layout__header-row site-logo-row"><span class="mdl-layout__title">
              <div class="site-logo"></div><span class="site-description">Royal Cercle de Tennis de Table Anderlechtois</span></span>
          </div>
 -->
<!--         <div id="menubarContainer" ng-controller="menubarController as ctrl" layout="row" ng-cloak >
          <md-toolbar class="md-menu-toolbar  " id="menubarContainer" >
            <div  layout="row" layout-align="center center">
               <div   >
                  <md-menu-bar>
                      <button ng-click="$mdOpenMenu()" ><a ng-href="index.php">Home</a></button>
                      <md-menu>
                        <button ng-click="$mdOpenMenu()"><a ng-href="activites.php">Activit&eacute;s</a></button>
                        <md-menu-content>
                           <md-menu-item>
                              <md-button ng-click="ctrl.sampleAction('HTML5', $event)"><a  ng-href="#resultat.html"><span>R&eacute;sultat</span></a></md-button>
                              <md-button ng-click="ctrl.sampleAction('HTML5', $event)"><a ng-href="#horaires.html "><span>Horaires</span></a></md-button>
                              <md-button ng-click="ctrl.sampleAction('HTML5', $event)"><a  ng-href="#affiliez.html"><span>Affiliez-vous</span></a></md-button>
                              <md-button ng-click="ctrl.sampleAction('HTML5', $event)"><a class=""  ng-href="#entrainement.html"><span>Entrainement</span></a></md-button>
                              <md-button ng-click="ctrl.sampleAction('HTML5', $event)"><a class="" ng-href="#conseils.html"><span>Conseils</span></a></md-button>    
                           </md-menu-item>
                        </md-menu-content>
                     </md-menu>
                      <md-menu>
                        <button ng-click="$mdOpenMenu()"><a ng-href="rctta.php">R.c.t.t.a</a></button>
                        <md-menu-content>
                           <md-menu-item>
                              <md-button ng-click="ctrl.sampleAction('HTML5', $event)"><a  ng-href="#competitions.html"><span>Historique</span></a></md-button>
                              <md-button ng-click="ctrl.sampleAction('HTML5', $event)"><a  ng-href="#resultat.html"><span>R&egrave;glement</span></a></md-button>
                              <md-button ng-click="ctrl.sampleAction('HTML5', $event)"><a   ng-href="#comite.html"><span>Comit&eacute;</span></a></md-button>
                              <md-button ng-click="ctrl.sampleAction('CSS', $event)"><a class="" ng-href="#regles.html"><span>R&egrave;gles</span></a></md-button>   
                           </md-menu-item>
                        </md-menu-content>
                     </md-menu>
                    <button ng-click="ctrl.sampleAction('HTML5', $event)"><a class="" ng-href="contact.php">Contact</a></button>                     
                  </md-menu-bar>
                
               </div>
            </div>
          </md-toolbar> 
        </div> -->
<!-- <div id="" class="" ng-controller="menuController as ctrl" layout="row" ng-cloak>
        <div layout="column" flex="33" flex-sm="100" layout-align="center center">         
          <p>Default Menu</p>
            <md-menu>
               <md-button aria-label="Sample Menu" class="md-icon-button" ng-click="$mdOpenMenu($event)">
                  <md-icon md-menu-origin class="material-icons">more_vert</md-icon>
               </md-button>
               <md-menu-content width="6">
                  <md-menu-item ng-repeat="item in [1, 2, 3]">
                     <md-button ng-click="ctrl.menuItemClick($index)">
                        <div layout="row">
                           <md-icon md-menu-align-target class="material-icons">add</md-icon>
                           <p flex>Option {{item}}</p>
                        </div>
                     </md-button>
                  </md-menu-item>
               </md-menu-content>
            </md-menu>
         </div>
         <div layout="column" flex-sm="100" flex="33" layout-align="center center">
            <p>Left Aligned Menu</p>
            <md-menu md-position-mode="target-right target" >
               <md-button aria-label="Sample Menu" class="md-icon-button" ng-click="$mdOpenMenu($event)">
                  <md-icon md-menu-origin class="material-icons">more_vert</md-icon>
               </md-button>
               <md-menu-content width="4" >
                  <md-menu-item ng-repeat="item in [1, 2, 3]">
                     <md-button ng-click="ctrl.menuItemClick($index)">
                        <div layout="row">
                           <p flex>Option {{item}}</p>        
                           <md-icon md-menu-align-target class="material-icons">add</md-icon>         
                        </div>
                     </md-button>
                  </md-menu-item>
               </md-menu-content>
            </md-menu>
          </div>
     </div>  -->  
<!-- <body data-ng-controller="MainCtrl" ng-app="myApp"> -->
        
        <!-- <div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
          
            <div class="mdl-accordion">
              <a class="mdl-navigation__link mdl-accordion__button ">
                <i class="material-icons mdl-accordion__icon mdl-animation--default">expand_more</i> <span>R.c.t.t.a</span>
              </a>
              <div class="mdl-accordion__content-wrapper">
                <div class="mdl-accordion__content mdl-animation--default">
                  <a class="mdl-navigation__link" href="resultat.html"><span>Règlement</span></a>
                  <a class="mdl-navigation__link" href="#comite"><span>Comité</span></a>
                  <a class="mdl-navigation__link" href="affiliez.html"><span>Règles</span></a>
                </div>
              </div>
            </div>
            <a class="mdl-navigation__link" href="contact.html">Contact</a>
          </div>
        </div>
      </div> -->
      
      <!-- -FIN NAV- -->

