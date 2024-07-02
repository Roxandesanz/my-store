@session('status')
    <div class="w-full mb-6 alert-status">
        {{ $value }}
    </div>
@endsession

@session('postPent')
    <div class="w-full mb-6 alert-info">
        {{ $value }}
    </div>
@endsession

@session('postUpdate')
    <div class="w-full mb-6 alert-success">
        {{ $value }}
    </div>
@endsession