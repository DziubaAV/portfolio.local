@extends("welcome")
@section('title-block', 'Резюме') 

@section('content')

<!-- RESUME -->
      <article class="resume active">

        <header>
          <h2 class="h2 article-title">Резюме</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Опыт работы</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">РУП "Центр экспертиз и испытаний в здравоохранении"</h4>

              <span>2014 - настоящее время</span>

              <p class="timeline-text">
              Ведущий специалист
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">РНПЦ МТ</h4>

              <span>2013 - 2014</span>

              <p class="timeline-text">
              Инженер-электроник
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">ООО "МИРТА"</h4>

              <span>2012</span>

              <p class="timeline-text">
              Укладчик-упаковщик
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Образование</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Институт информационных технологий БГУИР</h4>

              <span>2021-2023</span>

              <p class="timeline-text">
              Программист - Web-дизайнер
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Международный государственный экологический университет имени А.Д. Сахарова</h4>

              <span>2009-2014</span>

              <p class="timeline-text">
              Инженер - программист (в здравоохранении)
              </p>

            </li>

          </ol>
        </section>

        

        <section class="skill">

          <h3 class="h3 skills-title">Навыки</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Laravel</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">PHP</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">HTML</h5>
                <data value="60">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 60%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">CSS</h5>
                <data value="60">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 60%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">JS</h5>
                <data value="50">65%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Photoshop</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>

@endsection