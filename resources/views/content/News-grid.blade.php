@extends('News')
@section('news-content')
<div class="News-body">
  <div class="col">
    <div class="news-block">
      <div class="news-block-header">
      </div>
      <div class="news-block-content">
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

        </div>
      </div>

      <div class="news-block-footer">
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
