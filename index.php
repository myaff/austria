<?php require('parts/header.php');?>
<div class="page">
  <section id="start" class="section section--start">
    <div class="section__top">
      <div class="container">
        <div class="grid-noGutter">
          <div class="col-4">
            <div class="section__img-wrapper">
              <img src="<?=$root?>build/img/start/start-people.png" alt="" class="section__img l-block--right mb-4 mr-2">
            </div>
            <div class="section__line"></div>
          </div>
          <div class="col-4 pt-10 a-scroll-box">
            <div class="section__heading mt-3">
              <div class="tp-heading--huge">6</div>
              <div class="tp-heading--large tp--uc ml-3">мужских занятий на&nbsp;каникулах в&nbsp;австрии</div>
            </div>
            <div class="section__arrow mt-10">
              <svg class="icon">
                <use xlink:href="#arrow-down"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section__bottom a-scroll-box a-parallax-box">
      <div class="section__bg a-parallax-bg"></div>
      <div class="section__line a-scrolling-line"></div>
      <div class="container a-scroll-box">
        <div class="grid-noGutter a-fade-slide">
          <div class="col-4" data-push-left="off-1">
            <div class="section__text ml-4">
              <div class="tp-body--big">
                <p>Сверкающие воды кристально чистых горных озер, белоснежные задумчивые ледники, расслабляющие и успокаивающие термальные воды, модные ночные клубы, приятные гастрономические открытия, безграничные возможности для романтических зимних каникул или экстремальных приключений и, конечно же, потрясающие воображение горнолыжные трассы с самой современной инфраструктурой — в Австрии любой мужчина найдет себе занятие по вкусу.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="freeride" class="section section--freeride">
    <div class="container">
      <div class="grid-noBottom">
        <div class="col-6" data-push-left="off-1">
          <div class="section__heading ml-3 a-scroll-box">
            <div class="tp-heading--huge a-fade-slide a-ordered">Где</div>
            <div class="tp-heading--large ml-3 a-fade-slide a-ordered">найти лучший <br/>фрирайд и самые <br/>крутые горнолыжные маршруты</div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter a-scroll-box">
        <div class="col-6 pt-9 a-scroll-box">
          <div class="section__text text-block--dark ml-2 a-fade-slide a-delay-3">
            <div class="tp-body--main">
              <p>За острыми ощущениями отправляемся в Гастайн и Лех-Цюрс. На первом курорте экстремалов ждут лучшие в Австрийских Альпах трассы для фрирайда, а второй — единственный в стране регион, где можно заняться хели-ски, то есть прыгнуть на склон прямо с вертолета. Обязательно стоит опробовать трассу «Харакири» в Циллертале. Она неспроста носит такое название, так как этот головокружительный спуск по плечу только самым смелым и подготовленным. Помимо этого, к вашим услугам горы-трехтысячники и ледники, зорбинг и тюбинг, ледолазание, полеты на парапланах, крутейшие сноупарки, айсшток и сотни километров маршрутов для спортсменов самого разного уровня — от новичков и любителей до суперпрофессионалов. И все это по единому ски-пассу в комплекте с продуманной инфраструктурой.</p>
            </div>
          </div>
        </div>
        <div class="col-2 section__mark-wrapper a-mark" data-push-left="off-1">
          <div class="section__mark mark">
            <div class="mark__line"></div>
            <div class="mark__icon ml-7 mb-4">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger">
              Гастайн <br/>
              Лех-Цюрс <br/>
              Циллерталь
            </div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter">
        <div class="col-6 section__slider-1-wrapper a-scroll-box" data-push-left="off-4">
          <div class="section__slider-1 pl-10 pb-10 a-fade-slide-left">
            <div class="owl-carousel owl-nav--dark">
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <img src="<?=$root.'build/img/freeride/slider-1_0'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-noBottom mt-10">
        <div class="col section__slider-2-wrapper a-scroll-box">
          <div class="section__slider-2 px-10 pb-10 a-fade-slide-right">
            <div class="owl-carousel owl-nav--dark owl-nav--center">
              <?php for ($i = 1; $i <= 2; $i++) { ?>
                <img src="<?=$root.'build/img/freeride/slider-2_0'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="beer" class="section section--beer">
    <div class="container">
      <div class="grid-noBottom-noWrap pt-8 a-scroll-box">
        <div class="col-7 section__img-1-wrapper mt-6 a-fade-slide-right a-delay-1">
          <img src="<?=$root?>build/img/beer/beer-img-1.png" alt="" class="section__img-1">
        </div>
        <div class="col-5 a-scroll-box">
          <div class="section__heading a-scroll-box">
            <div class="tp-heading--huge mb-1 a-fade-slide-left a-delay-2">Где</div>
            <div class="tp-heading--large ml-10 a-fade-slide-left a-delay-3">попробовать аутентичное австрийское пиво</div>
          </div>
          <div class="section__text a-fade-slide-left a-delay-4">
            <div class="tp-body--main ml-10 mt-6">
              <p>За неповторимыми австрийскими сортами пива, например «лесным» (с экстрактом пихтовой хвои) или «черным» (с альпийскими травами), едем в Зальцбург. В городе и окрестностях действуют с дюжину пивоварен, многие из которых основаны при монастырях еще в XIV–XV веках, свято чтут традиции и бережно хранят рецепты и секреты изготовления пенного, ведь пиво в Австрии — больше, чем просто напиток. Две старейшие пивоварни Зальцбурга — Stiegl (основана в 1492 году) и Augustiner-Bräu (основана в 1621 году). При них работают музеи, где можно подробнее узнать о становлении местного пивоварения и разобраться в технологии производства, а также обязательные дегустационные залы, в которых вам дадут попробовать самые разнообразные сорта австрийского пива.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-noBottom-noWrap mt-4 a-scroll-box">
        <div class="col-3 section__mark-wrapper a-mark" data-push-left="off-1">
          <div class="section__mark mark ml-5">
            <div class="mark__line"></div>
            <div class="mark__icon ml-7 mb-4">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger">
              Зальцбург<br/>
              аэропорт<br/>
              Вена-Швехат
            </div>
          </div>
        </div>
        <div class="col-10 section__slider-wrapper a-fade-slide-left a-delay-3">
          <div class="section__slider mr-5">
            <div class="owl-carousel owl-nav--light owl-nav--center">
              <?php for ($i = 1; $i <= 6; $i++) { ?>
                <img src="<?=$root.'build/img/beer/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
          <div class="section__line a-scrolling-line"></div>
        </div>
      </div>
      <div class="grid-noBottom a-scroll-box">
        <div class="col-5 section__img-2-wrapper a-fade-slide-right a-ordered">
          <img src="<?=$root?>build/img/beer/beer-img-2.jpg" alt="" class="section__img-2 l-block--right">
        </div>
        <div class="col-5 a-fade-slide-left a-ordered">
          <div class="section__text pt-10">
            <div class="tp-body--main mt-10">
              <p>Если не успеете продегустировать весь ассортимент за время отпуска, не отчаивайтесь: в аэропорте Вена-Швехат есть несколько заведений, пивная карта которых приятно удивит знатоков. Кроме того, бары и рестораны венской воздушной гавани порадуют бонусами в виде панорамного вида на взлетно-посадочную полосу (ориентируйтесь на указатели Panorama Restaurants) и возможности взять что-то с собой прямо на борт.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="food" class="section section--food">
    <div class="container pt-7">
      <div class="grid-noBottom mb-8">
        <div class="col-8" data-push-left="off-1">
          <div class="section__heading ml-4 a-scroll-box">
            <div class="tp-heading--huge mb-3 a-fade-slide-left a-ordered">Где</div>
            <div class="tp-heading--large ml-10 a-fade-slide-left a-ordered">продегустировать блюда местной кухни</div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter pt-2 a-scroll-box">
        <div class="col-3 mt-10 a-fade-slide-right a-delay-1" data-push-left="off-1">
          <div class="section__text">
            <div class="text-block--light py-3 px-4">
              <div class="tp-body--main">
                <p>Продолжаем открывать для себя гастрономическую Австрию в Лех-Цюрсе. Сразу после катания тут можно заглянуть в один из горных ресторанчиков с изысканным меню и невероятно вкусной едой, например, в Zur Kanne. Местный шеф Маркус Винклер (Markus Winkler) всегда находит, чем удивить своих гостей, а разнообразная винная карта порадует знатоков и ценителей. Еще один интересный ресторан в Лех-Цюрсе — Griggeler Stuba, где есть так называемое «меню-сюрприз». Выбрав которое, вы наверняка сделаете для себя приятное гастрономическое открытие — повара тут готовят блюда австрийской кухни из натуральных продуктов, тщательно соблюдая рецептуру и принципы haute cuisine.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 section__slider-wrapper a-fade-slide-left a-scroll-box a-delay-2">
          <div class="section__mark mark mark--alt mark--center pl-10 a-fade-slide a-delay-3">
            <div class="mark__icon mb-4">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger">Леx-Цюрс</div>
          </div>
          <div class="section__slider">
            <div class="owl-carousel owl-nav--light owl-nav--center">
              <?php for ($i = 1; $i <= 3; $i++) { ?>
                <img src="<?=$root.'build/img/food/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="clubs" class="section section--clubs">
    <div class="container pt-9 pb-10">
      <div class="grid-noBottom">
        <div class="col-6" data-push-left="off-3">
          <div class="section__heading ml-2 a-scroll-box">
            <div class="tp-heading--huge mb-2 a-fade-slide-left a-ordered">Где</div>
            <div class="tp-heading--large ml-3 a-fade-slide-left a-ordered">продолжить веселье&nbsp;до&nbsp;рассвета </div>
          </div>
        </div>
      </div>
      <div class="grid-noBottom section__content a-scroll-box">
        <div class="col-7 section__img-wrapper a-fade-slide">
          <img src="<?=$root?>build/img/clubs/clubs-img.png" alt="" class="section__img">
        </div>
        <div class="col-2 section__mark-wrapper a-mark">
          <div class="section__mark mark mt-4">
            <div class="mark__line"></div>
            <div class="mark__icon ml-7 mb-5">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger">Заальбах</div>
          </div>
        </div>
        <div class="grid-noBottom col-6 section__text-wrapper px-3 a-scroll-box" data-push-left="off-2">
          <div class="col-5 section__text a-fade-slide a-ordered">
            <div class="tp-body--main">
              <p>За лучшими тусовками гоним в Заальбах, который по праву носит звание самого молодежного и гламурного курорта Австрии. Жизнь здесь не замирает ни на минуту ни днем, ни ночью. Испытайте себя, прокатившись по снежной целине на сноубайке, квадроцикле или самостоятельно управляя ратраком. Или почувствуйте себя королем картинга на льду, на полном ходу вписываясь в повороты «веером» и оставляя позади себя клубы снежной пыли.</p>
            </div>
          </div>
          <div class="col-5 section__text a-fade-slide a-ordered">
            <div class="tp-body--main">
              <p>Сразу после отправляйтесь на вечеринку апре-ски, которая здесь начинается на вершине во всемирно известных клубах Goaßstall и HinterhagAlm, а затем плавно перетекает в бары с живой музыкой, расположенные в центре курорта. В Заальбах любят приезжать мировые поп- и рок-звезды, а в декабре тут проходит Rave On Snow — самый крупномасштабный зимний фестиваль клубной музыки. Пропускать не рекомендуется!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-noBottom mt-3 a-scroll-box">
        <div class="col-6 section__slider-wrapper a-fade-slide-left" data-push-left="off-4">
          <div class="section__slider ml-3">
            <div class="owl-carousel owl-nav--light owl-nav--center">
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <img src="<?=$root.'build/img/clubs/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="spa" class="section section--spa">
    <div class="container pt-8 pb-10">
      <div class="grid">
        <div class="col-6" data-push-left="off-1">
          <div class="section__heading ml-3 a-scroll-box">
            <div class="tp-heading--huge mb-2 a-fade-slide a-ordered">Где</div>
            <div class="tp-heading--large ml-3 a-fade-slide a-ordered">расслабиться после&nbsp;насыщенного&nbsp;дня</div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter section__content">
        <div class="col-4 a-scroll-box" data-push-left="off-1">
          <div class="section__text ml-10 mt-3 mb-6 pl-5 pr-4 a-fade-slide-right">
            <div class="tp-body--main">
              <p>Восстановлением сил и пополнением жизненной энергии занимаемся в саунах, но не забываем, что они в Австрии, во-первых, смешанные (то есть мужчины и женщины парятся вместе) и, во-вторых, в них пускают только полностью раздетым. Лучшие сауны и термальные комплексы, в бассейны которых вода поступает прямо из природных источников, можно найти в Гастайне.</p>
            </div>
          </div>
          <div class="section__img-wrapper pr-3 a-scroll-box">
            <img src="<?=$root?>build/img/spa/spa-img.jpg" alt="" class="section__img l-block--right a-fade-slide">
          </div>
        </div>
        <div class="col-5 pl-2 a-scroll-box">
          <div class="section__slider pb-10 a-fade-slide-left a-delay-1">
            <div class="owl-carousel owl-nav--dark">
              <?php for ($i = 1; $i <= 5; $i++) { ?>
                <img src="<?=$root.'build/img/spa/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
          <div class="section__text mt-5 mb-7 a-scroll-box">
            <div class="tp-body--main a-fade-slide">
              <p>Здесь же расположены знаменитые целебные штольни, а неподалеку — Альпийские термы Бад-Хофгастайна и Скальные термы Бад-Гастайна, куда можно попасть сразу со склона. Помимо этого, стоит попробовать открытые и закрытые бассейны и великолепные велнес-процедуры в комплексе Tauern Spa в Капруне с захватывающим видом на горный массив заповедника Высокий Тауэрн.</p>
            </div>
          </div>
          <div class="section__mark-wrapper">
            <div class="section__mark mark mark--inline a-scroll-box">
              <div class="mark__line a-scale"></div>
              <div class="mark__icon mr-6 a-fade-slide-right a-delay-2">
                <svg class="icon"><use xlink:href="#pin"/></svg>
              </div>
              <div class="mark__text tp-heading--bigger a-fade-slide-left a-delay-3">
                Гастайн<br/>
                Целль-ам-Зее — Капрун
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="walking" class="section section--walking">
    <div class="container pt-2 pb-5">
      <div class="grid-noBottom">
        <div class="col-8" data-push-left="off-1">
          <div class="section__heading ml-3 a-scroll-box">
            <div class="tp-heading--huge mb-2 a-fade-slide a-ordered">Где</div>
            <div class="tp-heading--large ml-3 a-fade-slide a-ordered">прогуляться над&nbsp;облаками и&nbsp;запечатлеть лучшие&nbsp;виды</div>
          </div>
        </div>
      </div>
      <div class="grid-noGutter mt-1">
        <div class="col-4 section__slider-wrapper a-scroll-box" data-push-left="off-1">
          <div class="section__slider ml-4 pb-10 a-fade-slide-right">
            <div class="owl-carousel owl-nav--light owl-nav--center">
              <?php for ($i = 1; $i <= 5; $i++) { ?>
                <img src="<?=$root.'build/img/walking/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
          <div class="section__mark-wrapper mt-6 ml-5 a-scroll-box">
            <div class="section__mark mark a-mark">
              <div class="mark__line"></div>
              <div class="mark__icon ml-6 mb-1">
                <svg class="icon"><use xlink:href="#pin"/></svg>
              </div>
              <div class="mark__text tp-heading--bigger ml-6">Целль-ам-Зее — Капрун</div>
            </div>
          </div>
        </div>
        <div class="col-3 section__text-wrapper a-scroll-box">
          <div class="section__text text-block--light p-4 my-10 a-fade-slide-left a-delay-1">
            <div class="tp-body--main mb-4">
              <p>За самыми сногсшибательными фотокадрами, на которых белоснежные ледники будут выситься над сверкающей гладью озера и ярко-зелеными горными лугами, едем в регион Целль-ам-Зее — Капрун. Над долиной возвышается гордый ледник Кицштайнхорн, поэтому снег здесь лежит даже летом и кататься можно круглогодично. Расположенный тут же национальный парк Высокий Тауэрн объединяет четыре климатические зоны, через которые можно пройти за 2,5 часа и выйти на потрясающую воображение панорамную платформу Top of Salzburg, откуда открывается захватывающий вид на горные пики. Этот пункт обязателен к посещению для охотников за уникальными фотокадрами. Другая важная достопримечательность Целль-ам-Зее — гора Шмиттен, на вершине которой можно любоваться потрясающей панорамой более 30 альпийских вершин и неспешно прогуливаться по высокогорному променаду. А еще Целль-ам-Зее — это озеро Целлер с его многочисленными водными развлечениями, реки Зальцах и Заалах, ущелье Зигмунд-Тун с живописным водопадом и горная ферма Аугут-Бауэре с ламами и альпаками.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="crazy" class="section section--crazy">
    <div class="container pt-10">
      <div class="grid-noBottom mt-2 a-scroll-box">
        <div class="col-5 section__slider-wrapper mt-2 a-fade-slide-right a-scroll-box">
          <div class="section__slider">
            <div class="owl-carousel owl-nav--light owl-nav--center">
              <?php for ($i = 1; $i <= 2; $i++) { ?>
                <img src="<?=$root.'build/img/crazy/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
              <?php } ?>
            </div>
          </div>
          <div class="section__mark-wrapper a-fade-slide a-delay-5">
            <div class="section__mark mark mark--alt mark--inline">
              <div class="mark__icon mr-4">
                <svg class="icon"><use xlink:href="#pin"/></svg>
              </div>
              <div class="mark__text tp-heading--bigger ml-1 mt-5">Зальцбург</div>
            </div>
          </div>
        </div>
        <div class="col-5 section__content">
          <div class="section__line a-scrolling-line"></div>
          <div class="section__heading a-scroll-box">
            <div class="tp-heading--huge mb-3 a-fade-slide-left a-delay-1">Где</div>
            <div class="tp-heading--large color-alt ml-3 a-fade-slide-left a-delay-2">пощекотать себе&nbsp;нервы, помимо горнолыжных&nbsp;трасс</div>
          </div>
          <div class="section__text ml-9 mt-7 a-scroll-box">
            <div class="text-block--light p-4 a-fade-slide-left">
              <div class="tp-body--main mb-3">
                <p>Чтобы побывать в настоящем «Кошмаре перед Рождеством», вновь отправляемся в Зальцбург, где можно пощекотать себе нервы на параде «Крампусов». Актеры в гигантских масках чертей шествуют по городу под торжественные песнопения, и в какой-то момент возникает ощущение, что все это по-настоящему и черти тоже настоящие — а вдруг схватят! Перевести дух чуть позднее позволят рождественские концерты, на которых вы услышите атмосферное, пробирающее до мурашек исполнение классических «евангельских» произведений Баха и Генделя.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> <!-- /.page -->
<?php require('parts/footer.php'); ?>