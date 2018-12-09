<?php 
include_once("header.php"); 
?> 

<!--           <div class="mdl-grid ">
              <img class="article-image" src="img/histo.jpg" border="0" alt="About">
          </div> -->
        <div class="container">
          <div class="mdl-grid site-max-width">
            <div class="mdl-cell mdl-cell--12-col  mdl-shadow--4dp page-content">
              <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Contact</h1>
              </div>
              <div class="mdl-card__media">
                <div id="map" class="">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.664497801528!2d4.310779115745454!3d50.837378079530666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c41c9e9a6203%3A0x57683f8528723d61!2sRue+de+Douvres+80A%2C+1070+Anderlecht!5e0!3m2!1sfr!2sbe!4v1491864286440" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                    
                  </iframe>
                </div>
        <!-- <img class="article-image" src="img/contact.jpg" border="0" alt="Contact"> -->
              </div>
              <div class="">
              
              
<!--                 <div ng-controller="DemoCtrl" layout="column" ng-cloak class="md-inline-form">

                  <md-content md-theme="docs-dark" layout-gt-sm="row" layout-padding>
                    <div>
                      <md-input-container>
                        <label>Title</label>
                        <input ng-model="user.title">
                      </md-input-container>

                      <md-input-container>
                        <label>Email</label>
                        <input ng-model="user.email" type="email">
                      </md-input-container>
                    </div>
                  </md-content>

                  <md-content layout-padding>
                    <div>
                      <form name="userForm">

                        <div layout-gt-xs="row">
                          <md-input-container class="md-block" flex-gt-xs>
                            <label>Company (Disabled)</label>
                            <input ng-model="user.company" disabled>
                          </md-input-container>

                          <md-input-container>
                            <label>Enter date</label>
                            <md-datepicker ng-model="user.submissionDate"></md-datepicker>
                          </md-input-container>
                        </div>

                        <div layout-gt-sm="row">
                          <md-input-container class="md-block" flex-gt-sm>
                            <label>First name</label>
                            <input ng-model="user.firstName">
                          </md-input-container>

                          <md-input-container class="md-block" flex-gt-sm>
                            <label>Long Last Name That Will Be Truncated And 3 Dots (Ellipsis) Will Appear At The End</label>
                            <input ng-model="theMax">
                          </md-input-container>
                        </div>

                        <md-input-container class="md-block">
                          <label>Address</label>
                          <input ng-model="user.address">
                        </md-input-container>

                        <md-input-container md-no-float class="md-block">
                          <input ng-model="user.address2" placeholder="Address 2">
                        </md-input-container>

                        <div layout-gt-sm="row">
                          <md-input-container class="md-block" flex-gt-sm>
                            <label>City</label>
                            <input ng-model="user.city">
                          </md-input-container>

                          <md-input-container class="md-block" flex-gt-sm>
                            <label>State</label>
                            <md-select ng-model="user.state">
                              <md-option ng-repeat="state in states" value="{{state.abbrev}}">
                                {{state.abbrev}}
                              </md-option>
                            </md-select>
                          </md-input-container>

                          <md-input-container class="md-block" flex-gt-sm>
                            <label>Postal Code</label>
                            <input name="postalCode" ng-model="user.postalCode" placeholder="12345"
                                   required ng-pattern="/^[0-9]{5}$/" md-maxlength="5">

                            <div ng-messages="userForm.postalCode.$error" role="alert" multiple>
                              <div ng-message="required" class="my-message">You must supply a postal code.</div>
                              <div ng-message="pattern" class="my-message">That doesn't look like a valid postal
                                code.
                              </div>
                              <div ng-message="md-maxlength" class="my-message">
                                Don't use the long version silly...we don't need to be that specific...
                              </div>
                            </div>
                          </md-input-container>
                        </div>

                        <md-input-container class="md-block">
                          <label>Biography</label>
                          <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
                        </md-input-container>

                      </form>
                    </div> -->
<!--                   </md-content>


                </div>
                Title
                Developer
                 Email
                </div> -->
              <div class="mdl-cell mdl-cell--12-col">
                
                <div class="mdl-card__supporting-text">
                  <h5>Contactez-nous</h5>
                  <form action="https://formspree.io/email@example.com" method="POST" class="form-contact">
                    <div class="mdl-grid">
                      <div class="mdl-cell mdl-cell--6-col">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="name">
                          <label class="mdl-textfield__label" for="Name">Votre nom</label>
                          <span class="mdl-textfield__error">Seulement lettres et espaces</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="text" id="Email" name="_replyto">
                          <label class="mdl-textfield__label" for="Email">Votre Email</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="text" id="Sujet" name="_replyto">
                          <label class="mdl-textfield__label" for="Sujet">Sujet</label>
                        </div>
                      </div>
                      <div class="mdl-cell mdl-cell--6-col">
                        <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <textarea class="mdl-textfield__input" type="text" rows="5" id="note" name="message"></textarea>
                          <label class="mdl-textfield__label" for="note">Votre commentaire</label>
                        </div>
                        
                          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                          Submit
                          </button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              </div>

            </div>
          </div>
        </div>
        <section class="section--center mdl-grid site-max-width">
          
          <div class="mdl-cell mdl-cell--6-col">
            <img  class="mdl-cell--middle" src="img/sponsor.jpg" width="" height="">
            <div class="">
          <p>Comme tous les petits clubs aux moyens limités, nous sommes à la recherche de sponsors qui pourraient nous aider à améliorer nos infrastructures, adoucir nos charges de fonctionnement ainsi que l'investissement supporté par nos membres pour pouvoir pratiquer leur sport favori.</p>
          </div>
            </div>

            
            <div class="mdl-cell mdl-cell--6-col">

            <!-- <body ng-app="expandCollapseApp"> -->
<?php 
// include_once("expand.php"); 

?>

              <div id="expansion" class="sitesection">
                <p class="expand-three md-title"><a href="#">Partenaires principaux du R.C.T.T.A</a> <i class="material-icons">keyboard_arrow_down</i></p>
                <div class="content-three">
                  
                  <div id="cocof" >
                    <a href="http://www.cocof.irisnet.be/site/fr" target="_blank"><img src="img/cocof_logo.png" width="" height="71" alt="COCOF" title="COCOF"></a>
                    <p>La Commission Communautaire Française</p>
                  </div>
                  <div id="cocof" class="">
                    <a href="http://www.anderlecht.be/"><img  src="img/biganderlecht.png" width="" height="71"></a>
                    <p>Service des Sports de la Commune d'Anderlecht</p>
                  </div>
                  <div id="cocof" class="">
                    <a href="http://www.fij.be/"><img src="img/logo_fij.svg" width="" height="71"></a>
                    <p>Formation Insertions Jeunes</p>
                  </div>
                  <div id="cocof" class="">
                    <a href=""><img src="img/id4u.png" width="" height="71"></a>
                    <p>ID4U Renovation batiment Anderlect</p>
                  </div>
                </div>
              </div>
              <div id="expansion" class="sitesection">
                <p class="expand-four md-title"><a href="#">Les fédérations</a> <i class="material-icons">keyboard_arrow_down</i></p>
                <div class="content-four">
                  <div id="cocof" >
                    <a href="http://www.aisf.be/"><img src="img/logo-aisf.png" width="" height="35"></a>
                    <p>Association Interfédérale du Sport Francophone</p>
                  </div>
                  <div id="cocof" class="">
                    <a href="http://www.cpbbw.be/"><img  class="mdl-cell--middle" src="img/logo_cpbbw.jpg" width="" height="71">
                      <p>Aile Francophone de la Fédération Royale Belge de Tennis de Table</p>
                    </div>
                    <div id="cocof" class="">
                      <a href="http://www.affrbtt.be/"><img src="img/LOGO.png" width="" height="71"></a>
                      <p>Comité Provincial Bruxelles - Brabant Wallon</p>
                    </div>
                  </div>
                </div><div id="expansion" class="sitesection">
                <p class="expand-one md-title"><a href="#">Quels sont nos besoins ?</a> <i class="material-icons">keyboard_arrow_down</i></p>
                <p class="content-one">Renouvellement papier à lettres et enveloppes.
                  Des T-shirts à l'effigie du club.
                  Des survêtements à l'effigie du club.
                  Prise en charge des frais relatifs aux entraînements (balles, rétribution de l'entraîneur,...).
                  Participation aux frais de location des locaux.
                Que pouvons-nous vous offrir ?</p>
              </div>
              <div id="expansion" class="sitesection">
                <p class="expand-two md-title"><a href="#">Que pouvons-nous vous offrir ?</a> <i class="material-icons">keyboard_arrow_down</i></p>
                <p class="content-two">Dans tous les cas, mention de votre sponsoring sur ce site et la possibilité de placer vos brochures publicitaires dans le local du club.
                Papier à lettres et enveloppes: mention de votre sponsoring.T-shirts et survêtements : mention de votre sponsoring sur les vêtements et sur le papier à lettres.Frais relatifs aux entraînements : mention de votre sponsoring sur les panneaux amovibles délimitant l'espace de jeu lors des compétitions</p>
              </div>


           
               
            </div>
        </section>


    <!-- fin contenu -->
    <?php 
include_once("footer.php"); 

?>