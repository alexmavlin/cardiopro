<div class="saleChoisirPopUp" id="saleChoisirPopUp">
    <form action="{{ route('send-choisir') }}" method="POST" class="saleChoisirPopUp__form">
        @csrf
        <div class="saleChoisirPopUp__close" id="saleChoisirPopUp__close" role="button" aria-label="Close Choisir Pop Up">×</div>
        <img    src="{{ asset('images/content/logo_page.png') }}" 
                width="150"
                height="auto"
                alt="logo Cardiopro spécialiste de l'achat et location de défibrillateur en France"
                title="logo Cardiopro spécialiste de l'achat et location de défibrillateur en France"
                class="saleChoisirPopUp__logo">
        <p class="saleChoisirPopUp__text">Recevez votre offre sous 24h ! </p>
        <div class="saleChoisirPopUp__form--row">
            <div class="saleChoisirPopUp__form--group">
                <label for="pack">Pack</label>
                @error('pack')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <select name="pack" id="pack">
                    <option data-price="39" value="Pack Location DSA Heartsine 350P à 39,00 € HT" {{ old('pack') == 'Pack Location DSA Heartsine 350P à 39,00 € HT' ? 'selected' : '' }}>Pack Location DSA Heartsine 350P à 39,00 € HT</option>
                    <option data-price="49" value="Pack Location DSA Heartsine 350P à 49,00 € HT" {{ old('pack') == 'Pack Location DSA Heartsine 350P à 49,00 € HT' ? 'selected' : '' }}>Pack Location DSA Heartsine 350P à 49,00 € HT</option>
                    <option data-price="1190" value="Pack Achat DSA Heartsine 350P à 1190,00 € HT" {{ old('pack') == 'Pack Achat DSA Heartsine 350P à 1190,00 € HT' ? 'selected' : '' }}>Pack Achat DSA Heartsine 350P à 1190,00 € HT</option>
                    <option data-price="1490" value="Pack Achat DSA Heartsine 350P à 1490,00 € HT" {{ old('pack') == 'Pack Achat DSA Heartsine 350P à 1490,00 € HT' ? 'selected' : '' }}>Pack Achat DSA Heartsine 350P à 1490,00 € HT</option>
                </select>
            </div>
        </div>
        <div class="saleChoisirPopUp__form--row">
            <div class="saleChoisirPopUp__form--group">
                <label for="company">Entreprise</label>
                @error('company')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <input type="text" name="company" id="company" value="{{ old('company') ?: '' }}">
            </div>
            <div class="saleChoisirPopUp__form--group">
                <label for="name">Nom<span> *</span></label>
                @error('name')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <input type="text" name="name" id="name" value="{{ old('name') ?: '' }}">
            </div>
        </div>
        <div class="saleChoisirPopUp__form--row">
            <div class="saleChoisirPopUp__form--group">
                <label for="phone">Téléphone<span> *</span></label>
                @error('phone')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <input type="text" name="phone" id="phone" value="{{ old('phone') ?: '' }}">
            </div>
            <div class="saleChoisirPopUp__form--group">
                <label for="email">E-mail<span> *</span></label>
                @error('email')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <input type="text" name="email" id="email" value="{{ old('email') ?: '' }}">
            </div>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</div>

<div class="saleChoisirPopUp" id="defExplorePopUp">
    <form action="{{ route('send-def-explore') }}" method="POST" class="saleChoisirPopUp__form">
        @csrf
        <div class="saleChoisirPopUp__close" id="defExplorePopUp__close" role="button" aria-label="Close Choisir Pop Up">×</div>
        <img    src="{{ asset('images/content/logo_page.png') }}" 
                width="150"
                height="auto"
                alt="logo Cardiopro spécialiste de l'achat et location de défibrillateur en France"
                title="logo Cardiopro spécialiste de l'achat et location de défibrillateur en France"
                class="saleChoisirPopUp__logo">
        <p class="saleChoisirPopUp__text">Recevez votre offre sous 24h ! </p>
        <div class="saleChoisirPopUp__form--row">
            <div class="saleChoisirPopUp__form--group">
                <label for="pack">Pack</label>
                @error('pack')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <select name="pack" id="packDefExplore">
                    <option data-queue="9" value="Support mural en plexiglass" {{ old('pack') == 'Support mural en plexiglass' ? 'selected' : '' }}>Support mural en plexiglass</option>
                    <option data-queue="8" value="Signalétique autocollante" {{ old('pack') == 'Signalétique autocollante' ? 'selected' : '' }}>Signalétique autocollante</option>
                    <option data-queue="7" value="Samaritan PAD Trainer" {{ old('pack') == 'Samaritan PAD Trainer' ? 'selected' : '' }}>Samaritan PAD Trainer</option>
                    <option data-queue="6" value="Défibrillateur de Formation & Fannequin" {{ old('pack') == 'Défibrillateur de Formation & Fannequin' ? 'selected' : '' }}>Défibrillateur de Formation & Fannequin</option>
                    <option data-queue="5" value="Boitier Mural extérieur avec alarme : DAC 350" {{ old('pack') == 'Boitier Mural extérieur avec alarme : DAC 350' ? 'selected' : '' }}>Boitier Mural extérieur avec alarme : DAC 350</option>
                    <option data-queue="4" value="Boitier Mural intérieur avec alarme: Aivia 100" {{ old('pack') == 'Boitier Mural intérieur avec alarme: Aivia 100' ? 'selected' : '' }}>Boitier Mural intérieur avec alarme: Aivia 100</option>
                    <option data-queue="3" value="Trousse de Secours" {{ old('pack') == 'Trousse de Secours' ? 'selected' : '' }}>Trousse de Secours</option>
                    <option data-queue="2" value="PadPak Pédiatrique" {{ old('pack') == 'PadPak Pédiatrique' ? 'selected' : '' }}>PadPak Pédiatrique</option>
                    <option data-queue="1" value="PadPak Adulte" {{ old('pack') == 'PadPak Adulte' ? 'selected' : '' }}>PadPak Adulte</option>
                </select>
            </div>
        </div>
        <div class="saleChoisirPopUp__form--row">
            <div class="saleChoisirPopUp__form--group">
                <label for="company">Entreprise</label>
                @error('company')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <input type="text" name="company" id="company" value="{{ old('company') ?: '' }}">
            </div>
            <div class="saleChoisirPopUp__form--group">
                <label for="name">Nom<span> *</span></label>
                @error('name')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <input type="text" name="name" id="name" value="{{ old('name') ?: '' }}">
            </div>
        </div>
        <div class="saleChoisirPopUp__form--row">
            <div class="saleChoisirPopUp__form--group">
                <label for="phone">Téléphone<span> *</span></label>
                @error('phone')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <input type="text" name="phone" id="phone" value="{{ old('phone') ?: '' }}">
            </div>
            <div class="saleChoisirPopUp__form--group">
                <label for="email">E-mail<span> *</span></label>
                @error('email')
                    <p class="text__danger">{{ $message }}</p>
                @enderror
                <input type="text" name="email" id="email" value="{{ old('email') ?: '' }}">
            </div>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</div>