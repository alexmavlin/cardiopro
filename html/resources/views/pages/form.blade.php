@extends('layouts/app')

@section('content')

<section class="mainScreen">
    <img    srcset="{{ asset('images/content/formPage_main.webp') }} 1920w,
                    {{ asset('images/content/formPage_main_600.webp') }} 700w"
            src="{{ asset('images/content/formPage_main.webp') }}"
            width="1600"
            height="580"
            alt=""
            title="" 
            class="mainScreen__img">
    <div class="mainScreen__filter"></div>

    <h1 class="mainScreen__h1">Votre devis en ligne</h1>
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

<section class="formPage">
    <div class="container">
        <div class="formPage__inner">
            <h2 class="formPage__h2">1. Je choisis ma formule</h2>
            <div class="formPage__buttons" id="formPage__buttons">
                <div role="button" class="formPage__button" data-link-id="location-form">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                            <path d="M21.9101 12.1955C18.2985 12.0046 14.7642 13.1989 12.1439 15.8233C6.90323 21.0721 7.37042 30.0014 13.2001 35.8352L15.2923 37.9274L34.2235 56.8749L53.1507 37.9274L55.2429 35.8352C61.0726 29.9974 61.5398 21.0721 56.2992 15.8233C51.0585 10.5746 42.1495 11.0499 36.3198 16.8877L34.2235 18.988L32.1232 16.8877C29.2104 13.9668 25.5257 12.3864 21.9101 12.1955Z" fill="#C22921"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="37" viewBox="0 0 38 37" fill="none">
                            <path d="M23.7497 16.957H20.6664V10.7904C20.6664 10.3815 20.5039 9.98936 20.2148 9.70024C19.9257 9.41112 19.5336 9.2487 19.1247 9.2487C18.7158 9.2487 18.3237 9.41112 18.0346 9.70024C17.7454 9.98936 17.583 10.3815 17.583 10.7904V18.4987C17.583 18.9076 17.7454 19.2997 18.0346 19.5888C18.3237 19.8779 18.7158 20.0404 19.1247 20.0404H23.7497C24.1586 20.0404 24.5507 19.8779 24.8398 19.5888C25.1289 19.2997 25.2914 18.9076 25.2914 18.4987C25.2914 18.0898 25.1289 17.6977 24.8398 17.4086C24.5507 17.1195 24.1586 16.957 23.7497 16.957ZM19.1247 3.08203C16.0756 3.08203 13.0949 3.9862 10.5596 5.68021C8.02438 7.37421 6.04839 9.78197 4.88154 12.599C3.71469 15.416 3.40939 18.5158 4.00424 21.5063C4.5991 24.4969 6.06739 27.2439 8.22345 29.3999C10.3795 31.556 13.1265 33.0243 16.117 33.6191C19.1076 34.214 22.2074 33.9087 25.0244 32.7418C27.8414 31.575 30.2492 29.599 31.9432 27.0637C33.6372 24.5285 34.5414 21.5478 34.5414 18.4987C34.5368 14.4113 32.9111 10.4927 30.0209 7.60249C27.1307 4.71229 23.212 3.08658 19.1247 3.08203ZM19.1247 30.832C16.6854 30.832 14.3009 30.1087 12.2726 28.7535C10.2444 27.3983 8.66365 25.4721 7.73017 23.2185C6.79669 20.9648 6.55245 18.485 7.02833 16.0926C7.50422 13.7002 8.67885 11.5026 10.4037 9.77772C12.1285 8.05287 14.3261 6.87823 16.7186 6.40235C19.111 5.92646 21.5908 6.1707 23.8444 7.10418C26.0981 8.03767 28.0243 9.61846 29.3795 11.6467C30.7347 13.6749 31.458 16.0594 31.458 18.4987C31.4543 21.7686 30.1537 24.9034 27.8415 27.2156C25.5294 29.5277 22.3945 30.8283 19.1247 30.832Z" fill="white"/>
                        </svg>
                    </div>
                    <p>Location</p>
                </div>
                <div class="formPage__button" role="button" data-link-id="achat-form">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                            <path d="M21.9101 12.1955C18.2985 12.0046 14.7642 13.1989 12.1439 15.8233C6.90323 21.0721 7.37042 30.0014 13.2001 35.8352L15.2923 37.9274L34.2235 56.8749L53.1507 37.9274L55.2429 35.8352C61.0726 29.9974 61.5398 21.0721 56.2992 15.8233C51.0585 10.5746 42.1495 11.0499 36.3198 16.8877L34.2235 18.988L32.1232 16.8877C29.2104 13.9668 25.5257 12.3864 21.9101 12.1955Z" fill="#C22921"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="37" viewBox="0 0 38 37" fill="none">
                            <path d="M13.7288 29.2917C13.2715 29.2917 12.8244 29.4273 12.4441 29.6814C12.0638 29.9355 11.7674 30.2967 11.5924 30.7192C11.4173 31.1418 11.3715 31.6067 11.4608 32.0553C11.55 32.5039 11.7702 32.9159 12.0937 33.2393C12.4171 33.5628 12.8291 33.783 13.2777 33.8722C13.7263 33.9615 14.1912 33.9157 14.6138 33.7406C15.0364 33.5656 15.3975 33.2692 15.6516 32.8889C15.9057 32.5086 16.0413 32.0615 16.0413 31.6042C16.0413 30.9909 15.7977 30.4027 15.364 29.969C14.9303 29.5353 14.3422 29.2917 13.7288 29.2917ZM29.9163 24.6667H11.4163C11.0075 24.6667 10.6153 24.5042 10.3262 24.2151C10.0371 23.926 9.87467 23.5339 9.87467 23.125C9.87467 22.7161 10.0371 22.324 10.3262 22.0349C10.6153 21.7458 11.0075 21.5833 11.4163 21.5833H24.507C25.5112 21.5801 26.4874 21.2515 27.2892 20.6468C28.091 20.042 28.6752 19.1937 28.9543 18.229L31.3985 9.6738C31.4641 9.44436 31.4755 9.20283 31.4319 8.96822C31.3883 8.73361 31.2908 8.51234 31.1471 8.32181C31.0034 8.13128 30.8175 7.97671 30.6039 7.87025C30.3903 7.7638 30.155 7.70837 29.9163 7.70833H11.0141C10.6949 6.81009 10.1066 6.03209 9.32927 5.48034C8.55194 4.92858 7.62339 4.6299 6.67015 4.625H5.24967C4.8408 4.625 4.44867 4.78743 4.15955 5.07654C3.87043 5.36566 3.70801 5.75779 3.70801 6.16667C3.70801 6.57554 3.87043 6.96767 4.15955 7.25679C4.44867 7.54591 4.8408 7.70833 5.24967 7.70833H6.67015C7.00482 7.7095 7.33011 7.81905 7.5973 8.02057C7.8645 8.22209 8.05923 8.50474 8.15234 8.8262L8.3921 9.666L8.39247 9.6738L10.9218 18.5263C9.74481 18.653 8.66119 19.226 7.89404 20.1276C7.1269 21.0291 6.73463 22.1905 6.79801 23.3725C6.86139 24.5546 7.3756 25.6674 8.23475 26.4817C9.09389 27.296 10.2326 27.75 11.4163 27.75H29.9163C30.3252 27.75 30.7173 27.5876 31.0065 27.2985C31.2956 27.0093 31.458 26.6172 31.458 26.2083C31.458 25.7995 31.2956 25.4073 31.0065 25.1182C30.7173 24.8291 30.3252 24.6667 29.9163 24.6667ZM27.8726 10.7917L25.9899 17.3814C25.8969 17.7031 25.7021 17.986 25.4347 18.1877C25.1674 18.3894 24.8419 18.4989 24.507 18.5H14.121L13.728 17.1245L11.9196 10.7917H27.8726ZM26.0622 29.2917C25.6048 29.2917 25.1577 29.4273 24.7774 29.6814C24.3971 29.9355 24.1007 30.2967 23.9257 30.7192C23.7507 31.1418 23.7049 31.6067 23.7941 32.0553C23.8833 32.5039 24.1036 32.9159 24.427 33.2393C24.7504 33.5628 25.1624 33.783 25.611 33.8722C26.0596 33.9615 26.5246 33.9157 26.9471 33.7406C27.3697 33.5656 27.7308 33.2692 27.9849 32.8889C28.239 32.5086 28.3747 32.0615 28.3747 31.6042C28.3747 30.9909 28.131 30.4027 27.6974 29.969C27.2637 29.5353 26.6755 29.2917 26.0622 29.2917Z" fill="#0039C6"/>
                        </svg>
                    </div>
                    <p>Achat</p>
                </div>
                <div class="formPage__button" role="button" data-link-id="single-form">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                            <path d="M21.9101 12.1955C18.2985 12.0046 14.7642 13.1989 12.1439 15.8233C6.90323 21.0721 7.37042 30.0014 13.2001 35.8352L15.2923 37.9274L34.2235 56.8749L53.1507 37.9274L55.2429 35.8352C61.0726 29.9974 61.5398 21.0721 56.2992 15.8233C51.0585 10.5746 42.1495 11.0499 36.3198 16.8877L34.2235 18.988L32.1232 16.8877C29.2104 13.9668 25.5257 12.3864 21.9101 12.1955Z" fill="#C22921"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
                            <g clip-path="url(#clip0_516_15608)">
                              <path d="M19.1247 3.58203C16.0756 3.58203 13.0949 4.4862 10.5596 6.18021C8.02438 7.87421 6.04839 10.282 4.88154 13.099C3.71469 15.916 3.40939 19.0158 4.00424 22.0063C4.5991 24.9969 6.06739 27.7439 8.22345 29.8999C10.3795 32.056 13.1265 33.5243 16.117 34.1191C19.1076 34.714 22.2074 34.4087 25.0244 33.2418C27.8414 32.075 30.2492 30.099 31.9432 27.5637C33.6372 25.0285 34.5414 22.0478 34.5414 18.9987C34.5414 16.9742 34.1426 14.9694 33.3678 13.099C32.5931 11.2286 31.4575 9.52904 30.0259 8.09747C28.5943 6.6659 26.8948 5.53032 25.0244 4.75556C23.154 3.9808 21.1492 3.58203 19.1247 3.58203ZM19.1247 31.332C16.6854 31.332 14.3009 30.6087 12.2726 29.2535C10.2444 27.8983 8.66365 25.9721 7.73017 23.7185C6.79669 21.4648 6.55245 18.985 7.02833 16.5926C7.50422 14.2002 8.67885 12.0026 10.4037 10.2777C12.1285 8.55287 14.3261 7.37823 16.7186 6.90235C19.111 6.42646 21.5908 6.6707 23.8444 7.60418C26.0981 8.53767 28.0243 10.1185 29.3795 12.1467C30.7347 14.1749 31.458 16.5594 31.458 18.9987C31.458 22.2697 30.1586 25.4067 27.8457 27.7197C25.5327 30.0326 22.3957 31.332 19.1247 31.332Z" fill="#0039C6"/>
                              <path d="M19.1253 9.7501C17.6943 9.7501 16.3218 10.3186 15.3099 11.3305C14.298 12.3424 13.7295 13.7149 13.7295 15.1459C13.7295 15.5548 13.8919 15.9469 14.181 16.2361C14.4702 16.5252 14.8623 16.6876 15.2712 16.6876C15.68 16.6876 16.0722 16.5252 16.3613 16.2361C16.6504 15.9469 16.8128 15.5548 16.8128 15.1459C16.8128 14.6886 16.9484 14.2415 17.2026 13.8612C17.4567 13.4809 17.8178 13.1845 18.2404 13.0095C18.6629 12.8344 19.1279 12.7886 19.5765 12.8779C20.0251 12.9671 20.4371 13.1873 20.7605 13.5108C21.0839 13.8342 21.3042 14.2462 21.3934 14.6948C21.4826 15.1434 21.4368 15.6083 21.2618 16.0309C21.0868 16.4534 20.7904 16.8146 20.4101 17.0687C20.0298 17.3228 19.5827 17.4584 19.1253 17.4584C18.7164 17.4584 18.3243 17.6209 18.0352 17.91C17.7461 18.1991 17.5837 18.5912 17.5837 19.0001V22.0834C17.5837 22.4923 17.7461 22.8844 18.0352 23.1736C18.3243 23.4627 18.7164 23.6251 19.1253 23.6251C19.5342 23.6251 19.9263 23.4627 20.2154 23.1736C20.5046 22.8844 20.667 22.4923 20.667 22.0834V20.2951C21.9128 19.9313 22.9851 19.1294 23.6863 18.0372C24.3875 16.9451 24.6703 15.6363 24.4825 14.3521C24.2948 13.0679 23.6492 11.8948 22.6647 11.0491C21.6802 10.2034 20.4232 9.74205 19.1253 9.7501Z" fill="#0039C6"/>
                              <path d="M19.1247 28.2513C19.9761 28.2513 20.6663 27.5611 20.6663 26.7096C20.6663 25.8582 19.9761 25.168 19.1247 25.168C18.2732 25.168 17.583 25.8582 17.583 26.7096C17.583 27.5611 18.2732 28.2513 19.1247 28.2513Z" fill="#0039C6"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_516_15608">
                                <rect width="37" height="37" fill="white" transform="translate(0.625 0.5)"/>
                              </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <p>Je ne sais pas</p>
                </div>
            </div>
            <div class="formPage__content" id="formPage__content">
                <div class="formPage__content--block" id="location-form">
                    <h2 class="formPage__h2">2. Je choisis mon pack</h2>
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
                                        <a  href="" 
                                            class="sale__choisir sale__button--dynamic" 
                                            data-form-id="content-location-form"
                                            data-form-price="39"
                                            data-form-type="Location - Pack access">Choisir</a>
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
                                        <a  href="" 
                                            class="sale__choisir sale__button--dynamic" 
                                            data-form-id="content-location-form"
                                            data-form-price="49"
                                            data-form-type="Location - Pack Zen">Choisir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="formPage__content--form__block" id="content-location-form">
                        <h2 class="formPage__h2">3. Je saisis mes coordonnées</h2>
                        <div class="formPage__content--form__header">
                            <p class="formPage__content--form__header--top">Mon devis</p>
                            <p class="formPage__content--form__header--price">
                                <span class="formPage__content--form__header--price__span" id="price1"></span>
                                <span>€</span></p>
                            <p class="formPage__content--form__header--descRed">HT par mois</p>
                            <p class="formPage__content--form__header--descBlue">* Offre soumise a conditions</p>
                        </div>
                        <form action="{{ route('send-form-1') }}" method="POST" class="formPage__content--form">
                            @csrf
                            <input type="hidden" id="price1-input" name="price1" value="{{ old('price1') ?: '' }}">
                            <input type="hidden" id="type1-input" name="type1" value="{{ old('type1') ?: '' }}">
                            <div class="formPage__form--row">
                                <div class="formPage__form--group">
                                    <label for="name1">Votre nom<span>*</span></label>
                                    @error('name1')
                                        <p class="text__danger">{{ $message }}</p>
                                    @enderror
                                    <input type="text" id="name1" name="name1" value="{{ old('name1') ?: '' }}">
                                </div>
                                <div class="formPage__form--group">
                                    <label for="email1">Email<span>*</span></label>
                                    @error('email1')
                                        <p class="text__danger">{{ $message }}</p>
                                    @enderror
                                    <input type="text" id="email1" name="email1" value="{{ old('email1') ?: '' }}">
                                </div>
                            </div>
                            <div class="formPage__form--row">
                                <div class="formPage__form--group">
                                    <label for="phone1">Téléphone<span>*</span></label>
                                    @error('phone1')
                                        <p class="text__danger">{{ $message }}</p>
                                    @enderror
                                    <input type="text" id="phone1" name="phone1" value="{{ old('phone1') ?: '' }}">
                                </div>
                                <div class="formPage__form--group">
                                    <label for="company1">Société (optionnel)</label>
                                    @error('company1')
                                        <p class="text__danger">{{ $message }}</p>
                                    @enderror
                                    <input type="text" name="company1" id="company1" value="{{ old('company1') ?: '' }}">
                                </div>
                            </div>
                            <button type="submit">Recevoir mon devis</button>
                        </form>
                    </div>
                </div>
                <div class="formPage__content--block" id="achat-form">
                    <h2 class="formPage__h2">2. Je choisis mon pack</h2>
                    <div class="sale__content sale__active__frame">
                        <div class="sale__frame">
                            <div class="sale__hidden__header">
                                <h2>défibrillateur automatique</h2>
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
                                        <a  href="" 
                                            class="sale__choisir sale__button--dynamic" 
                                            data-form-id="content-achat-form"
                                            data-form-price="1190"
                                            data-form-type="Achat - Pack access">Choisir</a>
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
                                        <a  href="" 
                                            class="sale__choisir sale__button--dynamic" 
                                            data-form-id="content-achat-form"
                                            data-form-price="1490"
                                            data-form-type="Achat - Pack zen">Choisir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="formPage__content--form__block" id="content-achat-form">
                        <h2 class="formPage__h2">3. Je saisis mes coordonnées</h2>
                        <div class="formPage__content--form__header">
                            <p class="formPage__content--form__header--top">Mon devis</p>
                            <p class="formPage__content--form__header--price">
                                <span class="formPage__content--form__header--price__span" id="price2"></span>
                                <span>€</span></p>
                            <p class="formPage__content--form__header--descRed">HT par mois</p>
                            <p class="formPage__content--form__header--descBlue">* Offre soumise a conditions</p>
                        </div>
                        <form action="{{ route('send-form-2') }}" method="POST" class="formPage__content--form">
                            @csrf
                            <input type="hidden" id="price2-input" name="price2" value="{{ old('price2') ?: '' }}">
                            <input type="hidden" id="type2-input" name="type2" value="{{ old('type2') ?: '' }}">
                            <div class="formPage__form--row">
                                <div class="formPage__form--group">
                                    <label for="name2">Votre nom<span>*</span></label>
                                    @error('name2')
                                        <p class="text__danger">{{ $message }}</p>
                                    @enderror
                                    <input type="text" id="name2" name="name2" value="{{ old('name2') ?: '' }}">
                                </div>
                                <div class="formPage__form--group">
                                    <label for="email2">Email<span>*</span></label>
                                    @error('email2')
                                        <p class="text__danger">{{ $message }}</p>
                                    @enderror
                                    <input type="text" id="email2" name="email2" value="{{ old('email2') ?: '' }}">
                                </div>
                            </div>
                            <div class="formPage__form--row">
                                <div class="formPage__form--group">
                                    <label for="phone2">Téléphone<span>*</span></label>
                                    @error('phone2')
                                        <p class="text__danger">{{ $message }}</p>
                                    @enderror
                                    <input type="text" id="phone2" name="phone2" value="{{ old('phone2') ?: '' }}">
                                </div>
                                <div class="formPage__form--group">
                                    <label for="company2">Société (optionnel)</label>
                                    @error('company2')
                                        <p class="text__danger">{{ $message }}</p>
                                    @enderror
                                    <input type="text" name="company2" id="company2" value="{{ old('company2') ?: '' }}">
                                </div>
                            </div>
                            <button type="submit">Recevoir mon devis</button>
                        </form>
                    </div>
                </div>
                <div class="formPage__content--block" id="single-form">
                    <form action="{{ route('send-form-3') }}" method="POST" class="formPage__content--form">
                        @csrf
                        <div class="formPage__form--row">
                            <div class="formPage__form--group">
                                <label for="name3">Votre nom<span>*</span></label>
                                @error('name3')
                                    <p class="text__danger">{{ $message }}</p>
                                @enderror
                                <input type="text" id="name3" name="name3" value="{{ old('name3') ?: '' }}">
                            </div>
                            <div class="formPage__form--group">
                                <label for="email3">Email<span>*</span></label>
                                @error('email3')
                                    <p class="text__danger">{{ $message }}</p>
                                @enderror
                                <input type="text" id="email3" name="email3" value="{{ old('email3') ?: '' }}">
                            </div>
                        </div>
                        <div class="formPage__form--row">
                            <div class="formPage__form--group">
                                <label for="phone3">Téléphone<span>*</span></label>
                                @error('phone3')
                                    <p class="text__danger">{{ $message }}</p>
                                @enderror
                                <input type="text" id="phone3" name="phone3" value="{{ old('phone3') ?: '' }}">
                            </div>
                            <div class="formPage__form--group">
                                <label for="company3">Société (optionnel)</label>
                                @error('company3')
                                    <p class="text__danger">{{ $message }}</p>
                                @enderror
                                <input type="text" name="company3" id="company3" value="{{ old('company3') ?: '' }}">
                            </div>
                        </div>
                        <button type="submit">Recevoir mon devis</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection