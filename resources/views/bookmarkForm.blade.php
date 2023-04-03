<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>myBookmarks</title>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">myBookmarks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Tags</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <!-- fin nav bar -->

        <div class="container mt-5">
        <form>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Titre :</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Url :</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Description :</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Categorie :</label>
                <div class="col-sm-10">
                <select class="form-select col-sm-10" id="specificSizeSelect">
                @foreach ($categories as $categorie)
                <option scope="row">Choisir...</option>
                <option scope="row">{{$categorie->nom}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

        </div>



        <!-- fin form -->




    </body>
</html>
