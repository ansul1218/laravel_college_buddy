<!DOCTYPE html>
<html>
<head>
    <title>Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Notes</h2>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#addNotesForm">Add New Note</button>
                <br><br>

                <!-- Add Pbook Form -->
                <div id="addNotesForm" class="collapse"><!-- resources/views/notes/index.blade.php -->
                    <form action="{{ route('notes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="file_name">File Name</label>
                            <input type="text" name="file_name" id="file_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="department">Department</label>
                            <select name="department" id="department" class="form-control" required>
                                <option value="btech" selected>BTech</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select name="semester" id="semester" class="form-control" required>
                                @for($i = 1; $i <= 7; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="file" id="file" class="form-control-file" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

            </div>




            <br>
            <br>
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>File Name</th>
                                <th>Department</th>
                                <th>Semester</th>
                                <th>Subject</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note)
                                <tr>
                                    <td>{{ $note->file_name }}</td>
                                    <td>{{ $note->department }}</td>
                                    <td>{{ $note->semester }}</td>
                                    <td>{{ $note->subject }}</td>
                                    <td>
                                        <a href="{{ url($note->file_path) }}" target="_blank">{{ $note->file_name }}</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                </body>
                </html>

