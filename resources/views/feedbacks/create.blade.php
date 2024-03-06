<x-main>
    <br><br>
    <form method="POST" action="{{route('feedback.store')}}">
        @csrf


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-main>
