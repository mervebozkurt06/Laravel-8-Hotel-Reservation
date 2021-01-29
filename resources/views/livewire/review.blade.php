<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    @if(session()->has('message'))
        <div class="alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="store">
        @csrf
        <div class="form-group">
            <input class="form-control" wire:model="subject" type="text" placeholder="Subject"/>
            @error('subject')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <textarea class="form-control" wire:model="review" type="text"  rows="3"  placeholder="Your Review"></textarea>
            @error('review')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <input class="form-control" wire:model="rate" type="text" placeholder="Rate(1-5)"/>
            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        @auth
            <button type="submit" class="btn btn-primary">Submit</button>
        @else
            <a href="/login" > For Submit Review, Please Login</a>
        @endauth
    </form>
    @section('footerjs')
        @livewireScripts
    @endsection
</div>
