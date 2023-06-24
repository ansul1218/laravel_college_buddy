<!DOCTYPE html>
<html>
<head>
    <title>Pbooks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Pbooks</h2>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#addPbookForm">Add New Pbook</button>
                <br><br>

                <!-- Add Pbook Form -->
                <div id="addPbookForm" class="collapse">
                    <form method="POST" action="{{ route('test-5.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">File Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="language">Language</label>
                            <select class="form-control" id="language" name="language" required>
                                <option value="java">Java</option>
                                <option value="python">Python</option>
                                <option value="c++">C++</option>
                                <option value="php">PHP</option>
                                <option value="javascript">JavaScript</option>
                                <option value="bash">Bash</option>
                                <option value="shell">Shell</option>
                                <option value="textbook">Textbook</option>
                                <option value="programing">Programing</option>
                                <option value="engineering">Engineering</option>
                                <option value="selfhelp">Self Help</option>
                                <option value="novel">Novel</option>
                                <option value="competition">Competition</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" class="form-control-file" id="file" name="file" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

                <br>

                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>Language</th>
                            <th>View</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pbooks as $pbook)
                        <tr>
                            <td>{{ $pbook->name }}</td>
                            <td>{{ $pbook->language }}</td>
                            <td>
                                <a href="{{ url($pbook->file_path) }}" target="_blank" class="btn btn-primary btn-sm btn-block">View</a>
                            </td>
                            <td>
                                <a href="{{ url($pbook->file_path) }}" download="{{ $pbook->name }}" class="btn btn-primary btn-sm btn-block">Download</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
