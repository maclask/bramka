<?php
/**
 * @package bramka
 * @since bramka 1.0
 */
?> 
<main>
  <div class="donate-module">
    <form class="donate-module-content" id="ccform" method="POST" action="<?php echo plugins_url('process.php',__FILE__ ); ?>">
	<fieldset class="donation-module-content-amount active">
        <div class="donation-instructions">
          <p>Jaką kwotą chciałbyś/chciałabyś nas wesprzeć?</p>
        </div>
        <div class="donation-module-amounts">
          <ul>
            <div class="singlerow">
              <li class="amount amount-cont-1 column">
                <input type="radio" name="amount" id="amount_5" value="5" tabindex="5"/>
                <label class="btn" for="amount_5">5 zł</label>
              </li>
              <li class="amount amount-cont-2 column">
                <input type="radio" name="amount" id="amount_10" value="10" tabindex="10"/>
                <label class="btn" for="amount_10">10 zł</label>
              </li>
            </div>
            <div class="singlerow">
              <li class="amount amount-count-3 column">
                <input type="radio" name="amount" id="amount_35" value="35" tabindex="10"/>
                <label class="btn" for="amount_35">20 zł</label>
              </li>
              <li class="amount amount-cont-4 column">
                <input type="radio" name="amount" id="amount_50" value="50" tabindex="50"/>
                <label class="btn" for="amount_50">50 zł</label>
              </li>
            </div>
            <div class="singlerow">
              <li class="amount amount-count-5 column">
                <input type="radio" name="amount" id="amount_100" value="100" tabindex="10"/>
                <label class="btn" for="amount_100">100 zł</label>
              </li>
              <li class="amount-count-other column">
                <label for="amount_other">Inna kwota</label>
                <input type="tel" name="amount_other" id="amount_other" placeholder="Inna kwota" tabindex="18"/>
              </li>
            </div>
          </ul>
          <div class="singlerow">
            <div class="provision column">
              <input type="checkbox" name="provision" id="provision"/>
              <label for="provision"><span></span>  Chcę pokryć koszty prowizji Tpay.</label>
              <div class="help-tip">
                <p>Płatnośc realizowana jest przez serwis Tpay. Każda transakcja potrącana jest o 1,2%. Jeżeli chcesz zapłacić tę prowizję za nas - zaznacz tę opcję. Doliczymy odpowiadnią sumę do twojej kwoty.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="next-step"> 
          <button class="btn btn--large next" type="button" name="next" value="Dalej">Dalej</button>
        </div>
      </fieldset>
      <fieldset class="donation-module-content-name previous">
        <div class="donation-instructions">
          <p>Podaj swoje dane.</p>
        </div>
        <div class="donation-module-information">
          <div class="information-name">
            <div class="singlerow">
              <div class="first-name column">
                <label for="first-name">Imię</label>
                <input type="text" id="first-name" name="first-name"  placeholder="Jan" data-validation="length" data-validation-length="min2" data-validation-error-msg="Podaj imię"/>
              </div>
              <div class="last-name column">
                <label for="last-name">Nazwisko</label>
                <input type="text" id="last-name" name="last-name" placeholder="Kowalski" data-validation="length" data-validation-length="min2" data-validation-error-msg="Podaj nazwisko" />
              </div>
            </div>
          </div>
        </div>
        <div class="singlerow">
          <div class="information-email column">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" data-validation="email" placeholder="jankowalski@domena.pl" data-validation-error-msg="Podaj email" data-validation="required"/>
          </div>
        </div>
        <div class="singlerow"> 
          <div class="more-informations column">
            <input type="checkbox" name="more-informations" value='0' id="more-informations"/>
            <label for="more-informations"><span></span>  Chcę podać dane korespondencyjne.</label>
            <div class="help-tip">
              <p>Podanie danych korespondencyjnych jest opcjonalne. Jeśli jednak je podasz, będziemy mogli się komunikować także listownie.</p>
            </div>
          </div>
        </div>
        <div class="next-step">
          <button class="btn btn--large next" type="button" name="next" value="next">Dalej</button>
        </div>
      </fieldset>
      <fieldset class="donation-module-content-payment previous">
        <div class="more-informations-input">
          <div class="donation-instructions">
            <p>Podaj dane korespondencyjne.</p>
          </div>
          <div class="singlerow">
            <div class="information-cc column">
              <label class="control-label" for="adress">Adres</label>
              <input class="form-control cc-number" id="cc-number" type="text" name="adress" data-validation="length" data-validation-allowing="/-" placeholder="Polna 1" data-validation-error-msg="Podaj adres" data-validation-length="min2" data-validation-depends-on="more-informations" />
            </div>
          </div>
          <div class="singlerow">
            <div class="form-group column">
              <label class="control-label" for="zipcode">Kod pocztowy</label>
              <input type="text" name="zipcode" placeholder="00-000" data-validation-error-msg="Podaj kod pocztowy" data-validation="custom" data-validation-regexp="^[0-9]{2}(_|-|s){1}[0-9]{3}$" data-validation-length="min2" data-validation-depends-on="more-informations"/>
            </div>
            <div class="form-group last column">
              <label class="control-label" for="city">Miasto </label>
              <input type="text" name="city" data-validation="length" placeholder="Warszawa" data-validation-error-msg="Podaj miasto" data-validation-length="min2" data-validation-depends-on="more-informations" />
            </div>
          </div>
        </div>
        <div class="singlerow">
          <div class="rodo column">
            <input type="checkbox" name="rodo" id="rodo" data-validation="required" data-validation-error-msg="Zapoznaj się z informacją o przetwarzaniu danych osobowych" />
            <label for="rodo"><span></span>  Zapoznałem/łam się z <a class="info-link">informacją o przetwarzaniu danych osobowych
                <p>Podanie danych jest dobrowolne, ale niezbędne do przetworzenia wpłaty. Wiem, że przysługuje mi prawo dostępu, poprawiania, oraz żądania zaprzestania przetwarzania moich danych. Ich administratorem jest Stowarzyszenie Adeste, Łapiguz 73, 22-400 Zamość.</p></a></label>
          </div>
        </div>
        <div class="next-step">
		<input type="hidden" class="finalamount" name="finalamount" value="0">
          <button class="btn btn--large btn--accent donate" name="donate" value="donate" type="submit">Podaruj</button>
        </div>
      </fieldset>
      <div class="clearfix"></div>
    </form>
    <div class="progressbar singlerow">
      <div class="top-bar"></div>
      <div class="step amount active column-4">
        <p> <span>1</span> Kwota</p>
      </div>
      <div class="step name column-4">
        <p> <span>2</span> Dane</p>
      </div>
      <div class="step payment last column-4">
        <p> <span>3</span> Płatność</p>
      </div>
      <div class="step--active column">
        <div class="top-bar"></div>
      </div>
    </div>
  </div>
</main>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js'></script>

