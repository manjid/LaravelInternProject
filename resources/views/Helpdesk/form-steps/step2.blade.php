<div class="mb-4">
    <label for="first_name" class="block mb-2 text-sm font-bold text-gray-700">First Name:</label>
    <input type="text" name="first_name" id="first_name" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('first_name') }}">
    @if ($errors->has('first_name'))
        <span class="block text-red-500">{{ $errors->first('first_name') }}</span>
    @endif
</div>

<div class="mb-4">
    <label for="last_name" class="block mb-2 text-sm font-bold text-gray-700">Last Name:</label>
    <input type="text" name="last_name" id="last_name" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('last_name') }}">
    @if ($errors->has('last_name'))
        <span class="block text-red-500">{{ $errors->first('last_name') }}</span>
    @endif
</div>

<div class="mb-4">
    <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email:</label>
    <input type="email" name="email" id="email" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('email') }}">
    @if ($errors->has('email'))
        <span class="block text-red-500">{{ $errors->first('email') }}</span>
    @endif
</div>

<div class="mb-4">
    <label for="phone" class="block mb-2 text-sm font-bold text-gray-700">Phone:</label>
    <input type="tel" name="phone" id="phone" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('phone') }}">
    @if ($errors->has('phone'))
        <span class="block text-red-500">{{ $errors->first('phone') }}</span>
    @endif
</div>

<div class="mb-4">
    <label for="subject" class="block mb-2 text-sm font-bold text-gray-700">Subject:</label>
    <input type="text" name="subject" id="subject" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('subject') }}">
    @if ($errors->has('subject'))
        <span class="block text-red-500">{{ $errors->first('subject') }}</span>
    @endif
</div>

<div class="mb-4">
    <label for="message" class="block mb-2 text-sm font-bold text-gray-700">Message:</label>
    <textarea name="message" id="message" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" rows="6">{{ old('message') }}</textarea>
    @if ($errors->has('message'))
        <span class="block text-red-500">{{ $errors->first('message') }}</span>
    @endif
</div>
