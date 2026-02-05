@if ($getState())
<iframe width="200" height="120" src="{{ $getState() }}" frameborder="0" allowfullscreen>
</iframe>
@else
<span class="text-gray-400">No video</span>
@endif
