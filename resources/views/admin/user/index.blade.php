@extends('app')

@section('content')

    <div class="ten wide column">
        <div class="ui segment">
            <h2 class="ui header">
                <i class="massive sitemap icon"></i><div class="content">{{ trans('messages.user.list.title') }}</div>
            </h2>

            <div class="ui divider"></div>

            @if (\Illuminate\Support\Facades\Session::has('message.success'))
                <div class="ui success message">
                    {{ \Illuminate\Support\Facades\Session::get('message.success') }}
                    <i class="close icon"></i>
                </div>
            @endif

            @if (\Illuminate\Support\Facades\Session::has('message.error'))
                <div class="ui error message">
                    {{ \Illuminate\Support\Facades\Session::get('message.error') }}
                    <i class="close icon"></i>
                </div>
            @endif

            @if (isset($users) && count($users) > 0)
                <table class="ui compact celled definition table">
                    <thead>
                    <tr>
                        <th>{{ trans('messages.user.field.active') }}</th>
                        <th>{{ trans('messages.user.field.name') }}</th>
                        <th>{{ trans('messages.user.field.login') }}</th>
                        <th>{{ trans('messages.user.field.email') }}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td class="collapsing">
                                <div class="activate_item ui fitted toggle checkbox">
                                    <input data-id="{{ $user->id }}" name="user_active_{{ $user->id }}" id="user_active_{{ $user->id }}" type="checkbox">
                                    <label></label>
                                </div>
                            </td>
                            <td><a href="{{ route('adminUserDetail', array('id' => $user->id)) }}" title="{{ trans('messages.user.detail.title') }}">{{ $user->name }}</a></td>
                            <td>{{ $user->login }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('adminUserEdit', array('id' => $user->id)) }}" title="{{ trans('messages.user.edit.title') }}"><i class="edit orange large icon"></i></a>
                                <a href="#" class="remove_item" data-id="{{ $user->id }}" title="{{ trans('messages.user.delete.title') }}"><i class="remove circle red large icon"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @else
                <p>{{ trans('messages.general.no.records.found') }}</p>
            @endif

            <a href="{{ route('adminUserAdd') }}" class="ui right floated small primary labeled icon button"><i class="plus icon"></i> {{ trans('messages.user.add.title') }}</a>
        </div>
    </div>

@endsection