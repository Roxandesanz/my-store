@if($errors->any())
    @foreach($errors->all() as $e)
        <div class="w-full mb-6 alert-errors">
            {{ $e }}
        </div>
    @endforeach
@endif