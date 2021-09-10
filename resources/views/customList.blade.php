@extends('layout.adminHeader')
@section('adminContent')
<div class="w-full bg-gray-200">
    <div class="px-20  pt-16 pb-14">
        <div class="text-2xl font-semibold pb-2">
            Customer sort
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
    <div class="uppercase pb-5 text-2xl font-bold">
        Customer list
    </div>
    <table class="table-fixed">
        <thead>
          <tr>
            <th class="w-1/12 border px-6 py-4">Id</th>
            <th class="w-1/6 border px-6 py-4">Full name</th>
            <th class="w-1/6 border px-6 py-4">Username</th>
            <th class="w-1/6 border px-6 py-4">Email</th>
            <th class="w-1/6 border px-6 py-4">Phone number</th>
            <th class="w-1/6 border px-6 py-4">Address</th>
            <th class="w-1/12 border px-6 py-4">Gender</th>
          </tr>
        </thead>
        <tbody>
            <?php
                for($i = 1; $i <= 5; $i++){
                    echo '<tr>
                        <td class="border px-6 py-4 text-center">'.$i.'</td>
                        <td class="border px-6 py-4 text-center">Lê Minh Tiến</td>
                        <td class="border px-6 py-4 text-center">stinsonrecon</td>
                        <td class="border px-6 py-4 text-center">minhtienlomo@gmail.com</td>
                        <td class="border px-6 py-4 text-center">0900000000'.$i.'</td>
                        <td class="border px-6 py-4 text-center">Hà Nội</td>
                        <td class="border px-6 py-4 text-center">Nam</td>
                    </tr>';
                }
            ?>
        </tbody>
      </table>
</div>
@endsection