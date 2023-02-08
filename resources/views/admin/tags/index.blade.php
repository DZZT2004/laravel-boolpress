@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success_delete'))
            <div class="alert alert-warning" role="alert">
               Il tag "{{ session('success_delete')->name }}" e' stato eliminato correttamente
            </div>
        @endif

        <h1>Tags</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <th scope="row">{{ $tag->id }}</th>
                        <td>{{ $tag->slug }}</td>
                        <td>{{ $tag->name }}</td>

                        <td>
                            <a href="{{ route('admin.tags.show', ['tag' => $tag]) }}" class="btn btn-primary">Visita</a>
                            <a href="{{ route('admin.tags.edit', ['tag' => $tag]) }}" class="btn btn-warning">Edita</a>
                            <form action="{{ route('admin.tags.destroy', ['tag' => $tag]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-delete-me">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $tags->links() }}
    </div>
@endsection