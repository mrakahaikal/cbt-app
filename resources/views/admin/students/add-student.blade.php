<x-app-layout>
    <div class="flex flex-col gap-10 px-5 mt-5">
        <div class="breadcrumb flex items-center gap-[30px]">
            <a href="#" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold">Home</a>
            <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
            <a href="#" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold">Manage Courses</a>
            <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
            <a href="#" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold">Course Students</a>
        </div>
    </div>
    <div class="header ml-[70px] pr-[70px] w-[940px] flex items-center justify-between mt-10">
        <div class="flex gap-6 items-center">
            <div class="w-[150px] h-[150px] flex shrink-0 relative overflow-hidden">
                <img src="{{ Storage::url($course->cover) }}" class="w-full h-full object-contain" alt="icon">
                <p
                    class="p-[8px_16px] rounded-full bg-[#FFF2E6] font-bold text-sm text-[#F6770B] absolute bottom-0 transform -translate-x-1/2 left-1/2 text-nowrap">
                    {{ $course->category->name }}
                </p>
            </div>
            <div class="flex flex-col gap-5">
                <h1 class="font-extrabold text-[30px] leading-[45px]">{{ $course->name }}</h1>
                <div class="flex items-center gap-5">
                    <div class="flex gap-[10px] items-center">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="assets/images/icons/calendar-add.svg" alt="icon">
                        </div>
                        <p class="font-semibold">22 August 2024</p>
                    </div>
                    <div class="flex gap-[10px] items-center">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="assets/images/icons/profile-2user-outline.svg" alt="icon">
                        </div>
                        <p class="font-semibold">489,509 students</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('dashboard.course.course_students.store', $course) }}" id="add-student"
        class="mx-[70px] mt-[30px] flex flex-col gap-5" method="POST">
        @csrf
        <h2 class="font-bold text-2xl">Add New Student</h2>
        <div class="flex flex-col gap-[10px]">
            <label class="font-semibold" for="email">Email Address</label>
            <x-input-text type="email" id="email" placeholder="Write student email address" name="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <button type="submit"
            class="w-[500px] h-[52px] p-[14px_20px] bg-[#6436F1] rounded-full font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center">Add
            Student
        </button>
    </form>
</x-app-layout>