@if (isset($data['breadcrumbs']))
<section class="breadcrumbs">
    <div class="container">
        <nav itemscope itemtype="http://schema.org/BreadcrumbList" aria-label="Breadcrumb">
            <ol class="breadcrumbs__inner">
                @for($i = 0; $i < count($data['breadcrumbs']); $i++)
                    @if ($i != 0)
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.45372 13.5462C5.18209 13.2746 5.18209 12.8341 5.45372 12.5624L9.59953 8.41666L5.45372 4.27089C5.18209 3.99922 5.18209 3.55873 5.45372 3.28706C5.7254 3.01543 6.16588 3.01543 6.43756 3.28705L11.0752 7.92474C11.3469 8.19642 11.3469 8.6369 11.0752 8.90858L6.43756 13.5462C6.16589 13.8179 5.7254 13.8179 5.45372 13.5462Z" fill="#021647"/>
                        </svg>
                    @endif
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        @if ($data['breadcrumbs'][$i]['link'] == '#')
                            <span class="breadcrumbs__link">{{ $data['breadcrumbs'][$i]['name'] }}</span>
                        @else
                            <a  href="{{ $data['breadcrumbs'][$i]['link'] }}"
                                class="breadcrumbs__link"
                                title="{{ isset($data['breadcrumbs'][$i]['title']) ? $data['breadcrumbs'][$i]['title'] : '' }}"
                                itemprop="item">
                                <span itemprop="name">{{ $data['breadcrumbs'][$i]['name'] }}</span>
                            </a>
                        @endif
                        <meta itemprop="position" content="{{ $i + 1 }}">
                    </li>
                @endfor
            </ol>
        </nav>
    </div>
</section>
@endif