<x-app-layout>
    <x-slot:breadcrumbs>
        manage-course
    </x-slot:breadcrumbs>
    <x-heading>
        Manage Course
        <x-slot:subtitle>
            Provide high quality for best students
        </x-slot:subtitle>
        <x-slot:action>
            <x-link-button :href="route('dashboard.courses.create')">Add New Course</x-link-button>
        </x-slot:action>
    </x-heading>
    <div class="course-list-container flex flex-col px-5 mt-[30px] gap-[30px]">
        <table class="min-w-full divide-y divide-[#EEEEEE]">
            <thead>
                <tr class="course-list-header">
                    <th class="text-left text-[#7F8190] w-[300px] pb-4 pr-10">Course</th>
                    <th class="text-center text-[#7F8190] w-[150px] pb-4">Date Created</th>
                    <th class="text-center text-[#7F8190] w-[170px] pb-4">Category</th>
                    <th class="text-center text-[#7F8190] w-[120px] pb-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                    <tr class="list-items">
                        <td class="w-[300px] py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 flex shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ Storage::url($course->cover) }}" class="object-cover" alt="thumbnail">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-bold text-lg">{{ $course->name }}</p>
                                    <p class="text-[#7F8190]">Beginners</p>
                                </div>
                            </div>
                        </td>
                        <td class="w-[150px] text-center py-4">
                            <p class="font-semibold">
                                {{ \Carbon\Carbon::parse($course->created_at)->format('F j, Y') }}
                            </p>
                        </td>
                        <td class="w-[170px] text-center py-4">
                            @if($course->category->name == 'Programming')
                                <span class="p-[8px_16px] rounded-full w-auto bg-[#FFF2E6] font-bold text-sm text-[#F6770B]">
                                    {{ $course->category->name }}
                                </span>
                            @elseif($course->category->name == 'Bahasa Jepang')
                                <span class="p-[8px_16px] rounded-full bg-[#EAE8FE] font-bold text-sm text-[#6436F1]">
                                    {{ $course->category->name }}
                                </span>
                            @elseif($course->category->name == 'Digital Marketing')
                                <span class="p-[8px_16px] rounded-full bg-[#D5EFFE] font-bold text-sm text-[#066DFE]">
                                    {{ $course->category->name }}
                                </span>
                            @endif
                        </td>
                        <td class="w-[120px] text-end py-4 ">
                            <x-dropdown triggerWrapperClass="flex justify-end" align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center justify-center w-10 h-10 rounded-full bg-white border border-[#EEEEEE] shadow hover:shadow-md transition-all duration-300"
                                        type="button">
                                        @svg('solar-menu-dots-bold', 'size-5 rotate-90')
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link href="{{ route('dashboard.courses.show', $course) }}">
                                        Manage
                                    </x-dropdown-link>
                                    <x-dropdown-link href="#">
                                        Students
                                    </x-dropdown-link>
                                    <x-dropdown-link href="{{ route('dashboard.courses.edit', $course) }}">
                                        Edit Course
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('dashboard.courses.destroy', $course) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex items-center justify-between font-medium text-sm w-full text-[#FD445E] px-4 py-2 rounded-lg hover:bg-gray-50">
                                            Delete
                                        </button>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-8">Ups, tidak ada tes tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>