<?php
	include_once("header.php");
  // include_once("menu.php");  
?>

<!-- 	<main class="mdl-layout__content">
        <div class="site-content"> -->
   <!--  <md-content  layout="row" > -->

          <div class="mdl-grid "  flex-gt-sm="33" layout-align="center center" layout="column">
           
            <div class="mydiv">
              <img class=" image_full" src=" img/activite.jpg" width="" height="" border="0" alt="" >
              <!-- <img class=" image_mobile" src=" img/Home.png" width="" height="" border="0" alt="" > -->
            </div> 
          </div>
      <!---            NEWS                      -->
          <div id="news"  class="mdl-grid  mdl-typography--text-center">
            <!-- <div class="mdl-layout-spacer">
            </div> -->
              
              <div class="mdl-layout-spacer"></div>
                <p >News: Le club sera fermé le mardi 17 septembre suite au marché annuel d'Anderlecht.</p>
              <div class="mdl-layout-spacer"></div>  

            <!-- <div class="mdl-layout-spacer">
            </div>    -->
          </div>
       <!---            fin NEWS                      -->     
            <div class="container">
              <div class="mdl-grid site-max-width">
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp welcome-card portfolio-card">
                  <div class="mdl-grid">
                    <div class=" mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone ">
                      <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Bienvenue au R.c.t.t.a</h2>
                      </div>
                      <div class="mdl-grid">
                        <div class=" mdl-cell mdl-cell--8-col mdl-cell--3-col-phone mdl-card__supporting-text  ">
                          <p>
                            Rien de tel qu'une petite partie de tennis de table pour se détendre et en même temps pour garder la forme.
                            Le tennis de table est un sport facile à apprendre et accessible au plus grand nombre.
                            Il est même, depuis le Jeux de Séoul en 1988, un sport olympique.
                          </p>
                          <p>
                            Certes pour obtenir des résultats sportifs certaines qualités physiques sont aussi requises : tonicité, rapidité et de bon reflexes. Mais pour une pratique loisir il faut juste bien connaître les règles et les techniques de base pour se faire plaisir.
                          </p>
                        </div>
                        <div id='buttonhome' class='mdl-cell mdl-cell-4-col mdl-cell--3-col-phone'>
                          
                          <div id="competitions" class=" mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--indigo-A100 mdl-color-text--white mdl-js-ripple-effect button-competitions "><a class="mdl-color-text--white" href="activites.php">Affiliez-vous</a>
                          </div>
                          <!-- <div id="competitions" class=" mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--indigo-A100 mdl-color-text--white mdl-js-ripple-effect button-competitions "><a class="mdl-color-text--white" href="competitions.php">Competitions</a>
                          </div> -->
                          <div class=" mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--indigo-A100 mdl-color-text--white mdl-js-ripple-effect button-resultat" ><a class="mdl-color-text--white" href="competitions.php">
                          Resultats</a>
                          </div>
                          <!-- <div class=" mdl-tabs mdl-js-tabs mdl-js-ripple-effect ">
                            <div class="mdl-tabs__tab-bar">
                              <a href="#mardi-panel" class="mdl-tabs__tab is-active">Mardi</a>
                              <a href="#mercredi-panel" class="mdl-tabs__tab">Mercredi</a>
                              <a href="#samedi-panel" class="mdl-tabs__tab">Samedi</a>
                            </div>
                            <div class="mdl-tabs__panel is-active" id="mardi-panel">
                              <p>19h00 - 22h00</p><p> Entraînement Libre</p>
                            </div>
                            <div class="mdl-tabs__panel" id="mercredi-panel">
                              <p>17h00 - 21h30</p><p>Entraînement Libre</p>
                            </div>
                            <div class="mdl-tabs__panel" id="samedi-panel">
                              <p>13h00 - 17h00</p><p>Entraînement Libre</p>
                            </div>
                          </div> -->
                        <h5 id="horaires">Horaires</h5>

                <div ng-cloak>
                  <md-content>
                    <md-tabs md-dynamic-height md-border-bottom>
                      <md-tab label="Mardi">
                        <md-content class="md-padding">
                          <h1 class="md-display-2"></h1>
                          <p>19h00 - 22h00</p><p> Entraînement Libre</p>
                        </md-content>
                      </md-tab>
                      <md-tab label="Mercredi">
                        <md-content class="md-padding">
                          <h1 class="md-display-2"></h1>
                          <p>17h00 - 21h30</p><p>Entraînement Libre</p>
                        </md-content>
                      </md-tab>
                      <md-tab label="Samedi">
                        <md-content class="md-padding">
                          <h1 class="md-display-2"></h1>
                          <p>13h00 - 17h00</p><p>Entraînement Libre</p>
                        </md-content>
                      </md-tab>
                    </md-tabs>
                  </md-content>
                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
          

<?php 
	include_once("footer.php"); 

?>