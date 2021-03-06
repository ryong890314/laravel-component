<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('게시판') }}
        </h2>

        <div class="max-w-7xl mx-auto pt-6">
        <a href="{{ route('board.manage') }}">
            {{ __('관리') }}
        </a>
        </div>
        
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            번호
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            제목
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            작성자
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            등록일
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            조회수
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($posts as $post)
                        <tr>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $post->no}}</div>
                        </td>
                        <td class="px-6 py-4 text-left whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $post->title}}</div>
                        </td>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $post->view_count}}</div>
                        </td>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                            {{ $post->created_at}}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center whitespace-nowrap text-sm text-gray-500">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                            {{ $post->created_at }}
                            </span>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        <div class="mt-3 sm:mt-0 sm:ml-3 py-6 text-right">
        <a href="{{ route('board.create')}}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">게시판 만들기</a>
      </div>
            </div>

        </div>
    </div>
</x-app-layout>
