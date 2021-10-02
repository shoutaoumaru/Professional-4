<?php
 /* Template Name: price
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>料金体系 | 士業テンプレート4</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/logo-animation.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
</head>

<body>
  <div class="superwrapper animsition">
    <div class="pageBg">
      <span class="txt">Riv<br>Construction</span>
    </div>
    <!-- /.pageBg -->
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/company')); ?>"><span>事務所案内</span>
                <small>Office</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/business')); ?>"><span>取扱業務</span><small>business</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/price')); ?>"><span>料金体系
                </span><small>Price</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span><small>Recruit</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span><small>News</small></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <!-- <div class="reserve-btn-js">
        <div class="reserve-btn-js__inner">
          <div class="reserve-btn-js__01">
            <span>お</span>
            <span>問</span>
            <span>合</span>
            <span>せ</span>
          </div>
          <div class="reserve-btn-js__02 js-left">
            <div class="tel">
              <a href="tel:092-686-7954">電話で<br>お問い合わせ</a>
            </div>
            <div class="net">
              <a href="#">フォームで<br>お問い合わせ</a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- /.reserve-btn -->
    </header>
    <!-- /.header -->
    <main id="main-contents" class="c-price">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/price.jpg" alt="">
        </div>
        <h2 class="c-title">
          <span class="en">Price</span>
          <span class="ja">料金体系</span>
        </h2>
      </section>
      <!-- /.c-topview -->
      <section id="price" class="c-price-section">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">料金体系一覧</p>
          </h2>
          <div class="c-price__list">
            <ul>
              <li class="c-price__item">
                <h3 class="c-price__item__tit view-sp">
                  <p class="c-txt-md">不動産登記</p>
                </h3>
                <div class="c-price-group">
                  <h4 class="c-price-subTitle">
                    <p class="c-txt-sm">所有権の登記</p>
                  </h4>
                  <table>
                    <tbody>
                      <tr>
                        <th>
                          <span class="c-txt-sm">1. 保存</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">30,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">2. 移転</span>
                        </th>
                        <td>
                          <span class="c-txt-sm"> 55,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">3. 更正，抹消，その他</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">30,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">4. 名義人表示変更，更正</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">12,000円〜</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="c-price-group">
                  <h4 class="c-price-subTitle">
                    <p class="c-txt-sm">所有権外の登記</p>
                  </h4>
                  <table>
                    <tbody>
                      <tr>
                        <th>
                          <span class="c-txt-sm">1. 用益権又は担保権の設定・移転（特定承継。），若しくは債権額の増加</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">30,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">2. 処分，移転（合併等包括承継に限る。）</span>
                        </th>
                        <td>
                          <span class="c-txt-sm"> 25,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">3. 変更，更正，抹消，その他</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">10,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">4. 名義人表示変更，更正</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">12,000円〜</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
              <li class="c-price__item">
                <h3 class="c-price__item__tit view-sp">
                  <p class="c-txt-md">商業・法人登記</p>
                </h3>
                <div class="c-price-group">
                  <h4 class="c-price-subTitle">
                    <p class="c-txt-sm">本店・支店所在地における登記</p>
                  </h4>
                  <table>
                    <tbody>
                      <tr>
                        <th>
                          <span class="c-txt-sm">設立：株式会社</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">95,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">持分会社・一般社団法人等</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">80,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">上記以外の法人</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">50,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">会社の資本金の増加・減資</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">60,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">合併</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">150,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">会社分割</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">200,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">株式交換・移転</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">200,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">新株予約権</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">150,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">組織変更（有限⇒株式）</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">98,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">商号（名称）又は目的の変更</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">55,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">役員、会計監査人、支配人、社員等の選任及び変更 （社外取締役、社外監査役の登記含む）</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">25,000円〜</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
              <li class="c-price__item">
                <h3 class="c-price__item__tit view-sp">
                  <p class="c-txt-md">借金問題</p>
                </h3>
                <div class="c-price-group">
                  <table>
                    <tbody>
                      <tr>
                        <th>
                          <span class="c-txt-sm">過払金返還（１社につき）※</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">30,000円</span>
                          <span class="c-txt-sm">過払金回収額の20％</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">任意整理（１社につき）</span>
                        </th>
                        <td>
                          <span class="c-txt-sm"> 着手金</span>
                          <span class="c-txt-sm"> 30,000円+</span>
                          <span class="c-txt-sm"> 減額報酬10%+</span>
                          <span class="c-txt-sm"> 過払金回収額の20％</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">自己破産</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">200,000円</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">個人再生</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">300,000円</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
              <li class="c-price__item">
                <h3 class="c-price__item__tit view-sp">
                  <p class="c-txt-md">相続問題</p>
                </h3>
                <div class="c-price-group">
                  <table>
                    <tbody>
                      <tr>
                        <th>
                          <span class="c-txt-sm">遺言書の原案の作成</span>
                        </th>
                        <td>
                          <span class="c-txt-sm">50,000円〜</span>
                        </td>
                      </tr>
                      <tr>
                        <th>
                          <span class="c-txt-sm">相続手続き</span>
                        </th>
                        <td>
                          <span
                            class="c-txt-sm">相続事件の報酬は、ご依頼いただく内容によって異なります。<br>例えば，相続登記を受任した場合，戸籍収集・相続人確定に２０，０００円程度，相続登記の報酬額が５０，０００円～となり，これとは別に登録免許税等の実費が掛かることとなります。<br>詳しくは，相談の際に説明します。<br>なお司法書士費用については，受任時に契約書を取交わし，明確に致します。</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- /.c-price-item -->
      <section class="p-contact">
        <div class="p-contact__wrap">
          <h2 class="p-title">
            <span class="en">CONTACT</span>
            <span class="ja">お問い合わせ</span>
          </h2>
          <div class="p-contact__desc">
            以下のフォームまたはお電話等で、まずは気軽にお問い合わせ下さい。
          </div>
          <div class="p-contact__tel">
            <a href="tel:050-3786-1317">Tel:050-3786-1317</a>
          </div>
          <div class="p-contact__form">
            <a class="link-btn" href=" <?php echo esc_url( home_url('/company')); ?>">
              <span class="c-txt-md">お問い合わせフォーム</span></a>
          </div>
        </div>
      </section>
      <!-- /.p-contact -->
    </main>
    <!-- /#main-contents -->
    <?php get_template_part('includes/c-footer'); ?>      
    <!-- /.footer -->
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
</body>

</html>