<x-app-layout>
  <style>
   table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}


                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped table-hover table-condensed">
    <thead>
      <tr>
        <th><strong>id</strong></th>
        <th><strong>Item Name</strong></th>
        <th><strong>Item description</strong></th>
        <th><strong>Item category</strong></th>
        <th><strong>Date of creation</strong></th>

      </tr>
    </thead>
    <tbody>
    @foreach($item as $key => $data)
    <tr>    
    <td>{{$data->id}}</td>
      <td>{{$data->item_name}}</td>
      <td>{{$data->item_description}}</td>
      <td>{{$data->item_category}}</td>  
      <td>{{$data->created_at}}</td>                        
    </tr>
    @endforeach
    </tbody>
  </table>
</x-app-layout>
