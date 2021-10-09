<?php
 /* Template Name: business
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>取扱業務 | 士業テンプレート4</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">
    <div class="pageBg">
      <span class="txt">Riv<br>Construction</span>
    </div>
    <!-- /.pageBg -->
    <?php get_template_part('includes/c-header'); ?>      
    <!-- /.header -->
    <main id="main-contents" class="c-business">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-image-2.jpeg" alt="">
        </div>
        <h2 class="c-title">
          <span class="en">Business information</span>
          <span class="ja">取扱業務</span>
        </h2>
      </section>
      <!-- /.c-topview -->
      <section id="business01" class="c-business-item">
        <h2 class="c-title">
          <span class="en">不動産登記</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-1.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">不動産登記とはお客様の大切な財産である土地・建物に対して、所在・面積の他、所有者の住所・氏名等を公の登記簿に記載して、その権利をお守りすることです。
            </p>
            <p class="c-txt-sm">また、一般に公開することにより、複雑な権利関係を誰にでもわかるようにし、安全且つ円滑に不動産取引をする役割を果しています。
            </p>
            </p>
          </div>
        </div>
      </section>
      <!-- /#business01 -->
      <section id="business02" class="c-business-item">
        <h2 class="c-title">
          <span class="en">商業登記</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-2.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">
              商業登記とは、会社法人等に関する取引上重要な一定の情報（商号・本店所在・資本金・目的・代表者の氏名等）を法務局に記録し、公開することにより会社の信用維持を図ると共に取引の安全と円滑を図る制度です。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business02 -->
      <section id="business03" class="c-business-item">
        <h2 class="c-title">
          <span class="en">相続</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-3.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">相続が発生すると、様々な手続きが必要となります。弊所では、相続放棄の手続や遺産分割協議書の作成など、相続に係る手続をお受けしております。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business03 -->
      <section id="business04" class="c-business-item">
        <h2 class="c-title">
          <span class="en">贈与</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-4.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">
              不動産を生前贈与したい時は、法律に則った手続をしなければなりません。<br>例えば親が持っている土地を子供に贈与税のかからない範囲で生前に贈与したいなど、よくご相談をいただくことがあります。弊所では贈与にかかる相談から、遺言による贈与、贈与証書作成、申請書作成、登記申請までお受けしております。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business04 -->
      <section id="business05" class="c-business-item">
        <h2 class="c-title">
          <span class="en">債権譲渡登記</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-5.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">
              債権譲渡登記とは、煩雑になりがちな債権譲渡手続きを負担が少なく簡便に行う方法として作られた登記制度です。債権譲渡登記を利用することにより、簡単に債権譲渡の対抗要件（第三者に自分が担保権者だと主張するための要件）を備えることができるようになります。<br>
              それにより、不動産を保有しない企業でも自己が保有している売掛金等の債権を担保として提供することで、金融機関から融資を受けられる機会が広がります。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business05 -->
      <section id="business06" class="c-business-item">
        <h2 class="c-title">
          <span class="en">信託登記</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-6.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">
              信託とは、委託者の財産を受託者に移転し、その受託者が目的の範囲内でその信託財産を管理・運用し、そこから発生する利益を委託者または第三者に帰属させるものです。<br>弊所では信託関係登記業務全般（信託設定・信託受益権売買・信託財産処分による移転等）を取り扱っております。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business06 -->
      <section id="business07" class="c-business-item">
        <h2 class="c-title">
          <span class="en">契約書作成</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-7.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">契約書の作成・公正証書の作成・内容証明の作成・その他相談業務や、各種変更届申請、また供託手続その他債権譲渡登記まで幅広く取り扱っています
            </p>
          </div>
        </div>
      </section>
      <!-- /#business07 -->
      <section id="business08" class="c-business-item">
        <h2 class="c-title">
          <span class="en">その他の法務</span>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-8.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <p class="c-txt-sm">成年後見申立や裁判所への提出書類作成業務、その他法律相談や企業への出張研修など幅広くお取扱いしております。
            </p>
          </div>
        </div>
      </section>
      <!-- /#business08 -->
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
    <!-- /.footer -->
    <?php get_footer(); ?>
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