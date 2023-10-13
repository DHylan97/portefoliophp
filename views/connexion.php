<link rel="stylesheet" href="/css/connexion.css">
<script src="/js/connexion.js"></script>
<div class="container h-100">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-4 display-flex">
            <div class="card border-5">
                <div class="card-header">
                    <h4>Connexion</h4>
                </div>
                <div class="card-body">
                    <form action="/connexion" method="post">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" name="email">
                        <label for="password" class="form-label mt-3">Mot de passe</label>
                        <div class="eyepassword">
                            <input id="password" type="password" class="form-control" name="password">
                            <button type="button" id="toggleButton" onclick="togglePassword()"><i
                                    class="fas fa-eye"></i></button>
                        </div>
                        <button class="btn btn-success btn-sm mt-3" type="submit">Envoyer</button>
                    </form>
                </div>
            </div>  
            <div class="or">
                    <h2>OU</h2>
                    <a href="/inscription"><button class="btn btn-success btn-sm mt-3 taillebutton"
                            type="submit">S'inscrire</button></a>
            </div>
        </div>
    </div>