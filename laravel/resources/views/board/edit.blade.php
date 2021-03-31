<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('게시판 설정') }}
        </h2>
    </x-slot>

<div>
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      게시판
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      게시판을 새로 만들 수 있습니다.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>

      <form action="{{ route('board.update') }}" method="POST">
        @csrf
        @method('POST')
        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            게시판명
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input type="hidden" name="id" value="{{ $board->id}}" class="form-control">
            <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $board -> name}}">
          </dd>
        </div>
        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            게시판설명
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input type="text" name="intro" id="intro" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $board -> intro}}">
          </dd>
        </div>
        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            게시판유형
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <select id="types" name="type" class="focus:ring-gray-500 focus:border-gray-500 h-full py-0 pl-2 pr-7  bg-transparent text-gray-500 sm:text-sm rounded-md">
              <option value="list" {{ ( 'list' == $board->type ) ? 'selected' : '' }}>list</option>
              <option value="timeline" {{ ( 'timeline' == $board->type ) ? 'selected' : '' }}>timeline</option>
            </select>
          </dd>
        </div>
        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            공개범위
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <select id="scopes" name="scope" class="focus:ring-gray-500 focus:border-gray-500 h-full py-0 pl-2 pr-7  bg-transparent text-gray-500 sm:text-sm rounded-md">
              <option value="admin" {{ ( 'admin' == $board->scope ) ? 'selected' : '' }}>admin</option>
              <option value="manager" {{ ( 'manager' == $board->scope ) ? 'selected' : '' }}>manager</option>
              <option value="user" {{ ( 'user' == $board->scope ) ? 'selected' : '' }}>user</option>
            </select>
          </dd>
        </div>
        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
          <div class="mt-3 sm:mt-0 sm:ml-3">
            <a href="{{ route('board.manage')}}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">뒤로</a>
          </div>

          <div class="mt-3 sm:mt-0 sm:ml-3">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">적용</button>
            </div>
        </div>
      
      </form>
    </dl>

  </div>

</div>

</div>
    
        
</x-app-layout>
