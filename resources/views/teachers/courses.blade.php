@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron', ['title' => 'Mis cursos', 'icon' => 'building'])
@endsection

@section('content')
    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            @forelse($courses as $course)
                <div class="col-md-8 offset-2 listing-block">
                    <div class="media" style="height: 200px;">
                        <img
                            style="height: 200px; width: 300px"
                            class="img-rounded"
                            src="{{ $course->pathAttachment() }}"
                            alt="{{ $course->name }}"
                        >
                        <div class="media-body pl-3" style="height: 200px;">
                            <div class="price">
                                <small class="badge-danger text-white text-center">
                                    {{ $course->category->name }}
                                </small>
                                <small>{{ __("curso") }}: {{ $course->name }}</small>
                                <small>{{ __("estudiantes") }}: {{ $course->students_count }}</small>
                            </div>
                            <div class="stats">
                                {{ $course->created_at->format('d/m/y') }}
                                @include('partials.courses.rating', ['rating' => $course->rating])
                            </div>
                            @include('partials.courses.teacher_action_buttons')
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-dark">
                    {{ __("No creaste ningun curso") }}<br>
                    <a class="btn btn-course btn-block" href="{{ route('courses.create') }}">
                        {{ __("Crear mi primer curso    ") }}
                    </a>
                </div>
            @endforelse


        </div>
        <div class="row justify-content-center">
            {{ $courses->links() }}
        </div>
    </div>
@endsection
