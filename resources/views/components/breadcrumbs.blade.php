@unless ($breadcrumbs->isEmpty())
    <div class="flex flex-col gap-10 px-5 mt-5">
        <ol class="breadcrumb flex items-center gap-[30px]">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url !== null && !$loop->last)
                    <li class="breadcrumb-item text-[#7F8190] hover:text-primary last:text-tertiary last:font-semibold">
                        <a href="{{ $breadcrumb->url }}" wire:navigate>{{ $breadcrumb->title }}</a>
                    </li>
                    <span class="text-[#7F8190] last:text-tertiary">/</span>
                @else
                    <li class="breadcrumb-item text-[#7F8190] last:text-tertiary last:font-semibold active">
                        {{ $breadcrumb->title }}
                    </li>
                @endif

            @endforeach
        </ol>
    </div>
@endunless