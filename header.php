<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="bower_components/angular-material/angular-material.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
<!--     <link href="bower_components/angular-material-expansion-panel/dist/md-expansion-panel.js" rel="stylesheet"> -->
<!--     <link href="bower_components/angular-material-expansion-panel/dist/md-expansion-panel.min.css" rel="stylesheet"> -->
    <!-- Compiled and minified CSS -->
<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"> -->

  <!-- Compiled and minified JavaScript -->
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> -->
 
  <script src="bower_components/jquery/jquery.js"></script>

  

<style>
  [ng\:cloak],
  [ng-cloak],
  [data-ng-cloak],
  [x-ng-cloak],
  .ng-cloak,
  .x-ng-cloak {
    display: none !important;
  }
/*#menubarContainer {
background-color: #1A237E;
min-height: 42px;
}*/
/*#menubarContainer  a {
font-family: 'Roboto', Regular;
font-size:16px;
color: #ffffff;
text-transform: uppercase;
text-decoration: none;
}*/
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

.tabsdemoDynamicHeight md-content {
  background-color: transparent !important; }
  .tabsdemoDynamicHeight md-content md-tabs {
    background: #f6f6f6;
    border: 1px solid #e1e1e1; }
    .tabsdemoDynamicHeight md-content md-tabs md-tabs-wrapper {
      background: white; }
  .tabsdemoDynamicHeight md-content h1:first-child {
    margin-top: 0; }
     /************
 * BADGES
 ************/
  
  .notifications-badge {
    height: 22px;
    width: 22px;
    text-align: center;
    border-radius: 50%;
    position: absolute;
    font-size: 12px;
    font-weight: 600;
    top: 2px;
    right: 6px;
    background-color: #ff4081;
  }
  
  .mdl-badge.mdl-badge--overlap:after {
    right: 2px;
    top: -19px;
  }
  
  .mdl-badge.mdl-badge--overlap {
    margin-right: 21px;
  }
  
  .md-button md-badge {
    margin: 0 0 0 8px;
    color: white;
    padding: 4px;
    border-radius: 50%;
    background-color: #ff4081;
    font-family: "Roboto", "Helvetica", "Arial", sans-serif;
    font-size: 12px;
    font-weight: 600;
    height: 22px;
    width: 22px;
  }
  
  .menu-badge {
    color: #ff4081;
  }
  /* End Badges */
  /************
 * LEFT NAVIGATION MENU
 ************/
  
  .docs-menu,
  .docs-menu ul {
    list-style: none;
    padding: 0;
    max-width: 100%;
    overflow-x: hidden;
  }
  
  .docs-menu li {
    margin: 0;
  }
  
  .docs-menu > li:nth-child(1) {
    border-top: none;
  }
  
  .md-whiteframe-glow-z1 {
    box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.14), 0px 0px 2px 2px rgba(0, 0, 0, 0.098), 0px 0px 5px 1px rgba(0, 0, 0, 0.084);
  }
  
  .docs-menu .md-button {
    border-radius: 0;
    /*color: white;*/
    cursor: pointer;
    display: block;
    align-items: inherit;
    line-height: 40px;
    margin: 0;
    max-height: 40px;
    overflow: hidden;
    padding: 0 16px;
    text-align: left;
    text-decoration: none;
    white-space: normal;
    width: 100%;
  }
  
  html[dir=rtl] .docs-menu .md-button,
  body[dir=rtl] .docs-menu .md-button {
    unicode-bidi: embed;
    text-align: right;
  }
  
  .docs-menu .md-button:hover,
  .docs-menu .md-button:focus {
    /*background: #267ED5 !important;*/
    background: #eeeeee !important;
  }
  
  .docs-menu .md-button md-icon {
    /*color: white;*/
    color: #616161;
    margin-right: 5px;
  }
  
  .docs-menu md-select {
    /* Override md-select margins.  With margins the menu will look incorrect and causes mobile list
    to not be scrollable.
  */
    margin: 0;
    width: 100%;
  }
  
  .docs-menu md-select md-select-label {
    justify-content: flex-end;
    padding-top: 10px;
  }
  
  .docs-menu md-select md-select-label span {
    margin-right: auto;
    padding-left: 13px;
  }
  
  .docs-menu md-select .md-select-icon {
    margin-right: 28px;
  }
  
  .docs-menu button.md-button::-moz-focus-inner {
    padding: 0;
  }
  /*.docs-menu .md-button.active {
    background: #267ED5;
}*/
  
  .menu-toggle-list {
    overflow: hidden;
    position: relative;
    z-index: 1;
    -webkit-transition: 0.75s cubic-bezier(0.35, 0, 0.25, 1);
    -webkit-transition-property: height;
    -moz-transition: 0.75s cubic-bezier(0.35, 0, 0.25, 1);
    -moz-transition-property: height;
    transition: 0.75s cubic-bezier(0.35, 0, 0.25, 1);
    transition-property: height;
  }
  
  .docs-menu .menu-toggle-list a.md-button {
    display: block;
    padding: 0 16px 0 45px;
    text-transform: none;
    text-rendering: optimizeLegibility;
    font-weight: 500;
  }
  
  .parent-list-item:last-child {
    margin-bottom: 20px;
    /* Prevent the hidden License link from causing a double bottom-border */
    border-bottom: none;
  }
  
  .md-button-toggle .md-toggle-icon {
    display: block;
    margin-left: auto;
    speak: none;
    vertical-align: middle;
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    transition: transform 0.3s ease-in-out;
    -webkit-transition: -webkit-transform 0.3s ease-in-out;
  }
  
  .md-button-toggle .md-toggle-icon.toggled {
    transform: rotate(0);
    -webkit-transform: rotate(0);
    margin-right: -5px !important;
  }
  
  .parent-item-list.seperator hr {
    border: 1px solid #eeeeee !important;
  }
  /* End left navigation Menu */
  /************
 * LICENSE FOOTER
 ************/
  
  #license-footer {
    align-self: flex-end;
    padding: 16px 18px;
    width: 100%;
    text-align: left;
    font-size: small;
    border-top: 1px solid #ddd;
  }
  /* End license footer */
  /************
 * TOP NAVIGATION
 ************/
  #topNav{
/*margin-left: 33%;*/
margin: auto;
  }
  #topNav md-menu button {
  font-family: 'Roboto', Regular;
  font-size:16px;
  text-transform: uppercase;
  color: #ffffff;
  margin: auto;



  }
  /* End top navigation */
</style>
</head>

<body id="top" ng-app="firstApplication">
  <div id="" layout="row" ng-cloak >
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
              <a href="contact.html" id="contact-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">mail</i></a>
              <a href="phone.html" id="phone-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">phone</i>
              </a>
              <header class="site-header center-items">
                <div class="mdl-grid" layout-align="center center">
                  <div  layout="row"   >
                    <div id="logo" class="mdl-layout__header-row site-logo-row"   flex><span class="mdl-layout__title " flex>
                      <div class="site-logo img-responsive"></div><span class="site-description"  >Royal Cercle de Tennis de Table Anderlechtois</span></span>
                    </div>
                   </div> 
                  </div>
                  <div  ng-controller="AppCtrl" layout="column" layout-align=" center center" layout-wrap>
                    <md-sidenav md-component-id="app-side-left" layout="column" class="md-whiteframe-z1">
                    <md-toolbar layout="row" class="md-toolbar-tools md-hue-1">
                    <md-button hide-gt-sm class="md-icon-button" aria-label="Settings" ng-click="toggleSidenav('app-side-left')" style="margin-right: -8px;" flex="45">
                    <md-icon>menu</md-icon>
                    </md-button>
                    <h2 style="display: inline;">&nbsp;</h2>
                    </md-toolbar>
                    <!-- BEGIN LEFT SIDE NAVIGATION -->
                    <md-content flex role="navigation">
                    <ul class="docs-menu">
                      <!-- SHIPPING MENU OPTION -->
                      <li class="parent-list-item">
                        <md-button class="md-button-toggle" ng-click="toggleMenu('#docs-menu-shipping')" aria-controls="docs-menu-shipping" aria-expanded="{{isOpen('#docs-menu-shipping')}}">
                        <div flex layout="row">
                          <a ng-href="index.php">Home</a>
                          <span flex layout="row"></span>
                          <span aria-hidden="true" class="md-toggle-icon" ng-class="{'toggled' : isOpen('#docs-menu-shipping')}">
                            <md-icon md-svg-src="md-toggle-arrow"></md-icon>
                          </span>
                        </div>
                        <span class="md-visually-hidden">
                          Toggle {{isOpen('#docs-menu-shipping')? 'expanded' : 'collapsed'}}
                        </span>
                        </md-button>

                        
                      </li>
                      <li class="parent-list-item">
                        <md-button class="md-button-toggle" ng-click="toggleMenu('#docs-menu-shipping')" aria-controls="docs-menu-shipping" aria-expanded="{{isOpen('#docs-menu-shipping')}}">
                        <div flex layout="row">
                          <a ng-href="activites.php">Activit&eacute;s</a>
                          <span flex layout="row"></span>
                          <span aria-hidden="true" class="md-toggle-icon" ng-class="{'toggled' : isOpen('#docs-menu-shipping')}">
                            <md-icon md-svg-src="md-toggle-arrow"></md-icon>
                          </span>
                        </div>
                        <span class="md-visually-hidden">
                          Toggle {{isOpen('#docs-menu-shipping')? 'expanded' : 'collapsed'}}
                        </span>
                        </md-button>
                        <ul id="docs-menu-shipping" class="menu-toggle-list hide">
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Receive Shipments">
                            <a  ng-href="competitions.php"><span>R&eacute;sultat</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Receive Shipments">
                            <a ng-href="#horaires.html "><span>Horaires</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Receive Shipments">
                            <a ng-href="#horaires.html "><span>Horaires</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Receive Shipments">
                            <a  ng-href="#affiliez.html"><span>Affiliez-vous</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Receive Shipments">
                            <a class=""  ng-href="entrainement.php"><span>Entrainement</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Receive Shipments">
                            <a class="" ng-href="#conseils.html"><span>Conseils</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                        </ul>

                      </li>
                      <!-- DOCUMENTS MENU OPTION -->
                      <li class="parent-list-item">
                        <md-button class="md-button-toggle" ng-click="toggleMenu('#docs-menu-documents')" aria-controls="docs-menu-documents" aria-expanded="{{isOpen('#docs-menu-documents')}}">
                        <div flex layout="row">
                          <a ng-href="rctta.php">R.c.t.t.a</a>
                          <span flex></span>
                          <span aria-hidden="true" class="md-toggle-icon" ng-class="{'toggled' : isOpen('#docs-menu-documents')}">
                            <md-icon md-svg-src="md-toggle-arrow"></md-icon>
                          </span>
                        </div>
                        <span class="md-visually-hidden">
                          Toggle {{isOpen('#docs-menu-documents')? 'expanded' : 'collapsed'}}
                        </span>
                        </md-button>
                        <ul id="docs-menu-documents" class="menu-toggle-list hide">
                          <!-- SCAN DOCUMENTS SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Scan & Upload Documents"><a  ng-href="#competitions.html"><span>Historique</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <!-- REVIEW OCR SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" aria-label="Review OCR">
                            <a  ng-href="#resultat.html"><span>R&egrave;glement</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            <!-- <md-badge class="md-warm">3</md-badge> -->
                            </md-button>
                          </li>
                          <!-- REVIEW DOCUMENT LOGS SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Review Document Logs">
                            <a   ng-href="#comite.html"><span>Comit&eacute;</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <!-- DOCUMENTS SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Documents">
                            <a class="" ng-href="#regles.html"><span>R&egrave;gles</span></a>
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                        </ul>
                      </li>
                      <!-- ELECTRONIC LIENS MENU OPTION -->
                      <li class="parent-list-item">
                        <md-button class="md-button-toggle" ng-click="toggleMenu('#docs-menu-elt')" aria-controls="docs-menu-elt" aria-expanded="{{isOpen('#docs-menu-elt')}}">
                        <div flex layout="row">
                          <a class="" ng-href="contact.php">Contact</a>
                          <span flex></span>
                          <span aria-hidden="true" class="md-toggle-icon" ng-class="{'toggled' : isOpen('#docs-menu-elt')}">
                            <md-icon md-svg-src="md-toggle-arrow"></md-icon>
                          </span>
                        </div>
                        <span class="md-visually-hidden">
                          Toggle {{isOpen('#docs-menu-elt')? 'expanded' : 'collapsed'}}
                        </span>
                        </md-button>
                        <ul id="docs-menu-elt" class="menu-toggle-list hide">
                          <!-- TILES SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Titles">
                            Titles
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <!-- TRANSACTIONS SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Transactions">
                            Transactions
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <!-- LIENHOLDERS SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Lienholders">
                            Lienholders
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <!-- BILLING HISTORY SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Billing History">
                            Billing History
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                          <!-- INVOICE HISTORY SUBMENU OPTION -->
                          <li>
                            <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Invoice History">
                            Invoice History
                            <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                            </md-button>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    </md-content>
                    </md-sidenav>
                    <!-- END LEFT SIDE NAVIGATION -->
                    <div layout="column" layout-fill flex>
                      <!-- BEGIN TOP TOOLBAR -->
                      <md-toolbar layout="row" class="md-toolbar-tools md-hue-2" layout-align="left center" style="padding-right: 35px;">
                      <md-button hide-gt-sm class="md-icon-button" aria-label="Settings" ng-click="toggleSidenav('app-side-left')" style="margin-right: -8px;">
                      <md-icon>menu</md-icon>
                      </md-button>
                      <!-- BEGIN LOGO BUTTON -->
                      <md-button layout="row" class="md-toolbar-tools" layout-align="left center" href="#" style="width: 23%;">
                      <md-tooltip>Widget Co home - [Shift] + u</md-tooltip>
                      <h2><span></span></h2>
                      </md-button>
                      <!-- START TOP NAVIGATION -->
                      <div layout="row" layout-align=" center center" layout-wrap>
                        <div id="topNav" hide show-gt-sm layout="row" layout-align="center center" >
                        <md-menu-bar layout="row" layout-align=" center cener" flex="80">
                          <md-menu>
                          <button ng-click="$mdOpenMenu()"><a ng-href="index.php">Home</a></button>
                          
                          </md-menu>
                          <md-menu>
                          <button ng-click="$mdOpenMenu()">Activit&eacute;s</button>
                          <md-menu-content>
                            <md-menu-item class="md-indent">
                            <!-- <md-icon>airplanemode_active</md-icon> -->
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a  ng-href="competitions.php"><span>R&eacute;sultat</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a ng-href="competitions.php "><span>Horaires</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a  ng-href="activites.php"><span>Affiliez-vous</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a class=""  ng-href="activites.php"><span>Entrainement</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a class="" ng-href="activites.php"><span>Conseils</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>
                            </md-menu-item>
                          </md-menu-content>
                          </md-menu>
                          <md-menu>
                          <button ng-click="$mdOpenMenu()"><a ng-href="rctta.php">R.c.t.t.a</a></button>
                          <md-menu-content>
                            <md-menu-item class="md-indent">
                            <!-- <md-icon>airplanemode_active</md-icon> -->
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a  ng-href="rctta.php"><span>Historique</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a  ng-href="rctta.php"><span>R&egrave;glement</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a   ng-href="rctta.php"><span>Comit&eacute;</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>                          
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                            <a class="" ng-href="rctta.php"><span>R&egrave;gles</span></a>
                            <!-- <span class="md-alt-text">Shift+E</span> -->
                            </md-button>
                            
                            </md-menu-item>
                          </md-menu-content>
                          </md-menu>
                          <md-menu>
                          <button ng-click="$mdOpenMenu()"><a class="" ng-href="contact.php">Contact</a></button>
                          </md-menu>
                        </md-menu-bar>
                        </div>
                      </div>
                      <!-- END TOP NAVIGATION -->
                      <span flex></span>
                      <!-- BEGIN NOTIFICATIONS -->
<!--                       <md-button class="md-icon-button" aria-label="Notifications">
                      <md-tooltip md-direction="left">
                      Notifications
                      </md-tooltip>
                      <md-icon md-icon-class="material-icons md-48">notifications</md-icon>
                      <unity-popover>
                      <drop>
                      You have no notifications
                      </drop>
                      </unity-popover>
                      </md-button>
                      <span class="mdl-badge mdl-badge--overlap" data-badge="4"></span> -->
                      <!-- END NOTIFICATIONS -->
                      <!-- BEGIN USER PROFILE -->
                      <!-- <md-button class="md-fab md-mini md-hue-4" aria-label="Unity account">
                      <md-tooltip md-direction="left">User profile</md-tooltip>
                      <span>R</span>
                      <unity-popover>
                      <drop>
                      <div layout="column" layout-align="start" style="padding: 0 0 5px 10px;">
                        <span class="md-body-2">Rich Smith</span>
                        <span class="md-body-1">richn@widgets.com</span>
                      </div>
                      <div layout="row" layout-align="start">
                        <md-button class="md-raised" ng-class="{'md-primary': themeId!='dark'}" aria-label="Light Theme" ng-click="setTheme('light')">
                        Light Theme
                        </md-button>
                        <md-button class="md-raised" ng-class="{'md-primary': themeId=='dark'}" aria-label="Dark Theme" ng-click="setTheme('dark')">
                        Dark Theme
                        </md-button>
                      </div>
                      <div layout="row" layout-align="start">
                        <md-button>My account</md-button>
                        <md-button>Sign out</md-button>
                      </div>
                      </drop>
                      </unity-popover>
                      </md-button> -->
                      <!-- END USER PROFILE -->
                      </md-toolbar>
                      <!-- END TOP TOOLBAR -->
<!--                       <div flex layout-fill layout="column" style="padding-left: 20px;">
                        <md-content layout="row" layout-padding layout-align="start center">
                        <md-card class="md--whiteframe-5dp">
                        <md-card-title>
                        <md-card-title-text>
                        <span class="md-display-1">
                          Hello World
                        </span>
                        </md-card-title-text>
                        </md-card-title>
                        <md-card-content>
                        <p class="md-headline">Angular Material top menu that switches to left flyout menu on smaller screens.</p>
                        </md-card-content>
                        </md-card>
                        </md-content>
                      </div> -->
                      <!-- BEGIN FOOTER -->
                      <!-- <md-content md-scroll-y layout="column">
                      <div ng-view layout-padding flex="noshrink"></div>
                      <div layout="row" flex="noshrink">
                        <div id="license-footer">
                          <span>©2016 Widgets All Rights Reserved</span>
                        </div>
                      </div>
                      </md-content> -->
                      <!-- END FOOTER -->
                    </div>
                    </div>
<!--                 <div id="menubarContainer" ng-controller="menubarController as ctrl" layout="row" ng-cloak >
                  
                  <md-toolbar class="md-menu-toolbar  " id="menubarContainer" >
                    <div  layout="row" layout-align="center center">
                      <div   >
                        <md-menu-bar>
                        <button ng-click="$mdOpenMenu()" ><a ng-href="index.php">Home</a></button>
                        <md-menu>
                          <button ng-click="$mdOpenMenu()"><a ng-href="activites.php">Activit&eacute;s</a></button>
                            <md-menu-content>
                              <md-menu-item  layout="row" layout-xs="column">
                                <md-button  ><a  ng-href="competitions.php"><span>R&eacute;sultat</span></a></md-button>
                                <md-button  ><a ng-href="competitions.php "><span>Horaires</span></a></md-button>
                                <md-button ><a  ng-href="activites.php"><span>Affiliez-vous</span></a></md-button>
                                <md-button ><a class=""  ng-href="activites.php"><span>Entrainement</span></a></md-button>
                                <md-button "><a class="" ng-href="activites.php"><span>Conseils</span></a></md-button>
                              </md-menu-item>
                            </md-menu-content>
                        </md-menu>
                        <md-menu>
                        <button ng-click="$mdOpenMenu()"><a ng-href="rctta.php">R.c.t.t.a</a></button>
                          <md-menu-content>
                            <md-menu-item layout="row" layout-xs="column">
                              <md-button ng-click=""><a  ng-href="rctta.php"><span>Historique</span></a></md-button>
                              <md-button ng-click=""><a  ng-href="rctta.php"><span>R&egrave;glement</span></a></md-button>
                              <md-button ng-click=""><a   ng-href="rctta.php"><span>Comit&eacute;</span></a></md-button>
                              <md-button ng-click="ctrl.sampleAction('CSS', $event)"><a class="" ng-href="rctta.php"><span>R&egrave;gles</span></a></md-button>
                            </md-menu-item>
                          </md-menu-content>
                        </md-menu>
                        <button ><a class="" ng-href="contact.php">Contact</a></button>
                        </md-menu-bar>
                        
                      </div>
                    </div>
                  </md-toolbar>
                </div> -->
  </header>
        <!-- <main class="mdl-layout__content">
        <div class="site-content"> -->
 <!--    <div flex layout-fill layout="column" style="padding-left: 20px;">
        <md-content layout="row" layout-padding layout-align="start center">
          <md-card class="md--whiteframe-5dp">
            <md-card-title>
              <md-card-title-text>
                <span class="md-display-1">
                  Hello World
                </span>
              </md-card-title-text>
            </md-card-title>
            <md-card-content>
              <p class="md-headline">Angular Material top menu that switches to left flyout menu on smaller screens.</p>
            </md-card-content>
          </md-card>
        </md-content>
      </div> -->
      <!-- -FIN NAV- -->

