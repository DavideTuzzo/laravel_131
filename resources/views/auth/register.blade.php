<x-main>
    <br><br>
    <form method="POST" action="/register">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value={{old('name')}}>
          @error('name')
              <span> {{$messsage}}</span>
          @enderror
        </div>

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

          <div class="mb-3">
            <label class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-main>
