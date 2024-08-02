@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
</div>

<div class="w-4/5 m-auto pt-20">
    <div class="w-full sm:grid grid-cols-2 gap-20 mx-auto py-8 border-b border-gray-200">
        <img class="object-cover custom-image-size" src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}">
    </div>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {!! nl2br(e($post->description)) !!}
    </p>


    <!-- Share Buttons with Icons -->
    <div class="flex items-center space-x-4">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700 flex items-center"><i class="fab fa-facebook-f fa-2x rounded-full bg-blue-100 p-2 mr-2"></i> Share on Facebook</a>
        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700 flex items-center"><i class="fab fa-twitter fa-2x rounded-full bg-blue-100 p-2 mr-2"></i> Share on Twitter</a>
        <a href="whatsapp://send?text={{ urlencode($post->title . ': ' . url()->current()) }}" class="text-green-500 hover:text-green-700 flex items-center"><i class="fab fa-whatsapp fa-2x rounded-full bg-green-100 p-2 mr-2"></i> Share on WhatsApp</a>
        <a href="https://www.pinterest.com/pin/create/button/?url={{ urlencode(url()->current()) }}&media={{ urlencode(asset('images/' . $post->image_path)) }}&description={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="text-red-500 hover:text-red-700 flex items-center"><i class="fab fa-pinterest fa-2x rounded-full bg-red-100 p-2 mr-2"></i> Pin on Pinterest</a>
        <button onclick="copyToClipboard('{{ url()->current() }}')" class="text-purple-500 hover:text-purple-700 cursor-pointer flex items-center"><i class="far fa-copy fa-2x rounded-full bg-purple-100 p-2 mr-2"></i> Copy Link</button>
    </div>
</div>

<!-- Popup Message -->
<div id="popupMessage" class="popup-message">
    <p id="popupText" class="popup-text"></p>
    <div class="timeout-line"></div>
</div>

<script>
    function copyToClipboard(text) {
        var tempInput = document.createElement('input');
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        
        // Show popup message
        var popupMessage = document.getElementById('popupMessage');
        var popupText = document.getElementById('popupText');
        popupText.innerText = 'Link copied to clipboard!';
        popupMessage.classList.add('show');
        setTimeout(() => {
            popupMessage.classList.remove('show');
        }, 3300);
    }
</script>

@endsection
