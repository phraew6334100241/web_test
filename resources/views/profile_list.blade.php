@extends('layouts.app')
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Setting</th>
    </tr>
  </thead>
  <tbody>
    <?php $i =0; ?>
    @foreach($profile as $pf)
    <?php $i = $i+1; ?>
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$pf ->fist_name}}</td>
      <td>{{$pf ->last_name}}</td>
      <td>{{$pf ->email}}</td>
      <td>{{$pf ->phone}}</td>
      <td><button class="btn btn-primary" onclick='getedit("<?php echo $pf->id ?>")'>edit</button>  
      <button class="btn btn-danger" onclick='delprofile("<?php echo $pf->id ?>","<?php echo $pf->first_name ?>")'>delete</button></td>
      
    </tr>
    @endforeach

  </tbody>
</table>
<a href ="home">Create profile</a>
@endsection

<script>
    function delprofile(id,fist_name){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {

  if (result.isConfirmed) {
    $.post('delprofile', {id:id},function(response)
    {
        Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ).then((resulte)=>{
        location.reload();
    })

    });

   
  }
})
    }
        function getedit(id){
            location.href = "edit_"+id
        }

</script>