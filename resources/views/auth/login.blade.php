@extends('layouts.app')

@section('content')


<div class="row w-100 p-0 ml-0 d-flex align-items-center my-sm-2 mx-sm-2 mx-md-5 mx-lg-5">

    <div class="col-12 d-flex justify-content-center bg-white px-3 py-5">

        <div class="row">


            <div class="col-12 text-center">
                <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQAZyFdywMPXJlTpPImDs4x5RkRvjCqAk6tsA&usqp=CAU">
            </div>

            <div class="col-12">

                <form method="post" action="{{ route('login') }}">

                    @csrf
                    <div class="row">

                        <div class="col-12 mb-3 ">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3 ">
                            <label>Senha</label>
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <button class="btn btn-secondary btn-block">Acessar</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


@endsection
