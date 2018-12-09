<html>
<head>
  <title>Angular Material Test</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- css:css -->
  <link rel="stylesheet" href="expansionPanels-theme.css">
  <link rel="stylesheet" href="expansionPanels.css">
  <link rel="stylesheet" href="style.css">
  <!-- endinject -->

  <!-- bower:css  -->
  <link rel="stylesheet" href="angular-material/angular-material.css">
  <!-- endinject -->

  <!-- bower:js  -->
  <script src="angular/angular.js"></script>
  <script src="angular-animate/angular-animate.js"></script>
  <script src="angular-messages/angular-messages.js"></script>
  <script src="angular-aria/angular-aria.js"></script>
  <script src="angular-material/angular-material.js"></script>
  <script src="angular-route/angular-route.js"></script>
  <!-- endinject -->

  <!-- scripts:js -->
  <script src="expansionPanels.js"></script>
  <script src="js/expansionPanel.directive.js"></script>
  <script src="js/expansionPanel.service.js"></script>
  <script src="js/expansionPanelCollapsed.directive.js"></script>
  <script src="js/expansionPanelExpanded.directive.js"></script>
  <script src="js/expansionPanelFooter.directive.js"></script>
  <script src="js/expansionPanelGroup.directive.js"></script>
  <script src="js/expansionPanelGroup.service.js"></script>
  <script src="js/expansionPanelHeader.directive.js"></script>
  <script src="js/expansionPanelIcon.directive.js"></script>
  <!-- endinject  -->

  <!-- appscripts:js -->
  <script src="app.js"></script>
  <script src="nav.controller.js"></script>
  <script src="pages/autoExpand/autoExpand.controller.js"></script>
  <script src="pages/group/group.controller.js"></script>
  <script src="pages/home/home.controller.js"></script>
  <script src="pages/multiple/multiple.controller.js"></script>
  <script src="pages/group/panels/templated/templated.controller.js"></script>
  <script src="pages/group/panels/one/onePanel.controller.js"></script>
  <!-- endinject  -->

</head>
<body ng-app="angularMaterialExpansionPanel" layout="row">
  <div flex role="main" tabindex="-1" layout="column">

    <div ng-controller="NavController" class="nav-bar">
      <md-nav-bar md-selected-nav-item="currentNavItem" nav-bar-aria-label="navigation links">
        <md-nav-item md-nav-href="#/" name="/">Panels</md-nav-item>
        <md-nav-item md-nav-href="#/group" name="/group">Groups</md-nav-item>
        <md-nav-item md-nav-href="#/autoexpand" name="/autoexpand">Auto Expand</md-nav-item>
        <md-nav-item md-nav-href="#/multiple" name="/multiple">Multiple</md-nav-item>
      </md-nav-bar>
    </div>

    <md-content md-scroll-y layout="column" flex>
      <div ng-view flex="noshrink" class="view-container"></div>
    </md-content>
  </div>

  <!-- <div ng-controller="NavController">
    <md-nav-bar md-selected-nav-item="currentNavItem" nav-bar-aria-label="navigation links">
      <md-nav-item md-nav-href="#/" name="/">Panels</md-nav-item>
      <md-nav-item md-nav-href="#/group" name="/group">Groups</md-nav-item>
    </md-nav-bar>
  </div>
  <md-content>
    <div ng-view></div>
  </md-content> -->

</body>
</html>