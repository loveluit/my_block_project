@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Trash Bin</h3>
            </div>
            <div class="card-body">
                @if (session('restore'))
                <div class="alert alert-success">{{ session('restore') }}</div>

                @endif
         <form action="{{ route('check.restore') }}" method="POST">
            @csrf
                <table class="table table-striped">
                    <tr>

                        <th>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="chkSelectAll" type="checkbox"  class="form-check-input"  >
                                    All
                                <i class="input-frame"></i></label>
                            </div>
                        </th>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($category as $index=>$trash )


                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input chkDel" name="category_id[]" value="{{ $trash->id }}">

                                <i class="input-frame"></i></label>
                             </div>
                        </td>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $trash->category_name }}</td>
                        <td>
                            <img src="{{ asset('uploads/category') }}/{{ $trash->category_image }}" width="150" alt="">
                        </td>
                        <td>
                            <a href="{{ route('restore.category',$trash->id) }}" class="btn btn-primary btn-icon">
                                <i data-feather="rotate-cw"></i>
                            </a>
                            <a data-link="{{ route('hard.delete',$trash->id) }}" class="btn btn-danger btn-icon del">
                                <i data-feather="trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="my-2">
                    <button type="submit" id="del_btn" name="action_btn" value="{{ 1 }}" class="btn btn-primary d-none">All_Restore</button>
                    <button type="submit" id="del_btn1" name="action_btn" value="{{ 2 }}" class="btn btn-danger d-none">All_Delete</button>
                </div>

        </form>
            </div>
        </div>
    </div>
</div>

@endsection


        @section('footer_script')


        <script>

        $('.del').click(function(){

            Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {

            var link =$(this).attr('data-link');
            window.location.href=link
        }
        });

        })
        </script>

    <script>
    //js Checkbox

        $("#chkSelectAll").on('click', function(){
            this.checked ? $(".chkDel").prop("checked",true) : $(".chkDel").prop("checked",false);

            $("#del_btn").toggleClass('d-none');
            $("#del_btn1").toggleClass('d-none');
        });

        $(".chkDel").on('click', function(){


            $("#del_btn").removeClass('d-none');
            $("#del_btn1").removeClass('d-none');
        })

    </script>


        @endsection
