<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>
        <th rowspan="2"></th>
        <th rowspan="2">Total Anomalies</th>
        <th colspan="2">Bug</th>
        <th colspan="2">Improve</th>
    </tr>
    <tr>
        <th>Ongoing</th>
        <th>Resolved</th>
        <th>Ongoing</th>
        <th>Resolved</th>
    </tr>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <th>{{ $project->name }}</th>
            <td>{{ $project->bugs_count }}</td>
            <td>{{ $project->ongoing_bug_status_count }}</td>
            <td>{{ $project->resolved_bug_status_count }}</td>
            <td>{{ $project->ongoing_improvement_status_count }}</td>
            <td>{{ $project->resolved_improvement_status_count }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
