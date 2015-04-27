@extends('app')

@section('content')

    <div class="ui vertical segment login-box">

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
            <div class="ui five column centered grid">
                <div class="column">
                    <h2 class="ui header">Login</h2>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="ui form">
                        <div class="field">
                            <label>E-Mail Address</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="field">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <button type="submit" class="ui primary button">Login</button>
                    </div>

                </div>
            </div>
        </form>

    </div>
@endsection
