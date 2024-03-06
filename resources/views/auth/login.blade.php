<x-main>
    <br><br>
    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" value={{old('email')}}>
          @error('email')
          <span> {{$messsage}}</span>
          @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
            <span> {{$messsage}}</span>
            @enderror
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label" name="remember">ricordami</label>
          </div>

          <a href="/forgot-password">Recupero Password </a>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-main>
