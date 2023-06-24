 <div class="comics">

    <div class="comics-container">

      <div class="comics-group-cards">
        @foreach($infoComics as $i => $comic)
            <div class="comic-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                <h4>{{ $comic['title'] }}</h4>
            </div>
        @endforeach
      </div>

      <div class="btn">
        <button>LEARN MORE</button>
      </div>

      <div class="label">
        <h1>CURRENT SERIES</h1>
      </div>

    </div>

  </div>