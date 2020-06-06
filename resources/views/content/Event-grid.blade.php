@extends('Events')

@section('event-content')
<div class="Events-body">
  <div class="col">
    <div class="event-block">
      <div class="event-block-header">
      </div>
      <div class="event-block-content">
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
        <div class="pag-block">
          <span></span>
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="filter-block">
      <h3>Поиск</h3>
      <div class="redline">
        <span></span>
        <span></span>
      </div>
      <span class="search-sp">
        <input type="text"/>
        <button>

        </button>
      </span>
    </div>
    <div class="filter-block">
      <h3>Архив</h3>
      <div class="redline">
        <span></span>
        <span></span>
      </div>
      <span class="filter-ar">
        <span class="f-col">
          <p>Год</p>
        </span>
        <span class="f-col">
          <select name="" id="">
            <option value="">2020</option>
            <option value=""></option>
          </select>
        </span>
      </span>
      <span class="filter-ar">
        <span class="f-col">
          <p>Месяц</p>
        </span>
          <span class="f-col">
            <select name="" id="">
              <option value="">Апрель</option>
              <option value=""></option>
            </select>
          </span>
      </span>
    </div>
  </div>
</div>
@endsection
