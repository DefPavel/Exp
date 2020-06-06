@extends('Events')

@section('event-content')
<div class="ev-pg-wr">
  <div class="col">
    <div class="row">
      <div class="events-preview">
        <img src="{{asset('img/Fottbal.png')}}" alt="">
      </div>
      <div class="events-text-bl">
        <span><h3>Дополнительная информация</h3></span>
        <div class="redline">
          <span></span>
          <span></span>
        </div>
        <span>
          <p>
            Являясь всего лишь частью общей картины, тщательные исследования конкурентов призывают нас к новым свершениям, которые,
            в свою очередь, должны быть объективно рассмотрены соответствующими инстанциями.
          </p>
      </span>
      </div>
    </div>
    <div class="row">
      <div class="events-text-head">
        <h3>Тренинг по футболу</h3>
        <div class="line"></div>
        <p>В целом, конечно, перспективное планирование, в своём классическом представлении, допускает внедрение переосмысления
          внешнеэкономических политик. Безусловно, высококачественный прототип будущего проекта способствует повышению качества дальнейших направлений развития.
          Как принято считать, диаграммы связей и по сей
          день остаются уделом либералов, которые жаждут быть указаны как претенденты на роль ключевых факторов.</p>
        <p>В целом, конечно, перспективное планирование, в своём классическом представлении, допускает внедрение переосмысления
          внешнеэкономических политик. Безусловно, высококачественный прототип будущего проекта способствует повышению качества дальнейших направлений развития.
          Как принято считать, диаграммы связей и по сей день остаются уделом либералов,
          которые жаждут быть указаны как претенденты на роль ключевых факторов.</p>
      </div>
      <div class="events-text-bl">
        <span><h3>Где и когда состоится мероприятие</h3></span>
        <div class="redline">
          <span></span>
          <span></span>
        </div>
        <span class="events-text-date">
          <span><p>Дата:</p><p>20 апреля 2020 года</p></span>
          <span><p>Время:</p><p>14:00</p></span>
          <span><p>Адрес:</p><p>ул. Шеремета, 7, Луганск</p></span>
        </span>
      </div>
      <div class="events-text-bl">
        <span><h3>Что нужно взять с собой</h3></span>
        <div class="redline">
          <span></span>
          <span></span>
        </div>
        <span>
          <p>
            В целом, конечно, перспективное планирование, в своём классическом представлении, допускает внедрение переосмысления внешнеэкономических политик.
            ыБезусловно, высококачественный прототип будущего проекта способствует повышению качества дальнейших направлений развития.
            Как принято считать, диаграммы связей и по сей день остаются уделом либералов, которые жаждут быть указаны как претенденты на роль ключевых факторов.
          </p>
      </span>
      </div>
      <div class="events-text-footer">
        <button>Присоеденится</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="event-block">
      <div class="event-block-header">
        <h3>Другие Анонсы</h3>
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
  </div>
</div>
@endsection
