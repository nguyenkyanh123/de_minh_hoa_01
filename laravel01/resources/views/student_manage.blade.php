


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                {{-- <h1 class="display-one m-5">PHP Laravel Project - CRUD</h1>
                <div class="text-left"><a href="products/create" class="btn btn-outline-primary">Add new
                    student</a></div> --}}
    
                <table class="table mt-3  text-left">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Birth Day</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            {{-- !! = echo --}}
                            <td>{!! $student->id  !!}</td>
                            <td>{!! $student->fullname !!}</td>
                            <td>{!! $student->birthday !!}</td>
                            <td>{!! $student->address !!}</td>
                            <td><a href="/getstudent/{!! $student->id !!}"
                                class="btn btn-outline-primary">Edit</a>
                            {{-- <td><a href="{{URL::to ('student/edit, ['id'=>$student->id]') }}"
                               class="btn btn-outline-primary">Edit</a> --}}
                                
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No products found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    
    {{-- <div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">Are you sure to delete this record?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</body>
</html>