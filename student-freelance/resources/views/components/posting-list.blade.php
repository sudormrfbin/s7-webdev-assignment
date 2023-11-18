@props(['postings'])

@if(count($postings) > 0)
    @foreach($postings as $posting)
        <x-posting-card :posting="$posting"/>
    @endforeach
@else
    <p>No job postings available.</p>
@endif

