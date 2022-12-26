<x-backend.master>

    <x-slot:title>
        {{ __('Category List') }}
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> {{ __('Categories') }} </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

                <a href="{{ route('categories.pdf') }}">
                    <button type="button" class=" btn-sm btn-outline-success">{{ __('PDF') }} </button>
                </a>
                <a href="{{ route('categories.excel') }}">
                    <button type="button" class="btn btn-sm btn-outline-info">{{ __('Excel') }}</button>
                </a>
                {{-- anra jodi akadhik language use korte chai tokhon  {{-- ()}} aitar vitore ja thakbe tha akadhik language a use kora jabe --}}

                <a href="{{ route('categories.trash') }}">
                    <button type="button" class="btn btn-sm btn-outline-danger">{{ __('Trash') }} </button>
                </a>
            </div>
            <a href="{{ route('categories.create') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="plus"></span>
                    {{ __(' Add New') }}
                </button>
            </a>
        </div>
    </div>

    {{-- Message shown here --}}
    <x-forms.message />

    <table class="table">
        <thead>
            <tr>
                <th>{{ __('$SL') }} </th>
                <th>{{ __('Name') }}</th>
                <th width="250">{{ __('Action') }} </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $category->name }} </td>
                    <td>
                        <a class="btn btn-success" href=" {{ route('categories.show', $category->id) }} ">Show</a> |
                        <a class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}">Edit </a> |

                        <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                            style="display: inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-backend.master>
