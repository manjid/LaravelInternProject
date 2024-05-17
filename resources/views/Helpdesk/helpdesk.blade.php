<x-app-layout>
    <div class="h-[calc(100vh-148px)]">
    <div class="pb-0">
    @if (session('status') == 'report-save')
    <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 3000)"
                    class="pt-2 transition ease-in-out alert bg-[#00ab41] border-[#00ab41] text-gray-900">
        {{ __('report has been created') }}
    </p>
    @endif
    </div>
    <div class="pb-0">
        @if (session('popup') == 'report-update')
        <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 3000)"
                        class="pt-2 transition ease-in-out alert bg-[#00ab41] border-[#00ab41] text-gray-900">
            {{ __('report has been updated') }}
        </p>
        @endif
        </div>

<div class="flex flex-row justify-center py-0 pt-4 text-3xl text-gray-900 hover:animate-FadeIn ">
      <h1>Tell Us The Problem You Faced</h1>
    </div>
<form method="POST">
    @csrf
    <div class="p-4 py-12 mx-20 mt-4 bg-white shadow sm:rounded-lg sm:p-8">
        <h2 for="title" class="text-lg font-bold text-gray-900 ">Title:</h2>
        <p class="mb-1 text-sm text-gray-600">give us a brief of what is the problem</p>
        <input type="text" name="title" id="title" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('title') }}" required autofocus/>
        @if ($errors->has('title'))
            <span class="block text-red-500">{{ $errors->first('title') }}</span>
        @endif
        <h2 for="problem" class="block mt-4 text-lg font-bold text-gray-900">Problem:</h2>
        <p class="mb-1 text-sm text-gray-600">choose what kind of problem you faced</p>
        <select name="problem" id="problem" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" >
            <option value="" required autofocus>Select your problem</option>
            <option value="hardware_issue" {{ old('problem') === 'hardware_issue' ? 'selected' : '' }}>Hardware Issue</option>
            <option value="software_issue" {{ old('problem') === 'software_issue' ? 'selected' : '' }}>Software Issue</option>
            <option value="other_issue" {{ old('problem') === 'other_issue' ? 'selected' : '' }}>Other Issue</option>
        </select>
        @if ($errors->has('problem'))
            <span class="block text-red-500">{{ $errors->first('problem') }}</span>
        @endif
        <h2 for="description" class="block mt-3 text-lg font-bold text-gray-900">Description:</h2>
        <p class="mb-1 text-sm text-gray-600">describe to us what you want us to do</p>
        <textarea name="description" id="description" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" rows="4">{{ old('description') }}</textarea>
        @if ($errors->has('description'))
            <span class="block text-red-500">{{ $errors->first('description') }}</span>
        @endif

        <h2 for="attachment" class="block mt-3 text-lg font-bold text-gray-700">Attachment:</h2>
        <p class="mb-1 text-sm text-gray-600">put any screenshot or anything if you want</p>
        <input type="file" name="attachment" id="attachment" class="w-full px-3 py-2 leading-tight text-gray-700 bg-transparent border border-gray-200 rounded shadow appearance-none file-input file-input-bordered focus:outline-none focus:shadow-outline">

    </div>
    <div class="flex justify-end">
    <x-primary-button class="mt-4 mb-3 mr-28">
        {{ __('submit') }}
    </x-primary-xbutton>
</div>
</form>
    </div>
</x-app-layout>
