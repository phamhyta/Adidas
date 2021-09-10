@extends('layout.adminHeader')
@section('adminContent')
    <div class="w-full bg-gray-200">
        <div class="px-20  pt-16 pb-14">
            <div class="text-2xl font-semibold pb-2">
                Admin sort
            </div>
            <div class=" relative bg-gray-300 p-2 rounded-3xl text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-0 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
                <input type="text" placeholder="Search..." class="ml-7 bg-transparent outline-none"> 
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center pt-10 mx-10">
        <div class="uppercase pb-5 text-2xl font-bold">admin list</div>
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="w-1/4 border px-6 py-4 text-center">Full name</th>
                <th class="w-1/4 border px-6 py-4 text-center">Account</th>
                <th class="w-1/4 border px-6 py-4 text-center">Create day</th>
                <th class="w-1/4 border px-6 py-4 text-center">Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=" border px-6 py-4 text-center">Lê Minh Tiến</td>
                <td class=" border px-6 py-4 text-center">stinsonrecon</td>
                <td class=" border px-6 py-4 text-center">09/09/2021</td>
                <td class="border px-6 py-4">
                    <div class="flex flex-row justify-around">
                        <button class="border px-4 py-2 hover:bg-green-200">
                            Info
                            <i class="fas fa-user-tie"></i>
                        </button>
                        <button class="border px-4 py-2 hover:bg-red-500">
                            Remove
                            <i class="fas fa-user-alt-slash"></i>
                        </button>
                    </div>
                </td>
              </tr>
              <tr>
                <td class=" border px-6 py-4 text-center">Trần Xuân Hương</td>
                <td class=" border px-6 py-4 text-center">phamhyta</td>
                <td class=" border px-6 py-4 text-center">09/09/2021</td>
                <td class="border px-6 py-4">
                    <div class="flex flex-row justify-around">
                        <button class="border px-4 py-2 hover:bg-green-200">
                            Info
                            <i class="fas fa-user-tie"></i>
                        </button>
                        <button class="border px-4 py-2 hover:bg-red-500">
                            Remove
                            <i class="fas fa-user-alt-slash"></i>
                        </button>
                    </div>
                </td>
              </tr>
              <tr>
                <td class=" border px-6 py-4 text-center">Nguyễn Tấn Đạt</td>
                <td class=" border px-6 py-4 text-center">gadrigo</td>
                <td class=" border px-6 py-4 text-center">09/09/2021</td>
                <td class="border px-6 py-4">
                    <div class="flex flex-row justify-around">
                        <button class="border px-4 py-2 hover:bg-green-200">
                            Info
                            <i class="fas fa-user-tie"></i>
                        </button>
                        <button class="border px-4 py-2 hover:bg-red-500">
                            Remove
                            <i class="fas fa-user-alt-slash"></i>
                        </button>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection