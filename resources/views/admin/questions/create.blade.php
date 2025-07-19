<x-app-layout>
    <x-slot:fullBreadcrumbs>
        {{ Diglactic\Breadcrumbs\Breadcrumbs::render('create-course-question', $course) }}
    </x-slot:fullBreadcrumbs>
    <div class="header ml-[70px] pr-[70px] w-[940px] flex items-center justify-between mt-10">
        <div class="flex gap-6 items-center">
            <div class=" w-[150px] h-[150px] flex shrink-0 relative overflow-hidden">
            <img src="{{ Storage::url($course->cover) }}" class="w-full h-full object-contain" alt="icon">
            @if($course->category->name == 'Programming')
                <p
                    class="p-[8px_16px] rounded-full bg-[#FFF2E6] font-bold text-sm text-[#F6770B] absolute bottom-0 transform -translate-x-1/2 left-1/2 text-nowrap">
                    {{ $course->category->name }}
                </p>
            @elseif($course->category->name == 'Bahasa Jepang')
                <p      class="p-[8px_16px] rounded-full bg-[#EAE8FE] font-bold text-sm text-[#6436F1] absolute bottom-0
                    transform -translate-x-1/2 left-1/2 text-nowrap">
                    {{ $course->category->name }}
                </p>
            @elseif($course->category->name == 'Digital Marketing')
                <p         class="p-[8px_16px] rounded-full bg-[#D5EFFE] font-bold text-sm text-[#066DFE] absolute bottom-0
                    transform -translate-x-1/2 left-1/2 text-nowrap">
                    {{ $course->category->name }}
                </p>
            @endif
        </div>
        <div class="flex flex-col gap-5"> <h1 class="font-extrabold text-[30px] leading-[45px]">{{ $course->name }}</h1>
            <div class="flex items-center gap-5">
                <div class="flex gap-[10px] items-center">
                    <div class="w-6 h-6 flex shrink-0">
                               <img src="{{asset('images/icons/calendar-add.svg')}}" alt="icon">
                    </div>
                    <p class="font-semibold">{{ \Carbon\Carbon::parse($course->created_at)->format('F j, Y') }}</p>
            </div>
            <div class="flex gap-[10px] items-center">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="{{asset('images/icons/profile-2user-outline.svg')}}" alt="icon">
                </div>
                <p class="font-semibold">{{ count($students) }} students</p>
            </div>
    </div>
    </div>
    </div>
    </div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="py-5 px-5 bg-blue-800 text-black">{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('dashboard.course.create.question.store', $course) }}" id="add-question"
        class="mx-[70px] mt-[30px] flex flex-col gap-5">
        @csrf
        <h2 class="font-bold text-2xl">Add New Question</h2>
        <div class="flex flex-col gap-[10px]">
                   <p class="font-semibold">Question</p>
            <x-input-text placeholder="Write the question" name="question" />
        </div>
        <div class="flex flex-col gap-[10px]">
            <p class="font-semibold">Answers</p>
            @for($input = 0; $input < 4; $input++) <div class="flex items-center gap-4">
                        <x-input-text icon="solar-pen-new-square-outline" placeholder="Write better answer option"
                            name="answers[]" />
                        <label class="font-semibold flex items-center gap-[10px]">
                            <input type="radio" value="{{ $input }}" name="correct_answer"
                                class="w-[24px] h-[24px] appearance-none checked:border-[3px] checked:border-solid checked:border-white rounded-full checked:bg-[#2B82FE] ring ring-[#EEEEEE]" />
                                        Correct
                        </label>
                </div>
            @endfor

        </div>
        <button type="submit"
            class="w-[500px] h-[52px] p-[14px_20px] bg-[#6436F1] rounded-full font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center">Save
            Question</button>
    </form>
    </x-app-layout>