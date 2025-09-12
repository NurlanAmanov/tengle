@extends('frontend.layout.master')

@section('content')
@php use Illuminate\Support\Facades\Storage; @endphp

<section id="services" class="py-16 bg-white">
  <div class="container mx-auto px-6 text-center">
    <h2 class="section-heading mb-8">What We Do</h2>
    <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-12">
      We provide a full range of shipbuilding, marine repair, and engineering services. Our expertise includes steel hulls, piping, electrical, and mechanical works, serving a variety of marine and offshore projects globally.
    </p>

    <div class="grid md:grid-cols-3 gap-8">
      @forelse(($service ?? collect())->where('section','what_we_do') as $item)
        <div class="card p-8 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="icon-box mb-4">
            @if($item->icon)
              <img
                src="{{ Storage::url($item->icon) }}"
                alt="{{ $item->title }}"
                class="mx-auto h-16 w-16 object-contain rounded"
              >
            @else
              <div class="h-16 w-16 mx-auto rounded bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                No Image
              </div>
            @endif
          </div>
          <h3 class="text-2xl font-bold mb-4 text-gray-800">{{ $item->title }}</h3>
          <p class="text-gray-600">{{ $item->description }}</p>
        </div>
      @empty
        <div class="col-span-3 text-gray-500">Heç bir “What We Do” məlumatı yoxdur.</div>
      @endforelse
    </div>
  </div>
</section>

<section id="process" class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h2 class="section-heading mb-12">Our Process: From Start to Finish</h2>

    <div class="grid md:grid-cols-3 gap-8">
      @forelse(($procses ?? collect()) as $step)
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="mb-4">
            @if($step->image)
              <img
                src="{{ Storage::url($step->image) }}"
                alt="{{ $step->title }}"
                class="rounded-lg shadow-sm w-full object-cover"
              >
            @else
              <div class="w-full h-40 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                No Image
              </div>
            @endif
          </div>
          <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ $step->title }}</h3>
          <p class="text-gray-600">{{ $step->description }}</p>
        </div>
      @empty
        <div class="col-span-3 text-gray-500">Heç bir “Our Process” məlumatı yoxdur.</div>
      @endforelse
    </div>
  </div>
</section>

@endsection
