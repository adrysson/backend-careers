@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between">
    <h1>
        @lang('Divulgar vaga')
    </h1>
    <div>
        <a href="{{ route('vacancies.index') }}" class="btn btn-secondary">
            @lang('Voltar')
        </a>
    </div>
</div>
<div class="card shadow-sm">
    <form action="{{ route('vacancies.store') }}" method="POST">
        @include('vacancy.form')
        <div class="card-footer">
            <button type="submit" class="btn button-enviar btn-success">
                @lang('Cadastrar vaga')
            </button>
        </div>
    </form>
</div>
@endsection
