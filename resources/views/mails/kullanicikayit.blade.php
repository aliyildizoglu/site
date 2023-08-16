<h1>{{config('app.name')}}</h1>
<p>Kaydınız başarılı {{$kullanici->adsoyad}} bir şekilde yapıldı.</p>
<p>Kaydınız etkinleştirmek için <a href="{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyon_anahtari}}"> veya aşağıdaki bağlantıyı tarayıcınızda açınız.</p>
<p>{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyon_anahtari}}</p>
