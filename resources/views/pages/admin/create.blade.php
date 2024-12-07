@extends('base.admin')
@section('title', 'Dashboard')

@section('content')
    @include('components.admin.sidebar')
    <script src="https://kit.fontawesome.com/1b48e60650.js" crossorigin="anonymous"></script>
    <section class="area_create admin">
        <h3 class="mb-30 title_color">Tambah Project</h3>
        <form action="#">
            <div class="mt-10">
                <label for="" class="label">Nama Project</label>
                <input type="text" name="project" placeholder="Nama Project" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Nama Project'" required class="single-input border">
            </div>
            <div class="row gap-3 mt-10">
                <div class="col-lg-4">
                    <label for="" class="label">Start Date</label>
                    <input type="date" name="project" placeholder="Start Date" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Start Date'" required class="single-input border">
                </div>
                <div class="col-lg-4">
                    <label for="" class="label">End Date</label>
                    <input type="date" name="project" placeholder="End Date" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'End Date'" required class="single-input border">
                </div>
                <div class="col-lg-2">
                    <label for="" class="label">Type</label>
                    <div class="default-select" id="default-select">
                        <select>
                            <option value="1">API</option>
                            <option value="1">WEB</option>
                            <option value="1">WEB + API</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-1">
                    <label for="" class="label">Authentikasi</label>
                    <div class="confirm-switch">
                        <input type="checkbox" id="confirm-switch">
                        <label for="confirm-switch"></label>
                    </div>
                </div>
            </div>
            <label for="" class="label mt-10">Link Github</label>
            <div class="input-group-icon">
                <div class="icon">
                    <i class="fa-brands fa-github"></i>
                </div>
                <input type="text" name="link" placeholder="Link Repo" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Link Repo'" required class="single-input border">
            </div>
            <label for="" class="label mt-10">Link Web</label>
            <div class="input-group-icon mt-10">
                <div class="icon">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <input type="text" name="link" placeholder="Link Web" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Link Web'" required class="single-input border">
            </div>
            <label for="" class="label mt-10">Link API</label>
            <div class="input-group-icon">
                <div class="icon">
                    <i class="fa-solid fa-passport"></i>
                </div>
                <input type="text" name="link" placeholder="Link API" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Link API'" required class="single-input border">
            </div>
            <label for="" class="label mt-10">Contributor</label>
            <div class="input-group-icon">
                <div class="icon">
                    <i class="fa-brands fa-github"></i>
                </div>
                <input type="text" name="link" placeholder="Contributor" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Contributor'" required class="single-input border">
            </div>
            <div class="mt-10">
                <label for="" class="label">Deskripsi</label>
                <textarea class="single-textarea border" placeholder="Deskripsi" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Deskripsi'" required></textarea>
            </div>
            <button class="primary_btn mt-4 px-1">Simpan</button>
        </form>
    </section>
@endsection
