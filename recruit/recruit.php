<?php
 /* Template Name: recruit
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>採用情報 | 士業テンプレート4</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/swiper.min.css">
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
    <main id="main-contents" class="c-recruit">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit.jpg" alt="">
        </div>
        <h2 class="c-title">
          <span class="en">recruit</span>
          <span class="ja">採用情報</span>
        </h2>
      </section>
      <!-- /.c-topview -->
      <div class="contents-recruit">
        <section class="recruit-message">
          <div class="c-container">
            <h2 class="c-recruit__title">
              <p class="c-txt-lg">Riv司法書士事務所で働く魅力
              </p>
              <p class="c-txt-xs">The Attraction of Riv
              </p>
            </h2>
            <div class="c-recruit__points">
              <ul>
                <li>
                  <h4 class="points-title">
                    <span class="c-txt-lg">01</span>
                    <span class="c-txt-lr">1.経験の有無問わず歓迎します。</span>
                  </h4>
                  <div class="points-desc">
                    <p class="c-txt-sm">
                      Riv司法書士事務所は、司法書士有資格者、業務経験のある方、資格取得中の方すべて歓迎しております。
                      <br>経験の有無は心配せず、少しでもご興味のある方はお気軽にご応募ください。
                    </p>
                  </div>
                </li>
                <li>
                  <h4 class="points-title">
                    <span class="c-txt-lg">02</span>
                    <span class="c-txt-lr">2.勤務形態を選べます。
                    </span>
                  </h4>
                  <div class="points-desc">
                    <p class="c-txt-sm">
                      Riv司法書士事務所は、様々な勤務形態をとることができます。<br>ご家庭の事情や体調面などで、残業ができない、勤務形態を変えたいなど、個々の状況に対応いたしますので、面接時にご相談ください。
                    </p>
                  </div>
                </li>
                <li>
                  <h4 class="points-title">
                    <span class="c-txt-lg">03</span>
                    <span class="c-txt-lr">3.研修期間を大切に考えております。</span>
                  </h4>
                  <div class="points-desc">
                    <p class="c-txt-sm">
                      一人一人がスキルアップできるように、社内研修制度を設けています。<br>業務未経験の方も一から学べますので、どなたでも確実に成長していけます。分からないことはいつでも聞けますので、安心して働けます。
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <!-- /.recruit-message -->
        <section class="recruit-detaiil">
          <div class="c-container">
            <section class="recruit-sec">
              <h2 class="c-recruit__title">
                <p class="c-txt-lg">募集内容
                </p>
                <p class="c-txt-xs">Recruitment
                </p>
              </h2>
              <div class="c-table01 is-top">
                <table>
                  <tbody class="c-txt-sm">
                    <tr>
                      <th>募集職種</th>
                      <td>[1]司法書士の有資格者（未経験者可）
                        <br>
                        [2]司法書士の業務に興味のある方（未経験者、受験生可）
                      </td>
                    </tr>
                    <tr>
                      <th>雇用形態</th>
                      <td>正社員</td>
                    </tr>
                    <tr>
                      <th>勤務地</th>
                      <td>福岡県福岡市博多区博多駅前3-27-25-9F（出張あり）</td>
                    </tr>
                    <tr>
                      <th>通勤</th>
                      <td>マイカー通勤可能</td>
                    </tr>
                    <tr>
                      <th>勤務時間</th>
                      <td>8：00～17：00</td>
                    </tr>
                    <tr>
                      <th>給与</th>
                      <td>
                        <dl class="c-table01__salary">
                          <dt>[1]月給40万円〜/賞与年2回</dt>
                          <dd>※経験を考慮して決定します。</dd>
                        </dl>
                        <dl class="c-table01__salary">
                          <dt>[2]月給30万円〜/賞与年2回</dt>
                          <dd>※経験を考慮して決定します。</dd>
                        </dl>
                        <dl class="c-table01__salary">
                          <dt>※その他</dt>
                          <dd>出張手当て1日10,000円</dd>
                        </dl>
                        <span class="c-note01">年齢・経験・能力など考慮の上、優遇します</span>
                      </td>
                    </tr>
                    <tr>
                      <th>休日休暇</th>
                      <td>週休2日制（土日）、有給休暇、夏季休暇、年末年始休暇、慶弔休暇<br>
                        <span class="c-note01">※その他都度相談可能</span></td>
                    </tr>
                    <tr>
                      <th>待遇・福利厚生</th>
                      <td>社会保険完備、制服支給、残業手当、有給休暇、資格取得支援</td>
                    </tr>
                    <tr>
                      <th>応募方法</th>
                      <td>
                        まずはお電話にてご応募ください。<br>追ってこちらから面接日等の詳細をお知らせします。<br>お仕事や職場のことをもっと知りたいという方は、お気軽にお問合せ下さい。<br>面接日・入社日のご相談もお気軽にどうぞ。現在お仕事中の方もぜひご検討下さい。
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </section>
      </div>
      <!-- /.contents-recruit -->
      <section class="p-contact">
        <div class="p-contact__wrap">
          <h2 class="p-title">
            <span class="en">CONTACT</span>
            <span class="ja">お問い合わせ</span>
          </h2>
          <div class="p-contact__desc">
            以下のフォームまたはお電話等で、<br>まずはお気軽にお問い合わせ下さい。
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