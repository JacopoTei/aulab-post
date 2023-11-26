<x-layout>
    <div class="container text-center">
        <div class="row">
            <h1 class="mt-3">Accedi</h1>
            
            <div class="container mt-2">
                <div class="row ">
                    <div class="">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <form class="p-5 shadow " action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input name="password" type="password" class="form-control" id="password">
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-outline-success" type="submit">Accedi</button>
                                    <p class="small mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
