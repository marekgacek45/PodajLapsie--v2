
    

    <h2 >Nowa wiadmość ze strony <a href="https://podajlapsie.pl">podajlapsie.pl</a></h2>

    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Imię i nazwisko:</span>
        <span style="font-size: 16px">{{ $name }}o</span>
    </div>

    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Email:</span>
        <span style="font-size: 16px">{{ $email }}</span>
    </div>

    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Telefon:</span>
        <span style="font-size: 16px"> {{ $phone }}</span>
    </div>

    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Rasa psa:</span>
        <span style="font-size: 16px"> {{ $breed }}</span>
    </div>

  

    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Miejscowość:</span>
        <span style="font-size: 16px"> {{ $city }}</span>
    </div>

    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Wiadomość:</span>
        <p style="font-size: 16px"> {{ $content }}</p>
    </div>

    <div style="display:flex;gap:20px">

        <a href="tel:{{ $phone }}" style='background-color: #014a0a;padding:12px 24px;border-radius:12px;color:white;margin-right:20px'>Zadzwoń</a>
        <a href="mailto:{{ $email }}" style='background-color: #014a0a;padding:12px 24px;border-radius:12px;color:white'>Napisz</a>
        
    </div>
</div>

 