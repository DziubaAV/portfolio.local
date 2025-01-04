@extends("welcome")
@section('title-block', 'Контакты')

@section('content')

<article class="contact active" data-page="contact">

    <header>
        <h2 class="h2 article-title">Контакты</h2>
    </header>

    <section class="mapbox" data-mapbox>
        <figure>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2417724.7681023935!2d27.977611099999997!3d53.717205199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46da2584e2ad4881%3A0xa1d181ec8c10!2z0JHQtdC70LDRgNGD0YHRjA!5e0!3m2!1sru!2sby!4v1735832166544!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                width="400" height="300" loading="lazy"></iframe>
        </figure>
    </section>

    <section class="contact-form">
        <h3 class="h3 form-title">Контактная форма</h3>

        <!-- Форму нужно отправлять в контроллер Laravel -->
        <form action="{{ url('/contact') }}" method="POST" class="form" data-form>
            @csrf <!-- CSRF защита для Laravel -->
            
            <div class="input-wrapper">
                <input type="text" name="fullname" class="form-input" placeholder="ФИО" required data-form-input>
                <input type="email" name="email" class="form-input" placeholder="Email адрес" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Твое сообщение" required data-form-input></textarea>

            <button class="form-btn" type="submit" data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>Отправить сообщение</span>
            </button>
        </form>

        <!-- Сообщение об успешной отправке -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </section>

</article>




@endsection