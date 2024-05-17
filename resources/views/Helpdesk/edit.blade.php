<x-app-layout>

    <div class="h-[calc(100vh-148px)]">
    <form action="{{ route('helpdesk.update', $report->id ) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="flex flex-row justify-center py-0 pt-10 font-serif text-3xl text-gray-900">
        <h1>Edit this report</h1>
    </div>

    <!-- Add form fields to be displayed in create and edit views -->
    <div class="p-4 py-12 mx-20 mt-4 bg-white shadow sm:rounded-lg sm:p-8">
        <h2 for="title" class="text-lg font-bold text-gray-900 ">Title:</h2>
        <input type="text" name="title" id="title" value="{{ $report->title }}"  class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" required autofocus/>
        @if ($errors->has('title'))
        <span class="block text-red-500">{{ $errors->first('title') }}</span>
        @endif
        <h2 for="problem" class="block mt-4 text-lg font-bold text-gray-900">Problem:</h2>
        <select name="problem" id="problem" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" >
            <option required autofocus>Select your problem</option>
            <option value="hardware_issue" {{ old('problem', $report->problem) === 'hardware_issue' ? 'selected' : '' }}>Hardware Issue</option>
            <option value="software_issue" {{ old('problem', $report->problem) === 'software_issue' ? 'selected' : '' }}>Software Issue</option>
            <option value="other_issue" {{ old('problem', $report->problem) === 'other_issue' ? 'selected' : '' }}>Other Issue</option>
        </select>
        @if ($errors->has('problem'))
            <span class="block text-red-500">{{ $errors->first('problem') }}</span>
        @endif
        <h2 for="description" class="block mt-4 text-lg font-bold text-gray-900">Description:</h2>
        <textarea name="description" id="description"  class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" rows="4">{{ $report->description ?: old('description') }}</textarea>
        @if ($errors->has('description'))
        <span class="block text-red-500">{{ $errors->first('description') }}</span>
        @endif

        <h2 for="attachment" class="block mt-4 text-lg font-bold text-gray-700">Attachment:</h2>
        <p class="mb-1 text-sm text-gray-600">put any screenshot or anything if you want</p>
        <input type="file" name="attachment" id="attachment" value="{{ $report->attachment }}" class="w-full px-3 py-2 leading-tight text-gray-700 bg-transparent border border-gray-200 rounded shadow appearance-none file-input file-input-bordered focus:outline-none focus:shadow-outline">

    </div>
    <div class="">
    <!-- Submit button for create or update -->
    <x-primary-button class="mt-4 ml-28 transition ease-in-out delay-75 hover:-translate-y-2 hover:scale-105 btn bg-gray-700 text-sm font-sans border-[#a50034] hover:bg-gray-200 hover:border-white hover:text-gray-900">
        {{ __('Update') }}
    </x-primary-xbutton>
</form>
<x-nav-link :href="route('helpdesk.store')" :active="request()->routeIs('helpdesk.store')" class=" ml-4 px-4 py-1 transition ease-in-out delay-75 hover:-translate-y-2 hover:scale-105 btn bg-[#a50034] text-sm font-sans border-[#a50034] hover:bg-gray-200 hover:border-white hover:text-gray-900">
    <button>{{ __('Back') }}</button>
    </x-nav-link>
    </div>

</x-app-layout>
