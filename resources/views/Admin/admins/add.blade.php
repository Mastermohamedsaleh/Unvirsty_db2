
<!-- Modal -->
<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{route('admins.store')}}" autocomplete="off" enctype="multipart/form-data">
      @csrf
      <div class="row">
      <div class="col-12">
      <div class="form-group">
        <label>Name: </label>
        <input type="text"  name="name"  >
        </div>
      </div>


      <div class="col-12">
      <div class="form-group">
         <label>Email : </label>
         <input type="email"  name="email"  >
         </div>
      </div>



      <div class="col-12">
      <div class="form-group">
            <label>Password: </label>
            <input type="password"  name="password"  >
        </div>
      </div>

      
      <div class="col-12">
      <label>College : </label>
      <select name="college_id" id="">
        @foreach($colleges as $college )
        <option value="{{$college->id}}">{{$college->name}}</option>
        @endforeach
</select>
      </div>



      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary button-mode" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary button-mode">Save</button>
      </div>
</form>
    </div>
  </div>
</div>







        

              