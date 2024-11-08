@extends('layouts.app')

@section('content')
<div class="container">
    <form action="" class="form-control" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Project Name</label>
            <input type="text" class="form-control" id="name" placeholder="Project name">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Project Manager</label>
            <input type="text" class="form-control" id="name" placeholder="Project name">
        </div>
        <div class="mb-3">
            <select class="form-select">
                <option selected disabled>Select technologies</option>
                <option value="Front-end">Front-End</option>
                <option value="Back-end">Back-End</option>
                <option value="Full-stack">Full-Stack</option>
                <option value="Database">Database</option>
                <option value="Mobile">Mobile</option>
                <option value="Devops">Devops</option>
            </select>
        </div>
        <div class="mb-3">
            <div class="d-flex gap-3">
                <div>
                    <input type="checkbox" value="" class="form-check-input" id="front-end">
                    <label for="front-end" class="form-check-label">Website Redesign</label>
                </div>
                <div>

                    <input type="checkbox" value="" class="form-check-input" id="back-end">
                    <label for="back-end" class="form-check-label">API Integration</label>
                </div>
                <div>

                    <input type="checkbox" value="" class="form-check-input" id="full-stack">
                    <label for="full-stack" class="form-check-label">Mobile App Development</label>
                </div>
                <div>

                    <input type="checkbox" value="" class="form-check-input" id="database">
                    <label for="database" class="form-check-label">Data Migration</label>
                </div>
                <div>

                    <input type="checkbox" value="" class="form-check-input" id="mobile">
                    <label for="mobile" class="form-check-label">E-commerce Platform</label>
                </div>
                <div>

                    <input type="checkbox" value="" class="form-check-input" id="devops">
                    <label for="devops" class="form-check-label">CI/CD Implementation</label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="5" cols="7"></textarea>
        </div>
    </form>
</div>
@endsection