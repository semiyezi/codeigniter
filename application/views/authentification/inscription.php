<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo (CSS . 'authentification/inscription.css'); ?>">
    <title>Google Login Form</title>

</head>

<body>
    <div class="main-container">

        <div class="header">

        </div>

        <form class="content" method="post"  action="<?php echo URL;?>index.php/authentification/inscription/registration_form">

            <div class="left">
                <div class="image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" width="75">
                </div>

                <div class="create-account">
                    Créer un compte Google
                </div>

                <div class="name">
                    <input type="text" id="first-name" placeholder="Prénom" name="prenom">


                    <input type="text" id="last-name" placeholder="Nom" name="nom">

                </div>

                <div class="username">
                    <input type="text" id="user-name" placeholder="Nom d'utilisateur                                  @gmail.com" name="email"> 


                    <div class="username-line">
                        Vous pouvez utiliser des lettres, des chiffres et des points.
                    </div>

                    <div class="use-current-email">
                        <a href="#">
                            Utiliser mon adresse électronique actuelle à la place
                        </a>
                    </div>
                </div>

                <div class="password">
                    <input type="text" id="password" placeholder="Mot de passe " name="password">

                    <input type="text" id="confirm-password" placeholder="Confirmer mot de passe" name="con_password">

                    <img src="https://img.icons8.com/ios-glyphs/30/000000/invisible.png" height="22px" width="22x">
                </div>

                <div class="password-line">
                    Utilisez 8 caractères ou plus avec un mélange de lettres, de chiffres et de symboles.
                </div>

                <div class="content-footer">
                    <div class="sign-in">
                        S'inscrire plutôt
                    </div>
                    <button class="next" type="submit">
                        Enregistrer
                    </button>
                </div>

            </div>

            <div class="right">
                <img src="https://ssl.gstatic.com/accounts/signup/glif/account.svg" alt="" width="244" height="244">

                <div class="image-line">
                    Un seul compte. Tout Google à votre service
                </div>
            </div>

</form>

        <div class="footer">
            <div class="languages">
                Anglais (Royaume-Uni)
            </div>

            <div class="links">
                <a href="#">Aide</a>
                <a href="#">Confidentialité</a>
                <a href="#">Termes</a>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        <?php if ($this->session->flashdata('suc')) { ?>
            toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
        <?php } else if ($this->session->flashdata('worng')) {  ?>
            toastr.error("<?php echo $this->session->flashdata('worng'); ?>");
        <?php } else if ($this->session->flashdata('warning')) {  ?>
            toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
        <?php } else if ($this->session->flashdata('info')) {  ?>
            toastr.info("<?php echo $this->session->flashdata('info'); ?>");
        <?php } ?>
        <?php
        $this->session->unset_userdata('suc'); ?>

        <?php
        $this->session->unset_userdata('worng'); ?>
    </script>

</body>

</html>