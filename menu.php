<style>
#menubarContainer {
background-color: #1A237E;
min-height: 42px;
}
#menubarContainer  a {
font-family: 'Roboto', Regular;
font-size:16px;
color: #ffffff;
text-transform: uppercase;
text-decoration: none;
}
.md-menu-item{
}
md-menu-bar md-menu.md-open>button {
background: #1A237E;
}
/*md-menu-content.md-menu-bar-menu {
padding-top: 0;
}*/
md-menu-content.md-menu-bar-menu.md-dense {
padding-top:  0;
padding-bottom: 0;
}
md-menu-bar > button, md-menu > button{
padding: 0 70px;
}
</style>
<!--  angular-material  -->

<div id="menubarContainer" ng-controller="menubarController as ctrl" layout="row" ng-cloak >
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <a href="contact.html" id="contact-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">mail</i></a>
        <a href="phone.html" id="phone-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">phone</i>
        </a>
        <header class="mdl-layout__header mdl-layout__header--waterfall site-header">
          <div class="mdl-layout__header-row site-logo-row"><span class="mdl-layout__title">
              <div class="site-logo"></div><span class="site-description">Royal Cercle de Tennis de Table Anderlechtois</span></span>
          </div>
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
</div>