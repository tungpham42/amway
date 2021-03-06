<?
/**
* TITLE: Участники
* AVAILABLE_ONLY_IN_ADVANCED_MODE
*/
?>
<?php
$participants = Accounts::where('group_id', 4)->orderBy('created_at', 'DESC')->with('ulogin', 'likes')->paginate(25);
foreach($participants as $index => $participant):
    $participants[$index]['like_disabled'] = FALSE;
endforeach;
if (isset($_COOKIE['votes_list'])):
    $users_ids = json_decode($_COOKIE['votes_list']);
    foreach($participants as $index => $participant):
        if (in_array($participant->id, $users_ids)):
            $participants[$index]['like_disabled'] = TRUE;
        endif;
    endforeach;
endif;
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')sticky participants
@stop
@section('content')
<main>
    <section class="long color-blue video"
             style="background-image: url('{{ asset(Config::get('site.theme_path')) }}/img/tmp-visual-13.jpg')">
        <iframe data-src="https://player.vimeo.com/video/136314283?autoplay=1&loop=1&color=ffffff&title=0&byline=0&portrait=0"
                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <div class="cover"></div>
        <div class="holder">
            <h2>Присоединяйся к команде молодых <br>и талантливых</h2>
            <p>Загрузи видео на сайте или выбери подходящее видео из своей библиотеки на телефоне или планшете.</p>
            <a href="" class="play" onclick="yaCounter31932671.reachGoal('about_video'); return true;">
            <span class="icon-play"></span>
            </a>
            <p>
                ПРИМЕР ВИДЕО УЧАСТНИКА
            </p>
        </div>
    </section>
   <!--  <section class="color-purple-dark mid">
        <div class="cover"></div>
        <div class="holder">
            {{ $page->block('content') }}
        </div>
    </section> -->
    <div class="holder">
        <h3>УЧАСТНИКИ КОНКУРСА</h3>
        <div class="note">
            ВСЕГО {{ Accounts::where('group_id', 4)->count() }} {{ Lang::choice('УЧАСТНИК|УЧАСТНИКА|УЧАСТНИКОВ', Accounts::where('group_id', 4)->count()) }}
            <p>Зарегистрируйся на сайте, загрузи видео своего выступления и получи 10 дополнительных голосов.</p>
        </div>
        <br>
        <br>
        <br>
        @if($participants->count())
        <div class="competitors">
            <div class="holder">
                @foreach($participants as $user)
                    @include(Helper::layout('blocks.user'), compact('user'))
                @endforeach
            </div>
        </div>
        @endif
        {{ $participants->links() }}
    </div>
</main>
@stop
@section('scripts')
@stop