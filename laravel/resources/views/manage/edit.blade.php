<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('회원정보 관리') }}
        </h2>
    </x-slot>

<div>
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      회원정보
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      회원정보를 확인하고 설정을 변경할 수 있습니다.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          이름
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $user->name }}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          이메일
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $user->email }}
        </dd>
      </div>
      <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          등록날짜
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $user->created_at }}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          수정날짜
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $user->created_at }}
        </dd>
      </div>

      <form action="{{ route('manage.update') }}" method="POST">
      <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        @csrf
        @method('POST')
        <dt class="text-sm font-medium text-gray-500">
          사용자유형
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <input type="hidden" name="id" value="{{ $user->id}}" class="form-control">

          <select id="roles" name="role" class="focus:ring-gray-500 focus:border-gray-500 h-full py-0 pl-2 pr-7  bg-transparent text-gray-500 sm:text-sm rounded-md">
            <option value="admin" {{ ( 'admin' == $user->role ) ? 'selected' : '' }}>admin</option>
            <option value="manager" {{ ( 'manager' == $user->role ) ? 'selected' : '' }}>manager</option>
            <option value="user" {{ ( 'user' == $user->role ) ? 'selected' : '' }}>user</option>
          </select>

        </dd>
      </div>
      <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
      <div class="mt-3 sm:mt-0 sm:ml-3">
        <a href="{{ route('manage.show')}}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">뒤로</a>
      </div>
      <div class="mt-3 sm:mt-0 sm:ml-3">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">적용</button>
        </div>
      </div>
        </form>

  </div>
</div>

</div>
    
        
</x-app-layout>
