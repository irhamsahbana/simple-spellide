@extends('App')

@php
    $hasAccessCreate = Auth::user()->hasAccess('course-master-create');
@endphp


@section('content-header', 'Detail Master Mata Kuliah')

@section('content')
    <x-content>
        <x-row>
            <x-card-collapsible>
                <x-row>
                    <form style="width: 100%" action="{{ route('course-master.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <x-row>
                            <x-in-text
                                :label="'NIP'"
                                :placeholder="'Masukkan NIP'"
                                :col="4"
                                :name="'ref_no'"
                                :required="false"></x-in-text>
                            <x-in-text
                                :label="'Nama'"
                                :placeholder="'Masukkan Nama'"
                                :col="4"
                                :name="'name'"
                                :required="true"></x-in-text>
                            <x-in-text
                                :type="'email'"
                                :label="'Email'"
                                :placeholder="'Masukkan Email'"
                                :col="4"
                                :name="'email'"
                                :required="false"></x-in-text>
                        </x-row>

                        <x-col class="text-right">
                            @if($hasAccessCreate)
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            @endif
                        </x-col>
                    </form>
                </x-row>
            </x-card-collapsible>
        </x-row>
    </x-content>
@endsection