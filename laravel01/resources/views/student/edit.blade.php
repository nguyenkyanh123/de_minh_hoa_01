
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
                        
                        <tr>
                            {{-- !! = echo --}}
                            <td>{{ $single_student[0] -> id}} </td>
                            <td>{{ $single_student[0] -> fullname}}</td>  
                            <td>{{ $single_student[0] -> birthday}}</td> 
                            <td>{{ $single_student[0] -> address}}</td>
                            <td><a href="/student/edit/{{ $single_student[0] -> id}}"
                                class="btn btn-outline-primary">Edit</a>
                            
                                
                        </tr>
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
