<x-admin-layout>
<div class="py-12 overflow-scroll">
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-admin-information')
            </div>
        </div>

        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
</x-admin-layout>
