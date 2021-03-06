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

  <style>
  [ng\:cloak],
  [ng-cloak],
  [data-ng-cloak],
  [x-ng-cloak],
  .ng-cloak,
  .x-ng-cloak {
    display: none !important;
  }
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
  
  #topNav md-menu button {
    font-size: 18px;
    color: #ff5722;
  }
  /* End top navigation */
  </style>
  <div ng-app="MyApp" ng-controller="AppCtrl" layout="row">
  <md-sidenav md-component-id="app-side-left" layout="column" class="md-whiteframe-z1">
    <md-toolbar layout="row" class="md-toolbar-tools md-hue-1">
      <md-button hide-gt-sm class="md-icon-button" aria-label="Settings" ng-click="toggleSidenav('app-side-left')" style="margin-right: -8px;">
        <md-icon>menu</md-icon>
      </md-button>
      <h2 style="display: inline;">&nbsp;Widget Options</h2>
    </md-toolbar>
    <!-- BEGIN LEFT SIDE NAVIGATION -->
    <md-content flex role="navigation">
      <ul class="docs-menu">
        <!-- SHIPPING MENU OPTION -->
        <li class="parent-list-item">
          <md-button class="md-button-toggle" ng-click="toggleMenu('#docs-menu-shipping')" aria-controls="docs-menu-shipping" aria-expanded="{{isOpen('#docs-menu-shipping')}}">
            <div flex layout="row">
              <md-icon>airplanemode_active</md-icon>
              Shipping
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
                Receive Shipments
                <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
              </md-button>
            </li>
          </ul>
        </li>
        <!-- DOCUMENTS MENU OPTION -->
        <li class="parent-list-item">
          <md-button class="md-button-toggle" ng-click="toggleMenu('#docs-menu-documents')" aria-controls="docs-menu-documents" aria-expanded="{{isOpen('#docs-menu-documents')}}">
            <div flex layout="row">
              <md-icon>description</md-icon>
              Documents
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
              <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Scan & Upload Documents">
                Scan & Upload Documents
                <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
              </md-button>
            </li>
            <!-- REVIEW OCR SUBMENU OPTION -->
            <li>
              <md-button ng-class="{'active' : isSelected()}" href="#" aria-label="Review OCR">
                Review
                <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
                <md-badge class="md-warm">3</md-badge>
              </md-button>
            </li>
            <!-- REVIEW DOCUMENT LOGS SUBMENU OPTION -->
            <li>
              <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Review Document Logs">
                Review Document Logs
                <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
              </md-button>
            </li>
            <!-- DOCUMENTS SUBMENU OPTION -->
            <li>
              <md-button ng-class="{'active' : isSelected()}" href="#" ng-click="focusSection()" aria-label="Documents">
                Home
                <span class="_md-visually-hidden" ng-if="isSelected()">current page</span>
              </md-button>
            </li>
          </ul>
        </li>
        <!-- ELECTRONIC LIENS MENU OPTION -->
        <li class="parent-list-item">
          <md-button class="md-button-toggle" ng-click="toggleMenu('#docs-menu-elt')" aria-controls="docs-menu-elt" aria-expanded="{{isOpen('#docs-menu-elt')}}">
            <div flex layout="row">
              <md-icon>import_export</md-icon>
              Electronic Liens
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
      <md-button layout="row" class="md-toolbar-tools" layout-align="left center" href="#" style="width: 135px;">
        <md-tooltip>Widget Co home - [Shift] + u</md-tooltip>
        <h2><span>Widget CO</span></h2>
      </md-button>

      <!-- START TOP NAVIGATION -->
      <div id="topNav" hide show-gt-sm layout="row" layout-align="center center">
        <md-menu-bar layout="row" layout-align="center center">
          <md-menu>
            <button ng-click="$mdOpenMenu()">Home</button>
            
          </md-menu>
          <md-menu>
            <button ng-click="$mdOpenMenu()">Activit&eacute;s</button>
            <md-menu-content>
              <md-menu-item class="md-indent">
                <md-icon>airplanemode_active</md-icon>
                <md-button ng-click="ctrl.sampleAction('cut', $event)">
                  Receive Shipment
                  <span class="md-alt-text">Shift+E</span>
                </md-button>
              </md-menu-item>
            </md-menu-content>
          </md-menu>
          <md-menu>
            <button ng-click="$mdOpenMenu()">Clients & Contacts</button>
            <md-menu-content>
              <md-menu-item class="md-indent">
                <md-icon>account_circle</md-icon>
                <md-button ng-click="ctrl.sampleAction('cut', $event)">
                  Clients
                  <span class="md-alt-text">Shift+C</span>
                </md-button>
              </md-menu-item>
              <md-menu-item class="md-indent">
                <md-icon>face</md-icon>
                <md-button ng-click="ctrl.sampleAction('cut', $event)">
                  Contacts
                  <span class="md-alt-text">Shift+E</span>
                </md-button>
              </md-menu-item>
            </md-menu-content>
          </md-menu>
          <md-menu>
            <button ng-click="$mdOpenMenu()">Electronic Liens</button>
          </md-menu>
        </md-menu-bar>
      </div>
      <!-- END TOP NAVIGATION -->
      <span flex></span>
      <!-- BEGIN NOTIFICATIONS -->
      <md-button class="md-icon-button" aria-label="Notifications">
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
      <span class="mdl-badge mdl-badge--overlap" data-badge="4"></span>
      <!-- END NOTIFICATIONS -->
      <!-- BEGIN USER PROFILE -->
      <md-button class="md-fab md-mini md-hue-4" aria-label="Unity account">
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
      </md-button>
      <!-- END USER PROFILE -->
    </md-toolbar>
    <!-- END TOP TOOLBAR -->

   
<!--     Include app dependency on ngMaterial

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
    //      }   
angular.module('MyApp', ['ngMaterial'])
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

</body>
</html>