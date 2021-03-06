{{-- Check errors array when validation fails --}}
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
    @endforeach
@endif


{{-- Check for session sucess and session erros --}}
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

{{-- Check for session error --}}
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif