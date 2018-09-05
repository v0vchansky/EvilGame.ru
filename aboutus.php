<!DOCTYPE html>
  <html>
    <head>
      
      <? include "links.html" ?>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>О нас - EvilGame</title>
    </head>
    
    <body>
      <div class="wrapper">
        <div id="header1" class="header">
          <? include "header.php" ?>
          
          <div class="panel-wrapper">
            <div class="container">
              <div class="row">
                
                <div class="col-md-12">
                  <div class="card tbp-card panel-card">
                    <div class="card-header panel-card-header">
                      <div class="nav">
                        <h2>О нас</h2>
                      </div>
                    </div>
                    <div class="card-body panel-card-body" style="padding: 20px">
                      <div class="container">
                        <h4>Контактная информация</h4>
                        <ul>
                            <li><strong>E-mail:</strong> evilgamellc@gmail.com</li>
                            <li><strong>VK:</strong> https://vk.com/evilgamellc</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <? include "footer.php" ?>
      

      <!--Import jQuery before materialize.js-->
      <? include "scripts.html" ?>
      <script src="{% static 'js/form-validate.js' %}" defer></script>
    </body>
  </html>