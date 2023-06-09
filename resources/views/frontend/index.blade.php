@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
{{-- 
<section class="bg-gray-100 mb-20">
    <div class="container mx-auto flex px-1 sm:px-20 py-20 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/logo-square.jpg') }}">
        </div>
        <div class="lg:flex-grow md:w-1/2 px-4 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-8xl text-5xl mb-4 font-medium text-gray-800">
               {{ app_name() }}
            </h1>
            <p class="mb-8 sm:text-4xl text-3xl">
                {!! setting('meta_description') !!}
            </p>
            <div class="flex justify-center">
                <a href="https://github.com/nasirkhan" class="inline-flex text-white bg-gray-700 border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 18 18">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    Github
                </a>
                <a href="https://nasirkhn.com" class="ml-4 outline outline-1 outline-gray-800 inline-flex text-gray-700 hover:text-gray-100 bg-gray-200 hover:bg-gray-700 py-2 px-6 focus:outline-none rounded text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 18 18">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z" />
                    </svg>
                    Website
                </a>
            </div>

            @include('frontend.includes.messages')

        </div>
    </div>
</section>

<section class="mb-20">
    <div class="container mx-auto flex px-5 py-10 sm:py-24 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-800">
                Screenshots of the project
            </h1>
            <p class="mb-8 leading-relaxed">
                In the following section we listed a number of screenshots of different parts of the project, Laravel Starter.
            </p>
        </div>
    </div>
</section>

<section class="mb-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-5">
        <div class="shadow-lg p-3 sm:p-10 rounded-lg">
            <img src="https://user-images.githubusercontent.com/396987/88519250-a0dcc380-d013-11ea-9dc5-9d731af611f1.jpg" alt="About page preview">
        </div>
        <div class="shadow-lg p-3 sm:p-10 rounded-lg row-span-2">
            <img src="https://user-images.githubusercontent.com/396987/88519360-d1bcf880-d013-11ea-9f6c-b5d33912057f.jpg" alt="Pricing page preview">
        </div>
        <div class="shadow-lg p-3 sm:p-10 rounded-lg">
            <img src="https://user-images.githubusercontent.com/396987/88489727-f3889200-cfb7-11ea-819f-dc9a52bc8d82.jpg" alt="Landing page preview">
        </div>
    </div>
</section> --}}

@endsection

@section('top-mv')
<div class="top_mv_block">
    <div class="top_mv_inner">
        <div class="top_mv_box">
            <h1 class="top_mv_title">
                <small>保育士さんによる</small>
                <span>保育園の口コミ評判サイト</span>
            </h1>
            <form method="get" action="https://hoikuhiroba-kuchikomi.com/nurseries">
                <div class="top_mv_form">
                    <input type="text" name="keyword" class="top_mv_input" placeholder="保育園名・エリア名で検索">
                    <button type="submit" class="top_mv_submit">
                        <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/top/search_icon_pc.svg" alt="検索" class="common_pc_640">
                        <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/top/search_icon_sp.svg" alt="検索" class="common_sp_640">
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('imglink')
<a href="https://hoikuhiroba-kuchikomi.com/register" target="_blank" rel="noopener noreferrer" class="top_mv_bnr_block">
    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/top/banner_pc_march.png" alt="オープン記念キャンペーン" class="common_pc_640">
    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/top/banner_sp_march.png" alt="オープン記念キャンペーン" class="common_sp_640">
</a>
@endsection
@section('area')
<section class="top_area_block">
    <div class="common_inner">
        <h2 class="common_title01">
            エリアから<small>保育園の口コミを探す</small>
        </h2>
        <div class="top_area_popular_block">
            <p class="top_area_popular_title">人気のエリア</p>
            <div class="common_pc">
                <ul class="area_list">
                    
                                            <li class="area_item">
                            <a href="https://hoikuhiroba-kuchikomi.com/tokyo" class="area_link">東京都</a>
                        </li>
                                            <li class="area_item">
                            <a href="https://hoikuhiroba-kuchikomi.com/kanagawa" class="area_link">神奈川県</a>
                        </li>
                                            <li class="area_item">
                            <a href="https://hoikuhiroba-kuchikomi.com/saitama" class="area_link">埼玉県</a>
                        </li>
                                            <li class="area_item">
                            <a href="https://hoikuhiroba-kuchikomi.com/chiba" class="area_link">千葉県</a>
                        </li>
                                        
                    
                    
                </ul>
            </div>
            <div class="common_sp">
                <ul class="area_list">
                    
                                            <li class="area_item">
                            <a href="https://hoikuhiroba-kuchikomi.com/tokyo" class="area_link">東京都</a>
                        </li>
                                            <li class="area_item">
                            <a href="https://hoikuhiroba-kuchikomi.com/kanagawa" class="area_link">神奈川県</a>
                        </li>
                                            <li class="area_item">
                            <a href="https://hoikuhiroba-kuchikomi.com/saitama" class="area_link">埼玉県</a>
                        </li>
                                            <li class="area_item">
                            <a href="https://hoikuhiroba-kuchikomi.com/chiba" class="area_link">千葉県</a>
                        </li>
                                    </ul>
            </div>
            <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon03.svg" alt="エリアから保育園の口コミを探す" class="top_area_icon">
        </div>
        <div class="common_pc">
            <div class="top_area_main">
                <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/top/map_pic.png" alt="マップ" class="top_map_pic">
                <div class="top_area_box posi01">
                    <p class="top_area_box_title">近畿</p>
                    <ul class="area_list">
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/shiga" class="area_link">滋賀県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/kyoto" class="area_link">京都府</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/osaka" class="area_link">大阪府</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/hyogo" class="area_link">兵庫県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/nara" class="area_link">奈良県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/wakayama" class="area_link">和歌山県</a>
        </li>
    </ul>                </div>
                <div class="top_area_box posi02">
                    <p class="top_area_box_title">信越・北陸</p>
                    <ul class="area_list">
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/niigata" class="area_link">新潟県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/toyama" class="area_link">富山県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/ishikawa" class="area_link">石川県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/fukui" class="area_link">福井県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/yamanashi" class="area_link">山梨県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/nagano" class="area_link">長野県</a>
        </li>
    </ul>                </div>
                <div class="top_area_box posi03">
                    <p class="top_area_box_title">北海道・東北</p>
                    <ul class="area_list">
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/hokkaido" class="area_link">北海道</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/aomori" class="area_link">青森県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/iwate" class="area_link">岩手県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/miyagi" class="area_link">宮城県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/akita" class="area_link">秋田県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/yamagata" class="area_link">山形県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/fukushima" class="area_link">福島県</a>
        </li>
    </ul>                </div>
                <div class="top_area_box posi04">
                    <p class="top_area_box_title">関東</p>
                    <ul class="area_list">
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/ibaraki" class="area_link">茨城県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/tochigi" class="area_link">栃木県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/gunma" class="area_link">群馬県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/saitama" class="area_link">埼玉県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/chiba" class="area_link">千葉県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/tokyo" class="area_link">東京都</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/kanagawa" class="area_link">神奈川県</a>
        </li>
    </ul>                </div>
                <div class="top_area_box posi05">
                    <p class="top_area_box_title">東海</p>
                    <ul class="area_list">
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/gifu" class="area_link">岐阜県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/shizuoka" class="area_link">静岡県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/aichi" class="area_link">愛知県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/mie" class="area_link">三重県</a>
        </li>
    </ul>                </div>
                <div class="top_area_box posi06">
                    <p class="top_area_box_title">九州</p>
                    <ul class="area_list">
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/fukuoka" class="area_link">福岡県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/saga" class="area_link">佐賀県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/nagasaki" class="area_link">長崎県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/kumamoto" class="area_link">熊本県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/oita" class="area_link">大分県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/miyazaki" class="area_link">宮崎県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/kagoshima" class="area_link">鹿児島県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/okinawa" class="area_link">沖縄県</a>
        </li>
    </ul>                </div>
                <div class="top_area_box posi07">
                    <p class="top_area_box_title">中国・四国</p>
                    <ul class="area_list">
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/tottori" class="area_link">鳥取県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/shimane" class="area_link">島根県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/okayama" class="area_link">岡山県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/hiroshima" class="area_link">広島県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/yamaguchi" class="area_link">山口県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/tokushima" class="area_link">徳島県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/kagawa" class="area_link">香川県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/ehime" class="area_link">愛媛県</a>
        </li>
            <li class="area_item">
            <a href="https://hoikuhiroba-kuchikomi.com/kochi" class="area_link">高知県</a>
        </li>
    </ul>                </div>
            </div>
        </div>
        <div class="common_sp">
            <h2 class="top_area_title">エリアを選択してください</h2>
            <ul class="top_area_list">
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="kanto">関東</a>
                </li>
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="kinki">関西</a>
                </li>
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="tokai">東海</a>
                </li>
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="hokkaido_tohoku">北海道・東北</a>
                </li>
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="hokuriku">北陸・甲信越</a>
                </li>
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="tyugoku_shikoku">中国・四国</a>
                </li>
                <li class="top_area_item">
                    <a href="" class="top_area_link_home_sp" data-area="kyusyu">九州・沖縄</a>
                </li>
            </ul>
        </div>
        <div class="school-sp_popup_block SchoolPop AreaHomeSpPop" id="PlaceHomeSpWindow" style="display: none; z-index:50;">
            <form action="https://hoikuhiroba-kuchikomi.com/nurseries" method="get">
                <div class="school-sp_popup_head mb0">
                    <h3 class="school-sp_popup_title">
                        都道府県で絞り込む
                    </h3>
                    <button type="button" class="school-sp_popup_close_btn PopCloseBtn">キャンセル</button>
                </div>
                <div class="school-sp_popup_inner btn_fixed">
                    <div class="school-sp_popup_place_box" id="kanto_sp">
                        <h3 class="school-sp_popup_place_title">関東</h3>
                        <ul class="school-sp_popup_place_list">
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="8">
                <span>茨城県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="9">
                <span>栃木県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="10">
                <span>群馬県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="11">
                <span>埼玉県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="12">
                <span>千葉県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="13">
                <span>東京都</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="14">
                <span>神奈川県</span>
            </label>
        </li>
    </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="hokkaido_tohoku_sp">
                        <h3 class="school-sp_popup_place_title">北海道・東北</h3>
                        <ul class="school-sp_popup_place_list">
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="1">
                <span>北海道</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="2">
                <span>青森県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="3">
                <span>岩手県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="4">
                <span>宮城県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="5">
                <span>秋田県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="6">
                <span>山形県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="7">
                <span>福島県</span>
            </label>
        </li>
    </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="hokuriku_sp">
                        <h3 class="school-sp_popup_place_title">北陸・甲信越</h3>
                        <ul class="school-sp_popup_place_list">
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="15">
                <span>新潟県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="16">
                <span>富山県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="17">
                <span>石川県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="18">
                <span>福井県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="19">
                <span>山梨県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="20">
                <span>長野県</span>
            </label>
        </li>
    </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="tokai_sp">
                        <h3 class="school-sp_popup_place_title">東海</h3>
                        <ul class="school-sp_popup_place_list">
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="21">
                <span>岐阜県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="22">
                <span>静岡県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="23">
                <span>愛知県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="24">
                <span>三重県</span>
            </label>
        </li>
    </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="kinki_sp">
                        <h3 class="school-sp_popup_place_title">関西</h3>
                        <ul class="school-sp_popup_place_list">
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="25">
                <span>滋賀県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="26">
                <span>京都府</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="27">
                <span>大阪府</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="28">
                <span>兵庫県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="29">
                <span>奈良県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="30">
                <span>和歌山県</span>
            </label>
        </li>
    </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="tyugoku_shikoku_sp">
                        <h3 class="school-sp_popup_place_title">中国・四国</h3>
                        <ul class="school-sp_popup_place_list">
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="31">
                <span>鳥取県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="32">
                <span>島根県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="33">
                <span>岡山県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="34">
                <span>広島県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="35">
                <span>山口県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="36">
                <span>徳島県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="37">
                <span>香川県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="38">
                <span>愛媛県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="39">
                <span>高知県</span>
            </label>
        </li>
    </ul>
                    </div>
                    <div class="school-sp_popup_place_box" id="kyusyu_sp">
                        <h3 class="school-sp_popup_place_title">九州・沖縄</h3>
                        <ul class="school-sp_popup_place_list">
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="40">
                <span>福岡県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="41">
                <span>佐賀県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="42">
                <span>長崎県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="43">
                <span>熊本県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="44">
                <span>大分県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="45">
                <span>宮崎県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="46">
                <span>鹿児島県</span>
            </label>
        </li>
            <li class="school-sp_popup_place_item PrefectureSelect">
            <label class="school-sp_popup_place_label">
                <input type="radio" name="prefecture_id" value="47">
                <span>沖縄県</span>
            </label>
        </li>
    </ul>
                    </div>
                </div>
                <div class="school-sp_popup_fixed_btnarea AreaSearch">
                    <button type="submit" class="school-sp_popup_fixed_submit" disabled="">条件を確定する</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('campaign')
<section class="common_campaign_block top">
    <div class="common_inner">   
        <div class="campaign_layout_block">
            <div class="campaign_search_block">
                <h2 class="campaign_search_main_title">保育士による<br class="common_sp_640">口コミ・評判を探す</h2>
                <div class="campaign_search_box">
                    <h3 class="campaign_search_title">法人名で口コミを探す</h3>
                    <a href="https://hoikuhiroba-kuchikomi.com/company" class="campaign_search_btn">法人一覧を見る</a>
                </div>
                    <div class="campaign_search_box">
                        <h3 class="campaign_search_title">施設形態から口コミを探す</h3>
                        <ul class="campaign_search_list" id="CampaignList">
                            <li class="campaign_search_item ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=1" class="campaign_search_link">認可保育園</a>
                            </li>
                            <li class="campaign_search_item ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=2" class="campaign_search_link">認証保育園</a>
                            </li>
                            <li class="campaign_search_item ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=3" class="campaign_search_link">事業所内保育</a>
                            </li>
                            <li class="campaign_search_item ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=4" class="campaign_search_link">院内保育</a>
                            </li>
                            <li class="campaign_search_item ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=5" class="campaign_search_link">小規模保育</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=6" class="campaign_search_link">家庭的保育（保育ママ）</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=7" class="campaign_search_link">幼稚園</a>
                            </li>
                                                        <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=8" class="campaign_search_link">認定こども園</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=9" class="campaign_search_link">託児所</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=10" class="campaign_search_link">病児・病後児保育室</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=11" class="campaign_search_link">児童発達支援施設</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=12" class="campaign_search_link">子育てひろば</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=13" class="campaign_search_link">学童</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=14" class="campaign_search_link">ベビーシッター・ナニー</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=15" class="campaign_search_link">その他</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=16" class="campaign_search_link">保育園</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=17" class="campaign_search_link">訪問型保育</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=18" class="campaign_search_link">放課後等デイサービス</a>
                            </li>
                            <li class="campaign_search_item  no_active CampaignItem ">
                                <a href="https://hoikuhiroba-kuchikomi.com/nurseries?facility_type_ids%5B%5D=19" class="campaign_search_link">企業主導型保育</a>
                            </li>
                        </ul>
                        <button type="button" class="campaign_more_btn" id="CampaignBtn"><span></span></button>
                    </div>
                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon07.svg" alt="保育士による口コミ・評判を探す" class="campaign_search_icon">
                            </div>
            <div class="campaign_post_block">
                <h2 class="campaign_post_title">口コミを投稿する</h2>
                <p class="campaign_post_text">
                    あなたの知っているちょっとした情報が、誰かにとっては大きな一歩を踏み出す力へと変わります。保育士の保育園選びに、助け合いの輪を広げませんか？
                </p>
                <div class="campaign_post_btnarea">
                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon08_pc.svg" alt="口コミを投稿する" class="common_pc_640 campaign_post_icon">
                    <img src="https://hoikuhiroba-kuchikomi.com/assets/user/images/character/icon08_sp.svg" alt="口コミを投稿する" class="common_sp_640 campaign_post_icon">
                    <div class="campaign_post_btn PopBtn" style="cursor: pointer" data-pop="Login">口コミを投稿</div>
            </div>
            </div>
        </div>
        
    </div>
</section>
@endsection

@section('faq') 
<section class="common_qa_block top">
    <div class="common_inner">
        <h2 class="common_title01">よくあるご質問</h2>
        <ul class="qa_list">
            <li class="qa_item">
                <div class="qa_quest_block QABtn">
                    <p class="qa_quest_icon">Q.</p>
                    <h3 class="qa_quest_title">
                        保育士の口コミ・評判を見るのは無料でできますか？
                    </h3>
                </div>
                <div class="qa_answer_block">
                    <p class="qa_answer_text">
                        <span class="qa_answer_icon">A.</span>
                        <span>はい、無料ですべての口コミをご覧いただけます。</span>
                    </p>
                </div>
            </li>
            <li class="qa_item">
                <div class="qa_quest_block QABtn">
                    <p class="qa_quest_icon">Q.</p>
                    <h3 class="qa_quest_title">
                        保育士口コミ・評判の中で、評価が高い保育園の求人を紹介していただきたいです。
                    </h3>
                </div>
                <div class="qa_answer_block">
                    <p class="qa_answer_text">
                        <span class="qa_answer_icon">A.</span>
                        <span>姉妹サービスである<a href="https://hitoshia-hoiku.com/agent/signup" target="_blank" rel="noopener noreferrer" style="display: inline">ヒトシア保育</a>にて口コミの評価が高いご希望に沿った保育園をご紹介することが可能です。</span>
                    </p>
                </div>
            </li>
            <li class="qa_item">
                <div class="qa_quest_block QABtn">
                    <p class="qa_quest_icon">Q.</p>
                    <h3 class="qa_quest_title">
                        保育ひろばに会員登録をしたら何ができるようになりますか？
                    </h3>
                </div>
                <div class="qa_answer_block">
                    <p class="qa_answer_text">
                        <span class="qa_answer_icon">A.</span>
                        <span>気になる保育園や求人を保存し、後日に再度閲覧ができたり、通知を受け取ったりすることが可能になります。</span>
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection