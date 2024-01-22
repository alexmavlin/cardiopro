@extends('layouts/app')

@section('content')

    <section class="mainScreen">
        <img    srcset="{{ asset('images/content/formulepage_formuleLocation.webp') }} 1920w"
                src="{{ asset('images/content/formulepage_formuleLocation.webp') }}"
                width="1600"
                height="580"
                alt=""
                title="" 
                class="mainScreen__img">
        <div class="mainScreen__filter"></div>

        <h1 class="mainScreen__h1">Formule location et achat DAE</h1>
    </section>

@include('/page_parts/breadcrumbs')

<section class="options">
    <div class="container">
        <div class="options__inner">
            <img    src="{{ asset('images/content/logo_page.webp') }}"
                width="250"
                height="75"
                alt=""
                title="" 
                class="options__img">
            <p class="">Il existe deux options pour s’équiper d’un défibrillateur : soit par la location ou l’achat de DAE ou DSA. Ces deux moyens d’acquisition demande tout de même une maintenance prise en charge par un professionnel, une
                 signalétique claire ainsi que de déclarer au Registre Nationales DAE et DSA.</p>
        </div>
    </div>
</section>

<section class="suitsYou bg-blue">
    <div class="container">
        <div class="suitsYou__header">
            <h2 class="">À vos côtés pour trouver le Pack Défibrillateur qui vous convient !</h2>
        </div>
        <div class="suitsYou__inner">
            <div class="suitsYou__box">
                <div class="suitsYou__row__first">
                    <img    src="{{ asset('images/content/formulepage_suitsYou_1.webp') }}"
                            width="254"
                            height="184"
                            alt=""
                            title="" 
                            class="suitsYou__img">
                    <img    src="{{ asset('images/content/formulepage_suitsYou_2.webp') }}"
                            width="254"
                            height="184"
                            alt=""
                            title="" 
                            class="suitsYou__img">
                </div>
                <div class="suitsYou__row__second">
                    <img    src="{{ asset('images/content/formulepage_suitsYou_3.webp') }}"
                            width="254"
                            height="184"
                            alt=""
                            title="" 
                            class="suitsYou__img">
                    <img    src="{{ asset('images/content/formulepage_suitsYou_4.webp') }}"
                            width="254"
                            height="184"
                            alt=""
                            title="" 
                            class="suitsYou__img">
                </div>
            </div>
            <div class="suitsYou__header__mobile">
                <h2 class="">À vos côtés pour trouver le Pack Défibrillateur qui vous convient !</h2>
            </div>
            <p class="suitsYou__p">Un défibrillateur pour sauver des vies !Nous vous offrons la possibilité de louer ou d’acheter votre DAE et DSA. Pour éclaircir votre choix, CardioPro vous aide à trouver la formule adaptée à vos exigences et vos capacités de financement. Consultez toutes nos <a href="{{route('defibrillateur-prix')}}" class="">offres</a>
                 détaillées de <a href="{{route('location-defibrillateur')}}" class="">location mensuelle</a> et d’ <a href="{{route('achat-defibrillateur')}}" class="">achat de DAE</a> ci-dessous pour lever vos hésitations. Affinez-les en optant pour un appareil <b class="">semi-automatisé (DSA) ou automatisé (DAE).</b> Comparez les avantages d’un Achat DAE avec ceux en Location, garantissant le <b class="">remplacement illimité</b> en cas de dysfonctionnement 
                et après chaque utilisation, une offre parfaite pour les ERP ayant <a href="{{route('obligations')}}" class="">l'obligation</a> de s'équiper de défibrillateur.</p>
        </div>
    </div>
</section>

<section class="formuleSlider bg-blue">
    <div class="container">
        <div class="slider__inner">
            <div class="slider__group">
                <button class="sale__button__active">Location</button>
                <button class="">Achat</button>
            </div>
{{-- ACHAT --}}
        <div class="sale__content sale__active__frame">
            <div class="sale__frame ">
                <div class="sale__hidden__header">
                    <h3>défibrillateur automatique</h3>
                </div>
                <img    
                        src="{{ asset('images/content/homepage_sale.webp') }}"
                        width="387"
                        height="387"
                        alt=""
                        title="" 
                        class="sale__img">
                <div class="sale__frame__content">
                    <h3>défibrillateur automatique</h3>
                    <div class="sale__frame__line">
                        <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                          </svg>
                        <p class="">Garantie 8 ans</p>
                    </div>
                    <div class="sale__frame__line">
                        <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                          </svg>
                        <p class="">Livraison rapide et installation</p>
                    </div>
                    <div class="sale__frame__line">
                        <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                          </svg>
                        <p class="">Électrodes adultes et pédiatriques</p>
                    </div>
                    <div class="sale__frame__line">
                        <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                          </svg>
                        <p class="">Trousse de secours</p>
                    </div>
                    <div class="sale__frame__line">
                        <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                          </svg>
                        <p class="">Kit signalétique</p>
                    </div>
                </div>
            </div>
            <div class="sale__price__row">
                <div class="sale__item">
                    <div class="sale__rectangle"></div>
                    <div class="sale__item__header">
                        <p class="">Pack access</p>
                    </div>
                    <div class="sale__item__content">
                        <div class="sale__item__price">
                            <p class="sale__price__h2">39</p>
                            <p class="sale__price__p">€</p>
                        </div>
                        <p class="sale_under__price__p">HT par mois</p>
                        <p class="sale_comment__p">*Location de 60 mois - TVA à 20 %</p>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Inclus tous les éléments ci-dessus</p>
                        </div>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__red" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M5 5.5L10 10.5M15 15.5L10 10.5M10 10.5L15 5.5L5 15.5" stroke="white" stroke-width="1.5"/>
                              </svg>
                            <p class="">Assistant massage cardiaque</p>
                        </div>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__red" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M5 5.5L10 10.5M15 15.5L10 10.5M10 10.5L15 5.5L5 15.5" stroke="white" stroke-width="1.5"/>
                              </svg>
                            <p class="">Support mural</p>
                        </div>
                        <div class="sale__buttons">
                            <a href="{{ route('form', 'type=location-form&price=39')}}" class="sale__choisir" data-price="39" title="Choisir" aria-label="Choisir">Choisir</a>
                            <a href="{{ route('defibrillateur-single') }}" class="sale__ensavoir">En savoir +</a>
                        </div>
                    </div>
                </div>
                <div class="sale__item">
                    <div class="sale__rectangle"></div>
                    <div class="sale__item__header">
                        <p class="">Pack zen</p>
                    </div>
                    <div class="sale__item__content">
                        <div class="sale__item__price">
                            <p class="sale__price__h2">49</p>
                            <p class="sale__price__p">€</p>
                        </div>
                        <p class="sale_under__price__p">HT par mois</p>
                        <p class="sale_comment__p">*Location de 60 mois - TVA à 20 %</p>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Inclus tous les éléments ci-dessus</p>
                        </div>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Assistant massage cardiaque</p>
                        </div>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Support mural</p>
                        </div>
                        <div class="sale__buttons">
                            <a href="{{ route('form', 'type=location-form&price=49')}}" class="sale__choisir" data-price="49" title="Choisir" aria-label="Choisir">Choisir</a>
                            <a href="{{ route('defibrillateur-single') }}" class="sale__ensavoir">En savoir +</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
            <div class="sale__content">
                <div class="sale__frame">
                    <div class="sale__hidden__header">
                        <h3>défibrillateur automatique</h3>
                    </div>
                    <img    
                            src="{{ asset('images/content/homepage_sale.webp') }}"
                            width="387"
                            height="387"
                            alt=""
                            title="" 
                            class="sale__img">
                    <div class="sale__frame__content">
                        <h3>défibrillateur automatique</h3>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Garantie 8 ans</p>
                        </div>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Livraison rapide et installation</p>
                        </div>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Électrodes adultes et pédiatriques</p>
                        </div>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Trousse de secours</p>
                        </div>
                        <div class="sale__frame__line">
                            <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                              </svg>
                            <p class="">Signalétique autocollante</p>
                        </div>
                    </div>
                </div>
                <div class="sale__price__row">
                    <div class="sale__item">
                        <div class="sale__rectangle"></div>
                        <div class="sale__item__header">
                            <p class="">Pack access</p>
                        </div>
                        <div class="sale__item__content">
                            <div class="sale__item__price">
                                <p class="sale__price__h2">1190</p>
                                <p class="sale__price__p">€</p>
                            </div>
                            <p class="sale_under__price__p">HT</p>
                            <p class="sale_comment__p">*TVA à 20 %</p>
                            <div class="sale__frame__line">
                                <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                                  </svg>
                                <p class="">Inclus tous les éléments ci-dessus</p>
                            </div>
                            <div class="sale__frame__line">
                                <svg class="sale__frame__red" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path d="M5 5.5L10 10.5M15 15.5L10 10.5M10 10.5L15 5.5L5 15.5" stroke="white" stroke-width="1.5"/>
                                  </svg>
                                <p class="">Assistant massage cardiaque</p>
                            </div>
                            <div class="sale__frame__line">
                                <svg class="sale__frame__red" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path d="M5 5.5L10 10.5M15 15.5L10 10.5M10 10.5L15 5.5L5 15.5" stroke="white" stroke-width="1.5"/>
                                  </svg>
                                <p class="">Support mural</p>
                            </div>
                            <div class="sale__buttons">
                                <a href="{{ route('form', 'type=achat-form&price=1190')}}" class="sale__choisir" data-price="1190" title="Choisir" aria-label="Choisir">Choisir</a>
                                <a href="{{ route('defibrillateur-single') }}" class="sale__ensavoir">En savoir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="sale__item">
                        <div class="sale__rectangle"></div>
                        <div class="sale__item__header">
                            <p class="">Pack zen</p>
                        </div>
                        <div class="sale__item__content">
                            <div class="sale__item__price">
                                <p class="sale__price__h2">1490</p>
                                <p class="sale__price__p">€</p>
                            </div>
                            <p class="sale_under__price__p">HT par mois</p>
                            <p class="sale_comment__p">*TVA à 20 %</p>
                            <div class="sale__frame__line">
                                <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                                  </svg>
                                <p class="">Inclus tous les éléments ci-dessus</p>
                            </div>
                            <div class="sale__frame__line">
                                <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                                  </svg>
                                <p class="">Assistant massage cardiaque</p>
                            </div>
                            <div class="sale__frame__line">
                                <svg class="sale__frame__blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M8.3339 12.6425L15.9942 4.98218L17.1727 6.16069L8.3339 14.9995L3.03058 9.69624L4.20909 8.51774L8.3339 12.6425Z" fill="white"/>
                                  </svg>
                                <p class="">Support mural</p>
                            </div>
                            <div class="sale__buttons">
                                <a href="{{ route('form', 'type=achat-form&price=1490')}}" class="sale__choisir" data-price="1490" title="Choisir" aria-label="Choisir">Choisir</a>
                                <a href="{{ route('defibrillateur-single') }}" class="sale__ensavoir">En savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<section class="designResponses bg-blue">
    <div class="container">
        <h2 class="">CardioPro se donne pour objectif de concevoir des réponses concrètes pour que l’absence d’équipements ne soit plus la principale cause de décès lors d’un arrêt cardiaque. 
            Nous vous assistons à chaque étape dans votre projet de <b class="">préserver des vies à l’aide d’un DAE</b>. Nos services clé en main, perfectionnés depuis 2007, vous proposent pour cela une assistance complète pour satisfaire vos exigences. 
            Grâce aux <b class="">Packs DAE</b> CardioPro, vous bénéficierez d’un <b class="">DAE</b> professionnel abordable, installé dans un délai de 48 heures et <b class="">connecté pour une maintenance à distance.</b> Engagé pour 
            l’optimisation du DAE, CardioPro prévoit notamment le remplacement illimité des consommables épuisés pour un défibrillateur opérationnel sans interruption.</h2>
    </div>
</section>


<section class="choice">
    <div class="container">
        <div class="choice__header">
            <h2 class="">Quelle formule choisir entre la location ou l’achat de DAE ?</h2>
            <p class="">Que vous choisissiez de louer un DAE (défibrillateur automatique externe) ou d'en acheter un, le facteur le plus important est que votre équipement soit conforme aux normes FDA/CE. De cette façon, vous et les autres personnes présentes sur place pourrez l'utiliser rapidement après une 
                crise cardiaque, sans risque dû à un équipement non homologué.</p>
        </div>
        <div class="choice__box">
            <div class="choice__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="52" viewBox="0 0 53 52" fill="none">
                    <path d="M7.34952 9.68327C12.6014 4.43138 20.9693 4.19456 26.5021 8.9728C32.0315 4.19456 40.3994 4.43138 45.6511 9.68327C50.8936 14.9257 51.1389 23.273 46.3872 28.8062L29.5645 45.6867C27.949 47.3022 25.3757 47.3756 23.6733 45.907L23.4363 45.6867L6.61346 28.8062C1.86169 23.273 2.10704 14.9257 7.34952 9.68327ZM10.4136 12.7474C6.71482 16.4462 6.60915 22.3775 10.0966 26.204L10.4136 26.536L26.5004 42.6226L37.9894 31.1306L30.3304 23.4719L28.0325 25.77C25.494 28.3083 21.3784 28.3083 18.84 25.77C16.3016 23.2316 16.3016 19.116 18.84 16.5776L23.3925 12.0221C19.6817 9.05143 14.3037 9.18749 10.7457 12.4303L10.4136 12.7474ZM28.7984 18.8757C29.6445 18.0295 31.0164 18.0295 31.8625 18.8757L41.0535 28.0665L42.587 26.536C46.3945 22.7285 46.3945 16.555 42.587 12.7474C38.8881 9.04857 32.9569 8.94288 29.1305 12.4303L28.7984 12.7474L21.9041 19.6417C21.1184 20.4274 21.0623 21.6664 21.7358 22.5168L21.9041 22.7057C22.6899 23.4916 23.9288 23.5477 24.7792 22.8741L24.9684 22.7057L28.7984 18.8757Z" fill="#C22921"/>
                  </svg>
                <h2 class="">Louer un DAE</h2>
                <p class=""><a href="{{route('location-defibrillateur')}}" class="">Louer un DAE</a> vous permet de lisser les couts sur l’ensemble de votre période de location et de bénéficier de la maintenance de votre appareil de sauvetage pendant toute la durée du contrat. 
                    Vous pourrez ainsi sécuriser vos employés ainsi que vos clients face au risque d’arrêt cardiaque à un coût très abordable et ainsi être en phase avec la législation en rapport avec l’ obligation 
                    <a href="{{route('obligations')}}" class="">d’équipement pour les ERP.</a></p>
            </div>
            <div class="choice__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="52" viewBox="0 0 53 52" fill="none">
                    <path d="M47.3516 18.5122C46.1556 18.2522 44.9076 18.9802 44.6476 20.1762L41.3716 34.3722C41.1116 35.5162 40.1236 36.2962 38.9796 36.2962H21.8196C20.6756 36.2962 19.6356 35.4642 19.3756 34.3202L14.8516 12.6882C14.6436 11.6482 13.7076 10.8682 12.6676 10.8682H5.33561C4.08761 10.8682 3.09961 11.8562 3.09961 13.1042C3.09961 14.3522 4.08761 15.3402 5.33561 15.3402H10.7956L14.9036 35.2042C15.5796 38.4282 18.4396 40.7682 21.7156 40.7682H38.8756C42.1516 40.7682 44.9596 38.5322 45.6876 35.3602L48.9636 21.1642C49.3276 20.0202 48.5476 18.8242 47.3516 18.5122Z" fill="#C22921"/>
                    <path d="M22.5467 50.6999C24.6145 50.6999 26.2907 49.0237 26.2907 46.9559C26.2907 44.8882 24.6145 43.2119 22.5467 43.2119C20.479 43.2119 18.8027 44.8882 18.8027 46.9559C18.8027 49.0237 20.479 50.6999 22.5467 50.6999Z" fill="#C22921"/>
                    <path d="M37.8885 50.6999C39.9563 50.6999 41.6325 49.0237 41.6325 46.9559C41.6325 44.8882 39.9563 43.2119 37.8885 43.2119C35.8208 43.2119 34.1445 44.8882 34.1445 46.9559C34.1445 49.0237 35.8208 50.6999 37.8885 50.6999Z" fill="#C22921"/>
                    <path d="M29.5676 26.6761C30.1396 27.4561 31.3356 27.4561 31.9076 26.6761L39.3436 17.1081C40.1236 16.1201 39.3956 14.716 38.1476 14.716H34.7156C35.2876 8.99605 40.0716 4.52405 45.9476 4.52405H45.9996C47.2476 4.52405 47.5596 2.86005 46.4156 2.39205C44.6996 1.71605 42.8796 1.30005 40.9556 1.30005C33.4156 1.30005 27.1756 7.22805 26.6036 14.716H23.3276C22.0796 14.716 21.4036 16.1201 22.1316 17.1081L29.5676 26.6761Z" fill="#C22921"/>
                  </svg>
                <h2 class="">Achat de DAE</h2>
                <p class=""><a href="{{route('location-defibrillateur')}}" class="">Acheter un DAE</a> fait de vous ou votre entreprise le propriétaire du matériel vous permettant d’éviter un coût mensuel lié à la location de celui-ci. À noter que vous devrez souscrire à 
                    un contrat de maintenance afin de s’assurer que votre matériel soit opérationnel à chaque instant.</p>
            </div>
        </div>
    </div>
</section>

<section class="whichDevice">
    <div class="container">
        <div class="whichDevice__inner">
            <h2 class="">Vous avez tranché entre l’achat ou la location de défibrillateur. 
                Mais quel appareil choisi, un DAE ou un DSA ?</h2>
            <div class="whichDevice__list">
                <div class="whichDevice__item">
                    <div class="whichDevice__box">
                        <img    
                            src="{{ asset('images/content/formulepage_whichDevice_1.webp') }}"
                            width="227"
                            height="227"
                            alt=""
                            title="" 
                            class="whichDevice__img">
                    </div>
                    <p class="">
                        <b class="">Le DAE (Défibrillateur automatique externe)</b> est un excellent choix pour les entreprises et les établissements publics. La simplicité de l'appareil le rend facile à utiliser, sans connaissances préalables. Si l'utilisateur ne sait pas comment l’utiliser ou a besoin d'aide, pas d’inquiétude car 
                        les DAE intègrent une assistance vocale permettant d’être guidé pas à pas pendant l’intervention et les chocs électriques délivrés à la victime sont entièrement automatique (sans intervention humaine).
                    </p>
                </div>
                <div class="whichDevice__item">
                    <div class="whichDevice__box">
                        <img    
                            src="{{ asset('images/content/formulepage_whichDevice_2.webp') }}"
                            width="227"
                            height="227"
                            alt=""
                            title="" 
                            class="whichDevice__img">
                    </div>
                    <p class="">
                        <b class="">Le DSA (défibrillateur semi-automatique)</b> est un outil formidable pour le public formé aux premiers secours et professionnels de la santé. Cet équipement de sauvetage peut être utilisé par 
                        des professionnels, mais il est également accessible à tous et nécessite une intervention humaine pour délivrer un choc électrique à la victime d’arrêt cardiaque.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="obligation bg-white">
    <div class="container">
        <div class="obligation__inner">
            <h2 class="">Vous avez acheté ou loué votre DAE ou votre DSA, quelle sont vos obligations ?</h2>
            <div class="obligation__row">
                <div class="obligation__text">
                    <p class="">La législation favorable à l’obligation d’installation des défibrillateurs est entrée en vigueur depuis le 1er janvier 2020 :</p>
                    <p class=""><a href="{{route('obligations')}}#section4" class="">ERP 1, 2, 3 :</a> à partir du 1er janvier 2020, établissement recevant entre 301 à +1500 personnes</p>
                    <p class=""><a href="{{route('obligations')}}#section5" class="">ERP 4 :</a> à partir du 1er janvier 2021, établissement recevant moins 300 personnes</p>
                    <p class=""><a href="{{route('obligations')}}#section6" class="">ERP 5 :</a> à partir du 1er janvier 2022 il est obligatoire pour les ERP 5 d’acheter un DAE ou de louer un DAE. Vous trouverez ci-dessous une liste non-exhaustive de ERP 5 entrant dans le cadre de l’obligation :</p>
                </div>
                <div class="obligation__img__box">
                    <img    srcset="{{ asset('images/content/formulepage_obligation.webp') }} 1920w,
                                    {{ asset('images/content/formulepage_obligation.webp') }} 700w,
                                    {{ asset('images/content/formulepage_obligation_400.webp') }} 500w"
                            src="{{ asset('images/content/formulepage_obligation.webp') }}"
                            width="578"
                            height="384"
                            alt=""
                            title="" 
                            class="obligation__img">
                </div>
            </div>
            <div class="obligation__row__bottom">
                <div class="obligation__blue">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                        <g clip-path="url(#clip0_3_4601)">
                          <mask id="mask0_3_4601" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="5" width="14" height="13">
                            <path d="M13.5 5H0.5V18H13.5V5Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_3_4601)">
                            <path d="M12.5351 10.9919L2.03599 5.95365C1.93712 5.90621 1.82579 5.89123 1.7179 5.91087C1.61 5.93051 1.51109 5.98375 1.43528 6.06299C1.35947 6.14223 1.31065 6.2434 1.29581 6.35205C1.28096 6.46071 1.30084 6.57127 1.3526 6.66794L3.81036 11.2577C3.8504 11.3324 3.87154 11.4159 3.87195 11.5007C3.87235 11.5855 3.852 11.6691 3.81267 11.7443L1.39851 16.357C1.34766 16.4542 1.32882 16.5649 1.34471 16.6735C1.36058 16.782 1.41036 16.8827 1.48691 16.9612C1.56347 17.0397 1.66289 17.092 1.77096 17.1106C1.87902 17.1292 1.99021 17.1132 2.08862 17.0649L12.5395 11.9274C12.6271 11.8843 12.7008 11.8175 12.7522 11.7345C12.8036 11.6516 12.8306 11.5558 12.8301 11.4582C12.8296 11.3607 12.8018 11.2652 12.7495 11.1827C12.6974 11.1002 12.6231 11.0341 12.5351 10.9919Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                        </g>
                        <defs>
                          <clipPath id="clip0_3_4601">
                            <rect width="13" height="18" fill="white" transform="translate(0.5)"/>
                          </clipPath>
                        </defs>
                    </svg>
                    <p class="">Défibrillateur obligatoire dans les EHPAD</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                        <g clip-path="url(#clip0_3_4601)">
                          <mask id="mask0_3_4601" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="5" width="14" height="13">
                            <path d="M13.5 5H0.5V18H13.5V5Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_3_4601)">
                            <path d="M12.5351 10.9919L2.03599 5.95365C1.93712 5.90621 1.82579 5.89123 1.7179 5.91087C1.61 5.93051 1.51109 5.98375 1.43528 6.06299C1.35947 6.14223 1.31065 6.2434 1.29581 6.35205C1.28096 6.46071 1.30084 6.57127 1.3526 6.66794L3.81036 11.2577C3.8504 11.3324 3.87154 11.4159 3.87195 11.5007C3.87235 11.5855 3.852 11.6691 3.81267 11.7443L1.39851 16.357C1.34766 16.4542 1.32882 16.5649 1.34471 16.6735C1.36058 16.782 1.41036 16.8827 1.48691 16.9612C1.56347 17.0397 1.66289 17.092 1.77096 17.1106C1.87902 17.1292 1.99021 17.1132 2.08862 17.0649L12.5395 11.9274C12.6271 11.8843 12.7008 11.8175 12.7522 11.7345C12.8036 11.6516 12.8306 11.5558 12.8301 11.4582C12.8296 11.3607 12.8018 11.2652 12.7495 11.1827C12.6974 11.1002 12.6231 11.0341 12.5351 10.9919Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                        </g>
                        <defs>
                          <clipPath id="clip0_3_4601">
                            <rect width="13" height="18" fill="white" transform="translate(0.5)"/>
                          </clipPath>
                        </defs>
                    </svg>
                    <p class="">Défibrillateur obligatoire dans les Centres de Soins</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                        <g clip-path="url(#clip0_3_4601)">
                          <mask id="mask0_3_4601" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="5" width="14" height="13">
                            <path d="M13.5 5H0.5V18H13.5V5Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_3_4601)">
                            <path d="M12.5351 10.9919L2.03599 5.95365C1.93712 5.90621 1.82579 5.89123 1.7179 5.91087C1.61 5.93051 1.51109 5.98375 1.43528 6.06299C1.35947 6.14223 1.31065 6.2434 1.29581 6.35205C1.28096 6.46071 1.30084 6.57127 1.3526 6.66794L3.81036 11.2577C3.8504 11.3324 3.87154 11.4159 3.87195 11.5007C3.87235 11.5855 3.852 11.6691 3.81267 11.7443L1.39851 16.357C1.34766 16.4542 1.32882 16.5649 1.34471 16.6735C1.36058 16.782 1.41036 16.8827 1.48691 16.9612C1.56347 17.0397 1.66289 17.092 1.77096 17.1106C1.87902 17.1292 1.99021 17.1132 2.08862 17.0649L12.5395 11.9274C12.6271 11.8843 12.7008 11.8175 12.7522 11.7345C12.8036 11.6516 12.8306 11.5558 12.8301 11.4582C12.8296 11.3607 12.8018 11.2652 12.7495 11.1827C12.6974 11.1002 12.6231 11.0341 12.5351 10.9919Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                        </g>
                        <defs>
                          <clipPath id="clip0_3_4601">
                            <rect width="13" height="18" fill="white" transform="translate(0.5)"/>
                          </clipPath>
                        </defs>
                    </svg>
                    <p class="">Défibrillateur obligatoire dans les Salles de sports et les Complexes sportif</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                        <g clip-path="url(#clip0_3_4601)">
                          <mask id="mask0_3_4601" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="5" width="14" height="13">
                            <path d="M13.5 5H0.5V18H13.5V5Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_3_4601)">
                            <path d="M12.5351 10.9919L2.03599 5.95365C1.93712 5.90621 1.82579 5.89123 1.7179 5.91087C1.61 5.93051 1.51109 5.98375 1.43528 6.06299C1.35947 6.14223 1.31065 6.2434 1.29581 6.35205C1.28096 6.46071 1.30084 6.57127 1.3526 6.66794L3.81036 11.2577C3.8504 11.3324 3.87154 11.4159 3.87195 11.5007C3.87235 11.5855 3.852 11.6691 3.81267 11.7443L1.39851 16.357C1.34766 16.4542 1.32882 16.5649 1.34471 16.6735C1.36058 16.782 1.41036 16.8827 1.48691 16.9612C1.56347 17.0397 1.66289 17.092 1.77096 17.1106C1.87902 17.1292 1.99021 17.1132 2.08862 17.0649L12.5395 11.9274C12.6271 11.8843 12.7008 11.8175 12.7522 11.7345C12.8036 11.6516 12.8306 11.5558 12.8301 11.4582C12.8296 11.3607 12.8018 11.2652 12.7495 11.1827C12.6974 11.1002 12.6231 11.0341 12.5351 10.9919Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                        </g>
                        <defs>
                          <clipPath id="clip0_3_4601">
                            <rect width="13" height="18" fill="white" transform="translate(0.5)"/>
                          </clipPath>
                        </defs>
                    </svg>
                    <p class="">Défibrillateur obligatoire dans les refuges d’altitude</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                        <g clip-path="url(#clip0_3_4601)">
                          <mask id="mask0_3_4601" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="5" width="14" height="13">
                            <path d="M13.5 5H0.5V18H13.5V5Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_3_4601)">
                            <path d="M12.5351 10.9919L2.03599 5.95365C1.93712 5.90621 1.82579 5.89123 1.7179 5.91087C1.61 5.93051 1.51109 5.98375 1.43528 6.06299C1.35947 6.14223 1.31065 6.2434 1.29581 6.35205C1.28096 6.46071 1.30084 6.57127 1.3526 6.66794L3.81036 11.2577C3.8504 11.3324 3.87154 11.4159 3.87195 11.5007C3.87235 11.5855 3.852 11.6691 3.81267 11.7443L1.39851 16.357C1.34766 16.4542 1.32882 16.5649 1.34471 16.6735C1.36058 16.782 1.41036 16.8827 1.48691 16.9612C1.56347 17.0397 1.66289 17.092 1.77096 17.1106C1.87902 17.1292 1.99021 17.1132 2.08862 17.0649L12.5395 11.9274C12.6271 11.8843 12.7008 11.8175 12.7522 11.7345C12.8036 11.6516 12.8306 11.5558 12.8301 11.4582C12.8296 11.3607 12.8018 11.2652 12.7495 11.1827C12.6974 11.1002 12.6231 11.0341 12.5351 10.9919Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                        </g>
                        <defs>
                          <clipPath id="clip0_3_4601">
                            <rect width="13" height="18" fill="white" transform="translate(0.5)"/>
                          </clipPath>
                        </defs>
                    </svg>
                    <p class="">Défibrillateur obligatoire dans les Hôtels et Restaurant de haute montagne</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                        <g clip-path="url(#clip0_3_4601)">
                          <mask id="mask0_3_4601" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="5" width="14" height="13">
                            <path d="M13.5 5H0.5V18H13.5V5Z" fill="white"/>
                          </mask>
                          <g mask="url(#mask0_3_4601)">
                            <path d="M12.5351 10.9919L2.03599 5.95365C1.93712 5.90621 1.82579 5.89123 1.7179 5.91087C1.61 5.93051 1.51109 5.98375 1.43528 6.06299C1.35947 6.14223 1.31065 6.2434 1.29581 6.35205C1.28096 6.46071 1.30084 6.57127 1.3526 6.66794L3.81036 11.2577C3.8504 11.3324 3.87154 11.4159 3.87195 11.5007C3.87235 11.5855 3.852 11.6691 3.81267 11.7443L1.39851 16.357C1.34766 16.4542 1.32882 16.5649 1.34471 16.6735C1.36058 16.782 1.41036 16.8827 1.48691 16.9612C1.56347 17.0397 1.66289 17.092 1.77096 17.1106C1.87902 17.1292 1.99021 17.1132 2.08862 17.0649L12.5395 11.9274C12.6271 11.8843 12.7008 11.8175 12.7522 11.7345C12.8036 11.6516 12.8306 11.5558 12.8301 11.4582C12.8296 11.3607 12.8018 11.2652 12.7495 11.1827C12.6974 11.1002 12.6231 11.0341 12.5351 10.9919Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                        </g>
                        <defs>
                          <clipPath id="clip0_3_4601">
                            <rect width="13" height="18" fill="white" transform="translate(0.5)"/>
                          </clipPath>
                        </defs>
                    </svg>
                    <p class="">Défibrillateur obligatoire dans les Gares</p>
                </div>
                <div class="obligation__text__bottom">
                    <p class=""><b>Le DSA (défibrillateur semi-automatique)</b> est un outil formidable pour le public formé aux premiers secours et professionnels de la santé. Cet équipement de sauvetage peut être utilisé par des professionnels, mais il est également accessible à tous et nécessite une intervention 
                        humaine pour délivrer un choc électrique à la victime d’arrêt cardiaque.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="maintaining">
    <div class="container">
        <div class="maintaining__inner">
            <div class="maintaining__top">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" viewBox="0 0 40 50" fill="none">
                    <path d="M7.86063 5.87111L7.82355 5.87729L7.78992 5.8941L7.11152 6.23331L7.07523 6.25145L7.04654 6.28014C7.04423 6.28245 7.04183 6.28484 7.03935 6.28732C6.9297 6.39676 6.66005 6.66589 6.63586 7.07603C6.52072 7.33827 6.52047 7.60903 6.63511 7.8713C6.64745 8.22606 6.7761 8.52667 7.07016 8.69369L9.53016 11.2655L9.54165 11.2775L9.55464 11.2879C10.0445 11.6798 10.2523 12.2759 10.2523 12.9018C10.2523 13.5277 10.0445 14.1238 9.55464 14.5157L9.53295 14.533L9.5156 14.5547C9.1237 15.0446 8.52763 15.2523 7.90173 15.2523C7.27583 15.2523 6.67976 15.0446 6.28786 14.5547L6.27747 14.5417L6.26545 14.5302L3.69357 12.0702C3.52474 11.7735 3.21697 11.642 2.89273 11.5339L2.85424 11.5211H2.81367C2.80837 11.5211 2.80304 11.5211 2.79766 11.5211C2.59377 11.521 2.33732 11.5209 2.07595 11.6359C1.66582 11.6601 1.3967 11.9298 1.28726 12.0394C1.28478 12.0419 1.28239 12.0443 1.28008 12.0466L1.25139 12.0753L1.23325 12.1116L0.894042 12.79L0.877231 12.8236L0.871051 12.8607C0.638264 14.2574 0.755114 15.6509 1.10259 16.9249L1.10636 16.9387L1.11167 16.952C1.56941 18.0964 2.1501 19.2628 3.20223 20.3149C4.25777 21.3705 5.6577 22.0679 7.04962 22.4159C8.40017 22.7535 9.75244 22.7647 11.1031 22.4493L24.1395 35.4857C23.9381 36.6185 24.0573 37.742 24.2776 38.8434L24.2799 38.8549L24.2833 38.8662C24.6333 40.033 25.2188 41.0877 26.155 42.024C27.0901 42.959 28.1425 43.5434 29.1925 43.8934L29.1925 43.8936L29.1997 43.8957C30.3538 44.242 31.6306 44.3617 32.8031 44.132C33.1084 44.1235 33.3856 43.9663 33.6319 43.72C33.7129 43.6389 33.7828 43.5301 33.8418 43.427C33.9018 43.3219 33.9609 43.2036 34.0162 43.0931L34.0179 43.0897C34.1575 42.8105 34.1657 42.5203 34.0424 42.2398C34.0238 41.9485 33.8702 41.6834 33.6342 41.4466L31.488 39.1875L31.4736 39.1723L31.4568 39.1597C31.0902 38.8847 30.8784 38.2969 30.8784 37.7767C30.8784 37.2874 31.071 36.7854 31.3725 36.3725C31.7853 36.0711 32.2873 35.8785 32.7767 35.8785C33.2969 35.8785 33.8847 36.0902 34.1596 36.4569L34.1722 36.4736L34.1874 36.4881L36.4466 38.6343C36.6833 38.8703 36.9484 39.0239 37.2397 39.0425C37.5038 39.1585 37.7766 39.1581 38.0406 39.0411C38.2054 39.0239 38.3475 38.9425 38.4482 38.8706C38.5641 38.7878 38.6609 38.691 38.7169 38.6349L38.7199 38.6319C38.9662 38.3856 39.1234 38.1085 39.132 37.8031C39.3617 36.6307 39.2419 35.3539 38.8957 34.1998L38.8958 34.1998L38.8934 34.1926C38.5434 33.1425 37.959 32.0902 37.0239 31.1551C36.0876 30.2188 35.033 29.6334 33.8661 29.2833L33.8549 29.2799L33.8433 29.2776C32.7419 29.0574 31.6184 28.9382 30.4857 29.1396L17.4493 16.1032C17.7646 14.7525 17.7535 13.4002 17.4158 12.0497C17.0679 10.6578 16.3704 9.25783 15.3149 8.20229C14.2627 7.15016 13.0963 6.56947 11.952 6.11173L11.9387 6.10642L11.9249 6.10265C10.6508 5.75517 9.25735 5.63832 7.86063 5.87111ZM4.58476 18.9559L4.57928 18.9496L4.5734 18.9437C3.80814 18.1785 3.26416 17.307 2.93777 16.3278C2.66938 15.5226 2.62183 14.6338 2.67744 13.7811L4.90024 15.9072C5.74509 16.751 6.8289 17.1092 7.90173 17.1092C8.97539 17.1092 10.0601 16.7504 10.9052 15.9053C11.7503 15.0601 12.1091 13.9755 12.1091 12.9018C12.1091 11.829 11.7509 10.7451 10.9072 9.90029L8.78104 7.6775C9.63371 7.62189 10.5226 7.66944 11.3278 7.93783C12.307 8.26422 13.1784 8.80819 13.9437 9.57346L13.9496 9.57934L13.9558 9.58482C14.8116 10.3336 15.3539 11.4114 15.5713 12.4985L15.573 12.507L15.5753 12.5153C15.9027 13.7156 15.9009 14.906 15.4685 16.0953L15.4684 16.0953L15.4662 16.1017L15.3532 16.4409L15.3043 16.5875L15.4136 16.6967L15.7528 17.0359L29.5296 30.8127L29.742 31.1313L29.8397 31.2779L30.0106 31.2352L30.4597 31.1229C31.4429 30.9049 32.4197 30.9067 33.2814 31.1221C34.1309 31.3345 34.9983 31.8706 35.7726 32.533C36.4161 33.1788 36.8428 33.9283 37.0569 34.7845L37.0603 34.7984L37.0653 34.8117C37.3216 35.4951 37.3744 36.1834 37.328 36.8864L35.554 35.1125C34.8371 34.3955 33.8715 33.9086 32.7767 33.9086C31.813 33.9086 30.8416 34.2695 30.1119 35.112C29.2694 35.8417 28.9085 36.8131 28.9085 37.7767C28.9085 38.8716 29.3955 39.8371 30.1124 40.5541L31.8864 42.3281C31.1834 42.3745 30.495 42.3216 29.8116 42.0654L29.7983 42.0604L29.7845 42.0569C28.9282 41.8429 28.1788 41.4162 27.5329 40.7726C26.8706 39.9983 26.3345 39.131 26.1221 38.2814C25.9066 37.4197 25.9049 36.4429 26.1229 35.4598L26.2351 35.0107L26.2779 34.8398L26.1313 34.742L25.8127 34.5296L12.0359 20.7528L11.6967 20.4136L11.5874 20.3044L11.4408 20.3532L11.1083 20.4641C9.89348 20.7946 8.69988 20.8984 7.51523 20.5754L7.50693 20.5731L7.49848 20.5714C6.41129 20.354 5.33353 19.8116 4.58476 18.9559Z" fill="#0039C6" stroke="#0039C6" stroke-width="0.5"/>
                  </svg>
                <h3 class="">Maintenance de votre DAE</h3>
                <p class="">L'entretien de votre défibrillateur est important car il peut sauver une vie. Vous devez vous assurer que tous les composants, y compris les batteries et les électrodes, sont à jour par rapport aux recommandations d'utilisation du fabricant. La maintenance de votre DAE ne consiste pas seulement à vérifier son état de marche, mais aussi à s'assurer que tout fonctionne correctement dans son intégralité, afin d'éviter tout danger ou dysfonctionnement potentiel qui pourrait survenir uniquement en raison de pratiques d'entretien négligentes, effectuées sans suivre les instructions de maintenance avec une grande attention.</p>
            </div>
            <div class="maintaining__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="50" viewBox="0 0 41 50" fill="none">
                    <g clip-path="url(#clip0_3_4649)">
                      <path d="M14.8859 6.75015C7.22852 6.75015 1 12.9786 1 20.6361C1 28.2935 7.22852 34.522 14.8859 34.522C17.3919 34.522 19.739 33.8486 21.7699 32.6827L32.2715 43.1843C33.6926 44.6054 36.0282 44.6054 37.4494 43.1843C38.8705 41.7631 38.8705 39.4276 37.4494 38.0064L26.9475 27.5046C28.1069 25.4774 28.7718 23.1342 28.7718 20.6361C28.7718 12.9786 22.5433 6.75015 14.8859 6.75015ZM14.8859 9.19814C21.2144 9.19814 26.3239 14.3076 26.3239 20.6361C26.3239 26.9646 21.2144 32.074 14.8859 32.074C8.55745 32.074 3.44799 26.9646 3.44799 20.6361C3.44799 14.3076 8.55745 9.19814 14.8859 9.19814ZM33.9947 41.4611L23.8104 31.2768C24.4321 30.7549 25.0047 30.1823 25.5266 29.5606L35.7109 39.7449C36.1975 40.2315 36.1975 40.9744 35.7109 41.4611C35.2243 41.9477 34.4813 41.9477 33.9947 41.4611Z" fill="#0039C6" stroke="#0039C6" stroke-width="0.5"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_3_4649">
                        <rect width="40" height="50" fill="white" transform="translate(0.25)"/>
                      </clipPath>
                    </defs>
                  </svg>
                <h3 class="">Signalétique DAE</h3>
                <p class="">En tant que propriétaire ou gérant d'un établissement ouvert au public, vous devez disposer d'un défibrillateur. Il est de votre responsabilité - et de votre devoir - d'afficher des panneaux visibles indiquant son emplacement et de vous assurer qu'il est assez facile à trouver pour les clients / visiteurs / employés qui pourraient venir le chercher en cas d'urgence !</p>
            </div>
            <div class="maintaining__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="50" viewBox="0 0 41 50" fill="none">
                    <g clip-path="url(#clip0_3_4655)">
                      <path d="M9.65417 32.6409C9.653 31.9973 9.70599 31.355 9.8125 30.7206C7.8157 30.4655 5.97406 29.4988 4.62892 27.9931C3.22341 26.4197 2.46358 24.3738 2.50134 22.2645C2.53911 20.1551 3.37169 18.1378 4.83262 16.6157C6.25715 15.1316 8.17674 14.2252 10.224 14.0659C10.9786 12.2724 12.16 10.6895 13.6665 9.45555C15.2134 8.18845 17.0535 7.32976 19.0183 6.95816C20.983 6.58657 23.0097 6.71393 24.9125 7.3286C26.781 7.93221 28.4715 8.98681 29.8349 10.3985C32.3038 10.4067 34.6861 11.3103 36.5396 12.942C38.3987 14.5788 39.5985 16.8361 39.9151 19.2927C40.2317 21.7493 39.6433 24.2372 38.2599 26.2917C36.9208 28.2805 34.9254 29.7317 32.6265 30.3945C32.928 31.9133 32.9225 33.4779 32.6093 34.996C32.2801 36.5915 31.6185 38.0998 30.6675 39.4226C29.7165 40.7454 28.4975 41.8529 27.0898 42.6731C25.6822 43.4933 24.1176 44.0077 22.4979 44.1828C20.8781 44.3579 19.2397 44.1898 17.6893 43.6894C16.1389 43.189 14.7113 42.3676 13.4996 41.2787C12.2878 40.1897 11.3191 38.8577 10.6566 37.3693C9.99405 35.8811 9.6525 34.27 9.65417 32.6409ZM9.65417 32.6409C9.65417 32.6408 9.65418 32.6407 9.65418 32.6406L9.90418 32.6409L9.65418 32.6413C9.65418 32.6412 9.65417 32.6411 9.65417 32.6409ZM29.812 10.5688L29.8121 10.5687L29.8122 10.5686L29.812 10.6484L29.812 10.5688ZM29.812 10.5688L29.8121 10.3984H29.7281V10.6484L29.812 10.5688ZM36.4245 25.0916C35.3714 26.6401 33.8109 27.769 32.0162 28.2864C31.1582 26.1612 29.6889 24.3361 27.7919 23.0437C25.8276 21.7055 23.4996 21.0032 21.123 21.0318C18.7464 21.0604 16.4359 21.8185 14.5044 23.2036C12.6235 24.5523 11.1903 26.4322 10.3874 28.6C8.82387 28.5026 7.35281 27.8153 6.27397 26.6733C5.15367 25.4874 4.54696 23.907 4.58583 22.2761C4.6247 20.6452 5.306 19.0956 6.48153 17.9644C7.65706 16.8332 9.23171 16.2119 10.8629 16.2358L10.8629 16.2358H10.8666H10.9716H11.5852H11.7663L11.8228 16.0638L12.0112 15.49C12.5708 13.8787 13.5422 12.4417 14.829 11.3219C16.1163 10.2017 17.6744 9.43788 19.3483 9.1064C21.0223 8.77492 22.7539 8.88733 24.371 9.43245C25.988 9.97757 27.4343 10.9364 28.5659 12.2137L28.5674 12.2153L28.8363 12.5137L28.916 12.6021L29.035 12.596L29.5959 12.5669H29.8161C31.766 12.5719 33.6473 13.2874 35.1077 14.5796C36.5682 15.8718 37.5076 17.6521 37.75 19.5871C37.9924 21.5221 37.5211 23.4791 36.4245 25.0916ZM16.4071 37.4341H13.151C12.4779 36.3012 12.0517 35.0394 11.8997 33.7314H15.9677C16.0219 34.9749 16.1688 36.2125 16.4071 37.4341ZM18.6075 27.8477H23.8792C24.1442 29.0659 24.3032 30.3048 24.3545 31.5504H18.1471C18.1935 30.3052 18.3475 29.0664 18.6075 27.8477ZM23.2261 25.6666H19.2765C19.5797 24.9027 19.9169 24.3083 20.2519 23.8957C20.6425 23.4145 20.9923 23.2248 21.2513 23.2248C21.5103 23.2248 21.8601 23.4145 22.2508 23.8957C22.5858 24.3083 22.9229 24.9027 23.2261 25.6666ZM25.5417 25.6666C25.3535 25.0738 25.1196 24.4966 24.8424 23.9404C25.8434 24.3546 26.7656 24.9386 27.5681 25.6666H25.5417ZM17.6603 23.9404C17.383 24.4966 17.1492 25.0738 16.9609 25.6666H14.9345C15.7371 24.9386 16.6592 24.3546 17.6603 23.9404ZM13.151 27.8477H16.4188C16.1768 29.069 16.0263 30.3066 15.9684 31.5504H11.8997C12.0517 30.2424 12.4779 28.9806 13.151 27.8477ZM16.9609 39.6151C17.1492 40.208 17.383 40.7851 17.6602 41.3414C16.6592 40.9271 15.7371 40.3431 14.9345 39.6151H16.9609ZM21.2513 42.057C20.9923 42.057 20.6425 41.8673 20.2519 41.3861C19.9169 40.9734 19.5797 40.379 19.2765 39.6151H23.2261C22.9229 40.379 22.5858 40.9734 22.2508 41.3861C21.8601 41.8673 21.5103 42.057 21.2513 42.057ZM23.8952 37.4341H18.6235C18.3585 36.2158 18.1995 34.977 18.1482 33.7314H24.3555C24.3091 34.9766 24.1551 36.2154 23.8952 37.4341ZM27.5681 39.6151C26.7645 40.3441 25.841 40.9287 24.8385 41.343C25.117 40.7863 25.3521 40.2086 25.5414 39.6151H27.5681ZM30.603 33.7314C30.451 35.0394 30.0248 36.3012 29.3517 37.4341H26.0956C26.3338 36.2125 26.4807 34.9749 26.535 33.7314H30.603ZM30.603 31.5504H26.535C26.4807 30.3069 26.3338 29.0693 26.0956 27.8477H29.3517C30.0248 28.9806 30.451 30.2424 30.603 31.5504Z" fill="#0039C6" stroke="#0039C6" stroke-width="0.5"/>
                      <path d="M27.1352 16.9796L26.8848 16.9792V17.2296V18.9107V19.1603L27.1344 19.1607C28.7027 19.1628 30.2061 19.7867 31.315 20.8957C32.424 22.0046 33.0479 23.508 33.05 25.0763L33.0504 25.326H33.3H34.9811H35.2315L35.2311 25.0756C35.2277 22.9294 34.3736 20.8722 32.8561 19.3547C31.3385 17.8371 29.2813 16.9831 27.1352 16.9796Z" fill="#0039C6" stroke="#0039C6" stroke-width="0.5"/>
                      <path d="M12.3164 21.0122L12.316 21.2626H12.5664H14.2475H14.4971L14.4975 21.0129C14.4996 19.445 15.1236 17.9421 16.2327 16.8338C17.3417 15.7256 18.8451 15.1025 20.4129 15.1015L20.6627 15.1013V14.8515V13.1704V12.9201L20.4125 12.9204C18.2667 12.9227 16.2094 13.7758 14.6918 15.2927C13.1741 16.8096 12.3198 18.8664 12.3164 21.0122Z" fill="#0039C6" stroke="#0039C6" stroke-width="0.5"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_3_4655">
                        <rect width="40" height="50" fill="white" transform="translate(0.75)"/>
                      </clipPath>
                    </defs>
                  </svg>
                <h3 class="">Déclaration</h3>
                <p class="">Afin d'assurer la sécurité et l'accessibilité des défibrillateurs, les propriétaires de DAE doivent signaler leur emplacement dans une base de données nationale. Cela permettra aux agents médicaux et à tout citoyen cherchant des appareils de sauvetage à proximité d'y accéder facilement !</p>
            </div>
        </div>
    </div>
</section>
<section class="additionalInfo">
    <div class="container">
        <div class="additionalInfo__inner">
            <div class="additionalInfo__row">
                <div class="additionalInfo__item__top">
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M13.9364 2.80501C12.0677 2.20007 10.0362 3.04153 9.14248 4.79073L8.06811 6.89363C7.94046 7.14349 7.73724 7.34671 7.48738 7.47436L5.38448 8.54873C3.63528 9.4424 2.79382 11.4739 3.39876 13.3427L4.12604 15.5893C4.21244 15.8563 4.21244 16.1437 4.12604 16.4107L3.39876 18.6573C2.79382 20.5261 3.63528 22.5576 5.38448 23.4513L7.48738 24.5256C7.73724 24.6533 7.94046 24.8565 8.06811 25.1064L9.14248 27.2093C10.0362 28.9585 12.0677 29.8 13.9364 29.1951L16.1831 28.4677C16.45 28.3813 16.7375 28.3813 17.0044 28.4677L19.2511 29.1951C21.1199 29.8 23.1513 28.9585 24.0451 27.2093L25.1193 25.1064C25.2471 24.8565 25.4503 24.6533 25.7001 24.5256L27.8031 23.4513C29.5523 22.5576 30.3937 20.5261 29.7888 18.6573L29.0615 16.4107C28.9751 16.1437 28.9751 15.8563 29.0615 15.5893L29.7888 13.3427C30.3937 11.4739 29.5523 9.4424 27.8031 8.54873L25.7001 7.47436C25.4503 7.34671 25.2471 7.14349 25.1193 6.89363L24.0451 4.79073C23.1513 3.04153 21.1199 2.20007 19.2511 2.80501L17.0044 3.53229C16.7375 3.61869 16.45 3.61871 16.1831 3.53229L13.9364 2.80501ZM11.5172 6.00397C11.8151 5.42091 12.4922 5.14041 13.1152 5.34207L15.3619 6.06933C16.1627 6.32857 17.0248 6.32857 17.8256 6.06933L20.0724 5.34207C20.6952 5.14041 21.3724 5.42091 21.6703 6.00396L22.7447 8.10687C23.1276 8.85644 23.7373 9.46609 24.4869 9.84905L26.5897 10.9234C27.1728 11.2213 27.4533 11.8985 27.2517 12.5214L26.5244 14.7681C26.2652 15.5689 26.2652 16.4311 26.5244 17.2319L27.2517 19.4787C27.4533 20.1015 27.1728 20.7787 26.5897 21.0765L24.4869 22.1509C23.7373 22.5339 23.1276 23.1436 22.7447 23.8932L21.6703 25.996C21.3724 26.5791 20.6952 26.8596 20.0724 26.658L17.8256 25.9307C17.0248 25.6715 16.1627 25.6715 15.3619 25.9307L13.1152 26.658C12.4922 26.8596 11.8151 26.5791 11.5172 25.996L10.4428 23.8932C10.0598 23.1436 9.45019 22.5339 8.70062 22.1509L6.59772 21.0765C6.01466 20.7787 5.73416 20.1015 5.93582 19.4787L6.66308 17.2319C6.92232 16.4311 6.92232 15.5689 6.66308 14.7681L5.93582 12.5214C5.73416 11.8985 6.01466 11.2213 6.59772 10.9234L8.70062 9.84905C9.45019 9.46609 10.0598 8.85644 10.4428 8.10687L11.5172 6.00397ZM9.60654 15.6765L15.2633 21.3333L24.6915 11.9053L22.8059 10.0197L15.2633 17.5621L11.4922 13.7908L9.60654 15.6765Z" fill="white"/>
                          </svg>
                        <p class="">Nos produits sont sélectionnés sur des critères qualité et répondants aux normes en vigueur</p>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M27.1779 10.6667H28.5938C30.0666 10.6667 31.2604 11.8606 31.2604 13.3333V18.6667C31.2604 20.1395 30.0666 21.3333 28.5938 21.3333H27.1779C26.5218 26.5951 22.0332 30.6667 16.5938 30.6667V28C21.012 28 24.5938 24.4183 24.5938 20V12C24.5938 7.58171 21.012 3.99999 16.5938 3.99999C12.1755 3.99999 8.59376 7.58171 8.59376 12V21.3333H4.59376C3.121 21.3333 1.92709 20.1395 1.92709 18.6667V13.3333C1.92709 11.8606 3.121 10.6667 4.59376 10.6667H6.00961C6.66575 5.40491 11.1543 1.33333 16.5938 1.33333C22.0332 1.33333 26.5218 5.40491 27.1779 10.6667ZM4.59376 13.3333V18.6667H5.92709V13.3333H4.59376ZM27.2604 13.3333V18.6667H28.5938V13.3333H27.2604ZM10.9397 21.0465L12.3532 18.7849C13.5826 19.5549 15.0362 20 16.5938 20C18.1514 20 19.605 19.5549 20.8343 18.7849L22.2479 21.0465C20.6087 22.0732 18.6706 22.6667 16.5938 22.6667C14.517 22.6667 12.5789 22.0732 10.9397 21.0465Z" fill="white"/>
                          </svg>
                        <p class="">Une permanence technique téléphonique 7 jours/7 est mise à votre disposition</p>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M7.69902 4.36211C9.34314 3.7776 11.2495 4.14332 12.5655 5.45928C14.06 6.95383 14.329 9.20988 13.3722 10.9785L27.6504 25.2583L25.7648 27.1439L11.4862 12.865C9.71746 13.8225 7.4607 13.5539 5.9658 12.059C4.64947 10.7426 4.28391 8.83554 4.86912 7.1911L7.85143 10.1733C8.63247 10.9544 9.8988 10.9544 10.6799 10.1733C11.4609 9.39228 11.4609 8.12595 10.6799 7.34491L7.69902 4.36211ZM21.5222 6.8735L25.7648 4.51648L27.6504 6.4021L25.2934 10.6447L22.9364 11.1161L20.1079 13.9445L18.2223 12.059L21.0507 9.23052L21.5222 6.8735ZM12.5655 17.7157L14.4511 19.6015L7.38002 26.6725C6.85932 27.1932 6.0151 27.1932 5.4944 26.6725C5.0109 26.1889 4.97636 25.4265 5.39079 24.9032L5.4944 24.7869L12.5655 17.7157Z" fill="white"/>
                          </svg>
                        <p class="">Un service maintenance attentif à vos besoins et une intervention en moins de 72h</p>
                    </div>
                </div>
                <div class="additionalInfo__item__top">
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M24.3817 20.8787L24.6164 21.1147L24.8531 20.8787C26.0247 19.7071 27.9241 19.7071 29.0957 20.8787C30.2673 22.0503 30.2673 23.9497 29.0957 25.1213L24.6175 29.5996L20.1391 25.1213C18.9675 23.9497 18.9675 22.0503 20.1391 20.8787C21.3107 19.7071 23.2101 19.7071 24.3817 20.8787ZM16.5937 18.6667V21.3333C12.1754 21.3333 8.59373 24.9151 8.59373 29.3333H5.92706C5.92706 23.5535 10.5242 18.8473 16.2615 18.6717L16.5937 18.6667ZM16.5937 1.33334C21.0137 1.33334 24.5937 4.91334 24.5937 9.33334C24.5937 13.6529 21.1747 17.1701 16.8937 17.3279L16.5937 17.3333C12.1737 17.3333 8.59373 13.7533 8.59373 9.33334C8.59373 5.0138 12.0128 1.4965 16.2937 1.33886L16.5937 1.33334ZM16.5937 4.00001C13.6465 4.00001 11.2604 6.3861 11.2604 9.33334C11.2604 12.2806 13.6465 14.6667 16.5937 14.6667C19.5409 14.6667 21.9271 12.2806 21.9271 9.33334C21.9271 6.3861 19.5409 4.00001 16.5937 4.00001Z" fill="white"/>
                          </svg>
                        <p class="">Une équipe réactive et un suivi personnalisé de votre commande</p>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M7.26042 4V25.3333H28.5938V28H4.59375V4H7.26042ZM27.651 8.39052L29.5366 10.2761L21.9271 17.8856L17.9271 13.8867L12.2032 19.6095L10.3176 17.7239L17.9271 10.1144L21.9271 14.1133L27.651 8.39052Z" fill="white"/>
                          </svg>
                        <p class="">Une veille permanente de l’évolution de la législation relative aux défibrillateurs</p>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M16.6003 29.3372C9.23645 29.3372 3.26691 23.3677 3.26691 16.0039C3.26691 8.64011 9.23645 2.67058 16.6003 2.67058C23.964 2.67058 29.9336 8.64011 29.9336 16.0039C29.9336 23.3677 23.964 29.3372 16.6003 29.3372ZM16.6003 26.6705C22.4913 26.6705 27.2669 21.8949 27.2669 16.0039C27.2669 10.1129 22.4913 5.33724 16.6003 5.33724C10.7092 5.33724 5.93357 10.1129 5.93357 16.0039C5.93357 21.8949 10.7092 26.6705 16.6003 26.6705ZM14.0003 14.6705H20.6003V17.3372H14.0003C14.3091 18.8587 15.6543 20.0039 17.2669 20.0039C18.0872 20.0039 18.8381 19.7076 19.4188 19.2163L21.6868 20.7283C20.5901 21.9223 19.0159 22.6705 17.2669 22.6705C14.1785 22.6705 11.6352 20.3372 11.3035 17.3372H9.93357V14.6705H11.3035C11.6352 11.6706 14.1785 9.33724 17.2669 9.33724C19.0159 9.33724 20.5901 10.0856 21.6868 11.2796L19.4189 12.7916C18.8383 12.3002 18.0872 12.0039 17.2669 12.0039C15.6543 12.0039 14.3091 13.1491 14.0003 14.6705Z" fill="white"/>
                          </svg>
                        <p class="">Une offre qui s’adapte à votre situation (achat/ location)</p>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M16.5946 24.3467L7.18997 29.6109L9.29041 19.0399L1.37762 11.7224L12.0803 10.4534L16.5946 0.666664L21.1087 10.4534L31.8114 11.7224L23.8987 19.0399L25.9991 29.6109L16.5946 24.3467ZM16.5946 21.2907L22.2568 24.4601L20.9922 18.0956L25.7563 13.6899L19.3124 12.9258L16.5946 7.03336L13.8766 12.9258L7.43272 13.6899L12.1968 18.0956L10.9322 24.4601L16.5946 21.2907Z" fill="white"/>
                          </svg>
                        <p class="">Des experts engagés, disponibles et à votre écoute</p>
                    </div>
                </div>
            </div>
            <div class="additionalInfo__row">
                <div class="additionalInfo__item__bottom">
                    <div class="additionalInfo__line__bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                            <path d="M1.66461 21.848C1.54105 22.5903 1.64857 23.3527 1.97261 24.032C2.28054 24.6848 2.77639 25.2308 3.39661 25.6C3.76693 25.8159 4.17362 25.9623 4.59661 26.032C4.51138 26.2809 4.45371 26.5385 4.42461 26.8C4.34796 27.6459 4.56246 28.4926 5.03261 29.2C5.48551 29.8737 6.14975 30.3775 6.92061 30.632C7.64336 30.8667 8.42186 30.8667 9.14461 30.632C9.19963 30.9392 9.29512 31.2378 9.42861 31.52C9.72775 32.1528 10.2049 32.6847 10.8017 33.0506C11.3984 33.4165 12.0889 33.6004 12.7886 33.58C13.0593 33.5652 13.3275 33.5209 13.5886 33.448C13.6141 33.6306 13.6529 33.811 13.7046 33.988C13.8903 34.5986 14.2322 35.1501 14.6966 35.588C15.1397 35.9816 15.6726 36.2604 16.2486 36.4C16.7428 36.5266 17.259 36.541 17.7595 36.442C18.2599 36.343 18.7319 36.1332 19.1406 35.828C19.3089 35.6978 19.4643 35.5518 19.6046 35.392C19.7326 35.244 19.8046 35.14 19.9006 35.016C20.0766 34.78 20.2366 34.564 20.3686 34.364C20.4086 34.308 20.2566 34.084 20.0326 33.868C19.8086 33.652 19.6326 33.552 19.5926 33.588C19.3926 33.724 19.1926 33.88 18.9406 34.06C18.8286 34.144 18.6926 34.26 18.5886 34.328C18.4906 34.3944 18.3876 34.4533 18.2806 34.504C18.049 34.6105 17.7986 34.67 17.5438 34.6789C17.2891 34.6878 17.0351 34.646 16.7966 34.556C16.5455 34.4558 16.3216 34.2978 16.143 34.0949C15.9644 33.8919 15.8361 33.6497 15.7686 33.388C15.703 33.1167 15.7079 32.8332 15.7828 32.5643C15.8577 32.2954 16.0002 32.0502 16.1966 31.852L17.1566 30.88C17.3554 30.6873 17.6007 30.5495 17.8686 30.48C18.1336 30.4141 18.4104 30.4124 18.6762 30.475C18.9419 30.5376 19.1889 30.6627 19.3966 30.84C19.59 31.0081 19.7477 31.2133 19.8604 31.4435C19.9731 31.6737 20.0384 31.9241 20.0526 32.18C20.0744 32.623 19.9689 33.063 19.7486 33.448C19.7246 33.496 19.8806 33.712 20.0966 33.92C20.3126 34.128 20.4966 34.216 20.5366 34.172C21.115 33.707 21.4976 33.0417 21.6086 32.308C21.6835 31.807 21.6456 31.2956 21.4975 30.8111C21.3494 30.3267 21.0949 29.8814 20.7526 29.508C20.351 29.0724 19.8482 28.7426 19.2886 28.548C18.8906 28.4144 18.4724 28.3508 18.0526 28.36C18.0526 28.26 18.0806 28.156 18.0886 28.048C18.1179 27.4979 18.0136 26.9489 17.7846 26.448C17.4854 25.797 16.9914 25.2549 16.3709 24.8967C15.7504 24.5384 15.034 24.3817 14.3206 24.448C14.3323 24.2895 14.3323 24.1304 14.3206 23.972C14.2838 23.3245 14.065 22.7005 13.6892 22.1719C13.3135 21.6433 12.7961 21.2315 12.1966 20.984C11.6898 20.7779 11.1422 20.6916 10.5966 20.732C10.5966 20.676 10.5966 20.624 10.5966 20.568C10.6259 20.0179 10.5216 19.4689 10.2926 18.968C10.0153 18.3867 9.58358 17.8927 9.04467 17.54C8.50576 17.1874 7.88032 16.9895 7.23661 16.968C6.51595 16.94 5.8032 17.1266 5.18861 17.504C5.03119 17.6003 4.88142 17.7086 4.74061 17.828L4.66061 17.896C4.19661 17.04 3.17261 16.204 2.41261 16.212C2.25907 16.3346 2.11468 16.4683 1.98061 16.612C1.85655 16.7284 1.74155 16.8541 1.63661 16.988C1.63661 17.744 2.43661 18.764 3.29661 19.248L2.69661 19.84C2.15247 20.3859 1.79178 21.0877 1.66461 21.848ZM15.5766 26.672C15.8375 26.817 16.0608 27.0211 16.2286 27.268C16.3837 27.5102 16.4846 27.7831 16.5246 28.068C16.5599 28.2852 16.5599 28.5067 16.5246 28.724C16.2266 28.87 15.9506 29.0572 15.7046 29.28C15.5646 29.404 15.5006 29.472 15.4126 29.556L15.1606 29.804L14.6566 30.304C14.3587 30.6106 14.114 30.9648 13.9326 31.352C13.8541 31.4044 13.7711 31.45 13.6846 31.488C13.4133 31.6083 13.1167 31.6605 12.8206 31.64C12.5117 31.6162 12.2152 31.5077 11.964 31.3263C11.7127 31.1449 11.5164 30.8977 11.3966 30.612C11.2737 30.3197 11.2404 29.9975 11.301 29.6863C11.3615 29.3751 11.5131 29.0889 11.7366 28.864L12.8726 27.716L13.3966 27.14L13.5366 26.996L13.6286 26.908C13.6848 26.8542 13.745 26.8047 13.8086 26.76C14.0665 26.5835 14.3681 26.4818 14.6802 26.4663C14.9923 26.4508 15.3025 26.522 15.5766 26.672ZM11.5206 22.78C11.8326 22.8766 12.1135 23.0541 12.3348 23.2943C12.5561 23.5346 12.7099 23.8291 12.7806 24.148C12.8366 24.3961 12.8461 24.6524 12.8086 24.904C12.7646 24.928 12.7166 24.948 12.6766 24.972C12.5204 25.0698 12.372 25.1794 12.2326 25.3L12.0326 25.48L11.8886 25.62L11.3126 26.18L10.1606 27.316C9.86946 27.609 9.62887 27.9483 9.44861 28.32L9.38061 28.38L9.27661 28.46C9.21025 28.5097 9.14077 28.5551 9.06861 28.596C8.92059 28.674 8.76336 28.7331 8.60061 28.772C8.25991 28.8441 7.90522 28.8085 7.58562 28.6702C7.26601 28.5319 6.99729 28.2977 6.81661 28C6.6387 27.6986 6.56163 27.3482 6.59661 27C6.64067 26.6469 6.79947 26.318 7.04861 26.064C7.90461 25.208 8.75261 24.34 9.56461 23.496L9.71661 23.336C9.76461 23.284 9.82461 23.224 9.84861 23.2C10.0315 23.0153 10.2567 22.878 10.5046 22.8C10.8334 22.6904 11.1878 22.6834 11.5206 22.78ZM5.39661 20.248L5.95261 19.676L6.09261 19.532L6.18461 19.444C6.24084 19.3902 6.30101 19.3407 6.36461 19.296C6.61953 19.1221 6.91713 19.0213 7.22523 19.0043C7.53333 18.9874 7.84019 19.0551 8.11261 19.2C8.37358 19.3449 8.59689 19.549 8.76461 19.796C9.03453 20.2093 9.13747 20.7097 9.05261 21.196L8.88461 21.292C8.71484 21.4028 8.55432 21.5272 8.40461 21.664C8.32061 21.74 8.27661 21.78 8.22061 21.832L8.06061 21.984C7.34461 22.672 6.61661 23.388 5.88861 24.108C5.70643 24.1499 5.51928 24.166 5.33261 24.156C5.02453 24.1329 4.72872 24.0256 4.47756 23.8457C4.2264 23.6658 4.02957 23.4203 3.90861 23.136C3.78572 22.8437 3.75243 22.5215 3.81296 22.2103C3.8735 21.8991 4.02513 21.6129 4.24861 21.388L5.39661 20.248Z" fill="white"/>
                            <path d="M38.8006 15.76C37.8766 15.812 36.4966 17.056 36.0366 18.112L33.7486 15.712L30.7886 12.664L29.2406 11.064L28.4406 10.264C28.3206 10.136 28.1486 9.97599 27.9886 9.82799C27.8179 9.67557 27.639 9.53269 27.4526 9.39999C27.0579 9.11828 26.6202 8.90216 26.1566 8.75999C25.6405 8.59434 25.0953 8.53981 24.5566 8.59999C24.044 8.66807 23.5472 8.82509 23.0886 9.06399C22.6704 9.28587 22.2786 9.55423 21.9206 9.86399C21.7566 10.012 21.5806 10.172 21.4366 10.316L21.0366 10.716L20.1966 11.556L18.5446 13.2L17.7126 14.032L17.6086 14.136L17.5206 14.22C17.4793 14.2603 17.4352 14.2978 17.3886 14.332C17.2993 14.403 17.2011 14.4622 17.0966 14.508C16.7835 14.647 16.4334 14.6791 16.1002 14.5993C15.7671 14.5196 15.4694 14.3323 15.2533 14.0666C15.0371 13.8008 14.9145 13.4713 14.9042 13.1289C14.894 12.7865 14.9967 12.4502 15.1966 12.172C15.408 11.9231 15.6323 11.6854 15.8686 11.46L16.6686 10.66L18.2166 9.05999L21.1766 6.01199L21.3526 5.82799L21.5126 5.66799C21.6166 5.55999 21.7326 5.46399 21.8406 5.36399C22.0644 5.17027 22.2995 4.98996 22.5446 4.82399C23.021 4.50094 23.5322 4.23258 24.0686 4.02399C24.5862 3.83408 25.1226 3.69999 25.6686 3.62399C25.9336 3.58244 26.2007 3.55573 26.4686 3.54399L27.3126 3.51599C29.5646 3.44799 31.5166 3.36799 33.0806 3.27199C33.3046 3.27199 33.4806 2.99199 33.4566 2.68399C33.4654 2.56781 33.4323 2.45234 33.3633 2.35843C33.2944 2.26453 33.1941 2.1984 33.0806 2.17199C31.5206 2.07999 29.5646 1.99999 27.3126 1.92799C27.0246 1.92799 26.7566 1.90799 26.4446 1.90399C26.1201 1.89888 25.7956 1.91224 25.4726 1.94399C23.6962 2.12369 22.011 2.81888 20.6246 3.94399L20.5166 4.03599C20.2575 3.67804 19.9461 3.36115 19.5926 3.09599C18.9305 2.59683 18.1452 2.28711 17.3206 2.19999C16.8366 2.1578 16.349 2.19427 15.8766 2.30799C15.3941 2.43595 14.9351 2.63983 14.5166 2.91199C14.1459 3.17221 13.8051 3.47271 13.5006 3.80799L13.3966 3.91199C12.7535 3.33875 12.0539 2.83216 11.3086 2.39999C11.2686 2.39999 11.0606 2.54399 10.8446 2.76799C10.6286 2.99199 10.5166 3.14399 10.5326 3.16799C11.1609 4.22018 11.9056 5.19833 12.7526 6.08399C12.9246 6.27485 13.1643 6.39089 13.4207 6.40734C13.6771 6.42378 13.9297 6.33931 14.1246 6.17199L14.2246 6.08399C14.7566 5.62799 15.3526 4.98799 15.7366 4.72799C15.9615 4.59083 16.2018 4.48074 16.4526 4.39999C16.7011 4.32654 16.9577 4.28356 17.2166 4.27199C17.7399 4.27101 18.2585 4.37013 18.7446 4.56399C19.0406 4.67599 19.3126 4.80399 19.5446 4.92399L16.7446 7.64799L15.1446 9.19599L14.3446 9.99599C14.0281 10.2879 13.7314 10.6006 13.4566 10.932C12.9676 11.5941 12.7121 12.3997 12.7299 13.2226C12.7478 14.0456 13.0381 14.8393 13.5553 15.4796C14.0726 16.1199 14.7876 16.5705 15.5884 16.761C16.3892 16.9514 17.2305 16.8709 17.9806 16.532C18.2341 16.4181 18.4731 16.2744 18.6926 16.104C18.8033 16.0212 18.9088 15.9317 19.0086 15.836L19.1326 15.716L19.2366 15.612L20.0686 14.78L21.7286 13.116L22.5966 12.276L22.9966 11.876L23.3646 11.528C23.7719 11.1389 24.2807 10.8727 24.8326 10.76C25.3401 10.7164 25.8451 10.868 26.2446 11.184C26.3682 11.2695 26.487 11.3616 26.6006 11.46C26.7166 11.568 26.8246 11.66 26.9686 11.804L27.7686 12.604L29.3686 14.152L32.4166 17.112L35.2686 19.852L35.9446 20.496L36.2766 20.812C36.3542 20.8853 36.4264 20.9642 36.4926 21.048C36.7476 21.366 36.8884 21.7604 36.8926 22.168C36.8926 22.5525 36.7786 22.9283 36.565 23.248C36.3514 23.5677 36.0478 23.8168 35.6926 23.964C35.3827 24.0968 35.0442 24.1491 34.7086 24.116L33.8446 23.316C32.7408 22.3016 31.5802 21.3508 30.3686 20.468C30.3086 20.424 30.0846 20.572 29.8766 20.788C29.6686 21.004 29.5766 21.188 29.6166 21.228C30.5106 22.4296 31.4722 23.5794 32.4966 24.672L33.4686 25.72C33.7763 26.0205 34.0636 26.3413 34.3286 26.68C34.4866 26.943 34.5657 27.2459 34.5564 27.5526C34.5471 27.8593 34.4498 28.1568 34.2761 28.4098C34.1024 28.6627 33.8597 28.8604 33.5768 28.9792C33.2939 29.098 32.9828 29.133 32.6806 29.08C32.3923 29.027 32.1232 28.8987 31.9006 28.708C31.7083 28.4488 31.4883 28.2114 31.2446 28C30.7726 27.6 30.3046 27.2 29.8606 26.8C29.2886 26.328 28.7526 25.916 28.2846 25.6C27.9286 25.324 27.6006 25.08 27.3126 24.88C27.2486 24.836 27.0206 24.988 26.8086 25.212C26.5966 25.436 26.5006 25.612 26.5406 25.664C26.7326 25.936 26.9726 26.24 27.2406 26.572C27.5766 27.044 28.0126 27.588 28.5166 28.172C28.8966 28.608 29.3166 29.06 29.7486 29.52C29.9258 29.6765 30.077 29.8601 30.1966 30.064C30.2899 30.2318 30.3535 30.4145 30.3846 30.604C30.4461 30.9853 30.3755 31.3762 30.1846 31.712C29.9937 32.037 29.7074 32.2953 29.3646 32.452C29.0377 32.5951 28.6799 32.6529 28.3246 32.62L28.1446 32.592C28.0651 32.4609 27.9769 32.3353 27.8806 32.216C27.8092 32.1255 27.7317 32.0399 27.6486 31.96L27.5286 31.84L27.4366 31.76L27.0726 31.444C26.2999 30.7545 25.4717 30.1298 24.5966 29.576C24.5526 29.548 24.3406 29.708 24.1286 29.924C23.9166 30.14 23.8166 30.292 23.8406 30.324C24.3944 31.1991 25.0191 32.0273 25.7086 32.8L26.0246 33.164L26.1046 33.256L26.1526 33.32C26.1856 33.36 26.2151 33.4028 26.2406 33.448C26.349 33.6169 26.4263 33.8038 26.4686 34C26.5495 34.4139 26.4694 34.8431 26.2446 35.2C26.0173 35.5573 25.6602 35.8125 25.2486 35.912C24.8446 36.0084 24.4196 35.9588 24.0486 35.772C23.9612 35.7242 23.877 35.6708 23.7966 35.612C23.7086 35.552 23.5726 35.428 23.4686 35.344C23.2446 35.16 23.0246 34.988 22.8166 34.828C22.4623 34.551 22.0923 34.2946 21.7086 34.06C21.6646 34.032 21.4486 34.192 21.2326 34.416C21.0166 34.64 20.9086 34.816 20.9326 34.84C21.1671 35.2251 21.4235 35.5963 21.7006 35.952C21.8606 36.16 22.0326 36.376 22.2166 36.604C22.3166 36.724 22.3846 36.816 22.5206 36.964C22.6665 37.1203 22.8258 37.2635 22.9966 37.392C23.3745 37.6666 23.8032 37.8635 24.2577 37.9713C24.7122 38.0791 25.1836 38.0956 25.6446 38.02C26.5068 37.8787 27.2882 37.4287 27.8432 36.7538C28.3981 36.0789 28.6886 35.2253 28.6606 34.352C29.0822 34.4115 29.5112 34.3898 29.9246 34.288C30.752 34.0773 31.4751 33.5743 31.9606 32.872C32.2985 32.3739 32.5062 31.7991 32.5646 31.2C33.2699 31.2956 33.9879 31.1845 34.6313 30.8799C35.2746 30.5754 35.8157 30.0907 36.1889 29.4845C36.5621 28.8784 36.7512 28.1769 36.7334 27.4654C36.7156 26.7538 36.4916 26.0627 36.0886 25.476C36.0326 25.396 35.9686 25.312 35.9006 25.232C35.9806 25.232 36.0606 25.196 36.1406 25.172C36.7503 24.9736 37.2885 24.6009 37.6886 24.1C38.1311 23.551 38.3887 22.8762 38.4246 22.172C38.46 21.411 38.2389 20.6602 37.7966 20.04C37.6914 19.8851 37.5751 19.7381 37.4486 19.6L37.1886 19.328C38.2526 18.884 39.5246 17.484 39.5886 16.528C39.4676 16.373 39.3338 16.2285 39.1886 16.096C39.0694 15.9728 38.9396 15.8603 38.8006 15.76Z" fill="white"/>
                          </svg>
                    </div>
                    <div class="additionalInfo__line__bottom">
                        <p class="additionalInfo__line__bottom__heading">Notre Philosophie</h3>
                    </div>
                    <div class="additionalInfo__line__bottom">
                        <p class="">Nous vous équipons pour, ensemble, sauver des vies !</p>
                    </div>
                </div>
                <div class="additionalInfo__dop">
                    <div class="additionalInfo__dop__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M13.3427 2.80498C11.474 2.20004 9.44249 3.0415 8.54883 4.7907L7.47445 6.8936C7.3468 7.14346 7.14359 7.34668 6.89372 7.47433L4.79083 8.5487C3.04163 9.44237 2.20016 11.4739 2.80511 13.3426L3.53239 15.5893C3.61879 15.8562 3.61879 16.1437 3.53239 16.4106L2.80511 18.6573C2.20016 20.5261 3.04163 22.5576 4.79083 23.4513L6.89372 24.5256C7.14359 24.6533 7.3468 24.8565 7.47445 25.1064L8.54883 27.2093C9.44249 28.9585 11.474 29.8 13.3427 29.195L15.5894 28.4677C15.8563 28.3813 16.1438 28.3813 16.4107 28.4677L18.6574 29.195C20.5262 29.8 22.5577 28.9585 23.4514 27.2093L24.5257 25.1064C24.6534 24.8565 24.8566 24.6533 25.1065 24.5256L27.2094 23.4513C28.9586 22.5576 29.8001 20.5261 29.1951 18.6573L28.4678 16.4106C28.3814 16.1437 28.3814 15.8562 28.4678 15.5893L29.1951 13.3426C29.8001 11.4739 28.9586 9.44237 27.2094 8.5487L25.1065 7.47433C24.8566 7.34668 24.6534 7.14346 24.5257 6.8936L23.4514 4.7907C22.5577 3.0415 20.5262 2.20004 18.6574 2.80498L16.4107 3.53226C16.1438 3.61866 15.8563 3.61868 15.5894 3.53226L13.3427 2.80498ZM10.9235 6.00394C11.2214 5.42088 11.8986 5.14038 12.5215 5.34204L14.7682 6.0693C15.569 6.32854 16.4311 6.32854 17.2319 6.0693L19.4787 5.34204C20.1015 5.14038 20.7787 5.42088 21.0766 6.00393L22.151 8.10684C22.5339 8.85641 23.1437 9.46606 23.8933 9.84902L25.9961 10.9234C26.5791 11.2213 26.8597 11.8985 26.6581 12.5214L25.9307 14.7681C25.6715 15.5689 25.6715 16.431 25.9307 17.2318L26.6581 19.4786C26.8597 20.1014 26.5791 20.7786 25.9961 21.0765L23.8933 22.1509C23.1437 22.5338 22.5339 23.1436 22.151 23.8932L21.0766 25.996C20.7787 26.579 20.1015 26.8596 19.4787 26.658L17.2319 25.9306C16.4311 25.6714 15.569 25.6714 14.7682 25.9306L12.5215 26.658C11.8986 26.8596 11.2214 26.579 10.9235 25.996L9.84915 23.8932C9.46619 23.1436 8.85653 22.5338 8.10696 22.1509L6.00407 21.0765C5.421 20.7786 5.14051 20.1014 5.34216 19.4786L6.06943 17.2318C6.32867 16.431 6.32867 15.5689 6.06943 14.7681L5.34216 12.5214C5.14051 11.8985 5.421 11.2213 6.00407 10.9234L8.10696 9.84902C8.85653 9.46606 9.46619 8.85641 9.84915 8.10684L10.9235 6.00394ZM9.01288 15.6765L14.6697 21.3333L24.0978 11.9053L22.2122 10.0196L14.6697 17.5621L10.8985 13.7908L9.01288 15.6765Z" fill="#0039C6"/>
                          </svg>
                        <p class="">Nos produits sont sélectionnés sur des critères qualité et répondants aux normes en vigueur</p>
                    </div>
                    <div class="additionalInfo__dop__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M26.5841 10.6667H27.9999C29.4727 10.6667 30.6666 11.8606 30.6666 13.3334V18.6667C30.6666 20.1395 29.4727 21.3334 27.9999 21.3334H26.5841C25.9279 26.5951 21.4394 30.6667 15.9999 30.6667V28C20.4182 28 23.9999 24.4183 23.9999 20V12C23.9999 7.58176 20.4182 4.00004 15.9999 4.00004C11.5816 4.00004 7.99992 7.58176 7.99992 12V21.3334H3.99992C2.52716 21.3334 1.33325 20.1395 1.33325 18.6667V13.3334C1.33325 11.8606 2.52716 10.6667 3.99992 10.6667H5.41577C6.07191 5.40496 10.5604 1.33337 15.9999 1.33337C21.4394 1.33337 25.9279 5.40496 26.5841 10.6667ZM3.99992 13.3334V18.6667H5.33325V13.3334H3.99992ZM26.6666 13.3334V18.6667H27.9999V13.3334H26.6666ZM10.3458 21.0466L11.7594 18.785C12.9887 19.555 14.4423 20 15.9999 20C17.5575 20 19.0111 19.555 20.2404 18.785L21.6541 21.0466C20.0149 22.0732 18.0767 22.6667 15.9999 22.6667C13.9231 22.6667 11.985 22.0732 10.3458 21.0466Z" fill="#0039C6"/>
                          </svg>
                        <p class="">Une permanence technique téléphonique 7 jours/7 est mise à votre disposition</p>
                    </div>
                    <div class="additionalInfo__dop__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M7.10518 4.36206C8.7493 3.77756 10.6557 4.14328 11.9716 5.45924C13.4662 6.95378 13.7351 9.20984 12.7783 10.9784L27.0566 25.2582L25.171 27.1438L10.8924 12.865C9.12361 13.8225 6.86685 13.5538 5.37196 12.0589C4.05563 10.7426 3.69007 8.83549 4.27528 7.19105L7.25759 10.1733C8.03863 10.9543 9.30496 10.9543 10.086 10.1733C10.8671 9.39224 10.8671 8.1259 10.086 7.34486L7.10518 4.36206ZM20.9283 6.87345L25.171 4.51644L27.0566 6.40205L24.6995 10.6447L22.3426 11.1161L19.5141 13.9445L17.6285 12.0589L20.4569 9.23048L20.9283 6.87345ZM11.9716 17.7157L13.8573 19.6014L6.78618 26.6725C6.26548 27.1932 5.42125 27.1932 4.90056 26.6725C4.41705 26.1889 4.38252 25.4265 4.79695 24.9032L4.90056 24.7869L11.9716 17.7157Z" fill="#0039C6"/>
                          </svg>
                        <p class="">Un service maintenance attentif à vos besoins et une intervention en moins de 72h</p>
                    </div>
                    <div class="additionalInfo__dop__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M23.7879 20.8787L24.0226 21.1147L24.2593 20.8787C25.4309 19.7071 27.3303 19.7071 28.5019 20.8787C29.6735 22.0503 29.6735 23.9498 28.5019 25.1214L24.0236 29.5996L19.5453 25.1214C18.3737 23.9498 18.3737 22.0503 19.5453 20.8787C20.7169 19.7071 22.6163 19.7071 23.7879 20.8787ZM15.9999 18.6667V21.3334C11.5816 21.3334 7.99992 24.9151 7.99992 29.3334H5.33325C5.33325 23.5535 9.93037 18.8474 15.6677 18.6718L15.9999 18.6667ZM15.9999 1.33337C20.4199 1.33337 23.9999 4.91337 23.9999 9.33337C23.9999 13.653 20.5809 17.1702 16.2999 17.3279L15.9999 17.3334C11.5799 17.3334 7.99992 13.7534 7.99992 9.33337C7.99992 5.01383 11.419 1.49653 15.6999 1.33889L15.9999 1.33337ZM15.9999 4.00004C13.0527 4.00004 10.6666 6.38613 10.6666 9.33337C10.6666 12.2806 13.0527 14.6667 15.9999 14.6667C18.9471 14.6667 21.3333 12.2806 21.3333 9.33337C21.3333 6.38613 18.9471 4.00004 15.9999 4.00004Z" fill="#0039C6"/>
                          </svg>
                        <p class="">Une équipe réactive et un suivi personnalisé de votre commande</p>
                    </div>
                    <div class="additionalInfo__dop__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M6.66667 4V25.3333H28V28H4V4H6.66667ZM27.0572 8.39052L28.9428 10.2761L21.3333 17.8856L17.3333 13.8867L11.6095 19.6095L9.72385 17.7239L17.3333 10.1144L21.3333 14.1133L27.0572 8.39052Z" fill="#0039C6"/>
                          </svg>
                        <p class="">Une veille permanente de l’évolution de la législation relative aux défibrillateurs</p>
                    </div>
                    <div class="additionalInfo__dop__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16.0065 29.3372C8.64264 29.3372 2.6731 23.3677 2.6731 16.0038C2.6731 8.64007 8.64264 2.67053 16.0065 2.67053C23.3702 2.67053 29.3398 8.64007 29.3398 16.0038C29.3398 23.3677 23.3702 29.3372 16.0065 29.3372ZM16.0065 26.6705C21.8975 26.6705 26.6731 21.8949 26.6731 16.0038C26.6731 10.1128 21.8975 5.3372 16.0065 5.3372C10.1154 5.3372 5.33976 10.1128 5.33976 16.0038C5.33976 21.8949 10.1154 26.6705 16.0065 26.6705ZM13.4065 14.6705H20.0065V17.3372H13.4065C13.7153 18.8586 15.0605 20.0038 16.6731 20.0038C17.4934 20.0038 18.2443 19.7076 18.825 19.2162L21.093 20.7282C19.9963 21.9222 18.4221 22.6705 16.6731 22.6705C13.5847 22.6705 11.0413 20.3372 10.7097 17.3372H9.33976V14.6705H10.7097C11.0413 11.6706 13.5847 9.3372 16.6731 9.3372C18.4221 9.3372 19.9963 10.0856 21.093 11.2795L18.8251 12.7915C18.2445 12.3002 17.4934 12.0039 16.6731 12.0039C15.0605 12.0039 13.7153 13.149 13.4065 14.6705Z" fill="#0039C6"/>
                          </svg>
                        <p class="">Une offre qui s’adapte à votre situation (achat/ location)</p>
                    </div>
                    <div class="additionalInfo__dop__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16.0009 24.3466L6.59628 29.6109L8.69672 19.0398L0.783936 11.7224L11.4867 10.4534L16.0009 0.666626L20.515 10.4534L31.2177 11.7224L23.305 19.0398L25.4054 29.6109L16.0009 24.3466ZM16.0009 21.2906L21.6631 24.4601L20.3985 18.0956L25.1626 13.6898L18.7187 12.9257L16.0009 7.03332L13.2829 12.9257L6.83903 13.6898L11.6032 18.0956L10.3385 24.4601L16.0009 21.2906Z" fill="#0039C6"/>
                          </svg>
                        <p class="">Des experts engagés, disponibles et à votre écoute</p>
                    </div>
                </div>
                <div class="additionalInfo__item__bottom">
                    <div class="additionalInfo__line">
                        <p class="additionalInfo__line__heading">Contactez nous !</h3>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M21.2512 4.5H3.11835C2.05002 4.5 1.18475 5.37063 1.18475 6.43359V18.0352C1.18475 19.1044 2.05637 19.9688 3.11835 19.9688H21.2512C22.3106 19.9688 23.1848 19.1081 23.1848 18.0352V6.43359C23.1848 5.37252 22.3229 4.5 21.2512 4.5ZM20.9804 5.78906C20.5853 6.18201 13.7868 12.9448 13.552 13.1783C13.1868 13.5435 12.7012 13.7446 12.1848 13.7446C11.6683 13.7446 11.1827 13.5435 10.8163 13.1771C10.6584 13.02 3.93488 6.33193 3.38914 5.78906H20.9804ZM2.47382 17.7728V6.69678L8.0442 12.2378L2.47382 17.7728ZM3.38995 18.6797L8.95814 13.1469L9.90599 14.0898C10.5147 14.6985 11.324 15.0337 12.1848 15.0337C13.0455 15.0337 13.8548 14.6985 14.4623 14.091L15.4114 13.1469L20.9796 18.6797H3.38995ZM21.8957 17.7728L16.3253 12.2378L21.8957 6.69678V17.7728Z" fill="white"/>
                          </svg>
                        <a href="mailto:contact@cardiopro.fr" class="">contact@cardiopro.fr</a>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M21.2216 16.4918L18.1287 14.2991C17.8456 14.1063 17.589 13.9649 17.3437 13.8656C16.6967 13.6027 16.0776 13.6392 15.5071 13.9734C15.0824 14.1748 14.5147 14.7677 14.0407 15.2426C12.465 14.2513 10.5347 12.3278 9.42224 10.6401C9.42224 10.6394 9.42152 10.6394 9.42152 10.6387C9.83618 10.2044 10.4603 9.6209 10.6798 9.19022C11.0387 8.60026 11.0759 7.96745 10.7963 7.32178C10.6898 7.06252 10.5418 6.80182 10.3452 6.52899L8.18825 3.49278C7.75214 2.86926 7.03935 2.50714 6.22575 2.5C5.33708 2.5 4.51633 2.86354 3.81498 3.55492C2.30932 4.89554 1.83389 6.87182 2.44159 9.27021C3.79067 14.592 10.2902 21.0372 15.5635 22.2807C17.584 22.8006 19.8231 22.4264 21.1372 20.8322C21.6176 20.293 22.1896 19.4316 22.1832 18.3917C22.171 17.5632 21.8321 16.8996 21.2216 16.4918ZM20.0619 19.8894C19.1175 20.9829 17.7155 21.3179 15.8917 20.8893C11.1352 19.7673 5.0461 13.7263 3.82857 8.91809C3.35313 7.04323 3.66842 5.59763 4.7923 4.59699C5.48722 3.97275 6.30868 3.56492 7.02005 4.31486C7.25026 4.67484 9.38148 7.54391 9.478 7.87531C9.59239 8.13815 9.55664 8.28457 9.43367 8.48955C9.27567 8.78453 8.62222 9.39092 8.35626 9.68732C7.91658 10.0823 7.85295 10.7872 8.19397 11.3743C9.40794 13.2356 11.5592 15.3783 13.3265 16.4804C13.8205 16.7704 14.5569 16.7997 14.9601 16.339C15.3083 16.0169 15.8524 15.3869 16.2177 15.2112C16.5344 14.9805 16.9713 15.2433 17.3123 15.4712L20.4087 17.666C21.0693 18.1417 20.6846 19.2323 20.0619 19.8894Z" fill="white"/>
                          </svg>
                        <p class="">01 85 73 04 07</p>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6472 9.16663C11.6575 9.16663 10.8524 9.97176 10.8524 10.9625C10.8524 11.9523 11.6575 12.7564 12.6472 12.7564C13.637 12.7564 14.4421 11.9523 14.4421 10.9625C14.4421 9.97176 13.637 9.16663 12.6472 9.16663ZM12.6472 14.2948C10.8093 14.2948 9.3139 12.8005 9.3139 10.9625C9.3139 9.12355 10.8093 7.62817 12.6472 7.62817C14.4852 7.62817 15.9806 9.12355 15.9806 10.9625C15.9806 12.8005 14.4852 14.2948 12.6472 14.2948Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6462 4.03842C8.8288 4.03842 5.72315 7.17381 5.72315 11.0261C5.72315 15.9277 11.4913 20.703 12.6462 20.9574C13.8011 20.702 19.5693 15.9266 19.5693 11.0261C19.5693 7.17381 16.4637 4.03842 12.6462 4.03842ZM12.6462 22.5C10.8062 22.5 4.18469 16.8056 4.18469 11.0261C4.18469 6.32458 7.98059 2.49996 12.6462 2.49996C17.3119 2.49996 21.1078 6.32458 21.1078 11.0261C21.1078 16.8056 14.4862 22.5 12.6462 22.5Z" fill="white"/>
                          </svg>
                        <p class="">11 avenue Charles de Gaulle, 95700 Roissy en France</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection