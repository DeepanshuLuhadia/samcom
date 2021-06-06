@extends('Admin/layouts/app')
@section('content')
@php 
$Gender=['1'=>'Male','2'=>'Female','3'=>'Other']; 
@endphp
        <div class="card-deck">
           <div class="col-xl-12">
              <div class="dash-table-cover">
              	  <div class="manage-bk-text">
                    <h4>MANAGE USER</h4>
                    <div class="go-bk">
                        <div class="d-flex">
                          <a class="btn un-btn" href="{{route('admin.user.create')}}"> + ADD USER </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                  <table class="table tb-bg userdatatable">
                      <thead>
                        <tr class="head-booking">
                          <th>S.No</th>
                          <th>User Id</th>
                          <th>Full Name</th>
                          <th>Email Address</th>
                          <th>Gender</th>
                          <th>DOB</th>
                          <th>Country</th>
                          <th>Hobbies</th>
                          <th>Created At</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody class="dynamicCustomer AjaxData">
                      	@foreach ($users as $ckey => $cvalue) 
	                        <tr class="books-details">
	                          
	                          <td><?= ($ckey+1) ?></td>
                            <td><?= $cvalue->id ?></td>
                            <td><?= $cvalue->name ?></td>
	                          <td><?= $cvalue->email ?></td>
	                          <td><?= $Gender[$cvalue->gender] ?></td>
                            <td><?= $cvalue->dob ?></td>
                            <td><?= $cvalue->country ?></td>
	                          <td><?= $cvalue->hobbies ?></td>
                            <td><?= date('d/m/Y',strtotime($cvalue->created_at)) ?></td>
                            <td> <?= $cvalue->is_delete == 1 ? 'Delete' : 'Active' ?> </td>
                            <td> <a href="{{route('admin.user.edit',base64_encode($cvalue->id))}}">Edit </a> </td>
	                          <td>
                              {{ Form::open(array('url' => 'admin/user/' . base64_encode($cvalue->id), 'class' => 'pull-right' ,'onsubmit'=> "return confirm('Are You SUre')")) }}
                                  {{ Form::hidden('_method', 'DELETE') }}
                                  {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                              {{ Form::close() }}
                           </td>
	                        </tr>
                        @endforeach                        
                      </tbody>
                  </table>
                </div>
              </div>
           </div>
        </div>
    <script type="text/javascript">
     $('.userdatatable').DataTable();
    </script>
@endsection
