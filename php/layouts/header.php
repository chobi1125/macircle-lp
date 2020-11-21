<header>
  <nav class="navbar navbar-expand-md sticky-top navbar-light bg-aliceblue">
    <div class="container">
      <a class="navbar-brand head-title-responsive" href="#Top" id="top"><img src="img/logo.png" alt="logo"  id="top-logo"></a>
      <!-- 切替ボタン -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <!-- ナビゲーション -->
      <div class="collapse navbar-collapse" id="navbar-content">
        <!-- トップページの各コンテンツへのリンク -->
        <ul class="navbar-nav mr-auto">
          <?php
            $menu=['Top','About','Event'];
            foreach ($menu as $item) {
              echo '<li class="nav-item"><a class="nav-link" href="#',$item,'">',$item,'</a></li>';
              }
          ?>
          <li class="nav-item "><a class="nav-link" href="https://chobimusic.com" target="_blank">Blog</a></li>
        </ul>
        <!-- Contactページへのリンク -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="https://forms.gle/Hjt6yV7H4uFYyeHu8" target="_blank" class="nav-link btn btn-outline-info">Contact</a>
          </li>
        </ul>
      <!-- /ナビゲーションメニュー -->
      </div>
    <!-- /サブコンポーネント -->
    </div>
  </nav>
<!-- /ヘッダー -->
</header>