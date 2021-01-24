<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <input wire:model="search" name="search" type="text" class="input-search" list="mylist" placeholder="Search Hotels.."/>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
