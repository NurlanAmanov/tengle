@extends('frontend.layout.master')

@section('content')
<section id="projects" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="section-heading text-center mb-2">Our Key Projects</h2>
        <p class="text-lg text-gray-500 text-center mb-12">
            Explore our portfolio of significant achievements and groundbreaking projects 
            in the fields of marine engineering and offshore construction.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($project as $project)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    @if($project->image_url)
                        @if(Str::startsWith($project->image_url, ['http://','https://']))
                            <img src="{{ $project->image_url }}" alt="{{ $project->project_title }}" class="w-full h-48 object-cover">
                        @else
                            <img src="{{ asset('storage/'.$project->image_url) }}" alt="{{ $project->project_title }}" class="w-full h-48 object-cover">
                        @endif
                    @else
                        <div class="w-full h-48 flex items-center justify-center bg-gray-200 text-gray-500">
                            No Image
                        </div>
                    @endif

                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $project->project_title }}</h3>
                        <p class="text-sm text-gray-500">{{ $project->vessel_name ?? '-' }}</p>
                        <p class="text-sm text-gray-500">{{ $project->company_or_owner ?? '-' }}</p>
                        <p class="text-sm text-gray-500">
                            {{ $project->completion_year ?? 'Year N/A' }} | {{ $project->dimensions ?? 'Dimensions N/A' }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">No projects found.</p>
            @endforelse
        </div>

        <a href="{{ route('project') }}" 
           class="px-6 py-3 border-2 border-[#0C47A6] text-[#0C47A6] rounded-full font-semibold hover:bg-[#0C47A6] hover:text-white transition-all duration-300 inline-block mt-8">
           Show More
        </a>
    </div>
</section>
@endsection
