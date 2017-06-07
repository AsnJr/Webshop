<html>
<link rel="stylesheet" href="kopen.css">
<head>
    <title>Bestelformulier</title>
</head>
<body>

<div class="checkout">
    <h1>Checkout</h1>
    <p>We accepteren de volgende betaalwijzen: </p>
    <p>MasterCard, Visa, American Express</p>


    <p>BEZORGADRES</p>
    <div class="addr">
        <input type="text" placeholder="Aantal Dagen" />
        <input type="text" placeholder="Aantal Personen" />
    </div>
    <p> </p>
    <div class="card">
        <div class="front side">
      <span class="company">
        CARD
      </span>
            PAYMENT CARD
            <input type="text" placeholder="Card number" class="cc-num" />
            <div>
                Expires:
                <input type="text" placeholder="MM/YY" class="cc-exp" />
            </div>
        </div>
        <div class="back side">
            <div class="stripe"></div>
            <div class="signature">
        <span class="right">
        CVC: <input type="text" placeholder="000" class="cc-cvc" maxlength="4" />
        </span>
                <span class="sig">
          our lovely customer
        </span>
            </div>
        </div>
    </div>
        <div class="button">
            <a href="bestellen.html">Bestellen!</a>
        </div>
    <div class="credit">
        Bedankt voor uw bestelling en toet ziens.
    </div>
</div>

</body>
</html>