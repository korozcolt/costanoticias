@extends('dashboard')
@section('title-dashboard','Agregar Nuevo Artículo')
@section('content-dashboard')
<div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
    <button class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Nuevo Artículo') }}</button>
</div>
{{-- The data table --}}
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Link</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Content</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if ($posts->count())
                            @foreach ($posts as $item)
                                <tr>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                        {{ $item->title }}
                                    </td>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                        <a
                                            class="text-indigo-600 hover:text-indigo-900"
                                            target="_blank"
                                            href="{{ URL::to('/articulo/'.$item->slug)}}"
                                        >
                                            {{ $item->slug }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap">{!! \Illuminate\Support\Str::limit($item->content, 50, '...') !!}</td>
                                    <td class="px-6 py-4 text-right text-sm">
                                        <div class="inline-flex">
                                            <button class="bg-green-300 hover:bg-green-400 text-green-800 font-bold py-2 px-4 rounded-l">
                                              Editar
                                            </button>
                                            <button class="bg-red-300 hover:bg-red-400 text-red-800 font-bold py-2 px-4 rounded-r">
                                              Borrar
                                            </button>
                                          </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No hay post creados aún</td>
                            </tr>
                        @endif
                       
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

<br/>
{{ $posts->links() }}
@endsection