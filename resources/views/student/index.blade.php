@extends('layouts.app')
<div>
@section('content')
<form action="{{ URL('/') }}" method="GET">
  <div class="search">
    <input type="search" placeholder="Filter ...">
    <button> Search </button>
  </div>
</form>
          <table class="w-full">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Age</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  @foreach($students as $student)
                    <tr class="hover:bg-blue-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"># {{ $student->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $student->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $student->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $student->age }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>
                                           <td>
<a href="#" class="bg-blue-500 border-2 border-green-500 rounded-full px-10">Edit</a>u
<a href="#" class="bg-blue-500 border-2 border-green-500 rounded-full px-10">Delete</a>
                   </td>
                          @endforeach

                    </tr>
                  
</tbody>
@endsection
</div>
