<?php require('../parts/header-mobile.php');?>
<div class="page">
  <section id="start" class="section section--start">
    <div class="section__top">
      <div class="container">
        <div class="section__heading ml-9 mt-8">
          <div class="tp-heading--huge">6</div>
          <div class="tp-heading--large tp--uc ml-3">мужских занятий на&nbsp;каникулах в&nbsp;австрии</div>
        </div>
        <div class="section__arrow mt-9 mb-6 mx-auto">
          <svg class="icon">
            <use xlink:href="#arrow-down"/>
          </svg>
        </div>
        <div class="section__line mx-auto"></div>
      </div>
    </div>
    <div class="section__bottom pb-6">
      <div class="container">
        <div class="section__img-wrapper">
          <img src="<?=$root?>build/img/start/start-man.png" alt="" class="section__img">
          <div class="section__line"></div>
        </div>
        <div class="section__text">
          <div class="tp-body--big">
            <p>Сверкающие воды кристально чистых горных озер, белоснежные задумчивые ледники, расслабляющие и успокаивающие термальные воды, модные ночные клубы, приятные гастрономические открытия, безграничные возможности для романтических зимних каникул или экстремальных приключений и, конечно же, потрясающие воображение горнолыжные трассы с самой современной инфраструктурой — в Австрии любой мужчина найдет себе занятие по вкусу.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="freeride" class="section section--freeride">
    <div class="container">
      <div class="section__heading mt-5">
        <div class="tp-heading--huge mb-3">Где</div>
        <div class="tp-heading--large ml-3">найти лучший <br/>фрирайд и самые <br/>крутые горнолыжные маршруты</div>
      </div>
    </div>
    <div class="section__slider-1-wrapper mt-6">
      <div class="section__slider-1">
        <div class="owl-carousel owl-nav--dark owl-nav--center">
          <?php for ($i = 1; $i <= 4; $i++) { ?>
            <img src="<?=$root.'build/img/freeride/slider-1_0'.$i.'.jpg'?>" class="owl-lazy" />
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="section__text text-block--dark px-9 pt-7 pb-10">
      <div class="tp-body--main mb-5">
        <p>За острыми ощущениями отправляемся в Гастайн и Лех-Цюрс. На первом курорте экстремалов ждут лучшие в Австрийских Альпах трассы для фрирайда, а второй — единственный в стране регион, где можно заняться хели-ски, то есть прыгнуть на склон прямо с вертолета. Обязательно стоит опробовать трассу «Харакири» в Циллертале. Она неспроста носит такое название, так как этот головокружительный спуск по плечу только самым смелым и подготовленным. Помимо этого, к вашим услугам горы-трехтысячники и ледники, зорбинг и тюбинг, ледолазание, полеты на парапланах, крутейшие сноупарки, айсшток и сотни километров маршрутов для спортсменов самого разного уровня — от новичков и любителей до суперпрофессионалов. И все это по единому ски-пассу в комплекте с продуманной инфраструктурой.</p>
      </div>
    </div>
    <div class="section__slider-2-wrapper">
      <div class="section__slider-2">
        <div class="owl-carousel owl-nav--dark owl-nav--center">
          <?php for ($i = 1; $i <= 2; $i++) { ?>
            <img src="<?=$root.'build/img/freeride/slider-2_0'.$i.'.jpg'?>" class="owl-lazy" />
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section__mark-wrapper">
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
  </section>
  <section id="beer" class="section section--beer">
    <div class="section__img-1-wrapper mt-10">
      <img src="<?=$root?>build/img/beer/beer-img_m.jpg" alt="" class="section__img-1 section__img">
    </div>
    <div class="container">
      <div class="section__heading">
        <div class="tp-heading--huge mb-4">Где</div>
        <div class="tp-heading--large ml-3">попробовать аутентичное австрийское <br/>пиво</div>
      </div>
      <div class="section__text">
        <div class="tp-body--main mx-9 my-7">
          <p>За неповторимыми австрийскими сортами пива, например «лесным» (с экстрактом пихтовой хвои) или «черным» (с альпийскими травами), едем в Зальцбург. В городе и окрестностях действуют с дюжину пивоварен, многие из которых основаны при монастырях еще в XIV–XV веках, свято чтут традиции и бережно хранят рецепты и секреты изготовления пенного, ведь пиво в Австрии — больше, чем просто напиток. Две старейшие пивоварни Зальцбурга — Stiegl (основана в 1492 году) и Augustiner-Bräu (основана в 1621 году). При них работают музеи, где можно подробнее узнать о становлении местного пивоварения и разобраться в технологии производства, а также обязательные дегустационные залы, в которых вам дадут попробовать самые разнообразные сорта австрийского пива.</p>
        </div>
      </div>
      <div class="section__slider-wrapper my-8">
        <div class="section__slider">
          <div class="owl-carousel owl-nav--light owl-nav--center">
            <?php for ($i = 1; $i <= 6; $i++) { ?>
              <img src="<?=$root.'build/img/beer/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="section__img-2-wrapper mt-10">
        <img src="<?=$root?>build/img/beer/beer-img-2.jpg" alt="" class="section__img-2 l-block--right mr-10">
        <div class="section__mark-wrapper">
          <div class="section__mark mark">
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
      </div>
      <div class="section__text mt-7 mb-5 px-9">
        <div class="tp-body--main">
          <p>Если не успеете продегустировать весь ассортимент за время отпуска, не отчаивайтесь: в аэропорте Вена-Швехат есть несколько заведений, пивная карта которых приятно удивит знатоков. Кроме того, бары и рестораны венской воздушной гавани порадуют бонусами в виде панорамного вида на взлетно-посадочную полосу (ориентируйтесь на указатели Panorama Restaurants) и возможности взять что-то с собой прямо на борт.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="food" class="section section--food">
    <div class="container">
      <div class="section__heading my-6">
        <div class="tp-heading--huge mb-3">Где</div>
        <div class="tp-heading--large ml-3">продегустировать блюда местной <br/>кухни</div>
      </div>
      <div class="section__slider-wrapper my-8">
        <div class="section__mark mark mark--alt mark--center">
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
      <div class="section__text my-9">
        <div class="text-block--light px-9">
          <div class="tp-body--main">
            <p>Продолжаем открывать для себя гастрономическую Австрию в Лех-Цюрсе. Сразу после катания тут можно заглянуть в один из горных ресторанчиков с изысканным меню и невероятно вкусной едой, например, в Zur Kanne. Местный шеф Маркус Винклер (Markus Winkler) всегда находит, чем удивить своих гостей, а разнообразная винная карта порадует знатоков и ценителей. Еще один интересный ресторан в Лех-Цюрсе — Griggeler Stuba, где есть так называемое «меню-сюрприз». Выбрав которое, вы наверняка сделаете для себя приятное гастрономическое открытие — повара тут готовят блюда австрийской кухни из натуральных продуктов, тщательно соблюдая рецептуру и принципы haute cuisine.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="clubs" class="section section--clubs">
    <div class="container">
      <div class="section__heading mt-5">
        <div class="tp-heading--huge mb-2">Где</div>
        <div class="tp-heading--large ml-3">продолжить <br/>веселье <br/>до&nbsp;рассвета </div>
      </div>
      <div class="section__mark-wrapper">
        <div class="section__mark mark">
          <div class="mark__line mx-auto"></div>
          <div class="mark__icon mx-auto mb-3">
            <svg class="icon"><use xlink:href="#pin"/></svg>
          </div>
          <div class="mark__text tp-heading--bigger">Заальбах</div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section__img-wrapper mt-8">
        <img src="<?=$root?>build/img/clubs/clubs-img_m.png" alt="" class="section__img">
      </div>
      <div class="section__text ml-10 pl-9 mb-9">
        <div class="tp-body--main">
          <p>За лучшими тусовками гоним в Заальбах, который по праву носит звание самого молодежного и гламурного курорта Австрии. Жизнь здесь не замирает ни на минуту ни днем, ни ночью. Испытайте себя, прокатившись по снежной целине на сноубайке, квадроцикле или самостоятельно управляя ратраком. Или почувствуйте себя королем картинга на льду, на полном ходу вписываясь в повороты «веером» и оставляя позади себя клубы снежной пыли.</p>
        </div>
        <div class="tp-body--main">
          <p>Сразу после отправляйтесь на вечеринку апре-ски, которая здесь начинается на вершине во всемирно известных клубах Goaßstall и HinterhagAlm, а затем плавно перетекает в бары с живой музыкой, расположенные в центре курорта. В Заальбах любят приезжать мировые поп- и рок-звезды, а в декабре тут проходит Rave On Snow — самый крупномасштабный зимний фестиваль клубной музыки. Пропускать не рекомендуется!</p>
        </div>
      </div>
    </div>
    <div class="section__slider-wrapper my-9">
      <div class="section__slider">
        <div class="owl-carousel owl-nav--light owl-nav--center">
          <?php for ($i = 1; $i <= 4; $i++) { ?>
            <img src="<?=$root.'build/img/clubs/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <section id="spa" class="section section--spa">
    <div class="container">
      <div class="section__heading">
        <div class="tp-heading--huge mb-2">Где</div>
        <div class="tp-heading--large ml-3">расслабиться после насыщенного&nbsp;дня</div>
      </div>
      <div class="section__text my-7">
        <div class="tp-body--main">
          <p>Восстановлением сил и пополнением жизненной энергии занимаемся в саунах, но не забываем, что они в Австрии, во-первых, смешанные (то есть мужчины и женщины парятся вместе) и, во-вторых, в них пускают только полностью раздетым. Лучшие сауны и термальные комплексы, в бассейны которых вода поступает прямо из природных источников, можно найти в Гастайне.</p>
        </div>
      </div>
      <div class="section__slider-wrapper">
        <div class="section__slider">
          <div class="owl-carousel owl-nav--dark owl-nav--center">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
              <img src="<?=$root.'build/img/spa/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="section__text mt-5 mb-8">
        <div class="tp-body--main">
          <p>Здесь же расположены знаменитые целебные штольни, а неподалеку — Альпийские термы Бад-Хофгастайна и Скальные термы Бад-Гастайна, куда можно попасть сразу со склона. Помимо этого, стоит попробовать открытые и закрытые бассейны и великолепные велнес-процедуры в комплексе Tauern Spa в Капруне с захватывающим видом на горный массив заповедника Высокий Тауэрн.</p>
        </div>
      </div>
      <div class="section__img-wrapper px-7">
        <img src="<?=$root?>build/img/spa/spa-img.jpg" alt="" class="section__img">
      </div>
      <div class="section__mark-wrapper pl-7 my-7">
        <div class="section__mark mark mark--inline">
          <div class="mark__line"></div>
          <div class="mark__icon mr-6">
            <svg class="icon"><use xlink:href="#pin"/></svg>
          </div>
          <div class="mark__text tp-heading--bigger">
            Гастайн<br/>
            Целль-ам-Зее — Капрун
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="walking" class="section section--walking">
    <div class="container">
      <div class="section__heading mt-10 mb-6">
        <div class="tp-heading--huge mb-4">Где</div>
        <div class="tp-heading--large ml-3">прогуляться над&nbsp;облаками и&nbsp;запечатлеть лучшие&nbsp;виды</div>
      </div>
      <div class="section__slider-wrapper my-6 px-9">
        <div class="section__slider">
          <div class="owl-carousel owl-nav--light owl-nav--center">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
              <img src="<?=$root.'build/img/walking/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="section__text text-block--light px-9 my-7">
        <div class="tp-body--main mb-4">
          <p>За самыми сногсшибательными фотокадрами, на которых белоснежные ледники будут выситься над сверкающей гладью озера и ярко-зелеными горными лугами, едем в регион Целль-ам-Зее — Капрун. Над долиной возвышается гордый ледник Кицштайнхорн, поэтому снег здесь лежит даже летом и кататься можно круглогодично. Расположенный тут же национальный парк Высокий Тауэрн объединяет четыре климатические зоны, через которые можно пройти за 2,5 часа и выйти на потрясающую воображение панорамную платформу Top of Salzburg, откуда открывается захватывающий вид на горные пики. Этот пункт обязателен к посещению для охотников за уникальными фотокадрами. Другая важная достопримечательность Целль-ам-Зее — гора Шмиттен, на вершине которой можно любоваться потрясающей панорамой более 30 альпийских вершин и неспешно прогуливаться по высокогорному променаду. А еще Целль-ам-Зее — это озеро Целлер с его многочисленными водными развлечениями, реки Зальцах и Заалах, ущелье Зигмунд-Тун с живописным водопадом и горная ферма Аугут-Бауэре с ламами и альпаками.</p>
        </div>
      </div>
      <div class="section__mark-wrapper my-7">
        <div class="section__mark mark mark--inline">
          <div class="mark__line"></div>
          <div class="mark__icon mr-4">
            <svg class="icon"><use xlink:href="#pin"/></svg>
          </div>
          <div class="mark__text tp-heading--bigger">Целль-ам-Зее — Капрун</div>
        </div>
      </div>
    </div>
  </section>
  <section id="crazy" class="section section--crazy">
    <div class="container">
      <div class="section__heading mt-8">
        <div class="tp-heading--huge mb-3">Где</div>
        <div class="tp-heading--large color-alt ml-3">пощекотать себе&nbsp;нервы, помимо горнолыжных трасс</div>
      </div>
      <div class="section__slider-wrapper">
        <div class="section__slider">
          <div class="owl-carousel owl-nav--light owl-nav--center">
            <?php for ($i = 1; $i <= 2; $i++) { ?>
              <img src="<?=$root.'build/img/crazy/slider_0'.$i.'.jpg'?>" class="owl-lazy" />
            <?php } ?>
          </div>
        </div>
        <div class="section__mark-wrapper">
          <div class="section__mark mark mark--alt mark--inline">
            <div class="mark__icon mr-4">
              <svg class="icon"><use xlink:href="#pin"/></svg>
            </div>
            <div class="mark__text tp-heading--bigger ml-1 mt-5">Зальцбург</div>
          </div>
        </div>
      </div>
      <div class="section__text">
        <div class="text-block--light px-10 pt-8 pb-6">
          <div class="tp-body--main">
            <p>Чтобы побывать в настоящем «Кошмаре перед Рождеством», вновь отправляемся в Зальцбург, где можно пощекотать себе нервы на параде «Крампусов». Актеры в гигантских масках чертей шествуют по городу под торжественные песнопения, и в какой-то момент возникает ощущение, что все это по-настоящему и черти тоже настоящие — а вдруг схватят! Перевести дух чуть позднее позволят рождественские концерты, на которых вы услышите атмосферное, пробирающее до мурашек исполнение классических «евангельских» произведений Баха и Генделя.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> <!-- /.page -->
<?php require($root.'/parts/footer-mobile.php'); ?>