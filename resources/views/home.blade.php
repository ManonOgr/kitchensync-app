@extends('layout')

@section('content')
<table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                @foreach ($bookmarks as $bookmark)
                <th scope="row">{{$bookmark->id}}</th>
                <td><a href="" target="_blank">{{$bookmark->titre}}</a></td>
                @endforeach
            </tr>
            </tbody>
        </table>
@endsection
