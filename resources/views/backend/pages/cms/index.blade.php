@extends('backend.layouts.app')

@section('page.name', 'Manage Course CMS')

@section('page.content')
<div class="card">
   <div class="card-body">
      <div class="row mb-2">
         <div class="col-sm-5">
            {{--<h3>List</h3>--}}
         </div>

         <!-- end col-->
      </div>

        <div class="table-responsive">
            <table id="basic-datatable1" class="table dt-responsive nowrap w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Zone</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
            </table>
        </div>

   </div>
   <!-- end card-body-->
</div>
@endsection

@section("page.scripts")
<script>
    var responseHandler = function(response) {
        location.reload();
    }

    $(document).ready(function() {
        $('#basic-datatable1').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('cms.data') }}",
            columns: [
                { data: 'id' },
                { data: 'title'},
                { data: 'slug'},
                { data: 'zone'},
                { data: 'status'},
                { data: 'created_at'},
            ],
        });
    });

</script>
@endsection