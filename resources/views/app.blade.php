<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link href="{{ asset('/css/semantic.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/semantic.min.js') }}"></script>
</head>

<body>
<div class="ui masthead">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="ui inverted blue horizontal segment">
        <p>&nbsp;</p>
    </div>

    <div id="breadcrumb-grid" class="ui grid">
        <div class="one wide column"></div>
        <div class="fifteen wide column"></div>
    </div>

    <div id="container" class="ui grid">
        <div class="one wide column"></div>
        <div class="two wide column"></div>

        @yield('content')

        <div class="three wide column"></div>
    </div>

    <div class="footer-box">
        <div class="ui vertical segment">
            <div class="ui seven column centered grid">
                <div class="column">
                    <h3 class="ui header">{{ trans('messages.footer') }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="ui page dimmer loading-dimmer">
        <div class="ui large text loader">{{ trans('messages.general.loading') }}</div>
    </div>

    <div class="ui modal small remove-modal">
        <i class="close icon"></i>
        <div class="header">
            {{ trans('messages.general.attention') }}
        </div>
        <div class="content">
            <div class="description">
                {{ trans('messages.general.delete.confirmation') }}
            </div>
        </div>
        <div class="actions">
            <div class="ui negative red button"><i class="remove icon"></i>{{ trans('messages.general.no') }}</div>
            <div class="ui positive green button"><i class="checkmark icon"></i>{{ trans('messages.general.yes') }}</div>
        </div>
    </div>
</div>

@yield('scripts')
</body>
</html>