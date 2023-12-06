@extends('layouts.app')

@section('content')
    
<section class="mainScreen">
    <img    srcset="{{ asset('images/content/contact_contactezNous.webp') }} 1920w,
                    {{ asset('images/content/contact_main_mobile.webp') }} 700w"
            src="{{ asset('images/content/contact_contactezNous.webp') }}"
            width="1600"
            height="580"
            alt=""
            title="" 
            class="mainScreen__img">
    <div class="mainScreen__filter"></div>

    <h1 class="mainScreen__h1">Politique de confidentialité et données personnelles</h1>
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

<section class="blogContent">
    <div class="container">
        <div class="blogContent__inner">
            <article class="blogContent__article">

                <p>
                    Notre site https://www.cardiopro.fr attache une grande importance au respect et à la sécurité
                    de votre vie privée. Notre politique de confidentialité vise à vous informer quant aux moyens
                    mis en œuvre pour sécuriser vos données personnelles. Sécuriser vos données, tout en
                    vous permettant d’en garder le contrôle, est notre priorité.<br><br>
                    En utilisant notre site Internet, vous pouvez être amené à laisser vos noms, prénoms, vos
                    coordonnées et d’autres informations personnelles pour recevoir un devis, ou poser une
                    question à notre équipe via notre formulaire de contact. Nous nous engageons à ce que la
                    collecte de ces données personnelles soit conforme au règlement général sur la protection
                    des données (RGPD), et à la Loi Informatique et Libertés.<br><br>
                    Nous ne collectons que les données strictement nécessaires pour répondre à vos besoins,
                    ou à votre requête. Les données ne sont en aucun cas communiquées à des tierces
                    personnes (sauf nécessité mentionnée en amont sur notre site).<br><br>
                    Concernant la loi “informatique et libertés” du 6 janvier 1978 et telle que modifiée selon la loi
                    du 25 mai 2018, vous disposez d’un droit d’accès, de rectification et d’opposition aux
                    données personnelles vous concernant.<br><br>
                    Pour toute information ou exercice de vos droits Informatiques et Libertés sur les traitements
                    de vos données personnelles, vous pouvez nous contacter :<br><br>
                    Cardiopro<br>
                    10 rue de la Paix<br>
                    75002 PARIS<br><br>
                    Ou directement via notre formulaire de contact : http://cardiopro.fr/contact<br><br>
                    Durée de conservation des données
                    Vos données à caractère personnel sont conservées durant la période nécessaire à la
                    gestion de notre relation.<br><br>
                    Toutefois, les données collectées pour établir la preuve d’un droit, d’un devis ou d’un
                    contrat, doivent être conservées au titre du respect d’une obligation légale et ce, pendant la
                    durée prévue par la loi en vigueur.<br><br>
                    A propos des cookies :<br>
                    Qu’est-ce qu’un cookie ?<br><br>
                    Les « cookies » sont des petits fichiers déposés sur le disque dur de l’internaute, lors de la
                    première consultation d’un site web. Les « cookies » conservent certaines informations en
                    vue d’une connexion ultérieure.<br><br>
                    Les cookies du site permettent avant tout d’améliorer l’expérience utilisateur sur notre site.
                    Vous pouvez à tout moment refuser l’utilisation des cookies depuis les paramètres de votre
                    navigateur.<br><br>
                    Sur Google Chrome : “Paramètres &gt; Paramètres avancés &gt; Confidentialité et sécurité &gt;
                    Paramètres du contenu &gt; Cookies”.<br>
                    Sur Mozilla Firefox : “Options &gt; Vie privée et sécurité &gt; Vie privée &gt; Cookies et données de
                    sites”.<br>
                    Sur Safari : “Préférences &gt; Confidentialité &gt; Cookies et données de site web”.
                    Sur Microsoft Edge : “Paramètres &gt; Paramètres avancés &gt; Confidentialité et services &gt;
                    Cookies”.<br>
                    Cookies internes nécessaires au site pour fonctionner.<br><br>
                    Ces cookies permettent au site de fonctionner de manière optimale. Vous pouvez vous y
                    opposer et les supprimer en utilisant les paramètres de votre navigateur, cependant votre
                    expérience utilisateur risque d’être dégradée.<br><br>
                    Les données personnelles recueillies (identifiant du cookie) sont conservées par notre site
                    pour une durée de 13 mois, selon la loi en vigueur. Elles ne sont en aucun cas cédées à des
                    tiers ni utilisées à d’autres fins.<br><br>
                    Vous pouvez choisir de refuser les cookies et l’analyse statistique de vos données de
                    navigation, en configurant les paramètres de votre navigateur.
                    Cookies tiers destinés à l’interactivité du site.<br><br>
                    Les cookies tiers ne sont nécessaires que pour créer de l’interactivité (boutons de partage
                    sur les réseaux sociaux, vidéos YouTube par exemple)<br><br>
                    Les cookies tiers ne sont pas nécessaires pour profiter des ressources disponibles sur notre
                    site. Vous pouvez donc les refuser par défaut en modifiant les paramètres de votre
                    navigateur.
                </p>

            </article>
        </div>
    </div>
</section>

@endsection