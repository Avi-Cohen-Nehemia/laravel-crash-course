{{-- In order to import a tepmlate we use the 'extends' command
followed by the location of the view we require using dot notation --}}
@extends('layouts.app')


{{-- we can define a section in our view using the section keyword and then gicing it a name --}}
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Posts
        </div>
    </div>
@endsection