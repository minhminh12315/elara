<?php

use App\Models\State;
use Illuminate\Support\Facades\Log;
use Livewire\Volt\Component;

new class extends Component {
    public $states;
    public function mount()
    {
        $this->states = State::all();
        Log::info($this->states);
    }
};

?>
<x-layouts.app>
    <flux:table :paginate="$this->states">
        <flux:table.columns>
            <flux:table.column sortable :label="__('ID')">ID</flux:table.column>
            <flux:table.column sortable :label="__('Name')">Name</flux:table.column>
            <flux:table.column sortable :label="__('Country')">Country</flux:table.column>
            <flux:table.column sortable :label="__('Action')"></flux:table.column>
        </flux:table.columns>
        <flux:table.rows>
            @foreach($this->states as $state)
            <flux:table.row :key="$state->id">
                <flux:table.cell>{{ $state->id }}</flux:table.cell>
                <flux:table.cell>{{ $state->name }}</flux:table.cell>
                <flux:table.cell>{{ $state->country->name }}</flux:table.cell>
                <flux:table.cell>
                    <button wire:click="editState($state->id)">Edit</button>
                    <button wire:click="deleteState($state->id)">Delete</button>
                </flux:table.cell>
            </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
</x-layouts.app>