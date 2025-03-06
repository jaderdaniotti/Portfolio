<x-componenti>
    <div class="row">
        <div class="col-12 py-3">
            <h1><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
              </svg> Contattami <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
              </svg></h1>
        </div>
        <section class="contact-section py-0">
            <div class="contact-intro">

              <h3 class="contact-description">
                Compila il form per contattarmi e collaborare insieme.
              </h3>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>                
            @endif
            <form class="contact-form" action="/sendmail" method="POST">
            @csrf
              <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
              <input type="hidden" name="subject" value="New Contact Form Submission from Web3Forms" />
              <input type="hidden" name="from_name" value="My Website" />

              <div class="form-group-container">
                <div class="form-group">
                  <label for="name" class="form-label text-start">Nome e Cognome/Nome Azienda</label>
                  <input id="name" name="name" class="form-input" placeholder="Inserisci il tuo nome completo o il nome della tua azienda..." value="{{old('name')}}" type="text" />
                </div>
                <div class="form-group">
                  <label for="email" class="form-label text-start">Email</label>
                  <input id="email" name="email" class="form-input" placeholder="Inserisci la tua email privata o aziendale..." value="{{old('email')}}" type="email" />
                </div>
                <div class="form-group">
                  <label for="phone" class="form-label text-start">Numero di telefono</label>
                  <input id="phone" name="phone" class="form-input" placeholder="350 123 4567" type="text" value="{{old('phone')}}"/>
                </div>
                <div class="form-group">
                    <label for="web" class="form-label text-start">Sito Web</label>
                    <input id="web" name="web" class="form-input" placeholder="Inserisci il tuo sito web..." value="{{old('web')}}" type="text" />
                  </div>
                <div class="form-group">
                  <label for="message" class="form-label text-start">Messaggio</label>
                  <textarea class="form-textarea" id="message" name="message" placeholder="Inserisci il tuo messaggio...">{{old('message')}}</textarea>
                </div>
              </div>
              <button class="form-submit" type="submit">Invia</button>
            </form>
          
          </section>
    </div>
</x-componenti>