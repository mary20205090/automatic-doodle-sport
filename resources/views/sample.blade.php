<div class="container">
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">Middlename</th>
      <th scope="col">lastName</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($kids as $item )
           
           <tr>
                  <th scope="row">{{ $item['id'] }}</th>
                         <td>{{ $item['fname'] }}</td>
                         <td>{{ $item['mname'] }}</td>
                         <td>{{ $item['lname'] }}</td>
         
                           <td>
                           <a href="updatekid/{{ $item->id }}">ADD POINTS</a>
       
                         </td>
                       </tr>
       
           @endforeach
   
  </tbody>
</table>


     </div> 
    </div>

</div>
     