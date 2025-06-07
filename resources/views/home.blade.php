<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">Insert post</div>

                    <div class="card-body">
                        <form action="/store" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">auther</label>
                                <input type="text" name="auther" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">content</label>
                                <textarea rows="10" name="content" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="insert post" class="btn btn-lg btn-primary  ">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <table class="table table-border" border="1" >
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Auther</th>
                        <th>Content</th>
                        <th>Actiont</th>
                    </tr>
                    @foreach($data as $row)

                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->auther }}</td>
                        <td>{{ $row->content }}</td>
                        <td><i class="bi bi-trash-fill"></i></td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>