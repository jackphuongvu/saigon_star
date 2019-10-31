@section('meta_title', 'Testimonials')
@section('meta_description', 'Testimonials')
@section('page_title', 'Testimonials')

@foreach($posts as $post)
    {!! $post->title !!}
    {!! $post->body !!}
@endforeach
