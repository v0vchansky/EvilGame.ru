<div class="container">
          <!-- Navigation -->
          
          <nav class="navbar navbar-expand-lg navigation">
            <a class="navbar-brand" href="index.php">EvilPlay</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i style="color: white" class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Хостинг</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Поддержка</a>
                  <div class="dropdown-menu ddm-styles dropdown-menu-right">
                    <a class="dropdown-item" href="https://vk.com/evilplayllc" target="_blank">Написать в поддержку</a>
                    <a class="dropdown-item" href="treaty.php">Пользовательское соглашение</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Еще</a>
                  <div class="dropdown-menu ddm-styles dropdown-menu-right">
                    <a class="dropdown-item" href="https://vk.com/evilplayllc" target="_blank">Сообщество во ВКонтакте</a>
                  </div>
                </li>
                <li class="nav-item dropdown" style="margin-left: 20px">
                  <button style="margin-left: 6px" type="button" class="btn btn-warning" onclick="window.location.href = '{% url "login" %}?next=/'">Войти</button>
                </li>
                
              </ul>
            
          </div>
        </nav>
        </div>