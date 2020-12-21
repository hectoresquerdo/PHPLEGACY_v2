@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="username"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="username"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                        class="form-control @error('surname') is-invalid @enderror" name="surname"
                                        value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="telephone"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                                <div class="col-md-6">
                                    <input id="telephone" type="text"
                                        class="form-control @error('telephone') is-invalid @enderror" name="telephone"
                                        value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                                    @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="nif" class="col-md-4 col-form-label text-md-right">{{ __('Nif') }}</label>

                                <div class="col-md-6">
                                    <input id="nif" type="text" class="form-control @error('nif') is-invalid @enderror"
                                        name="nif" value="{{ old('nif') }}" required autocomplete="nif" autofocus>

                                    @error('nif')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>



                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tipo" class="col-md-4 col-form-label text-md-right">User Type</label>

                                <div class="col-md-6">
                                    <select min="2" max="5" id="tipo" type="text" class="form-control" name="tipo"
                                        value="{{ old('tipo') }}" required>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>

                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">2-TeacherDAM, 3-TeacherDAW,
                                        4-StudentDAM, 5-StudentDAW</small>

                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="course" class="col-md-4 col-form-label text-md-right">Course</label>

                                <div class="col-md-6">
                                    <select id="course" type="text" class="form-control" name="course"
                                        value="{{ old('course') }}" required>
                                        <option>DAM</option>
                                        <option>DAW</option>

                                    </select>


                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="class" class="col-md-4 col-form-label text-md-right">Class:</label>

                                <div class="col-md-6">
                                    <select id="class" type="text" class="form-control" name="class"
                                        value="{{ old('class') }}" required>
                                        <option></option>
                                        <option>PHP</option>
                                        <option>JAVA</option>
                                        <option>BBDD</option>
                                        <option>ZOCALOS</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">In case that you are a teacher,
                                        select the option, if not, put blank</small>

                                </div>

                            </div>


                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
