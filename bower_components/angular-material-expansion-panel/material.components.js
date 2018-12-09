angular.module('myApp', ['ngMaterial', 'material.components.expansionPanels']);angular.module('app').controller('ctrl', function ($mdExpansionPanel) {
  // async 
  $mdExpansionPanel().waitFor('panelOne').then(function (instance) {
    instance.expand();
    instance.collapse({animation: false});
    instance.remove();
    instance.isOpen();
  });
 
  // sync 
  $mdExpansionPanel('panelOne').expand();
});