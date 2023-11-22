@extends('layouts/app')

@section('content')
<section class="mainScreen">
    <img    srcset="{{ asset('images/content/entreprise_formuleLocation.webp') }} 1920w,
                    {{ asset('images/content/entreprise_formuleLocation_600.webp') }} 700w,
                    {{ asset('images/content/entreprise_formuleLocation_400.webp 500w') }} 500w"
            src="{{ asset('images/content/entreprise_formuleLocation.webp') }}"
            width="1600"
            height="580"
            alt=""
            title="" 
            class="mainScreen__img">
    <div class="mainScreen__filter"></div>

    <h1 class="mainScreen__h1">Défibrillateur obligatoire en entreprise : ce que dit la loi</h1>
</section>

@if (isset($data['breadcrumbs']))
<section class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__inner">
            @for($i = 0; $i < count($data['breadcrumbs']); $i++)
                @if ($i != 0)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.45372 13.5462C5.18209 13.2746 5.18209 12.8341 5.45372 12.5624L9.59953 8.41666L5.45372 4.27089C5.18209 3.99922 5.18209 3.55873 5.45372 3.28706C5.7254 3.01543 6.16588 3.01543 6.43756 3.28705L11.0752 7.92474C11.3469 8.19642 11.3469 8.6369 11.0752 8.90858L6.43756 13.5462C6.16589 13.8179 5.7254 13.8179 5.45372 13.5462Z" fill="#021647"/>
                    </svg>
                @endif
                <a  href="{{ $data['breadcrumbs'][$i]['link'] }}"
                    class="breadcrumbs__link">
                    {{ $data['breadcrumbs'][$i]['name'] }}
                </a>
            @endfor
        </div>
    </div>
</section>
@endif
<section class="mastHead">
    <div class="container">
        <div class="mastHead__inner">
            <h2 class="mastHead__h2">Le Code du travail et l'obligation du défibrillateur en entreprise</h2>
            <p class="mastHead__p">Le Code du travail exige que chaque entreprise, qu'elle soit ou non soumise au Code de la construction et de l'habitation, soit équipée d'un défibrillateur en interne pour assurer la sécurité de ses employés en cas d'urgence cardiaque. Ne pas respecter cette <b>obligation d’installer un défibrillateur au sein de votre entreprise</b> peut entraîner des sanctions sévères si un accident se produit. Protégez vos employés et votre entreprise en investissant dans un défibrillateur dès aujourd'hui.</p>
        </div>
    </div>
</section>
<section class="whatAED__entreprise bg-blue pt-50 pb-60">
    <div class="container">
        <div class="whatAED__inner">
            <div class="whatAED__header whatAED__header__entreprise">
                <h2>Qui est concerné par l’obligation d’avoir un DAE ?</h2>
            </div>
            <div class="whatAED__content">
                <div class="whatAED__item ">
                    <div class="entreprise__box">
                        <img    src="{{ asset('images/content/entreprise_whatAED_1.webp') }}"
                                width="532"
                                height="358"
                                alt=""
                                title=""
                                class="whatAED__img__entreprise">
                    </div>
                    <div class="whatAED__content whatAED__content__entreprise">
                        <p class="whatAED__content__p">Si vous êtes employeur, vous savez peut-être que le Code de la Construction et de l'Habitation n'impose l'installation de défibrillateurs qu'aux <a href="https://cardiopro.fr/erp">Établissements Recevant du Public (ERP)</a>. Les entreprises qui ne sont pas spécifiquement destinées à accueillir du public ne sont donc pas tenues par la loi d’installer un défibrillateur. Cependant, selon le Code du Travail, l’employeur pourrait être tenu responsable en cas d'accident, car il a la responsabilité de garantir la santé de ses salariés sur le lieu de travail.</p>
                    </div>
                </div>
                <div class="whatAED__item">
                    <div class="entreprise__box">
                        <img    src="{{ asset('images/content/entreprise_whatAED_2.webp') }}"
                                width="532"
                                height="358"
                                alt=""
                                title=""
                                class="whatAED__img__entreprise">
                    </div>
                    <div class="whatAED__content whatAED__content__entreprise">
                        <p class="whatAED__content__p">Ainsi, bien que vous ne soyez <b>pas obligé d'installer un défibrillateur</b>, il vous est fortement recommandé de le faire.  Il est dans votre intérêt de garantir que ce dispositif vital soit facilement accessible en cas de besoin.</p>
                        <p class="whatAED__content__p">Votre entreprise fait peut-être partie de celles qui accueillent quotidiennement un grand nombre de personnes, qu'il s'agisse de collaborateurs ou de visiteurs. Ainsi, en y installant un défibrillateur vous pouvez contribuer à instaurer un sentiment de sérénité et de sécurité en son au sein. </p>
                        <p class="whatAED__content__p">En somme, même si l'installation d'un défibrillateur <b>ne soit pas obligatoire en entreprise</b>, elle est vivement recommandée afin de vous assurer que des mesures appropriées ont été prises pour faire face à une éventuelle situation d'urgence cardiaque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="formuleSlider pt-50 pb-60">
    <div class="container">
        <div class="slider__inner">
            <div class="sale__small__header">
                <h2>Pourquoi choisir CardioPro pour l'achat ou la location d'un défibrillateur pour votre entreprise ?</h2>
                <p>CardioPro s'engage activement dans l'initiative nationale visant à réduire le taux de mortalité résultant d'arrêts cardiaques. Dans cette optique, nous proposons des solutions complètes de <a href="https://cardiopro.fr/location-defibrillateur">location de défibrillateurs aux entreprises et aux Établissements Recevant du Public (ERP)</a>. Nos packs tout-en-un, disponibles à partir de seulement 39 € par mois, sont conçus pour simplifier votre accès à cette technologie vitale.</p>
            </div>
            <div class="sale__slider">
                <button class="sale__button__active">Location</button>
                <button class="">Achat</button>
            </div>
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
                            <a href="" class="sale__choisir">Choisir</a>
                            <a href="" class="sale__ensavoir">En savoir +</a>
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
                            <a href="" class="sale__choisir">Choisir</a>
                            <a href="" class="sale__ensavoir">En savoir +</a>
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
                            <a href="" class="sale__choisir">Choisir</a>
                            <a href="" class="sale__ensavoir">En savoir +</a>
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
                            <a href="" class="sale__choisir">Choisir</a>
                            <a href="" class="sale__ensavoir">En savoir +</a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<section class="defCabinet bg-blue">
    <div class="container">
        <div class="defCabinet__inner">
            <h2 class="defCabinet__desc">Est-il obligatoire d'avoir un défibrillateur dans une entreprise ?</h2>
            <div class="defCabinet__row">
               <img    src="{{ asset('images/content/entreprise_defCabinet.webp') }}"
                    width="499"
                    height="358"
                    alt=""
                    title=""
                    class="defCabinet__img__entreprise"> 
                <div class="defCabinet__text">
                    <h2 class="defCabinet__mobile">Est-il obligatoire d'avoir un défibrillateur dans une entreprise ?</h2>
                    <p>L'installation d'un défibrillateur en entreprise présente de nombreux avantages pour le bien-être des employés et des clients. C'est un dispositif qui peut sauver des vies en cas d'urgence cardiaque, augmentant ainsi la sécurité sur le lieu de travail. De plus, cela montre l'engagement de l'entreprise à prendre soin de la santé de ceux qui y travaillent ou la visitent, ce qui peut renforcer la confiance et la satisfaction générale.</p>
                    <p>En termes de réglementation, selon l'article R157-1 du Code de la construction et de l'habitation, il est obligatoire d'avoir un défibrillateur automatisé externe dans les établissements accueillant du public. Cette obligation concerne les établissements classés de 1 à 4 selon l'article R. 143-19, ainsi que certains établissements de la catégorie 5. Parmi ces derniers, on compte les structures d'accueil pour personnes âgées ou handicapées, les établissements de soins, les gares, les hôtels-restaurants d'altitude, les refuges de montagne, ainsi que les établissements sportifs clos et couverts et les salles polyvalentes sportives.</p>
                </div>
            </div>       
        </div>
    </div>
</section>
<section class="acsList__obligations pt-45 pb-60">
    <div class="container">
        <div class="acsList__inner">
            <div class="acsList__header acsList__desc">
                <h2>Et si mon entreprise ne reçoit pas de public ?</h2>
                <p>Si votre entreprise n’est pas ouverte au public, vous n’êtes pas dans l’obligation légale d’y installer un défibrillateur. Cette mesure est toutefois recommandée en vertu du code du travail.</p>
            </div>
            <div class="acsList__img__box">
                <img    srcset="{{ asset('images/content/entreprise__acsList_1.webp') }} 1920w,
                            {{ asset('images/content/entreprise__acsList_1_600.webp') }} 700w,
                            {{ asset('images/content/entreprise__acsList_1_400.webp') }} 500w"
                        src="{{ asset('images/content/entreprise__acsList_1.webp') }}"
                        width="1100"
                        height="740"
                        alt=""
                        title=""
                        class="acsList__img">
            </div>
            <div class="acsList__header acsList__mob">
                <h2>Et si mon entreprise ne reçoit pas de public ?</h2>
                <p>Si votre entreprise n’est pas ouverte au public, vous n’êtes pas dans l’obligation légale d’y installer un défibrillateur. Cette mesure est toutefois recommandée en vertu du code du travail.</p>
            </div>
            <h3 class="acsList__h2">Comment la loi définit-elle le « public » ?</h3>
            <p class="acsList__p">Selon l’article R143-2 du code de la construction et de l'habitation, la notion de public englobe toutes les personnes admises dans l’établissement, en plus du personnel. Cette disposition s'applique principalement aux Établissements Recevant du Public (ERP). </p>
            <p class="acsList__p">Cependant, pour les entreprises qui ne relèvent pas de cette catégorie, la loi du travail précise que le lieu de travail doit être équipé d'un dispositif de premiers secours adapté à la nature des risques et facilement accessible. L'employeur doit, en outre, consulter un médecin du travail pour prendre les mesures nécessaires afin de fournir les premiers soins aux blessés et malades.</p>
            <p class="acsList__p">Dans le cadre des mesures visant à garantir la santé des salariés, <b>équiper l’entreprise d'un défibrillateur automatique</b> est une option à considérer.</p>
            <p class="acsList__p">Il est important de souligner que l'installation d’un <b>défibrillateur au sein de l’entreprise</b> ne dispense pas de se conformer aux obligations légales en matière de sécurité, notamment, en ce  qui concerne les mesures de prévention des risques.</p>
            <h3 class="acsList__h2">Pourquoi investir dans un défibrillateur si je n’en ai pas l’obligation légale ?</h3>
            <p class="acsList__p">L'<b>installation d'un défibrillateur dans le lieu de travail</b> présente de nombreux avantages tant pour vous, en tant qu'employeur, que pour votre entreprise dans son ensemble. En qualité de chef d'entreprise, vous avez la responsabilité de garantir la sécurité de vos collaborateurs. La <b>mise en place d'un défibrillateur dans votre entreprise</b> est donc une mesure judicieuse pour répondre à cette responsabilité légale tout en améliorant la sécurité de votre personnel.</p>
            <p class="acsList__p">Dans de nombreux pays comme le Danemark, des lois sur la santé et la sécurité au travail exigent la présence de défibrillateurs automatiques externes sur les chantiers de construction. Ces dispositifs ont déjà fait leurs preuves en sauvant des vies au sein des entreprises depuis leur introduction.</p>
            <p class="acsList__p">Il est essentiel de comprendre que lorsqu'<a href="https://cardiopro.fr/reconnaitre-un-arret-cardiaque">une personne est confrontée à un arrêt cardiaque soudain</a>, chaque seconde compte. La rapidité d'intervention peut littéralement faire la différence entre la vie et la mort. Dans la plupart des situations, il n'est pas possible d'attendre l'arrivée des secours, ce qui souligne l'importance cruciale d'avoir un défibrillateur automatique à portée de main pour les premiers intervenants.</p>
        </div>
    </div>
</section>
<section class="choose__rent bg-blue pt-45 pb-60">
    <div class="container">
        <div class="choose__rent__inner">
            <div class="choose__rent__header">
                <h2>Les bonnes raisons de disposer d’un défibrillateur en entreprise</h2>
                <p>Vous hésitez entre louer et <a href="https://cardiopro.fr/achat-defibrillateur">acheter un défibrillateur ? </a>Découvrez ici les avantages de la location !</p>
            </div>
            <div class="choose__rent__list">
                <div class="choose__rent__row">
                    <div class="choose__rent__item">
                        <img    src="{{ asset('images/content/entreprise_chooseRent_1.webp') }}"
                                width="332"
                                height="227"
                                alt=""
                                title=""
                                class="choose__rent__img">
                        <h3>1. Sauvez des vies !</h3>
                        <p>Les défibrillateurs automatiques sont des dispositifs de secours cruciaux pour intervenir en cas d'<b>arrêt cardiaque en entreprise</b>. Chaque seconde compte lors d'une telle situation. Ces appareils analysent rapidement le rythme cardiaque de la victime, et si nécessaire, administrent un choc électrique afin d’augmenter ses chances de survie même sans l’intervention d'un professionnel de santé.</p>
                    </div>
                    <div class="choose__rent__item">
                        <img    src="{{ asset('images/content/entreprise_chooseRent_2.webp') }}"
                                width="332"
                                height="227"
                                alt=""
                                title=""
                                class="choose__rent__img">
                        <h3>2. Protégez votre entreprise</h3>
                        <p><b>Équiper votre entreprise d’un défibrillateur</b> permet de considérablement réduire les risques de mortalité en permettant une réanimation cardiaque rapide en cas d'arrêt cardiaque. En outre, dans de telles circonstances, en votre qualité d’employeur, votre responsabilité peut être engagée si vous ne disposez pas d'un défibrillateur sur votre lieu de travail.</p>
                    </div>
                    <div class="choose__rent__item">
                        <img    src="{{ asset('images/content/entreprise_chooseRent_3.webp') }}"
                                width="332"
                                height="227"
                                alt=""
                                title=""
                                class="choose__rent__img">
                        <h3>3. Utilisation accessible à tous</h3>
                        <p>Depuis 2007, la loi autorise le grand public à utiliser des défibrillateurs en cas d'urgence. C'est pourquoi, il est vivement conseillé à toutes les entreprises, quelles que soient leur taille, d'investir dans un défibrillateur automatique. En effet, tous les employés peuvent l'utiliser pour intervenir en cas d'arrêt cardiaque d'un collègue et potentiellement, sauver une vie. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="installer pt-60 pb-60">
    <div class="container">
        <div class="installer__inner">
            <div class="installer__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                    <path d="M27.1726 5C18.2632 5 11 12.2632 11 21.1726C11 26.9347 17.3432 39.1368 22.7179 48.3853C23.6379 50.0316 25.3326 51 27.2211 51C29.1095 51 30.7558 50.0316 31.7242 48.3853C37.0505 39.1368 43.4421 26.8863 43.4421 21.1726C43.3453 12.2632 36.0821 5 27.1726 5ZM28.48 46.5937C28.0926 47.2716 27.4147 47.3684 27.1726 47.3684C26.9305 47.3684 26.2526 47.2716 25.8653 46.5937C18.7474 34.2463 14.6316 24.9979 14.6316 21.1726C14.6316 14.2484 20.2484 8.63158 27.1726 8.63158C34.0968 8.63158 39.7137 14.2484 39.7137 21.1726C39.7137 24.9979 35.5979 34.2463 28.48 46.5937Z" fill="#C22921"/>
                    <path d="M27.2687 13.9062C22.7172 13.9062 20.6835 17.0536 20.2477 20.0073C20.1993 20.2494 20.2961 20.5399 20.4898 20.7336C20.6835 20.9273 20.9256 21.0726 21.2161 21.0726H22.9108C23.3466 21.0726 23.734 20.7336 23.8308 20.2978C24.073 19.0389 24.8477 17.4894 27.3172 17.4894C29.254 17.4894 30.0287 18.5063 30.3677 19.1357C30.8035 20.0557 30.7551 21.0726 30.174 21.8473C29.6414 22.5736 29.1087 22.961 28.5277 23.3484C27.1235 24.3168 26.0098 25.3336 25.8161 28.1905C25.8161 28.4326 25.8645 28.7231 26.0582 28.9168C26.2519 29.1105 26.494 29.2073 26.7361 29.2073H28.3824C28.8666 29.2073 29.3024 28.8199 29.3024 28.3357C29.3993 27.0284 29.7382 26.7863 30.513 26.2536C31.1909 25.7694 32.0624 25.1399 32.9824 23.9294C34.3382 22.0894 34.5319 19.6199 33.4666 17.4894C32.3045 15.262 29.9803 13.9062 27.2687 13.9062Z" fill="#C22921"/>
                    <path d="M27.4631 35.1626C28.6665 35.1626 29.6421 34.187 29.6421 32.9836C29.6421 31.7802 28.6665 30.8047 27.4631 30.8047C26.2597 30.8047 25.2842 31.7802 25.2842 32.9836C25.2842 34.187 26.2597 35.1626 27.4631 35.1626Z" fill="#C22921"/>
                  </svg>
                <h2>Où installer le défibrillateur dans  votre entreprise ?</h2>
                <p>Pour placer un défibrillateur, il est essentiel de choisir un endroit ouvert, aisément accessible et avec beaucoup  de passage. Un tel emplacement assure que le défibrillateur sera rapidement repéré et utilisé en <a href="https://cardiopro.fr/reconnaitre-un-arret-cardiaque">cas d'urgence cardiaque</a>, ce qui peut avoir un impact déterminant sur la survie de la victime. </p>
            </div>
            <div class="installer__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                    <path d="M8.03942 48.3468H46.9606C49.4088 48.3468 51.4 46.3555 51.4 43.9073V17.7394C51.4 15.2912 49.4088 13.2999 46.9606 13.2999H36.9752V9.37484C36.9752 7.84495 35.7312 6.6 34.2003 6.6H20.7997C19.2698 6.6 18.0248 7.84399 18.0248 9.37484V13.2999H8.03942C5.59122 13.2999 3.6 15.2912 3.6 17.7394V43.9073C3.6 46.3555 5.59122 48.3468 8.03942 48.3468ZM20.3945 9.37405C20.3945 9.15077 20.5764 8.96884 20.7997 8.96884H34.1995C34.4223 8.96884 34.6048 9.15102 34.6048 9.37405V13.2991H20.3945V9.37405ZM5.96962 17.7394C5.96962 16.5986 6.89869 15.6696 8.03942 15.6696H46.9606C48.1013 15.6696 49.0304 16.5986 49.0304 17.7394V43.9073C49.0304 45.0481 48.1013 45.9771 46.9606 45.9771H8.03942C6.89869 45.9771 5.96962 45.0481 5.96962 43.9073V17.7394Z" fill="#C22921" stroke="#C22921" stroke-width="0.8"/>
                    <path d="M18.027 35.3585H23.0077V40.3392C23.0077 40.9933 23.5383 41.524 24.1925 41.524H30.9003C31.5544 41.524 32.0851 40.9933 32.0851 40.3392V35.3585H37.0657C37.7199 35.3585 38.2505 34.8278 38.2505 34.1737V27.4659C38.2505 26.8118 37.7199 26.2811 37.0657 26.2811H32.0851V21.3004C32.0851 20.6463 31.5544 20.1156 30.9003 20.1156H24.1925C23.5383 20.1156 23.0077 20.6463 23.0077 21.3004V26.2811H18.027C17.3729 26.2811 16.8422 26.8118 16.8422 27.4659V34.1737C16.8422 34.8278 17.3729 35.3585 18.027 35.3585ZM19.2118 28.6507H24.1925C24.8466 28.6507 25.3773 28.12 25.3773 27.4659V22.4852H29.7154V27.4659C29.7154 28.12 30.2461 28.6507 30.9003 28.6507H35.8809V32.9889H30.9003C30.2461 32.9889 29.7154 33.5196 29.7154 34.1737V39.1544H25.3773V34.1737C25.3773 33.5196 24.8466 32.9889 24.1925 32.9889H19.2118V28.6507Z" fill="#C22921" stroke="#C22921" stroke-width="0.8"/>
                  </svg>
                <h2>Comment installer le boitier de votre défibrillateur ?</h2>
                <p>L’<a href="">installation d'un défibrillateur</a> dépend du lieu où il sera mis et du boîtier qui le contiendra.</p>
                <p>Dans le cas d'un <a href="https://cardiopro.fr/accessoire/accessoire-defibrillateur-boitier-Aivia-100">boîtier mural interne</a>, il suffit généralement de percer le mur et de le fixer le boîtier. En revanche, pour un boîtier mural externe, l'intervention d'un technicien électricien est nécessaire pour le raccordement au secteur électrique.</p>
            </div>
            <div class="installer__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                    <path d="M38.6907 15.216C38.281 15.6262 38.0508 16.1824 38.0508 16.7622C38.0508 17.3421 38.281 17.8982 38.6907 18.3085C40.8451 20.4653 42.3119 23.2123 42.9056 26.2023C43.4993 29.1924 43.1934 32.2914 42.0264 35.1076C40.8595 37.9239 38.8839 40.3311 36.3494 42.0249C33.8148 43.7188 30.8351 44.6233 27.7866 44.6243C24.7382 44.6233 21.7584 43.7188 19.2239 42.0249C16.6893 40.3311 14.7138 37.9239 13.5468 35.1076C12.3799 32.2914 12.0739 29.1924 12.6677 26.2023C13.2614 23.2123 14.7281 20.4653 16.8825 18.3085C17.0975 18.1082 17.2699 17.8666 17.3895 17.5982C17.5091 17.3298 17.5734 17.04 17.5786 16.7462C17.5838 16.4525 17.5297 16.1606 17.4197 15.8882C17.3096 15.6157 17.1458 15.3682 16.938 15.1604C16.7303 14.9526 16.4828 14.7888 16.2103 14.6788C15.9378 14.5687 15.646 14.5147 15.3522 14.5199C15.0584 14.5251 14.7687 14.5894 14.5003 14.709C14.2318 14.8286 13.9903 15.001 13.79 15.216C11.0243 17.9847 9.1414 21.5112 8.37915 25.3496C7.61689 29.1881 8.00949 33.1664 9.50733 36.7818C11.0052 40.3973 13.5411 43.4876 16.7946 45.6624C20.0481 47.8372 23.8732 48.9988 27.7866 49.0005C31.7 48.9988 35.5252 47.8372 38.7787 45.6624C42.0322 43.4876 44.568 40.3973 46.0659 36.7818C47.5637 33.1664 47.9563 29.1881 47.1941 25.3496C46.4318 21.5112 44.5489 17.9847 41.7833 15.216C41.373 14.8062 40.8169 14.576 40.237 14.576C39.6572 14.576 39.101 14.8062 38.6907 15.216Z" fill="#C22921"/>
                    <path d="M29.9748 31.0446V8.18858C29.9748 7.90117 29.9182 7.61658 29.8082 7.35104C29.6982 7.08551 29.537 6.84425 29.3338 6.64102C29.1306 6.43779 28.8893 6.27658 28.6238 6.1666C28.3582 6.05661 28.0736 6 27.7862 6C27.4988 6 27.2142 6.05661 26.9487 6.1666C26.6832 6.27658 26.4419 6.43779 26.2387 6.64102C26.0354 6.84425 25.8742 7.08551 25.7643 7.35104C25.6543 7.61658 25.5977 7.90117 25.5977 8.18858V31.0446C25.5977 31.6251 25.8282 32.1817 26.2387 32.5922C26.6491 33.0026 27.2058 33.2332 27.7862 33.2332C28.3667 33.2332 28.9234 33.0026 29.3338 32.5922C29.7442 32.1817 29.9748 31.6251 29.9748 31.0446Z" fill="#C22921"/>
                  </svg>
                <h2>Mise en marche de votre défibrillateur</h2>
                <p>Pour mettre en service un DAE, insérez d'abord la batterie dans l'appareil, puis procédez aux branchements des électrodes. </p>
                <p>Ces étapes simples préparent le dispositif à une utilisation immédiate. En cas d’arrêt cardiaque, il suffira d'allumer le DAE et de positionner les électrodes sur la poitrine de la victime.</p>
            </div>
        </div>
    </div>
</section>
<section class="faq faq__prix" id="faq">
    <div class="container">
        <div class="faq__inner">
            <h2 class="global__heading">
                FAQ
            </h2>
            <div class="faq__wrapper">
                <div class="faq__item expanded">
                    <div class="faq__header">
                        <h3>Quel défibrillateur externe pour votre entreprise. Un DAE ou DSA ?</h3>
                        <div class="faq__status--icon"></div>
                    </div>
                    <div class="faq__content">
                        <p>Au sein de votre entreprise nous vous conseillons d’acheter un défibrillateur automatique (DAE) si votre personnel n’est pas formé et un défibrillateur semi-automatique (DSA) si vos employés sont formés à l’utilisation de cet appareil de sauvetage.</p>
                        <p>Dans les deux avoir un défibrillateur au sein de son entreprise est indispensable pour sauver une victime d’arrêt cardiaque.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__header">
                        <h3>Où installer un défibrillateur dans votre entreprise ?</h3>
                        <div class="faq__status--icon"></div>
                    </div>
                    <div class="faq__content">
                        <p>Dans votre entreprise le défibrillateur doit être accessible et visible à tous. Nous vous conseillons d’installer votre DAE dans un lieu ouvert à tous les employés au sein de votre entreprise et de disposer aux endroits stratégiques des panneaux de signalisation permettant de retrouver l’appareil de sauvetage très rapidement en cas d’urgence.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__header">
                        <h3>Comment effectuer l’entretien de mon défibrillateur ?</h3>
                        <div class="faq__status--icon"></div>
                    </div>
                    <div class="faq__content">
                        <p>L'<a href="https://cardiopro.fr/post/defibrillateur-mode-d-emploi"><span>utilisation d'un Défibrillateur Automatique Externe</span></a> est souvent simplifiée pour qu'elle soit à la portée de tous sans nécessiter de formation médicale préalable. En général, une assistance vocale guide l'utilisateur à chaque étape du processus, de l'application des électrodes à la réalisation d’un massage cardiaque.</p>
                        <p>Cependant, bien que la formation ne soit pas obligatoire, elle est fortement recommandée. Elle permet de mieux <a href="{{ route('defibrillateur-cardiaque-cest-quoi') }}"><span>comprendre le fonctionnement du défibrillateur</span></a>, d'acquérir de l'assurance et de réagir de manière plus efficace en cas d'urgence.</p>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__header">
                        <h3>Quel est le coût d'un défibrillateur pour les entreprises ?</h3>
                        <div class="faq__status--icon"></div>
                    </div>
                    <div class="faq__content">
                        <p>Le <strong>coût d'un défibrillateur pour les entreprises</strong> varie en fonction du modèle, des fonctionnalités, de la méthode d'acquisition (achat ou location) et des services associés.</p>
                        <p><a href="{{ route('achat-defibrillateur') }}"><span>Acheter un défibrillateur de qualité</span></a> coûte en moyenne entre 1000 et 2000 €. Mais ce n'est que l'investissement initial. En effet, il faut également considérer les coûts d'entretien et des consommables.</p>
                        <p>Opter pour la location, à environ 50 € par mois avec remplacement illimité du matériel en cas d'utilisation, peut être une option économique.</p>
                        <p>N'oubliez pas que sauver une vie n'a pas de prix et qu’un défibrillateur bien entretenu offre une tranquillité d'esprit inestimable.</p>
                    </div>
                </div>
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
                        <h3 class="">Notre Philosophie</h3>
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
                        <p class="">Une veille permanente de l'évolution de la législation relative aux défibrillateurs</p>
                    </div>
                    <div class="additionalInfo__dop__row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M16.0065 29.3372C8.64264 29.3372 2.6731 23.3677 2.6731 16.0038C2.6731 8.64007 8.64264 2.67053 16.0065 2.67053C23.3702 2.67053 29.3398 8.64007 29.3398 16.0038C29.3398 23.3677 23.3702 29.3372 16.0065 29.3372ZM16.0065 26.6705C21.8975 26.6705 26.6731 21.8949 26.6731 16.0038C26.6731 10.1128 21.8975 5.3372 16.0065 5.3372C10.1154 5.3372 5.33976 10.1128 5.33976 16.0038C5.33976 21.8949 10.1154 26.6705 16.0065 26.6705ZM13.4065 14.6705H20.0065V17.3372H13.4065C13.7153 18.8586 15.0605 20.0038 16.6731 20.0038C17.4934 20.0038 18.2443 19.7076 18.825 19.2162L21.093 20.7282C19.9963 21.9222 18.4221 22.6705 16.6731 22.6705C13.5847 22.6705 11.0413 20.3372 10.7097 17.3372H9.33976V14.6705H10.7097C11.0413 11.6706 13.5847 9.3372 16.6731 9.3372C18.4221 9.3372 19.9963 10.0856 21.093 11.2795L18.8251 12.7915C18.2445 12.3002 17.4934 12.0039 16.6731 12.0039C15.0605 12.0039 13.7153 13.149 13.4065 14.6705Z" fill="#0039C6"/>
                          </svg>
                        <p class="">Une offre qui s'adapte à votre situation (achat/ location)</p>
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
                        <h3 class="">Contactez nous !</h3>
                    </div>
                    <div class="additionalInfo__line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M21.2512 4.5H3.11835C2.05002 4.5 1.18475 5.37063 1.18475 6.43359V18.0352C1.18475 19.1044 2.05637 19.9688 3.11835 19.9688H21.2512C22.3106 19.9688 23.1848 19.1081 23.1848 18.0352V6.43359C23.1848 5.37252 22.3229 4.5 21.2512 4.5ZM20.9804 5.78906C20.5853 6.18201 13.7868 12.9448 13.552 13.1783C13.1868 13.5435 12.7012 13.7446 12.1848 13.7446C11.6683 13.7446 11.1827 13.5435 10.8163 13.1771C10.6584 13.02 3.93488 6.33193 3.38914 5.78906H20.9804ZM2.47382 17.7728V6.69678L8.0442 12.2378L2.47382 17.7728ZM3.38995 18.6797L8.95814 13.1469L9.90599 14.0898C10.5147 14.6985 11.324 15.0337 12.1848 15.0337C13.0455 15.0337 13.8548 14.6985 14.4623 14.091L15.4114 13.1469L20.9796 18.6797H3.38995ZM21.8957 17.7728L16.3253 12.2378L21.8957 6.69678V17.7728Z" fill="white"/>
                          </svg>
                        <a class="">contact@cardiopro.fr</a>
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