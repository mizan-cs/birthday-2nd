<nav class="navbar" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="">@lang('header.toggol-tab-first-text')</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}">@lang('header.home')</a></li>
                    <li><a href="#couple">@lang('header.about')</a></li>
                    <li><a href="#story">@lang('header.location')</a></li>
                    <li><a href="#event">@lang('header.event')</a></li>
                    <li><a class="btn btn-danger" href="@if(App::isLocale('en')) {{route('local','pt')}} @else {{route('local','en')}} @endif" role="button">@if(App::isLocale('en')) pt @else en @endif</a></li>
                </ul>
            </div>
        </div>
    </nav> <!-- end of nav -->