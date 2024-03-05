@include('template.header')
@extends('template.navbar')

@section('content')

<section class="relative w-3/4 mx-auto h-screen">

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" id="alert">
        <strong class="font-bold"><i class="icon fas fa-close"></i> Error!</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <button type="button" class="close-alert" aria-hidden="true">&times;</button>
        </span>
    </div>
    @endif


    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" id="alert">
        <strong class="font-bold"><i class="icon fas fa-check"></i> Success!</strong>
        {{session('success')}}
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <button type="button" class="close-alert" aria-hidden="true">&times;</button>
        </span>
    </div>
    @endif

    <div class="text-center space-x-4 mt-8">
        <a href="{{ route('menu') }}" class="hover:border-b hover:border-secondary">coffee</a>
        <a href="{{ route('beverages') }}" class="hover:border-b hover:border-secondary">beverage</a>
        <a href="{{ route('dessert') }}" class="text-secondary border-b border-secondary font-semibold">dessert</a>
    </div>

    <div class="my-5 flex gap-2 justify-end">
        <button class="bg-secondary text-white px-2 rounded-full" id="modal-button">
            + add menu
        </button>
    </div>

    <div class="gap-4 md:gap-8 flex flex-wrap text-center m-auto justify-center">
        @foreach ($menu as $m)
        @if ($m->type == 'Dessert')
        <div class="border rounded-xl p-2 flex flex-col justify-between">
            <div class="size-32">
                <img src="{{ asset('storage/menu-image/'.$m->image) }}" alt="" />
            </div>
            <p class="font-semibold">{{ $m->name}}</p>
            <div class="flex justify-between px-2">
                <p class="text-sm">Rp. {{ $m->price}}</p>
                <div class="flex gap-1">
                    <form>
                        <button type="button" data-toggle="modal" data-target="#menu-modal" data-mode="edit" data-id="{{ $m->id }}" data-name="{{ $m->name}}" data-type="{{ $m->type}}" data-price="{{ $m->price}}" data-image="{{ $m->image}}">
                            <i class="fas fa-pen fa-2xs"></i></button>
                    </form>

                    <form action="menu/{{$m->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="delete-data" type="button"><i class="fas fa-trash fa-2xs"></i></button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</section>
@endsection
@include('menu.modal')