<figure>
    <img src="{{ url('storage/'.$post->photos->first()->url) }}"
        class="img-responsive"
        alt="Foto: {{ $post->title }}"
    >
</figure>
