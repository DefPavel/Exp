@extends('layouts.app')

@section('сontent')
     @include('extends.Slider')
     <div class="about-block">
       <div class="mob-col">
            <img src="{{asset('img/LogoCollegeLarge.png')}}" alt="">
       </div>
       <div class="col">
        <h3>Немного о нас</h3>
        <div class="line"></div>
        <span>
          <p>One of the world's premier academic and research institutions, the Jonathan Carroll University has driven new ways of thinking since our 1876 founding. Today, JCU is an intell
            ectual destination that draws inspired scholars to our Hyde Park
             and international campuses, keeping JCU at the nexus of ideas that challen
             ge and change the world.</p>
        </span>
        <button>
          Увидеть больше   <img src="{{asset('img/SeeMore.png')}}" alt="">
        </button>
       </div>
       <div class="col">
            <img src="{{asset('img/LogoCollegeLarge.png')}}" alt="">
       </div>
     </div>

     <div class="Speciality-block">
        <div class="spc-header">
          <h3>Наши специальности</h3>
          <div class="line"></div>
        </div>
        <div class="scp-content">
          <div class="row">
            <span class="spc-b-c">
              <span class="spc-b-c-h"></span>
              <span class="spc-b-c-t">
                <h4>Автомеханник</h4>
              </span>
            </span>
            <span class="spc-b-c">
              <span class="spc-b-c-h"></span>
              <span class="spc-b-c-t">
                <h4>Автомеханник</h4>
              </span>
            </span>
            <span class="spc-b-c">
              <span class="spc-b-c-h"></span>
              <span class="spc-b-c-t">
                <h4>Автомеханник</h4>
              </span>
            </span>
            <span class="spc-b-c">
              <span class="spc-b-c-h"></span>
              <span class="spc-b-c-t">
                <h4>Автомеханник</h4>
              </span>
            </span>
          </div>
          <div class="row">
            <span class="spc-b-c">
              <span class="spc-b-c-h"></span>
              <span class="spc-b-c-t">
                <h4>Автомеханник</h4>
              </span>
            </span>
            <span class="spc-b-c">
              <span class="spc-b-c-h"></span>
              <span class="spc-b-c-t">
                <h4>Автомеханник</h4>
              </span>
            </span>
            <span class="spc-b-c">
              <span class="spc-b-c-h"></span>
              <span class="spc-b-c-t">
                <h4>Автомеханник</h4>
              </span>
            </span>
            <span class="spc-b-c">
              <span class="spc-b-c-h"></span>
              <span class="spc-b-c-t">
                <h4>Автомеханник</h4>
              </span>
            </span>
          </div>
          <div class="row">

          </div>
        </div>
     </div>

     <div class="info-block">
       <h3>Более 6000+ студентов</h3>
       <div class="line"></div>
       <button>
         Присоедениться
       </button>
     </div>

     <div class="info-block2">
       <div class="info-header">
         <h3>Наши преимущества</h3>
         <div class="line"></div>
       </div>
       <div class="info-content">
         <div class="row">
           <span></span>
           <span></span>
           <span></span>
         </div>
       </div>
     </div>

    <div class="news-block">
      <div class="news-block-header">
        <h3>Новости</h3>
        <div class="line"></div>
      </div>
      <div class="news-block-content">
        <div class="row">
          <div class="news-wrap">
            <div class="news-wrap-h">
              <div class="cover-bckg">
                <button>
                  <a href="/NewsPage">Подробнее</a>
                </button>
              </div>
            </div>
            <div class="news-wrap-c">
              <div class="news-wrap-c-t">
                <h4>Конкурс красоты</h4>
              </div>
              <div class="news-wrap-c-a">
                <p>Сегодня в колледже ЛНУ имени Тараса Шевченко состоялся очередной конкурс красоты. Все девушки ...</p>
              </div>
            </div>
            <div class="news-wrap-f">
              <img src="{{asset('img/calendar.png')}}" alt="">
              <p>2 дня назад</p>
            </div>
          </div>

          <div class="news-wrap">
            <div class="news-wrap-h">
              <div class="cover-bckg">
                <button>
                  Подробнее
                </button>
              </div>
            </div>
            <div class="news-wrap-c">
              <div class="news-wrap-c-t">
                <h4>Конкурс красоты</h4>
              </div>
              <div class="news-wrap-c-a">
                <p>Сегодня в колледже ЛНУ имени Тараса Шевченко состоялся очередной конкурс красоты. Все девушки ...</p>
              </div>
            </div>
            <div class="news-wrap-f">
              <img src="{{asset('img/calendar.png')}}" alt="">
              <p>2 дня назад</p>
            </div>
          </div>

          <div class="news-wrap">
            <div class="news-wrap-h">
              <div class="cover-bckg">
                <button>
                  Подробнее
                </button>
              </div>
            </div>
            <div class="news-wrap-c">
              <div class="news-wrap-c-t">
                <h4>Конкурс красоты</h4>
              </div>
              <div class="news-wrap-c-a">
                <p>Сегодня в колледже ЛНУ имени Тараса Шевченко состоялся очередной конкурс красоты. Все девушки ...</p>
              </div>
            </div>
            <div class="news-wrap-f">
              <img src="{{asset('img/calendar.png')}}" alt="">
              <p>2 дня назад</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="news-wrap">
            <div class="news-wrap-h">
              <div class="cover-bckg">
                <button>
                  Подробнее
                </button>
              </div>
            </div>
            <div class="news-wrap-c">
              <div class="news-wrap-c-t">
                <h4>Конкурс красоты</h4>
              </div>
              <div class="news-wrap-c-a">
                <p>Сегодня в колледже ЛНУ имени Тараса Шевченко состоялся очередной конкурс красоты. Все девушки ...</p>
              </div>
            </div>
            <div class="news-wrap-f">
              <img src="{{asset('img/calendar.png')}}" alt="">
              <p>2 дня назад</p>
            </div>
          </div>

          <div class="news-wrap">
            <div class="news-wrap-h">
              <div class="cover-bckg">
                <button>
                  Подробнее
                </button>
              </div>
            </div>
            <div class="news-wrap-c">
              <div class="news-wrap-c-t">
                <h4>Конкурс красоты</h4>
              </div>
              <div class="news-wrap-c-a">
                <p>Сегодня в колледже ЛНУ имени Тараса Шевченко состоялся очередной конкурс красоты. Все девушки ...</p>
              </div>
            </div>
            <div class="news-wrap-f">
              <img src="{{asset('img/calendar.png')}}" alt="">
              <p>2 дня назад</p>
            </div>
          </div>

          <div class="news-wrap">
            <div class="news-wrap-h">
              <div class="cover-bckg">
                <button>
                  Подробнее
                </button>
              </div>
            </div>
            <div class="news-wrap-c">
              <div class="news-wrap-c-t">
                <h4>Конкурс красоты</h4>
              </div>
              <div class="news-wrap-c-a">
                <p>Сегодня в колледже ЛНУ имени Тараса Шевченко состоялся очередной конкурс красоты. Все девушки ...</p>
              </div>
            </div>
            <div class="news-wrap-f">
              <img src="{{asset('img/calendar.png')}}" alt="">
              <p>2 дня назад</p>
            </div>
          </div>
        </div>
      </div>

      <div class="news-block-footer">
        <button>
          Увидеть больше   <img src="{{asset('img/SeeMore.png')}}" alt="">
        </button>
      </div>
    </div>

    <div class="event-block">
      <div class="event-block-header">
        <h3>Анонсы</h3>
        <div class="line"></div>
      </div>
      <div class="event-block-content">
        <div class="row">
          <div class="event-wrapper">
            <div class="event-wrapper-h">
              <div class="cover-bckg">
                <button>
                  <a href="/EventPage">Подробнее</a>
                </button>
              </div>
            </div>
            <div class="event-wrapper-f">
              <div class="event-wrapper-f-d">
                <p>25</p>
                <p>Апреля</p>
                <p>12:00</p>
              </div>
              <div class="event-wrapper-f-t">
                <h4>Тренинг по футболу</h4>
                <p><img src="{{asset('img/RedPin.png')}}" alt="">Актовый зал</p>
              </div>
            </div>
          </div>

          <div class="event-wrapper">
            <div class="event-wrapper-h">
              <div class="cover-bckg">
                <button>
                  Подробнее
                </button>
              </div>
            </div>
            <div class="event-wrapper-f">
              <div class="event-wrapper-f-d">
                <p>25</p>
                <p>Апреля</p>
                <p>12:00</p>
              </div>
              <div class="event-wrapper-f-t">
                <h4>Тренинг по футболу</h4>
                <p><img src="{{asset('img/RedPin.png')}}" alt="">Актовый зал</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="event-wrapper">
            <div class="event-wrapper-h">
              <div class="cover-bckg">
                <button>
                  Подробнее
                </button>
              </div>
            </div>
            <div class="event-wrapper-f">
              <div class="event-wrapper-f-d">
                <p>25</p>
                <p>Апреля</p>
                <p>12:00</p>
              </div>
              <div class="event-wrapper-f-t">
                <h4>Тренинг по футболу</h4>
                <p><img src="{{asset('img/RedPin.png')}}" alt="">Актовый зал</p>
              </div>
            </div>
          </div>

          <div class="event-wrapper">
            <div class="event-wrapper-h">
              <div class="cover-bckg">
                <button>
                  Подробнее
                </button>
              </div>
            </div>
            <div class="event-wrapper-f">
              <div class="event-wrapper-f-d">
                <p>25</p>
                <p>Апреля</p>
                <p>12:00</p>
              </div>
              <div class="event-wrapper-f-t">
                <h4>Тренинг по футболу</h4>
                <p><img src="{{asset('img/RedPin.png')}}" alt="">Актовый зал</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="event-block-footer">
        <button>
          Увидеть больше   <img src="{{asset('img/SeeMore.png')}}" alt="">
        </button>
      </div>
    </div>
@endsection
