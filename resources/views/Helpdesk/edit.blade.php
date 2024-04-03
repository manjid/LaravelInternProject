@extends('layouts.app')

@section('content')
  @livewire('helpdesk.create')
@endsection

<x-helpdesk.form>
  <form method="POST" action="{{ $update ? route('helpdesk.update', $helpdesk->id) : route('helpdesk.store') }}" enctype="multipart/form-data">
    @csrf

    @if ($update)
      @method('PUT')
    @endif

    <!-- Add form fields to be displayed in create and edit views -->

    <!-- Submit button for create or update -->
    <x-helpdesk::button form="{{ $update ? 'helpdesk-form' : '' }}" type="submit" class="w-1/3 mx-auto">
      @if ($update)
        Update
      @else
        Submit
      @endif
    </x-helpdesk::button>

  </form>

  <!-- Cancel button for edit view -->
  <x-helpdesk::button form="helpdesk-form" type="button" outline class="w-1/3 mx-auto mt-2" wire:click="cancel">
    Cancel
  </x-helpdesk::button>
</x-helpdesk::form>
