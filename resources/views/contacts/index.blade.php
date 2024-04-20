<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    index<br>
                    <a href="{{ route('contacts.create') }}" class="text-blue-500">新規登録</a><br>
                    <form action="get" action ="{{'contacts.index'}}" class="mb-8">
                        <input type="text" name="search" placeholder="検索">
                        <button  class=" text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索する</button>
                    </form>

                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                        ID</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        name</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        tittle</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        date</th>
                                        <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        show</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->id }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->name }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->tittle }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3 text-lg">{{ $contact->created_at }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3 text-lg"><a class="text-blue-500" href="{{route('contacts.show',['id'=>$contact->id ])}}">show</a></td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $contacts->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
