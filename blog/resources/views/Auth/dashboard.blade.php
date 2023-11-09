@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>

                    <!-- Tombol untuk ke halaman users di sini -->
                    <div class="mb-3 row">
                        <a href="{{ route('users') }}" class="col-md-3 offset-md-5 btn btn-primary">Go to Users</a>
                    </div>
                @endif                
            </div>
        </div>
    </div>    
</div>
    
@endsection