<?php get_header(); ?>


  <section class="mv-sub">
    <div class="mv-sub__wrapper">
      <picture class="mv-sub__image js-mv-sub">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/mv-recruit.png" alt="">
      </picture>
      <div class="mv-sub__body">
        <h2 class="mv-sub__title">求人情報</h2>
        <p class="mv-sub__sub-title">recruit</p>
      </div>
    </div>
  </section>

  <section class="recruit top-recruit">
    <div class="recruit__inner inner">
      <div class="recruit__wrapper">
        <h3 class="recruit__title js-fadeUp">株式会社ヤスザワ設計ではスタッフを募集しています。</h3>
        <div class="recruit__body">
          <p class="recruit__text js-fadeUp">
            ヤスザワ設計では住宅、工場、オフィスビル、事務所ビル、医院、テナントの内装デザインなどよう用途にこだわらず幅広く設計を行うスタッフを募集しています。<br>
            基本計画から実施、申請、現場監理、一貫して経験することができます。最初は先輩スタッフとペアになり、一連の流れを覚えていただきます。
            慣れてきましたら、プロジェクトのスタートから竣工までを主担当として携わっていただきます。
          </p>
        </div>
        <div class="recruit__section-header recruit-header">
          <h2 class="recruit-header__title js-fadeUp">募集概要</h2>
          <p class="recruit-header__sub-title js-fadeUp">現在以下の職種を募集しています。</p>
        </div>
        <dl class="recruit__contents definition-contents definition-contents--recruit">
          <div class="definition-contents__item definition-item definition-item--recruit js-fadeUp">
            <dt class="definition-item__name">業務内容</dt>
            <dd class="definition-item__text">業務内容 設計・監理</dd>
          </div>
          <div class="definition-contents__item definition-item definition-item--recruit js-fadeUp">
            <dt class="definition-item__name">雇用形態</dt>
            <dd class="definition-item__text">正社員</dd>
          </div>
          <div class="definition-contents__item definition-item definition-item--recruit js-fadeUp">
            <dt class="definition-item__name">勤務時間</dt>
            <dd class="definition-item__text">9:00~17:00</dd>
          </div>
          <div class="definition-contents__item definition-item definition-item--recruit js-fadeUp">
            <dt class="definition-item__name">勤務地</dt>
            <dd class="definition-item__text">滋賀県彦根市立花町2-2(3番町ビル)</dd>
          </div>
          <div class="definition-contents__item definition-item definition-item--recruit js-fadeUp">
            <dt class="definition-item__name">給与</dt>
            <dd class="definition-item__text">23~45万円（能力により決定・面接時に相談）</dd>
          </div>
          <div class="definition-contents__item definition-item definition-item--recruit js-fadeUp">
            <dt class="definition-item__name">休日</dt>
            <dd class="definition-item__text">土日祝日</dd>
          </div>
          <div class="definition-contents__item definition-item definition-item--recruit js-fadeUp">
            <dt class="definition-item__name">待遇</dt>
            <dd class="definition-item__text">
              賞与年2回/社会保険完備/有給休暇/マイカー通勤可/交通費支給<br>
              各種手当あり
            </dd>
          </div>
          <div class="definition-contents__item definition-item definition-item--recruit js-fadeUp">
            <dt class="definition-item__name">応募資格</dt>
            <dd class="definition-item__text">23歳〜45歳までの方</dd>
          </div>
        </dl>
        <div class="recruit__button js-fadeUp">
          <a href="<?php echo $contact ?>" class="button button--entry">応募エントリー</a>
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>