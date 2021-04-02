@csrf
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<h2 >Passenger datalist</h2>
 
<table id="data-table" class="display" style="width:100%">
    <thead>
    <tr> 
        <td>Name</td>
        <td>Age</td>
    </tr>   
    </thead>
    {{-- <tbody>


    </tbody> --}}
   
</table>
<form   action="{{  route('findage')  }}"  method="post" autocomplete="off">
<div class="col-md-3">
  <label> Example Input 1 : <b>11</b> </label>
  <br>
  <label>Or</label>
  <br>
  <label> Example Input 2 : <b>11,12,15</b> </label>
  
  <br><br>
    <label> Find Age  </label>
    <input type="text" id="umur" name='umur'>
</div>
   <br>
   <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
  <div class="col-md-2">
      <!-- <input id = "button" class="btn btn-primary" type = "button" value = " Add " onclick = "AddData()"> -->
       <input type="submit" class="add_cart btn btn-primary waves-effect waves-light" value='Process'> 
  </div>
</form>

<br>
<div id='detail_cart'>

</div>




 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script> 
var avg =0;
     $(document).ready(function() {
     

                $('#data-table').DataTable( {
                      "ajax": {
                          "url": '{{ route("getjson") }}',
                          "dataSrc": ""
                      },
                      "columns": [         
                                                  {"data": "name"}, 
                                                  {"data": "age"},
                                                 
                      ]
                                    
                 
            
            
 
                  } );
       
          

     })  
    
</script>
