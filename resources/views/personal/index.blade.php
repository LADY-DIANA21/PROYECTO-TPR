@extends("temasJORGE.app")

@section('content')
    <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
        <div class="text-center">
        <h1 class="mb-5">{{ __("Lista del Personal")}}</h1>
        <a href="{{route("personal.create")}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        {{ __("Añadir Personal")}}
        </a>
        </div>
    </div>
    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
            <tr>
            <th class="px-4 py-2">{{ __("Nombres")}}</th>
            <th class="px-4 py-2">{{ __("Apellidos")}}</th>
            <th class="px-4 py-2">{{ __("Cargo")}}</th>
            <th class="px-4 py-2">{{ __("Direccion")}}</th>
            <th class="px-4 py-2">{{ __("C.I")}}</th>
            <th class="px-4 py-2">{{ __("Telefono")}}</th>
            <th class="px-4 py-2">{{ __("Calendario?")}}</th>
            <th class="px-4 py-2">{{ __("Salario")}}</th>
            </tr>
        </thead>
        <tbody>
            @forelse($personals as $personal)
                <tr>
                    <td class="border px-4 py-2">{{ $personal->name }}</td>
                    <td class="border px-4 py-2">{{ $personal->surname }}</td>
                    <td class="border px-4 py-2">{{ $personal->direction }}</td>

                    @foreach($positions as $position)
                    @if($position->id_position == $position->id)
                    <td class="border px-4 py-2">{{$position->description}}</td>
                    @endif
                    @endforeach
                    <td class="border px-4 py-2">{{ $personal->CI }}</td>
                    <td class="border px-4 py-2">{{ $personal->phone }}</td>
                    <td class="border px-4 py-2">{{ $personal->salary }}</td>
                    <td class="border px-4 py-2">{{ $personal->schedule }}</td>
                    <td class="border px-4 py-2">{{ date_format($personal->created_at, "d/m/Y") }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route("personal.edit", ["personal" => $personal]) }}" class="text-blue-400">{{ __("Editar") }}</a> |
                        <a
                            href="#"
                            class="text-red-400"
                            onclick="event.preventDefault();
                                document.getElementById('delete-personal-{{ $personal->id }}-form').submit();"
                        >{{ __("Eliminar") }}
                        </a>
                        <form id="delete-personal-{{ $personal->id }}-form" action="{{ route("personal.destroy", ["personal" => $personal]) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative " role="alert">
                            <p><strong class="font-bold">{{ __("No hay Personal") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                        
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    
    @if($personals->count())
        <div class="mt-3">
            {{ $personals->links() }}
        </div>
    @endif

@endsection