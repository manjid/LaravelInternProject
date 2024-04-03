<div class="mb-4">
    <label for="title" class="block mb-2 text-sm font-bold text-gray-700">Title:</label>
    <input type="text" name="title" id="title" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('title') }}">
    @if ($errors->has('title'))
        <span class="block text-red-500">{{ $errors->first('title') }}</span>
    @endif
</div>

<div class="mb-4">
    <label for="category" class="block mb-2 text-sm font-bold text-gray-700">Category:</label>
    <select name="category" id="category" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
        <option value="">Select a category</option>
        <option value="technical_issue" {{ old('category') === 'technical_issue' ? 'selected' : '' }}>Technical Issue</option>
        <option value="account_issue" {{ old('category') === 'account_issue' ? 'selected' : '' }}>Account Issue</option>
        <option value="billing_issue" {{ old('category') === 'billing_issue' ? 'selected' : '' }}>Billing Issue</option>
    </select>
    @if ($errors->has('category'))
        <span class="block text-red-500">{{ $errors->first('category') }}</span>
    @endif
</div>

<div class="mb-4">
    <label for="description" class="block mb-2 text-sm font-bold text-gray-700">Description:</label>
    <textarea name="description" id="description" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline" rows="4">{{ old('description') }}</textarea>
    @if ($errors->has('description'))
        <span class="block text-red-500">{{ $errors->first('description') }}</span>
    @endif
</div>

<div class="mb-4">
    <label for="attachment" class="block mb-2 text-sm font-bold text-gray-700">Attachment:</label>
    <input type="file" name="attachment" id="attachment" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
    @if ($errors->has('attachment'))
        <span class="block text-red-500">{{ $errors->first('attachment') }}</span>
    @endif
</div>
