<?php

use Livewire\Volt\Component;

new class extends Component {
    public $country = null;
    public $countries = [];
    public $country_id = null;
    public $country_name = null;

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function edit($id)
    {
        $this->country = Country::find($id);
        $this->country_id = $this->country->id;
        $this->country_name = $this->country->name;
    }

    public function render(): mixed
    {
        return view('livewire.admin.country.country', [
            'countries' => $this->countries,
        ]);
    }

}; ?>


<x-layouts.app :title="__('Country')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        <div class="mb-4 flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-800">Countries</h2>
            <button 
                wire:click="$set('country', null)" 
                class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
            >
                Add Country
            </button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td><button wire:click="edit({{ $country->id }})">Edit</button></td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>

    </div>
</x-layouts.app>