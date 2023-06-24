<!DOCTYPE html>
<html>
<head>
    <title>Paper</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Paper</h2>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#addPaperForm">Add New Paper</button>
                <br><br>

                <!-- Add Pbook Form -->
                <div id="addPaperForm" class="collapse">
                    <form action="{{ route('papers.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select name="semester" id="semester" class="form-control" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="year">Year</label>
                            <select name="year" id="year" class="form-control" required>
                                @for($i = 2016; $i <= 2023; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="system">System</label>
                            <select name="system" id="system" class="form-control" required>
                                <option value="cbcs">CBCS</option>
                                <option value="cbs">CBS</option>
                                <option value="cbs">NS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="file" id="file" class="form-control-file" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
                <br><br>
                <table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th>File Name</th>
            <th>Department</th>
            <th>Subject</th>
            <th>Semester</th>
            <th>Year</th>
            <th>System</th>
            <th>View</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($papers as $paper)
            <tr>
                <td>{{ $paper->file_name }}</td>
                <td>{{ $paper->department }}</td>
                <td>{{ $paper->subject }}</td>
                <td>{{ $paper->semester }}</td>
                <td>{{ $paper->year }}</td>
                <td>{{ $paper->system }}</td>
                <td>
                    <a href="{{ url($paper->file_path) }}" target="_blank" class="btn btn-primary btn-sm btn-block" style="white-space: nowrap;">View</a>
                </td>
                <td>
                    <a href="{{ url($paper->file_path) }}" download="{{ $paper->file_name }}" class="btn btn-primary btn-sm btn-block" style="white-space: nowrap;">Download</a>
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
